<?php
class User extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->library('datatables'); //load library ignited-dataTable
    $this->load->model('user_model'); //load model crud_model
  }
  
  function index(){
    $data['username'] = $this->session->userdata('username');
    $this->load->view('admin/index', $data);
  }
 
  function get_User_json() { //data data User by JSON object
    header('Content-Type: application/json');
    echo $this->user_model->get_all_user();
  }
 
  function simpan(){ //function simpan data
    $data=array(
      'u_id'     => $this->input->post('uid'),
      'u_name'   => $this->input->post('username'),
      // 'u_paswd'  => $this->input->post('password'),
      'u_paswd'  => md5($this->input->post('password', TRUE)),
      'role'     => $this->input->post('level')
    );
    $this->user_model->simpan($data);
    redirect('admin/User');
  }
 
  function update(){ //function update data
    $kode=$this->input->post('uid');

    $data=array(
      'u_name'   => $this->input->post('username'),
      'u_paswd'  => $this->input->post('password'),
      'role'     => $this->input->post('level')
    );
    $this->user_model->update($kode, $data);
    // var_dump($this->input->post('uid'));
    // var_dump($data);
    redirect('admin/User');
  }
 
  function delete(){ //function hapus data
    $kode=$this->input->post('uid');
        // var_dump($this->input->post('uid'));

    $this->user_model->delete($kode);
    redirect('admin/User');
    
  }

//   public function create()
// 	{
// 		$this->load->helper('url','form');
// 		$this->load->library('form_validation');
// 		$this->load->model('user_model');
// 		$this->form_validation->set_rules('nama_pegawai', 'Nama', 'trim|required');
// 		$this->form_validation->set_rules('nip', 'nip', 'trim|required');
// 		$this->form_validation->set_rules('jk', 'jk', 'trim|required');
// 		$this->form_validation->set_rules('jabatan', 'jabatan', 'trim|required');
//     	$this->form_validation->set_rules('status_aktif', 'status_aktif', 'trim|required');
		

// 		if ($this->form_validation->run()==FALSE)
// 		{
// 			$this->load->view('index');
// 		}
// 		else
// 		{
// 			$this->user_model->insertUser();
// 			$this->load->view('tambah_user_data');
// 		}

// 	}

// 	public function update($id)
// 	{
// 		$this->load->helper('url','form');
// 		$this->load->library('form_validation');
// 		$this->form_validation->set_rules('nama_pegawai', 'Nama', 'trim|required');
// 		$this->form_validation->set_rules('nip', 'nip', 'trim|required');
// 		$this->form_validation->set_rules('jk', 'jk', 'trim|required');
// 		$this->form_validation->set_rules('jabatan', 'jabatan', 'trim|required');
//     	$this->form_validation->set_rules('status_aktif', 'status_aktif', 'trim|required');

// 		$this->load->model('user_model');
// 		$data['user'] = $this->user_model->getUser($id);

// 		if ($this->form_validation->run()==FALSE)
// 		{
// 			$this->load->view('index',$data);
// 		}
// 		else
// 		{
// 			$this->user_model->updateById($id);
// 			$this->load->view('edit_user_data');
// 		}
// 	}

// 	public function deleteData($id)
// 	{
// 		$this->load->helper("url");
// 		$this->load->model("user_model");
// 		$this->user_model->delete($id);
// 		redirect('user');
// 	}
 
}