<?php
use function PHPSTORM_META\map;
defined('BASEPATH') OR exit('No direct script access allowed');

class data_barang extends CI_Controller {

    public function index()
    {
        $data['title'] = 'Data Tabel Barang';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // echo 'selamat datang '. $data['user']['nama'];

        $this->load->view('template/tp_header', $data);
        $this->load->view('template/tp_sidebar', $data);
        $this->load->view('template/tp_topbar', $data);
        $this->load->view('admin/data_barang/index', $data);
        $this->load->view('template/tp_footer');
    }
    
    public function page2()
    {
        $data['title'] = 'Data Tabel Barang';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // echo 'selamat datang '. $data['user']['nama'];

        $this->load->view('template/tp_header', $data);
        $this->load->view('template/tp_sidebar', $data);
        $this->load->view('template/tp_topbar', $data);
        $this->load->view('admin/data_barang/page2', $data);
        $this->load->view('template/tp_footer');
    }

}