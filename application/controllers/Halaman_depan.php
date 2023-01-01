<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Halaman_depan extends CI_Controller {

	function __construct() {
		parent::__construct();

		$this->load->model('Model');
		$this->load->library('form_validation');
		$this->load->library('session');
	}

	function index(){

		$data = array (
			'title'		=> 'Login Sintetic Store ',
			'error'		=> '',
			'titlesistem'	=> $this->Model->getTitle(),
		);
		$this->load->view('tampilandepan/header',$data);
		$this->load->view('tampilandepan/index');
		$this->load->view('tampilandepan/footer');
	}

	function petunjuk(){

		$data = array (
			'title'		=> ' Petunjuk Penggunaan Sintetic Store ',
			'error'		=> '',
			'petunjuk'	=> $this->Model->getPetunjuk(),
			'titlesistem'	=> $this->Model->getTitle(),
		);
		$this->load->view('tampilandepan/header',$data);
		$this->load->view('tampilandepan/petunjuk');
		$this->load->view('tampilandepan/footer');

	}
	

	function tentang(){

		$data = array (
			'title'		=> ' Tentang Sintetic Store ',
			'error'		=> '',
			'tentang'	=> $this->Model->getAbout(),
			'titlesistem'	=> $this->Model->getTitle(),
		);
		$this->load->view('tampilandepan/header',$data);
		$this->load->view('tampilandepan/tentang');
		$this->load->view('tampilandepan/footer');

	}

	public function auth(){
	
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			$this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
				<div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi</div></div>');


			if ($this->form_validation->run() == TRUE) {


			$username = $this->input->post("username", TRUE);
			$password = $this->input->post('password', TRUE);

			$checking = $this->Model->check_login('login', array('username' => $username), array('password' => $password));

			if ($checking != FALSE) {
				foreach ($checking as $apps) {

					$session_data = array(
						'user_id'   => $apps->id_login,
						'user_name' => $apps->username,
						'user_pass' => $apps->password,
						'nama' => $apps->nama,
						'level'      => $apps->level
					);
					//set session userdata
					$this->session->set_userdata('login',$session_data);


					if($session_data["level"] == "1"){
									redirect("Administrasi/dashboard");
								}
								
								elseif($session_data["level"] == "2"){
									redirect("managertoko/dashboard");
								}
				
								else {
									echo "ERROR! 404 Tidak Ada";
								}
				

				}
			}else{

				$error = '
					<div class="alert alert-danger alert-dismissable fade in">
					  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					  <strong>Kesalahan!</strong> Silahkan cek kembali username dan password anda.
					</div>
				';
				
				$this->session->set_flashdata('error', $error);
				redirect('');
			}

		// }else{

		// 	$this->load->view('login');
		// }

	}

}

	

}