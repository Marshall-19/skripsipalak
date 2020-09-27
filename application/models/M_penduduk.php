<?php
class M_penduduk extends CI_Model
{

    public function tampil()
    {
        return $this->db->query("SELECT * FROM tb_penduduk")->result();
    }

    public function simpan($post)
    {
        return $this->db->insert('tb_penduduk', $post);
    }

    public function tampilEdit($id)
    {
        return $this->db->query("SELECT * FROM tb_penduduk WHERE nik = '$id'")->result();
    }

    public function updateP($data, $where)
    {
        return $this->db->where($where)->update('tb_penduduk', $data);
    }

    public function hapus($id)
    {
        return $this->db->query("DELETE FROM tb_penduduk WHERE nik = '$id'");
    }
}
