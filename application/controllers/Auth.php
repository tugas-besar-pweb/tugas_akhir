<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index() {
		$this->load->view('index');
	}

	public function cek_login() {
		$data = array('u_name' => $this->input->post('username', TRUE),
						'u_paswd' => md5($this->input->post('password', TRUE))
			);
		$this->load->model('model_user'); // load model_user
		$hasil = $this->model_user->cek_user($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['uid'] = $sess->u_id;
				$sess_data['username'] = $sess->u_name;
				$sess_data['level'] = $sess->role;
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('level')=='Administrator') {
				redirect('admin/c_admin');
			}
			elseif ($this->session->userdata('level')=='User') {
				redirect('member/c_member');
			}		
		}
		else {
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}

}

?>