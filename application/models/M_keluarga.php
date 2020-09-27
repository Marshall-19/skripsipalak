<?php
class M_keluarga extends CI_Model
{

    public function tampil()
    {
        return $this->db->query("SELECT * FROM tb_kartu_keluarga")->result();
    }

    public function simpan($post)
    {
        return $this->db->insert('tb_kartu_keluarga', $post);
    }

    public function tampilEdit($id)
    {
        return $this->db->query("SELECT * FROM tb_kartu_keluarga WHERE no_kk = '$id'")->result();
    }

    public function updateKeluarga($data, $where)
    {
        return $this->db->where($where)->update('tb_kartu_keluarga', $data);
    }
}
