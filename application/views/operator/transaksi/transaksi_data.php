<div class="container-fluid">
    <div class="block-header">
        <h2>
            Data Pelanggan
            <small>Pelanggan</small>
        </h2>
    </div>
    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2 style="padding-bottom: 5px">
                        Data Pelanggan
                    </h2>
                    <a href="<?=site_url('transaksi/add')?>" type="button" class="btn btn-primary waves-effect">
                        <i class="material-icons">add_circle</i>
                        <span>Tambah Pelanggan</span>
                    </a>
                    <ul class="header-dropdown m-r--5">
                    </ul>
                </div>
                <div class="body">
                    <div class="table-responsive">
                         <!-- print_r($row->result())  -->
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Id Pembayaran</th>
                                    <th>Id Pelanggan</th>
                                    <th>Tgl Bayar</th>
                                    <th>Total Akhir</th>
                                    <th>Bayar</th>
                                    <th>Kembalian</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Id Pembayaran</th>
                                    <th>Id Pelanggan</th>
                                    <th>Tgl Bayar</th>
                                    <th>Total Akhir</th>
                                    <th>Bayar</th>
                                    <th>Kembalian</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php 
                                    $no = 1;
                                    foreach ($row->result() as $key => $data) {
                                ?>
                                <tr>
                                    <td width="50px"><?=$no++?>.</td>
                                    <td><?=$data->pembayaran_id?></td>
                                    <td><?=$data->pelanggan_id?></td>
                                    <td><?=$data->tgl_bayar?></td>
                                    <th><?=$data->total_akhir?></th>
                                    <td><?=$data->bayar?></td>
                                    <td><?=$data->kembali?></td>
                                    <td class="text-center" width="100px">
                                        <a href="<?=site_url('transaksi/update/'.$data->pelanggan_id)?>"type="button" class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">create</i>
                                        </a>
                                        <a href="<?=site_url('transaksi/del/'.$data->pelanggan_id)?>" onclick="return confirm('Yakin hapus data?')" type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">clear</i>
                                        </a>
                                    </td>
                                </tr>
                                    <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Basic Examples -->
    <!-- #END# Exportable Table -->
    </div>