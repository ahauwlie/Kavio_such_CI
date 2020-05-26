<?php
/**
 * Created by PhpStorm.
 * User: Hauw
 * Date: 9/26/2018
 * Time: 10:10 AM
 */
// if( ! defined('BASEPATH'))
// 	exit('No direct script access allowed');
defined('BASEPATH') OR exit('No direct script access allowed');

class Errors extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){
		$data['css'] = $this->load->view('include/style_cs.php', NULL, TRUE);
        $data['js'] = $this->load->view('include/js_cs.php', NULL, TRUE);
        $this->load->view('comingsoon', $data);
	}
}