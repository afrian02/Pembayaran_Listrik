<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        check_not_login();
        $this->load->model(['transaksi_m', 'pelanggan_m']);
	}
		

	public function index()
	{
		$data['row'] = $this->transaksi_m->get();
		$this->template->load('template', 'operator/transaksi/transaksi_data', $data);
    }

	public function add()
    {
        $transaksi = new stdClass();
        $transaksi->pembayaran_id = null;
        $transaksi->pelanggan_id = null;
        $transaksi->tgl_bayar = null;
        $transaksi->total_akhir = null;
        $transaksi->bayar = null;
        $transaksi->kembali = null;

        $pelanggan = $this->pelanggan_m->get();
        $data = array(
            'page' => 'add',
            'row' => $transaksi,
            'pelanggan' => $pelanggan
        );
        $this->template->load('template', 'operator/transaksi/form_transaksi', $data);
    }

    public function proccess()
    {
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['add'])) {
            $this->transaksi_m	->add($post);
        } else if(isset($_POST['update'])) {
            $this->transaksi_m	->update($post);
        }

        if($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil disimpan');</script>";
        }
            redirect('transaksi');
    }

    public function del($id)
    {
        $this->pelanggan_m->del($id);
        if($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil dihapus');</script>";
        }
            redirect('transaksi');
    }
}