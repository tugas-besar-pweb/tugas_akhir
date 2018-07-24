<?php
class user_model extends CI_Model{
 
  function get_user(){ //ambil data kategori dari table kategori
    $hsl=$this->db->get('user');
    return $hsl;
  }
  // function get_all_user() { //ambil data barang dari table barang yang akan di generate ke datatable
  //       $this->datatables->select('u_id,u_name,u_paswd,role');
  //       $this->datatables->from('user');
  //       $this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-warning btn-xs" data-id="$1" data-nama="$2" data-pass="$3" data-level="$4">Edit</a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-xs" data-id="$1">Hapus</a>','u_id,u_name,u_paswd,role');
  //       return $this->datatables->generate();
  // }
  // function simpan($data){
  //   $this->db->insert('user', $data);
  // }

  // function update($kode, $data){
  //   $this->db->where('u_id', $kode);
  //   $this->db->update('user', $data);
  // }
  
  // function delete($kode){
  //   $this->db->where('u_id',$kode);
  //   $this->db->delete('user');
  // }
  public function insertUser()
		{
			// $tgl=$this->input->post('tglLahir');
			// $tglBaru=date_format(new DateTime($tgl),"Y-m-d");
			$object = array(
				'nama_pegawai' => $this->input->post('nama_pegawai'),
        'nip' => $this->input->post('nip'),
        'jk' => $this->input->post('jk');
				'jabatan' => $this->input->post('jabatan'),
				'status_aktif' => $this->input->post('status_aktif'));
			$this->db->insert('user', $object);
		}

		public function getUser($id)
		{
			$this->db->where('id', $id);
			$query = $this->db->get('user');
			return $query->result();
		}

		public function updateById($id)
		{
			$data = array(
        'nama_pegawai' => $this->input->post('nama_pegawai'),
        'nip' => $this->input->post('nip'),
        'jk' => $this->input->post('jk'),
				'jabatan' => $this->input->post('jabatan'),
        'status_aktif' => $this->input->post('status_aktif'),
			);
			$this->db->where('id', $id);
			$this->db->update('user', $data);
		}
		public function delete($id) { 
         if ($this->db->delete("user", "id = ".$id)) { 
            return true; 
         } 
      } 
	}
}