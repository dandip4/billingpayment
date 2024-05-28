<?php

class M_prodi extends CI_Model
{
    public function get_data()
    {
        $query = $this->db->get('prodi');
        return $query->result();
    }

    public function insert($data)
    {
        $this->db->insert('prodi', $data);
    }

    public function getDataDetail($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('prodi');
        return $query->row();
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('prodi', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('prodi');
    }
}
