<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_validation extends CI_Controller {
    public function index()
    {
        // load library form validasi , agar login kita lebih aman
        $this->load->library('form_validation');

        $this->load->helper('url'); // digunakan untuk fungsi redirect di bawah

        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
                <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi</div></div>');

        if($this->form_validation->run() == FALSE)
        {
            redirect('login?gagal=1','refresh');
        }else
        {
            $this->load->library('session');
            $username = $this->input->post("username");
            $password = $this->input->post("password");

            $this->load->model('m_login');
            $result = $this->m_login->login($username,$password);

            if ($result) {
                foreach ($result as $apps) {
                    $session_data = array(
                        'id_adm'   => $apps->id_adm,
                        'username' => $apps->username,
                        'nama_adm' => $apps->nama_adm,
                        'foto_adm' => $apps->foto_adm,
                        'moto_adm' => $apps->moto_adm,
                        'whatsapp' => $apps->whatsapp,
                        'instagram' => $apps->instagram,
                        'facebook' => $apps->facebook,
                        'twitter' => $apps->twitter,
                        'active' => $apps->active
                    );
                    $this->session->set_userdata('login', $session_data);
                    redirect('home','refresh');
                }
                return TRUE;
            }
            else{
                return FALSE;
            }
        }
    }
}
