<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uploads extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function file($type='image')
	{
		foreach ($_FILES as $key => $value) {
			$fileName = $_FILES[$key]["name"]; // The file name
			$fileTmpLoc = $_FILES[$key]["tmp_name"]; // File in the PHP tmp folder
			$fileType = $_FILES[$key]["type"]; // The type of file it is
			$fileSize = $_FILES[$key]["size"]; // File size in bytes
			$fileErrorMsg = $_FILES[$key]["error"]; // 0 for false... and 1 for true
		}

		if ($type=='file') {
			$imageFileType_ar = array('doc','docx','xls','xlsx','pdf','ppt','pptx');
		}else if ($type=='image') {
			$imageFileType_ar = array('png','jpg','jpeg','gif');
		}else if ($type=='all') {
			$imageFileType_ar = array('png','jpg','jpeg','gif','doc','docx','xls','xlsx','pdf','ppt','pptx');
		}
		
		$imageFileType = strtolower(pathinfo($fileName,PATHINFO_EXTENSION));
		if(array_search($imageFileType, $imageFileType_ar)!==false){
			$data['folder'] = 'temp';

			if (!isset($fileTmpLoc)) { // if file not chosen
				$json['msg'] = 'ERROR: Please browse for a file before clicking the upload button.';
				$json['data'] = -1;
				$json['form'] = $data['folder'];
				echo json_encode($json);
				exit();
			}

			$pathfile = 'uploads/'.$data['folder'].'/'.date('Ymd_His').'_'.uniqid().'_'.'upload.'.$imageFileType;

			if(move_uploaded_file($fileTmpLoc, $pathfile)){
				$json['msg'] = $fileName.' upload is complete';
				$json['data'] = $pathfile;
				$json['form'] = $data['folder'];
				echo json_encode($json);
			} else {
				$json['msg'] = 'move_uploaded_file function failed';
				echo json_encode($json);
			}
		}else{
			$json['code'] = 'error';
			$json['msg'] = 'file type '.$imageFileType .' is fail.';
			echo json_encode($json);
		}
	}
}