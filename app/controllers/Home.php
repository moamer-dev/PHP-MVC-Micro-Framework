<?php 

/**
 * home class
 */
class Home extends Controller
{
	
	public function index()
	{

		$data['title'] = "Home";

		$this->view('dashboard',$data);
	}
	
	public function ckan($action = null)
	{


		$data = [];
		$data['action'] = $action;
		
		$this->view('ckan',$data);
	}

	public function test($action = null)
	{


		$data = [];
		$data['action'] = $action;
		
		$this->view('test',$data);
	}
	
}