<?php
class M_kematian extends CI_Model
{

    public function tampil()
    {
        return $this->db->query("SELECT * FROM tb_kematian")->result();
    }

    public function simpan($post)
    {
        return $this->db->insert('tb_kematian', $post);
    }

    public function tampilEdit($id)
    {
        return $this->db->query("SELECT * FROM tb_kematian WHERE id_kematian = '$id'")->result();
    }

    public function updateKematian($data, $where)
    {
        return $this->db->where($where)->update('tb_kematian', $data);
    }
    
}
