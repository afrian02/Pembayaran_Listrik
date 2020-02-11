<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tarif_m extends CI_Model  {

    public function get($id = null)
    {
        $this->db->from('tarif');
        if($id != null) {
            $this->db->where('tarif_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'kode_tarif' => $post['kode_tarif'],
            'daya' => $post['daya'],
            'tarif_perkwh' => $post['tarif_perkwh'],
        ];
        $this->db->insert('tarif', $params);
    }

    public function update($post)
    {
        $params = [
            'kode_tarif' => $post['kode_tarif'],
            'daya' => $post['daya'],
            'tarif_perkwh' => $post['tarif_perkwh'],
        ];
        $this->db->where('tarif_id', $post['tarif_id']);
        $this->db->update('tarif', $params);
    }

    public function del($id)
    {
        $this->db->where('tarif_id', $id);
        $this->db->delete('tarif');
    }
}