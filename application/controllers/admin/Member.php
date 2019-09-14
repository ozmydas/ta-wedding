<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends User_Controller {

	function __construct(){
		parent::__construct();
	} // end cons


	public function index(){
		// tampilkan list yg dibeli
		$this->db->where('role', 'member');
		$result = $this->db->get('user')->result_array();
		
		$data['member'] = $result;
		$this->load->view('admin/member', $data);
	} // end func

	public function hapus($id){
		$this->db->where('id', $id);
		$result = $this->db->delete('user');

		redirect('admin/member');
	} // end func

}