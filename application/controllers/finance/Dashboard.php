<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends User_Controller {

	function __construct(){
		parent::__construct();
	} // end cons


	public function index(){
		return redirect('finance/pesanan');
		// $this->load->view('admin/dashboard');
	} // end func

}