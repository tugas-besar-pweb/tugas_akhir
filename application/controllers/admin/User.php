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
 
}