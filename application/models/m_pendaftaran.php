<?php

class M_pendaftaran extends CI_Model
{
    public function get_data()
    {
        return $this->db->get('kegiatan')->result();
    }

    public function findData($id)
    {
        return $this->db->where('id', $id)->get('kegiatan')->result();
    }

    public function storeData($payload)
    {
        return $this->db->insert('kegiatan', $payload);
    }
}
