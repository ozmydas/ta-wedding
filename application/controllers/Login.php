<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
	} // end cons


	public function index(){
		if(! empty($_POST)) // JIKA ADA POST MAKA SIGNIN
		return $this->signin();

		// JIKA GAK ADA, TAMPILIN FORM LOGIN
		$this->load->view('login');
	} // end func


	private function signin(){
		$this->db->where('username', @$_POST['username']);
		$this->db->where('password', @$_POST['password']);
		$result = $this->db->get('user')->result_array();

		 // JIKA GAK DITEMUIN
		if(empty($result)):
			$this->session->set_flashdata('alert', "username / password salah");
			return redirect(site_url('login'));
		endif;

		$this->session->set_userdata('userdata', [
			'id' => $result[0]['id'],
			'nama' => $result[0]['nama'],
			'username' => $result[0]['username'],
			'role' => $result[0]['role'],
		]);

		return redirect(site_url($result[0]['role'].'/dashboard'));
	} // end func

}
