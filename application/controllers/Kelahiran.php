<?php
class Kelahiran extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_kelahiran');
  }

  public function index()
  {
    $data['kelahiran'] = $this->M_kelahiran->tampil();
    $this->template->utama('data_kelahiran/index', $data);
  }

  public function inputKelahiran()
  {
    $data['kk'] = $this->db->query('SELECT * FROM tb_kartu_keluarga')->result();
    $this->template->utama('data_kelahiran/tambah',$data);
  }

  public function simpanKelahiran()
  {
    $data = array(
      'no_kk' => $_POST['no_kk'],
      'nik' => $_POST['nik'],
      'hari_lahir' => $_POST['hari_lahir'],
      'tanggal_lahir' => $_POST['tanggal_lahir'],
      'jam_lahir' => $_POST['jam_lahir'],
      'nama' => $_POST['nama'],
      'jenis_kelamin' => $_POST['jenis_kelamin'],
      'berat' => $_POST['berat'],
      'panjang' => $_POST['panjang'],
      'tempat_lahir' => $_POST['tempat_lahir'],
      'anak_ke' => $_POST['anak_ke'],
      'agama' => $_POST['agama'],

    );
    $this->M_kelahiran->simpan($data);
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil Diinputkan !
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
    redirect('kelahiran');
  }


  public function editkelahiran($id)
  {
    $data['kk'] = $this->db->query('SELECT * FROM tb_kartu_keluarga')->result();
    $data['kelahiran'] = $this->M_kelahiran->tampilEdit($id);
    $this->template->utama('data_kelahiran/edit', $data);
  }

  public function updateKelahiran()
  {
    $data = array(
      'no_kk' => $_POST['no_kk'],
      'nik' => $_POST['nik'],
      'hari_lahir' => $_POST['hari_lahir'],
      'tanggal_lahir' => $_POST['tanggal_lahir'],
      'jam_lahir' => $_POST['jam_lahir'],
      'nama' => $_POST['nama'],
      'jenis_kelamin' => $_POST['jenis_kelamin'],
      'berat' => $_POST['berat'],
      'panjang' => $_POST['panjang'],
      'tempat_lahir' => $_POST['tempat_lahir'],
      'anak_ke' => $_POST['anak_ke'],
      'agama' => $_POST['agama'],
    );
    $where = array('id_kelahiran' => $_POST['id_kelahiran']);
    $this->M_kelahiran->updateKelahiran($data, $where);
    $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        Data Berhasil Diedit !
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
    redirect('kelahiran');
  }
}
