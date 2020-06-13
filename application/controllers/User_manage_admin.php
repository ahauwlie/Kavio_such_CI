<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_manage_admin extends CI_Controller {
  public function __construct(){
    parent::__construct();
    
    $this->load->model('user_manage');
  }
  
  public function index(){
    $this->load->library('session');
    $this->load->helper('url');
    //jika seasson login belum ada maka tampilkan login
    if(!$this->session->userdata('login')){
      $this->load->helper('form');
        $this->load->view('auth/login2');
    }else{
      if($this->session->userdata('login')) {
        $session = $this->session->userdata('login');
        $data['user'] = $this->user_manage->getAll();
        $data['css'] = $this->load->view('include/style1.php', NULL, TRUE);
        $data['js'] = $this->load->view('include/script1.php', NULL, TRUE);
        $data['footer'] = $this->load->view('layout/footer1.php', NULL, TRUE);
        $data['preloader'] = $this->load->view('layout/preloader1.php', NULL, TRUE);
        $this->load->view('admin/user/view_user', $data);
      }
    }
  }

  public function addUser()
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
              $password = $this->input->post('pass');
              $pass = md5($password);
              $data = Array (
                // 'id_ug' => $this->input->post('idug'),
                // 'username_us' => $this->input->post('uname'),
                // 'password_us' => getHashedPassword($pass),
                // 'full_name_us' => $this->input->post('fnama'),
                // 'email_us' => $this->input->post('email'),
                // 'phone_num_us' => $this->input->post('hp'),
                // 'img_us' => $this->input->post('foto'),
                // 'date_birth_us' => $this->input->post('ultah'),
                // 'address_us' => $this->input->post('alamat'),
                // 'active' => $this->input->post('active')

                'username' => $this->input->post('uname'),
                'password' => getHashedPassword($pass),
                'nama_adm' => $this->input->post('fnama'),
                'foto_adm' => $this->input->post('foto'),
                'moto_adm' => $this->input->post('moto'),
                'whatsapp' => $this->input->post('wa'),
                'instagram' => $this->input->post('ig'),
                'facebook' => $this->input->post('fb'),
                'twitter' => $this->input->post('tw'),
                'active' => $this->input->post('active')
              );

              $this->user_manage->insert(html_escape($data), false);
              redirect(site_url("User_manage_admin/index"));
          }
          else
          {
              $data['css'] = $this->load->view('include/style1.php', NULL, TRUE);
              $data['js'] = $this->load->view('include/script1.php', NULL, TRUE);
              $data['footer'] = $this->load->view('layout/footer1.php', NULL, TRUE);
              $data['preloader'] = $this->load->view('layout/preloader1.php', NULL, TRUE);

              $this->load->view('admin/user/add_user', $data);
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
              $this->user_manage->delete($id);
          }
          redirect(site_url('User_manage_admin/index'));
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
              $password = $this->input->post('pass');
              $pass = md5($password);
              $data = Array (
                'id_adm' => $id,
                'username' => $this->input->post('uname'),
                'password' => getHashedPassword($pass),
                'nama_adm' => $this->input->post('fnama'),
                'foto_adm' => $this->input->post('foto'),
                'moto_adm' => $this->input->post('moto'),
                'whatsapp' => $this->input->post('wa'),
                'instagram' => $this->input->post('ig'),
                'facebook' => $this->input->post('fb'),
                'twitter' => $this->input->post('tw'),
                'active' => $this->input->post('active')
              );

              $this->user_manage->update(html_escape($data), $id, false);
              redirect(site_url("User_manage_admin/index"));
          }
          else
          {
              $data['css'] = $this->load->view('include/style1.php', NULL, TRUE);
              $data['js'] = $this->load->view('include/script1.php', NULL, TRUE);
              $data['footer'] = $this->load->view('layout/footer1.php', NULL, TRUE);
              $data['preloader'] = $this->load->view('layout/preloader1.php', NULL, TRUE);
              $data['user'] = $this->user_manage->getSpecified($id);
              $this->load->view('admin/user/edit_user', $data);
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

          $data['user'] = $this->user_manage->getSpecified($id);
          $this->load->view('admin/user/detail_user', $data);
        }
      }
    }
}