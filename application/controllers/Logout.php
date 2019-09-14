<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	function __construct(){
		parent::__construct();
	} // end cons


	public function index(){
		$this->session->unset_userdata('userdata');
		redirect(site_url('login'));
	} // end func

}