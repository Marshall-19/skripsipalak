<?php
class Keluarga extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_keluarga');
    }

    public function index()
    {
        $data['keluarga'] = $this->M_keluarga->tampil();
        $this->template->utama('data_kartu_keluarga/index', $data);
    }

    public function inputKeluarga()
    {

        $this->template->utama('data_kartu_keluarga/tambah');
    }

    public function simpanKeluarga()
    {
        $no_kk = $_POST['no_kk'];
        $cek = $this->db->query("SELECT * FROM tb_kartu_keluarga WHERE no_kk = '$no_kk'")->row_array();
        if ($no_kk == $cek['no_kk']) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Maaf, Nomor kartu Keluarga Sudah Terdaftar !
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('keluarga');
        } else {
            $data = array(
                'no_kk' => $_POST['no_kk'],
                'nama_kepala' => $_POST['nama_kepala'],
                'alamat' => $_POST['alamat'],
                'jorong' => $_POST['jorong'],
                'nagari' => $_POST['nagari'],
                'kecamatan' => $_POST['kecamatan'],
                'kode_pos' => $_POST['kode_pos'],
                'provinsi' => $_POST['provinsi'],
            );
            $this->M_keluarga->simpan($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil diinputkan !
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('keluarga');
        }
    }

    public function editKeluarga($id)
    {

        $data['keluarga'] = $this->M_keluarga->tampilEdit($id);
        $this->template->utama('data_kartu_keluarga/edit', $data);
    }

    public function updateKeluarga()
    {
        $data = array(
            'no_kk' => $_POST['no_kk'],
            'nama_kepala' => $_POST['nama_kepala'],
            'alamat' => $_POST['alamat'],
            'jorong' => $_POST['jorong'],
            'nagari' => $_POST['nagari'],
            'kecamatan' => $_POST['kecamatan'],
            'kode_pos' => $_POST['kode_pos'],
            'provinsi' => $_POST['provinsi'],
        );
        $where = array('no_kk' => $_POST['no_kk']);
        $this->M_keluarga->updateKeluarga($data, $where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        Data Berhasil diupdate !
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('keluarga');
    }
}
