<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan extends User_Controller {

	function __construct(){
		parent::__construct();
	} // end cons


	public function pesanan(){
		$this->db->order_by('id', 'DESC');
		$result = $this->db->get('pesanan_paket')->result_array();
		
		$data['pesanan'] = $result;
		$this->load->view('admin/pesanan', $data);
	} // end func


	public function invoice($id){
		$this->db->where('id', $id);
		$result = $this->db->get('pesanan_paket')->result_array();
		
		$data['pesanan'] = $result;
		$this->load->view('admin/pesanan', $data);
	} // end func


	public function transaksi(){
		$this->db->order_by('id', 'DESC');
		$result = $this->db->get('pesanan_paket')->result_array();
		
		$data['pesanan'] = $result;
		$this->load->view('admin/pesanan', $data);
	} // end func


}