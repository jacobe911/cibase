<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	function __construct()
    {
        parent::__construct();
        
    }

	public function index()
	{

		$this->data['page_title'] = "Home";
		$this->data['page_description'] = "The Home Page";

		$this->render('home/index');
	}
}
