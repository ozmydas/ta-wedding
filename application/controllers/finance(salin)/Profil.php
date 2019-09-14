<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends User_Controller {

	function __construct(){
		parent::__construct();
	} // end cons


	public function index(){
		$this->db->where('id', $this->session->userdata('userdata')['id']);
		$result = $this->db->get('user')->result_array();

		$data['profil'] = $result[0];

		// var_dump($data);
		$this->load->view('user/profil', $data);
	} // end func


	public function update($id){
		$updatedata = [
			'password' => $_POST['password'],
			'nama' => $_POST['nama'],
			'jkel' => $_POST['jkel'],
			'telp' => $_POST['telp'],
			'alamat' => $_POST['alamat'],
		];

		$this->db->where('id', $id);

		if($this->db->update('user', $updatedata)):
			$this->session->set_flashdata('alert', "Data Tersimpan");
		else:
			$this->session->set_flashdata('alert', "Terjadi Kesalahan");
		endif;

		return redirect(site_url('member/profil'));
	} // end func

}