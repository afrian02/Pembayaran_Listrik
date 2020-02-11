<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan_m extends CI_Model  {

    public function get($id = null)
    {
        $this->db->from('pelanggan');
        if($id != null) {
            $this->db->where('pelanggan_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'no_meter' => $post['no_meter'],
            'nama' => $post['nama'],
            'alamat' => $post['alamat'],
            'masa_tenggang' => $post['masa_tenggang'],
            'tarif_id' => $post['tarif'],
        ];
        $this->db->insert('pelanggan', $params);
    }

    public function update($post)
    {
        $params = [
            'no_meter' => $post['no_meter'],
            'nama' => $post['nama'],
            'alamat' => $post['alamat'],
            'masa_tenggang' => $post['masa_tenggang'],
            'tarif_id' => $post['tarif_id'],
        ];
        $this->db->where('pelanggan_id', $post['pelanggan_id']);
        $this->db->update('pelanggan', $params);
    }

    public function del($id)
    {
        $this->db->where('pelanggan_id', $id);
        $this->db->delete('pelanggan');
    }
}