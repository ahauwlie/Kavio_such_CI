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
        // $data['id_adm'] = $session['id_adm'];
        // $data['username'] = $session['username'];
        // $data['nama_adm'] = $session['nama_adm'];
        // $data['foto_adm'] = $session['foto_adm'];
        // $data['moto_adm'] = $session['moto_adm'];
        // $data['whatsapp'] = $session['whatsapp'];
        // $data['instagram'] = $session['instagram'];
        // $data['facebook'] = $session['facebook'];
        // $data['twitter'] = $session['twitter'];
        // $data['active'] = $session['active'];
        $data['css'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['js'] = $this->load->view('include/script.php', NULL, TRUE);
        $data['footer'] = $this->load->view('layout/footer.php', NULL, TRUE);
        $data['navbar'] = $this->load->view('layout/navbar.php', NULL, TRUE);
        $this->load->view('contact_us', $data);
    }
}