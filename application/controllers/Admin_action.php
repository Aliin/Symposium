<?php


class Admin_action extends CI_Controller {
	
	//constructor loads libraries
	public function __construct() {
		parent::__construct();
		$this->load->helper('security');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->library('ion_auth');
		$this->load->library('twig');
	}
	
	public function action($which_function) {
		
		if ($this->ion_auth->in_group(1)) {
			$which_function = xss_clean($which_function);
			$this->$which_function();
		}
	}
	
	private function add_user() {
		
		$this->form_validation->set_rules('new_user', 'Username', 'required|alpha_dash');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|alpha_dash');
		$this->form_validation->set_rules('pass_conf', 'confirm password', 'required|matches[password]');
		$this->form_validation->set_rules('usergroup', 'Usergroup', 'required|is_natural');

		
		$new_user = $this->input->post('new_user');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$additional = array();
		$group = array($this->input->post('usergroup'));
		
		
		if ($this->form_validation->run() == FALSE)
			{
				$this->twig->display('admin_panel');
				echo 'form input incorrect';
			}
			else
			{
				echo $new_user;
				$this->ion_auth->register($new_user, $password, $email, $additional, $group);
				$this->form_success();
			}
	}
	
	public function edit_user() {
		
	}
	
	public function reset_databases() {echo 'resetted database';}
	
	public function create_usergroup() {echo 'created Usergroup';}
	
	public function edit_usergroup() {echo 'edited Usergroup';}
	
	private function form_success() {
		$show = array("page" => "http://localhost/symposium/index.php/Admin_panel/index");
		$this->twig->display('form_success', $show);
	}

}