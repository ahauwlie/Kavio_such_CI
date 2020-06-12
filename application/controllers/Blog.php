<?php
/**
 * Created by PhpStorm.
 * User: Hauw
 * Date: 9/26/2018
 * Time: 10:10 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller
{
	public function __construct () {
        parent::__construct();
        $this->load->model('model_artikel');
        $this->load->model('model_admin');
        // $this->load->library('pagination');
    }
    public function index() {
        $data['css'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['js'] = $this->load->view('include/script.php', NULL, TRUE);
        $data['footer'] = $this->load->view('layout/footer.php', NULL, TRUE);
        $data['navbar'] = $this->load->view('layout/navbar.php', NULL, TRUE);
        // $data['lol'] = $this->model_artikel->detail_artikel($id);
        // $data['adm'] = $this->model_admin->admin($id);
        $data['lol'] = $this->model_artikel->detail_artikel();
        $this->load->view('blog_detail', $data);
    }
}