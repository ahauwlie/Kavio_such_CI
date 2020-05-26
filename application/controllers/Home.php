<?php
/**
 * Created by PhpStorm.
 * User: Hauw
 * Date: 9/26/2018
 * Time: 10:10 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index() {
        $data['css'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['js'] = $this->load->view('include/script.php', NULL, TRUE);
        $data['footer'] = $this->load->view('layout/footer.php', NULL, TRUE);
        $data['navbar'] = $this->load->view('layout/navbar.php', NULL, TRUE);
        $this->load->view('home', $data);
    }

    public function contact_us() {
        $data['css'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['js'] = $this->load->view('include/script.php', NULL, TRUE);
        $data['footer'] = $this->load->view('layout/footer.php', NULL, TRUE);
        $data['navbar'] = $this->load->view('layout/navbar.php', NULL, TRUE);
        $this->load->view('contact_us', $data);
    }
}