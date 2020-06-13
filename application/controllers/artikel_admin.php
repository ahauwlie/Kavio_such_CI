<?php
/**
 * Created by PhpStorm.
 * User: Hauw
 * Date: 9/26/2018
 * Time: 10:10 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel_admin extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('model_artikel');
    }

    public function index() {
        $this->load->library('session');
        $this->load->helper('url');
        //jika seasson login belum ada maka tampilkan login
        if(!$this->session->userdata('login')){
            $this->load->helper('form');
            $this->load->view('auth/login2');
        }else{
            if($this->session->userdata('login')) {
                $session = $this->session->userdata('login');
                $data['css'] = $this->load->view('include/style1.php', NULL, TRUE);
                $data['js'] = $this->load->view('include/script1.php', NULL, TRUE);
                $data['footer'] = $this->load->view('layout/footer1.php', NULL, TRUE);
                $data['preloader'] = $this->load->view('layout/preloader1.php', NULL, TRUE);
                $data['artikel'] = $this->model_artikel->getAll();
                $this->load->view('admin/barang/index', $data);
            }
        }
    }

    public function addArtikel()
    {
        $this->load->library('session');
        $this->load->helper('url');
        //jika seasson login belum ada maka tampilkan login
        if(!$this->session->userdata('login')){
            $this->load->helper('form');
            $this->load->view('auth/login2');
        }else{
            if($this->session->userdata('login')) {
                $session = $this->session->userdata('login');
                if ($_SERVER['REQUEST_METHOD'] == "POST")
                {
                    $data = Array (
                        'tanggal_ar' => $this->input->post('tanggal'),
                        'id_kat' => $this->input->post('kat'),
                        'judul_ar' => $this->input->post('judul'),
                        'isi_ar' => $this->input->post('isi'),
                        'ayat_ar' => $this->input->post('ayat'),
                        'id_tag' => $this->input->post('tag'),
                        'foto_ar' => $this->input->post('foto'),
                        'id_adm' => $this->input->post('admin')
                    );

                    $this->model_artikel->insert(html_escape($data), false);
                    redirect(site_url("Artikel_admin/index"));
                }
                else
                {
                    $data['css'] = $this->load->view('include/style1.php', NULL, TRUE);
                    $data['js'] = $this->load->view('include/script1.php', NULL, TRUE);
                    $data['footer'] = $this->load->view('layout/footer1.php', NULL, TRUE);
                    $data['preloader'] = $this->load->view('layout/preloader1.php', NULL, TRUE);

                    $this->load->view('admin/barang/add_barang', $data);
                }
            }
        }
    }

    public function delete($id)
    {
        $this->load->library('session');
        $this->load->helper('url');
        //jika seasson login belum ada maka tampilkan login
        if(!$this->session->userdata('login')){
            $this->load->helper('form');
            $this->load->view('auth/login2');
        }else{
            if($this->session->userdata('login')) {
                $session = $this->session->userdata('login');
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    $this->model_artikel->delete($id);
                }
                redirect(site_url('Artikel_admin/index'));
            }
        }
    }

    public function edit($id)
    {
        $this->load->library('session');
        $this->load->helper('url');
        //jika seasson login belum ada maka tampilkan login
        if(!$this->session->userdata('login')){
            $this->load->helper('form');
            $this->load->view('auth/login2');
        }else{
            if($this->session->userdata('login')) {
                $session = $this->session->userdata('login');
                if ($_SERVER['REQUEST_METHOD'] == "POST")
                {
                    $data = Array (
                        'id_ar' => $id,
                        'tanggal_ar' => $this->input->post('tanggal'),
                        'id_kat' => $this->input->post('kat'),
                        'judul_ar' => $this->input->post('judul'),
                        'isi_ar' => $this->input->post('isi'),
                        'ayat_ar' => $this->input->post('ayat'),
                        'id_tag' => $this->input->post('tag'),
                        'foto_ar' => $this->input->post('foto'),
                        'id_adm' => $this->input->post('admin')
                    );

                    $this->model_artikel->update(html_escape($data), $id, false);
                    redirect(site_url("Artikel_admin/index"));
                }
                else
                {
                    $data['css'] = $this->load->view('include/style1.php', NULL, TRUE);
                    $data['js'] = $this->load->view('include/script1.php', NULL, TRUE);
                    $data['footer'] = $this->load->view('layout/footer1.php', NULL, TRUE);
                    $data['preloader'] = $this->load->view('layout/preloader1.php', NULL, TRUE);
                    $data['artikel'] = $this->model_artikel->getSpecified($id);
                    $this->load->view('admin/barang/edit_barang', $data);
                }
            }
        }
    }

    public function detail($id)
    {
        $this->load->library('session');
        $this->load->helper('url');
        //jika seasson login belum ada maka tampilkan login
        if(!$this->session->userdata('login')){
            $this->load->helper('form');
            $this->load->view('auth/login2');
        }else{
            if($this->session->userdata('login')) {
                $session = $this->session->userdata('login');
                $data['css'] = $this->load->view('include/style1.php', NULL, TRUE);
                $data['js'] = $this->load->view('include/script1.php', NULL, TRUE);
                $data['footer'] = $this->load->view('layout/footer1.php', NULL, TRUE);
                $data['preloader'] = $this->load->view('layout/preloader1.php', NULL, TRUE);

                $data['artikel'] = $this->model_artikel->getSpecified($id);
                $this->load->view('admin/barang/detail_barang', $data);
            }
        }
    }

}