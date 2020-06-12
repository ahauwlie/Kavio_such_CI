<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

    public function index()
    {
		$this->load->helper('form');
		$this->load->view('auth/register');
	}
	
	public function submit(){

		//passing post data dari view
		$this->load->helper(array('form', 'url'));
		$username1 = $this->input->post('username');
		$password = $this->input->post('password');
		$pass = md5($password);
		$nama = $this->input->post('nama_adm');
		$foto = $this->input->post('foto_adm');
		$moto = $this->input->post('moto_adm');
		$wa = $this->input->post('whatsapp');
		$ig = $this->input->post('instagram');
		$fb = $this->input->post('facebook');
		$tw = $this->input->post('twitter');
		
		//memasukan ke array
		$data = array(
			'username' => $username1,
			'password' => getHashedPassword($pass),
			'nama_adm' => $nama,
			'foto_adm' => $foto,
			'moto_adm' => $moto,
			'whatsapp' => $wa,
			'instagram' => $ig,
			'facebook' => $fb,
			'twitter' => $tw,
			'active' => 0
		);
		//tambahkan akun ke database
		$this->load->model('m_register', 'user_model', TRUE);
		if($this->user_model->isDuplicate($this->input->post('username'))){
            echo "Username telah digunakan";
        }
        else
		{
			$this->user_model->add_account($data);
			echo "Selamat, Kamu bagian dari kami sekarang <br> lakukan activasi akun <a href='https://wa.me/089514055817?text=activasi%20akun%20*%20$nama%20*%20dengan%20email%20*%20$username1%20*'>disini!</a>";
			echo "<br><br><a href='".site_url("home")."'>Kembali ke Beranda</a>";
		}
	}
}

