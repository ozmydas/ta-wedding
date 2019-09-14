<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_Controller extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->auth();
	} //end construct

	private function auth(){
		if( ! $this->session->userdata('userdata')):
			return redirect('login');
		endif;
	}
}
