<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct(){
		parent::__construct();
	} // end cons


	public function index(){
		if(! empty($_POST)) // JIKA ADA POST MAKA SIGNIN
		return $this->signup();

		// JIKA GAK ADA, TAMPILIN FORM LOGIN
		$this->load->view('register');
	} // end func


	private function signup(){
		$this->db->where('username', $_POST['username']);
		$ada = $this->db->get('user')->num_rows();

		if($ada > 0):
			$this->session->set_flashdata('alert', "Username " . $_POST['username'] . " Sudah Terdaftar");
			return redirect('register');
		endif;

		$simpan = $this->db->insert('user', [
			'nama' => $_POST['nama'],
			'username' => $_POST['username'],
			'password' => $_POST['password'],
			'telp' => $_POST['telp'],
			'jkel' => $_POST['jkel'],
			'alamat' => $_POST['alamat'],
			'role' => 'member',
		]);


		$this->session->set_flashdata('alert', "Register Berhasil");
		return redirect('login');
	} // end func

}
