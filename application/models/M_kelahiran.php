<?php
class M_kelahiran extends CI_Model
{

    public function tampil()
    {
        return $this->db->query("SELECT * FROM tb_kelahiran")->result();
    }

    public function simpan($post)
    {
        return $this->db->insert('tb_kelahiran', $post);
    }

    public function tampilEdit($id)
    {
        return $this->db->query("SELECT * FROM tb_kelahiran WHERE id_kelahiran = '$id'")->result();
    }

    public function updateKelahiran($data, $where)
    {
        return $this->db->where($where)->update('tb_kelahiran', $data);
    }
}
