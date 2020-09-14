<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

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
		$data['first_page'] = '0';
		$this->load->view('home',$data);

	}
	public function sign_in()
	{
		$this->load->view('signin');
	}
	public function dashboard()
	{
		$director = 1;
		if($director == 1){
			$data['login_true'] = '0';
			$data['director'] = '0';
			$this->load->view('scoring',$data);
		}else{
			$data['login_true'] = '0';
			$this->load->view('dashboard',$data);
		}
		
	}
	public function submission()
	{
		$data['login_true'] = '0';
		$this->load->view('submission',$data);
	}
	public function finish()
	{
		$data['login_true'] = '0';
		$this->load->view('finish',$data);
	}
	public function select_type_project()
	{
		$this->load->view('type_project');
	}
	public function project_list()
	{
		$this->load->view('projectlist');
	}
	public function project_detail()
	{
		$this->load->view('projectdetail');
	}
	public function terms_condition()
	{
		$data['login_true'] = '0';
		$this->load->view('terms_conditions',$data);
	}
	public function update_submission()
	{
		$data['login_true'] = '0';
		$this->load->view('update_submission',$data);
	}
	public function account()
	{
		$data['login_true'] = '0';
		$this->load->view('account',$data);
	}
	public function project_detail_check()
	{
		$data['login_true'] = '0';
		$data['director'] = '0';
		$this->load->view('projectdetail_check',$data);
	}
	public function test_ajax()
	{
		$data = $this->input->post();
		$txt = '{"data":[{"id":"1","project_name":"project","group":"B","country":"thailand","department":"department","inbox":"10","status":"0","score":"560"}]}';
		echo $txt;
	}
}
