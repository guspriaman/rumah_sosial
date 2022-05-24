<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pelanggan_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->from('pelanggan');
        if ($id != null) {
            $this->db->where('id_pelanggan', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'nama' => $post['nama_pelanggan'],
            'tlp' => $post['tlp'],
            'jenis_kelamin' => $post['jenis_kelamin'],
            'alamat' => $post['alamat'],
        ];
        $this->db->insert('pelanggan', $params);
    }

    public function edit($post)
    {
        $params = [
            'nama' => $post['nama_pelanggan'],
            'tlp' => $post['tlp'],
            'jenis_kelamin' => $post['jenis_kelamin'],
            'alamat' => $post['alamat'],
            'updated' => date('Y-m-d H:i:s')
        ];
        $this->db->where('id_pelanggan', $post['id']);
        $this->db->update('id_pelanggan', $params);
    }

    public function del($id)
    {
        $this->db->where('id_pelanggan', $id);
        $this->db->delete('pelanggan');
    }
}
