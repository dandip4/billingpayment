<?php

class M_kegiatan extends CI_Model
{
    public function get_data()
    {
        $query = $this->db->get('kegiatan');
        return $query->result();
    }

    public function insert($data) 
    {
        $this->db->insert('kegiatan', $data);
    }

    public function getDataDetail($id)
    {
        $this->db->where('id',$id);
        $query = $this->db->get('kegiatan');
        return $query->row();
    }
    
    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('kegiatan', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('kegiatan');
    }

}
?>