<?php

use function PHPSTORM_META\map;

defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');

	}
    public function index()
	{
		$this->form_validation->set_rules('email','Email','required|trim|valid_email');
		$this->form_validation->set_rules('password','Password','required|trim');

		if ($this->form_validation->run() == false)
		{
			$data['title']= 'TA | Login';
			$this->load->view('template/header', $data);
			$this->load->view('auth/login');
			$this->load->view('template/footer');
		}
		else{
			$this->_login();
		}
		
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');


		$user = $this->db->get_where('user',['email' => $email])->row_array();

		if($user){
			
			if(password_verify($password, $user['password'])){

				$data = [
					'email' => $user['email'],
					'role_id' => $user['role_id']
				];
				$this->session->set_userdata($data);

					if($user['role_id'] == 1){
						redirect('admin');
					} else {
						redirect('user');
					}
			} else {
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Password salah</div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Email belum terdaftar</div>');
			redirect('auth');
			}
	}

	public function register()
	{
		$this->form_validation->set_rules('nama','Nama','required|trim',[
			'required' => 'Nama Harap di isi'
		]);
		$this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[user.email]', [
			'required' => '! Email Harap di isi',
			'valid_email' => 'Harap diisi format Email',
			'is_unique' => 'Email sudah dipakai atau sudah ada!'
		]);
		$this->form_validation->set_rules('alamat','Alamat','required|trim',[
			'required' => 'Alamat Harap di isi'
		]);
		$this->form_validation->set_rules('password1','Password','required|trim|min_length[5]|matches[password2]', [
			'min_length' => 'Password tidak boleh kurang dari 5!',
			'matches' => 'Konfirmasi Password harus sama!'
		]);
		$this->form_validation->set_rules('password2','Password','required|trim|matches[password1]');

		if ($this->form_validation->run() == false) {
			$data['title']= 'TA | Register';
			$this->load->view('template/header',$data);
			$this->load->view('auth/register');
			$this->load->view('template/footer');
		} else {
			$data = [
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'alamat' => htmlspecialchars($this->input->post('alamat', true)),
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' => 2,
				'date_dibuat' => time('date_dibuat')
			];

			$this->db->insert('user', $data);
			$this->session->set_flashdata('message','<div class="alert alert-success bi-check-circle" role="alert">Akun Anda Berhasil dibuat. Please Login</div>');
			redirect('auth');
		}
	}

	public function logout(){
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');

		
		$this->session->set_flashdata('message','<div class="alert alert-success bi-check-circle" role="alert">Anda Sudah Keluar!</div>');
		redirect('auth');
	}
	
}