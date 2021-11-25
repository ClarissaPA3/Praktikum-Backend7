<?php

class CForm extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('MForm');
		$this->load->helper('url','form'); 
        $this->load->library('upload', 'session');
	}

	public function index() {
		$baju = $this->MForm->getDataBaju();
		$DATA = array('baju' => $baju);
		$this->load->view('vform', $DATA);
	}

	public function halaman_tambah()  {
		$this->load->view('vformtambah');
	}

	public function halaman_edit($id) {
		$queryDetail = $this->MForm->getDataBajuDetail($id);
		$DATA = array('queryArtikel' => $queryDetail);
		$this->load->view('vformedit', $DATA);
	}

	public function fungsiTambah() {
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$keluhan = $this->input->post('keluhan');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$tgl_lahir = $this->input->post('tgl_lahir');
		// $foto = $this->input->post('foto');
		
		$config['upload_path'] = './images/';
		$config['allowed_types'] = 'jpg|png|gif';
		$config['max_size']             = 1000000;
		$config['max_width']            = 1920;
        $config['max_height']           = 1080;

        // $this->load->library('upload', $config);
		$this->upload->initialize($config);
		$file = $this->upload->do_upload('foto');
		$data = $this->upload->data();
		// print_r($data);

		// $foto = $_FILES['foto'];
		// print_r($foto);
		// if ($foto='') {
		// } else {
		// 	$this->load->library('upload', $config);
		// 	if (!$this->upload->do_upload('foto')) {
		// 		echo "Upload Gagal"; die();
		// 	} else {
		// 		$foto = $this->upload->data('file_name');
		// 	}
		// }

		$foto = $data['file_name'];
		print_r($foto);
		$warga_negara = $this->input->post('warga_negara');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$agreement = $this->input->post('agreement');
		// $this->db->insert($this->tabpas, $this);

		$ArrInsert = array(
			'id' => $id,
			'nama' => $nama,
			'keluhan' => $keluhan,
			'email' => $email,
			'password' => $password,
			'tgl_lahir' => $tgl_lahir,
			'foto' => $foto,
			'warga_negara' => $warga_negara,
			'jenis_kelamin' => $jenis_kelamin,
			'agreement' => $agreement

		);

		// $this->MForm->insertDataBaju($ArrInsert);
		$this->db->insert('tabpas', $ArrInsert);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Data berhasil disimpan</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>');
		redirect(base_url(''));
	}

	public function fungsiEdit() {
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$keluhan = $this->input->post('keluhan');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$tgl_lahir = $this->input->post('tgl_lahir');
		// $foto = $this->input->post('foto');

		$config['upload_path'] = './images/';
		$config['allowed_types'] = 'jpg|png|gif';
		$config['max_size']             = 1000000;
		$config['max_width']            = 1920;
        $config['max_height']           = 1080;

        // $this->load->library('upload', $config);
		$this->upload->initialize($config);
		$file = $this->upload->do_upload('foto');
		$data = $this->upload->data();
		// print_r($data);

		// $foto = $_FILES['foto'];
		// print_r($foto);
		// if ($foto='') {
		// } else {
		// 	$this->load->library('upload', $config);
		// 	if (!$this->upload->do_upload('foto')) {
		// 		echo "Upload Gagal"; die();
		// 	} else {
		// 		$foto = $this->upload->data('file_name');
		// 	}
		// }

		$foto = $data['file_name'];
		print_r($foto);
		$warga_negara = $this->input->post('warga_negara');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$agreement = $this->input->post('agreement');


		$ArrUpdate = array(
			// 'id' => $id,
			'nama' => $nama,
			'keluhan' => $keluhan,
			'email' => $email,
			'password' => $password,
			'tgl_lahir' => $tgl_lahir,
			'foto' => $foto,
			'warga_negara' => $warga_negara,
			'jenis_kelamin' => $jenis_kelamin,
			'agreement' => $agreement
		);

		// $this->MForm->updateDataBaju($id, $ArrUpdate);
		$this->db->where('id', $id);
		$this->db->update('tabpas', $ArrUpdate);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Data berhasil diubah</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>');
		redirect(base_url(''));
	}

	public function fungsiDelete($id) {
		// $this->MForm->deleteDataBaju($id);
		$this->db->where('id', $id);
		$this->db->delete('tabpas');
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Data berhasil dihapus</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>');
		redirect(base_url(''));
	}
}
