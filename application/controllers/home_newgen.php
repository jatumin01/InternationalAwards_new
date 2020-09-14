<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_newgen extends CI_Controller {

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
	public function index()
	{
		$data['btn_sign'] = '0';
		$this->load->view('new_gen/home',$data);

	}
	public function sign_in()
	{
		$this->load->view('new_gen/signin');
	}
	public function dashboard()
	{
		$data['login_true'] = '0';
		$this->load->view('new_gen/dashboard',$data);
	}
	public function submission()
	{
		$data['login_true'] = '0';
		$this->load->view('new_gen/submission',$data);
	}
	public function finish()
	{
		$data['login_true'] = '0';
		$this->load->view('new_gen/finish',$data);
	}
	public function register()
	{
		$this->load->view('new_gen/register');
	}
}
