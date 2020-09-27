<?php
class Penduduk extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_penduduk');
    }

    public function index()
    {
        $data['penduduk'] = $this->M_penduduk->tampil();
        $this->template->utama('data_penduduk/index',$data);
    }

    public function inputPenduduk()
    {
        $data['agama'] = $this->db->query("SELECT * FROM agama")->result();
        $this->template->utama('data_penduduk/tambah',$data);
    }

    public function simpanPenduduk()
    {
        $nik = $_POST['nik'];
        $cek = $this->db->query("SELECT * FROM tb_penduduk WHERE nik = '$nik'")->row_array();
        if($nik == $cek['nik'])
        {
            $this->session->set_flashdata('pesan','Maaf Nik Sudah Ada');
            redirect('penduduk');
        }else{
            $data = array(
                'nik' => $_POST['nik'],
                'no_kk' => $_POST['kk'],
                'nama' => $_POST['nama'],
                'tempat_lahir' => $_POST['tempat_lahir'],
                'tanggal_lahir' => $_POST['tanggal_lahir'],
                'jenis_kelamin' => $_POST['jk'],
                'alamat' => $_POST['alamat'],
                'jorong' => $_POST['jorong'],
                'nagari' => $_POST['nagari'],
                'kecamatan' => $_POST['kecamatan'],
                'agama' => $_POST['agama'],
                'status_perkawinan' => $_POST['stkawin'],
                'golongan_darah' => $_POST['goldar'],
                'pekerjaan' => $_POST['kerja'],
                'kewarganegaraan' => $_POST['kewarganegaraan'],
                'status' => $_POST['status'],
            );
            $this->M_penduduk->simpan($data);
            $this->session->set_flashdata('pesan','Data Berhasil Diinputkan');
            redirect('penduduk');
        }
    }

    public function editPenduduk($id)
    {
        $data['agama'] = $this->db->query("SELECT * FROM agama")->result();
        $data['penduduk'] = $this->M_penduduk->tampilEdit($id);
        $this->template->utama('data_penduduk/edit',$data);
    }

    public function hapusPenduduk($id)
    {
        $data['penduduk'] = $this->M_penduduk->hapus($id);
        $this->session->set_flashdata('pesan','Data Berhasil Dihapus');
        redirect('penduduk');
    }

    public function updatePenduduk()
    {
        $data = array(
            'no_kk' => $_POST['kk'],
            'nama' => $_POST['nama'],
            'tempat_lahir' => $_POST['tempat_lahir'],
            'tanggal_lahir' => $_POST['tanggal_lahir'],
            'jenis_kelamin' => $_POST['jk'],
            'alamat' => $_POST['alamat'],
            'jorong' => $_POST['jorong'],
            'nagari' => $_POST['nagari'],
            'kecamatan' => $_POST['kecamatan'],
            'agama' => $_POST['agama'],
            'status_perkawinan' => $_POST['stkawin'],
            'golongan_darah' => $_POST['goldar'],
            'pekerjaan' => $_POST['kerja'],
            'kewarganegaraan' => $_POST['kewarganegaraan'],
            'status' => $_POST['status'],
        );
        $where = array('nik' => $_POST['nik']);
        $this->M_penduduk->updateP($data, $where);
        $this->session->set_flashdata('pesan','Data Berhasil Di Update');
        redirect('penduduk');
    }
}