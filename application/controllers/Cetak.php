<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model');
		$this->load->library('dompdf_gen');
		$this->load->helper('file');
	}

	public function index()
	{
		// $data['data_absensi']=$this->model->view_row();
		// $this->load->view('laporan/preview',$data);
	}

	public function cetakPdf()
	{
		// $this->load->library('dompdf_gen');
        // $this->load->helper('file');
		// $data['data_absensi']=$this->cetak_model->view_row();
		// $this->load->view('laporan/print', $data);
		// $paper_size = 'A4';
		// $orientation = 'landscape';
		// $html = $this->output->get_output();

		$this->load->model('model');
		$tampil['data_absensi']=$this->model->GetDetAbsensi($where="");
		$this->load->view('laporan/print',$tampil);
		$paper_size='A4';
		$orientation='landscape';
		$html=$this->output->get_output();

		$dompdf = new DOMPDF();
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporan.pdf");
		unset($html);
		unset($dompdf);
	}

}

/* End of file Cetak.php */
/* Location: ./application/controllers/Cetak.php */