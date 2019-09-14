<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
	} // end cons


	public function index(){
		$data['testimoni'] = $this->db->order_by('rand()')->limit(3)->get('testimoni')->result_array();
		$data['paket'] = $this->db->order_by('nama_paket', 'ASC')->get('paket')->result_array();
		$this->load->view('home', $data);
	} // end func


	public function galeri(){
		$data['wedding'] = $this->db->where('info', 'wedding')->get('galeri')->result_array();
		$data['fasilitas'] = $this->db->where('info', 'fasilitas')->get('galeri')->result_array();
		$data['dekorasi'] = $this->db->where('info', 'dekorasi')->get('galeri')->result_array();
		$this->load->view('galeri', $data);
	} // end func


	public function sejarah(){
		$this->load->view('sejarah');
	} // end func

	public function visimisi(){
		$this->load->view('visimisi');
	} // end func

	public function kontak(){
		$this->load->view('kontak');
	} // end func

	public function struktur(){
		$this->load->view('struktur');
	} // end func

}
