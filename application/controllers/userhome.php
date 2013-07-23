<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
*	User Home Controller 
*/
class UserHome extends CI_Controller {

	function __construct(){
		parent::__construct();

	} // end __construct

	public function index(){
		$user_data  = $this->session->all_userdata();
		$username = $user_data['username'];
		$this->load->model('profile');

		if($this->session->userdata('logged_in')){
			$this->load->view('header');
			$profile = $this->profile->getUser($username);
			$this->load->view('profile', array('user_data' => $user_data, 'profile' => $profile));
			$this->load->view('footer');
		} else {
			redirect('login');
		}		
	}

	public function getUserDetails($username){
		$this->load->model('profile');
		$this->profile->getUser($username);
	}

	public function editProfile(){
		//$user_data = $this->session->all_userdata();
		//$username = $user_data['username'];
		
	}

} // end Home