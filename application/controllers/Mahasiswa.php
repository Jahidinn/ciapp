<?php
class Mahasiswa extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Mahasiswa_model');

	}

	public function index(){

		$data['judul'] = 'Data mahasiswa';
		$data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
		if ($this->input->get('keyword')) {
			$data['mahasiswa'] = $this->Mahasiswa_model->cariDataMahasiswa();
		}
		$this->load->view('templates/header', $data);
		$this->load->view('mahasiswa/index');
		$this->load->view('templates/footer');

	}
	public function tambah(){
		$data['judul'] = 'Tambah data mahasiswa';
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('nim','Nim','required|numeric');
		$this->form_validation->set_rules('email','email','required|valid_email');

		 if ($this->form_validation->run() == FALSE) {
		 	$this->load->view('templates/header', $data);
			$this->load->view('mahasiswa/tambah');
			$this->load->view('templates/footer');
		 }
		 else {
		 	$this->Mahasiswa_model->tambahDataMahasiswa();
		 	$this->session->set_flashdata('flash', 'Ditambahkan');
		 	redirect('mahasiswa');
		 }
		
	}
	public function hapus($id){
		$this->Mahasiswa_model->hapusDataMahasiswa($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('mahasiswa');
	}
	public function detail($id){

		$data['judul'] = 'Detail mahasiswa';
		$data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
		$this->load->view('templates/header', $data);
		$this->load->view('mahasiswa/detail', $data);
		$this->load->view('templates/footer');
	}

	public function ubah($id){
		$data['judul'] = 'Ubah data mahasiswa';
		$data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
		$data['jurusan'] = ['Teknik elektro', 'Teknik mesin', 'Teknik informatika', 'teknik lingkungan'];
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('nim','Nim','required|numeric');
		$this->form_validation->set_rules('email','email','required|valid_email');

		 if ($this->form_validation->run() == FALSE) {
		 	$this->load->view('templates/header', $data);
			$this->load->view('mahasiswa/ubah', $data);
			$this->load->view('templates/footer');
		 }
		 else {
		 	$this->Mahasiswa_model->ubahDataMahasiswa();
		 	$this->session->set_flashdata('flash', 'Diubah');
		 	redirect('mahasiswa');
		 }
		
	}
}


?>