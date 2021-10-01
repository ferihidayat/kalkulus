<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cektoko extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	//Shopee
	public function shopee()
	{

		$this->load->view('templates/cektoko_header');
		$this->load->view('cektoko/shopee/index-shopee');
		$this->load->view('templates/home_footer');
	}

	public function cekshopee()
	{
		$this->form_validation->set_rules('untung', 'Untung', 'max_length[3]');
		if ($this->form_validation->run() == true) {
			$data = [
				'barangshopee' => $this->input->post('barangshopee'),
				'jenisshopee' => $this->input->post('jenisshopee'),
				'modal' => $this->input->post('modal'),
				'untung' => $this->input->post('untung')

			];

			$this->load->view('templates/cektoko_header');
			$this->load->view('cektoko/shopee/shopee-cek', $data);
			$this->load->view('templates/home_footer');
		} else {
			$this->session->set_flashdata('messageshop', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
			 Untung tidak bisa melebihi 3 digit.
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		  </div>');
			redirect('cektoko/shopee');
		}
	}

	//tokopedia
	public function tokopedia()
	{
		$this->load->view('templates/cektoko_header');
		$this->load->view('cektoko/tokopedia/index-tokopedia');
		$this->load->view('templates/home_footer');
	}

	public function cektokopedia()
	{

		$this->form_validation->set_rules('untung', 'Untung', 'max_length[3]');

		if ($this->form_validation->run() == true) {
			$data = [
				'namabarang' => $this->input->post('namabarang'),
				'jenistoko' => $this->input->post('jenistoko'),

				'modal' => $this->input->post('modal'),
				'untung' => $this->input->post('untung')

			];

			$this->load->view('templates/cektoko_header');
			$this->load->view('cektoko/tokopedia/tokopedia-cek', $data);
			$this->load->view('templates/home_footer');
		} else {
			$this->session->set_flashdata('messagetoko', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
		 Untung tidak bisa melebihi 3 digit.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');
			redirect('cektoko/shopee');
		}
	}


	//dropcuan

	public function dropcuan()
	{


		$this->load->view('templates/cektoko_header');
		$this->load->view('cektoko/dropcuan/index-dropcuan');
		$this->load->view('templates/home_footer');
	}

	public function cekdropcuan()
	{
		$this->form_validation->set_rules('untung', 'Untung', 'max_length[3]');

		if ($this->form_validation->run() == true) {
			$data = [
				'namabarang' => $this->input->post('namabarang'),
				'modal' => $this->input->post('modal'),
				'berat' => $this->input->post('berat'),
				'untung' => $this->input->post('untung')

			];

			$this->load->view('templates/cektoko_header');
			$this->load->view('cektoko/dropcuan/dropcuan-cek', $data);
			$this->load->view('templates/home_footer');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
			 Untung tidak bisa melebihi 3 digit.
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		  </div>');
			redirect('cektoko/dropcuan');
		}
	}

	//lazada
	public function lazada()
	{
		$this->load->view('templates/cektoko_header');
		$this->load->view('cektoko/lazada/index-lazada');
		$this->load->view('templates/home_footer');
	}

	public function ceklazada()
	{
		$this->load->view('templates/cektoko_header');
		$this->load->view('cektoko/lazada/lazada-cek');
		$this->load->view('templates/home_footer');
	}
}
