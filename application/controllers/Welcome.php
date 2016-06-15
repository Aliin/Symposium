<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	//Things here will be avilable in all of controller
    public function __construct()
    {
    	parent::__construct();
    }

    //index is always default function
	public function index()
	{
		//loading twig view [Only one!]
		$this->twig->display('welcome_message');
	}

	public function loginExample()
	{
		$checkLogin = $this->ion_auth->login('admin@admin.com', 'password');

		if($checkLogin) {
			echo 'Correct';
		} else {
			echo 'Wrong data';
		}

	}
}
