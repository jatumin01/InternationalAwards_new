<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller 
{
	public function check_login()
	{
		$data = $this->input->post();
		if($data['user']>10){
			echo "user";
		}else{
			echo "director";
		}
	}
	
}
