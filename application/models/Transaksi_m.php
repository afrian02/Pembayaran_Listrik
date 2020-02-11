<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_M extends CI_Model  {

    public function get($id = null)
    {
        $this->db->from('pembayaran');
        if($id != null) {
            $this->db->where('pembayaran_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'pelanggan_id' => $post['pelanggan_id'],
            'tgl_bayar' => $post['tgl_bayar'],
            'total_akhir' => $post['total_akhir'],
            'bayar' => $post['bayar'],
            'kembali' => $post['kembali'],
        ];
        $this->db->insert('pembayaran', $params);
    }

    public function update($post)
    {
        $params = [
            'pelanggan_id' => $post['pelanggan_id'],
            'tgl_bayar' => $post['tgl_bayar'],
            'total_akhir' => $post['total_akhir'],
            'bayar' => $post['bayar'],
            'kembali' => $post['kembali'],
        ];
        $this->db->where('pembayaran_id', $post['pembayaran_id']);
        $this->db->update('pembayaran', $params);
    }

    public function del($id)
    {
        $this->db->where('pembayaran_id', $id);
        $this->db->delete('pembayaran');
    }
}