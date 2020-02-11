<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

	function __construct() 
    {
        parent::__construct();
        check_not_login();
        $this->load->model(['pelanggan_m', 'tarif_m']);
	}
	
	public function index()
	{
		$data['row'] = $this->pelanggan_m->get();
		$this->template->load('template', 'pelanggan/pelanggan_data', $data);
    }
    
    public function add()
    {
        $pelanggan = new stdClass();
        $pelanggan->pelanggan_id = null;
        $pelanggan->no_meter = null;
        $pelanggan->nama = null;
        $pelanggan->alamat = null;
        $pelanggan->masa_tenggang = null;
        $pelanggan->tarif_id = null;

        $tarif = $this->tarif_m->get();

        $data = array(
            'page' => 'add',
            'row' => $pelanggan,
            'tarif' => $tarif
        );
        $this->template->load('template', 'pelanggan/form_pelanggan', $data);
    }

    public function update($id)
    {
        $query = $this->pelanggan_m->get($id);
        $tarif = $this->tarif_m->get();
        if($query->num_rows() > 0) {
            $pelanggan = $query->row();
            $data = array(
                'page' => 'update',
                'row' => $pelanggan,
                'tarif' => $tarif
            );
            $this->template->load('template', 'pelanggan/form_pelanggan', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');";
            echo "window.location='".site_url('pelanggan')."';</script>";
        }
    }

    public function proccess()
    {
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['add'])) {
            $this->pelanggan_m->add($post);
        } else if(isset($_POST['update'])) {
            $this->pelanggan_m->update($post);
        }

        if($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil disimpan');</script>";
        }
            redirect('pelanggan');
    }

	public function del($id)
    {
        $this->pelanggan_m->del($id);
        if($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil dihapus');</script>";
        }
            redirect('pelanggan');
    }
}
