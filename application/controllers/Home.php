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
    public function __construct ()
    {
        parent::__construct();
        $this->load->model('model_artikel');
        $this->load->library('pagination');
    }

    public function index() {
        $config = array();
        $config["base_url"] = base_url() . "Home/index";
        $config["total_rows"] = $this->model_artikel->record_count();
        $bawah = $config["per_page"] = 10;
        $atas = $config["per_page"] = 3;
        $config["uri_segment"] = 3;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        
        $data['css'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['js'] = $this->load->view('include/script.php', NULL, TRUE);
        $data['footer'] = $this->load->view('layout/footer.php', NULL, TRUE);
        $data['navbar'] = $this->load->view('layout/navbar.php', NULL, TRUE);

        $data["links"] = $this->pagination->create_links();
        $data['hasil'] = $this->model_artikel->countRow(); 
        $data['starts1'] = $this->model_artikel->dis_products1();
        $data['starts2'] = $this->model_artikel->dis_products2();
        $data['ar_side'] = $this->model_artikel->side();
        $data['artikel'] =  $this->model_artikel->getAr($bawah, $page);
        $data['artikelatas'] =  $this->model_artikel->getAr($atas, $page);

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