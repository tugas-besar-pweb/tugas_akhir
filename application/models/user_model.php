<?php
class user_model extends CI_Model{
 
  function get_user(){ //ambil data kategori dari table kategori
    $hsl=$this->db->get('user');
    return $hsl;
  }
  function get_all_user() { //ambil data barang dari table barang yang akan di generate ke datatable
        $this->datatables->select('u_id,u_name,u_paswd,role');
        $this->datatables->from('user');
        $this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-warning btn-xs" data-id="$1" data-nama="$2" data-pass="$3" data-level="$4">Edit</a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-xs" data-id="$1">Hapus</a>','u_id,u_name,u_paswd,role');
        return $this->datatables->generate();
  }
  function simpan($data){
    $this->db->insert('user', $data);
  }

  function update($kode, $data){
    $this->db->where('u_id', $kode);
    $this->db->update('user', $data);
  }
  
  function delete($kode){
    $this->db->where('u_id',$kode);
    $this->db->delete('user');
  }
}