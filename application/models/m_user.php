<?php

class M_user extends CI_Model
{
    public function get_data()
    {
        $query = $this->db->get('user');
        return $query->result();
    }

    public function insert($post)
    {
        $params['nama'] = $post['nama'];
        $params['email'] = $post['email'];
        $params['password'] = sha1($post['password']);
        $params['no_hp'] = $post['no_hp'];
        $params['jk'] = $post['jk'];
        $params['level'] = $post['level'];
        $this->db->insert('user', $params);
    }

    public function getDataDetail($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('user');
        return $query->row();
    }

    public function update($post)
    {
        $params['nama'] = $post['nama'];
        $params['email'] = $post['email'];
        if (!empty($post['password'])) {
            $params['password'] = sha1($post['password']);
        }
        $params['no_hp'] = $post['no_hp'];
        $params['jk'] = $post['jk'];
        $params['level'] = $post['level'];
        $this->db->where('id', $post['id']);
        $this->db->insert('user', $params);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }
}
