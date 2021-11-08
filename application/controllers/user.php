<?php
use function PHPSTORM_META\map;
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

    public function index()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // echo 'selamat datang '. $data['user']['nama'];

        $this->load->view('template/tp_header', $data);
        $this->load->view('template/tp_sidebar', $data);
        $this->load->view('template/tp_topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('template/tp_footer');
    }

}