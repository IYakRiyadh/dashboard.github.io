<?php
use function PHPSTORM_META\map;
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
    public function index()
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // echo 'selamat datang '. $data['user']['nama'];

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu','required');
        // $this->form_validation->set_rules('id_menu', 'Id_menu','required');

         if($this->form_validation->run() == false) {
            $this->load->view('template/tp_header', $data);
            $this->load->view('template/tp_sidebar', $data);
            $this->load->view('template/tp_topbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('template/tp_footer');
        } else{
            $this->db->insert('user_menu',['menu' => $this->input->post('menu')]);
        }
    }

}