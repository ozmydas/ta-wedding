<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends User_Controller {

	function __construct(){
		parent::__construct();
	} // end cons


	public function index(){
		$this->load->view('user/dashboard');
	} // end func

}