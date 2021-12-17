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

	function __construc(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('database');
        $this->load->helper('url');
    }
    
	public function index()
	{
		$this->load->view('index');
	}

	public function user_basic_details()
	{
		//$this->load->library('form_validation');

		$this->form_validation->set_rules('first_name','First Name','required');
		$this->form_validation->set_rules('last_name','Last Name','required');
		$this->form_validation->set_rules('age','Age','required');

		if($this->form_validation->run()==FALSE){
			$this->load->view('index');
		}else{

			$data = array(
				'first_name'=>$this->input->post('first_name'),
				'last_name'=>$this->input->post('last_name'),
				'age'=>$this->input->post('age')
			);

			$this->load->model('exam_model');
			$result['data'] = $this->exam_model->basic_details($data);
			//print_r($result);
			if($result){
				$this->load->view('index',$result);
			}
		}

	}

	public function user_contact_details()
	{
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('contact_number','Contact Number','required');
		
		if($this->form_validation->run()==FALSE){
			$this->load->view('index');
		}else{

			$id = $this->input->post('id');
			$data = array(
				'email'=>$this->input->post('email'),
				'contact_number'=>$this->input->post('contact_number')				
			);

			$this->load->model('exam_model');
			$result = $this->exam_model->conctact_details($id,$data);
			if($result){
				$this->load->view('index');
			}
		}
	}

}
