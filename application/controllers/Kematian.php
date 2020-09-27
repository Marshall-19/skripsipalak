<?php
class Kematian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_kematian');
    }

    public function index()
    {
        $data['kematian'] = $this->M_kematian->tampil();
        $this->template->utama('data_kematian/index', $data);
    }

    public function inputKematian()
    {

        $this->template->utama('data_kematian/tambah');
    }

    public function simpanKematian()
    {
        $data = array(
            'nik' => $_POST['nik'],
            'hari_kematian' => $_POST['hari_kematian'],
            'tanggal_kematian' => $_POST['tanggal_kematian'],
            'jam' => $_POST['jam'],
            'dimakamkan' => $_POST['dimakamkan'],
        );
        $this->M_kematian->simpan($data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil diinputkan !
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
        redirect('kematian');
    }


    public function editKematian($id)
    {

        $data['kematian'] = $this->M_kematian->tampilEdit($id);
        $this->template->utama('data_kematian/edit', $data);
    }

    public function updatekematian()
    {
        $data = array(

            'nik' => $_POST['nik'],
            'hari_kematian' => $_POST['hari_kematian'],
            'tanggal_kematian' => $_POST['tanggal_kematian'],
            'jam' => $_POST['jam'],
            'dimakamkan' => $_POST['dimakamkan'],
        );
        $where = array('id_kematian' => $_POST['id_kematian']);
        $this->M_kematian->updateKematian($data, $where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        Data Berhasil diupdate !
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('kematian');
    }
}
