<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tarif extends CI_Controller {

	function __construct() 
    {
        parent::__construct();
        check_not_login();
        $this->load->model('tarif_m');
	}
	
	public function index()
	{
		$data['row'] = $this->tarif_m->get();
		$this->template->load('template', 'tarif/tarif_data', $data);
    }
    
    public function add()
    {
        $tarif = new stdClass();
        $tarif->tarif_id = null;
        $tarif->kode_tarif = null;
        $tarif->daya = null;
        $tarif->tarif_perkwh = null;
        $data = array(
            'page' => 'add',
            'row' => $tarif
        );
        $this->template->load('template', 'tarif/form_tarif', $data);
    }

    public function update($id)
    {
        $query = $this->tarif_m->get($id);
        if($query->num_rows() > 0) {
            $tarif = $query->row();
            $data = array(
                'page' => 'update',
                'row' => $tarif
            );
            $this->template->load('template', 'tarif/form_tarif', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');";
            echo "window.location='".site_url('tarif')."';</script>";
        }
    }

    public function proccess()
    {
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['add'])) {
            $this->tarif_m->add($post);
        } else if(isset($_POST['update'])) {
            $this->tarif_m->update($post);
        }

        if($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil disimpan');</script>";
        }
            redirect('tarif');
    }

	public function del($id)
    {
        $this->tarif_m->del($id);
        if($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil dihapus');</script>";
        }
            redirect('tarif');
    }
}
