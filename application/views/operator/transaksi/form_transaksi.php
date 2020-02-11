<div class="container-fluid">
    <div class="block-header">
        <h2>
            Transaksi
            <small>Transaksi Listrik</small>
        </h2>
    </div>
    <!-- Advanced Validation -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2><?=ucfirst($page)?> Transaksi</h2>
                </div>
                <div class="body">
                    <form id="form_advanced_validation" action="<?=site_url('Transaksi/proccess')?>" method="POST">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="hidden" name="pembayaran_id" value="<?=$row->pembayaran_id?>">
                                <input type="text" class="form-control" name="kode_Transaksi" value="<?php echo 'TR0'.time() ?>" readonly="readonly">
                                <label class="form-label">Id Transaksi</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="pelanggan_id" value="<?=$row->pelanggan_id?>">
                                <label class="form-label">Pelanggan</label>
                                <select name="pelanggan" class="form-control">
                                    <option value="">--Pilih--</option>
                                    <?php foreach($pelanggan->result() as $key => $data) { ?>
                                        <option value="<?=$data->pelanggan_id?>"><?=$data->nama?></option>

                                    <?php    } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" class="form-control" name="tgl_bayar" value="<?=$row->tgl_bayar?>">
                                <label class="form-label">Tanggal Bayar</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" class="form-control" name="total_akhir" value="<?=$row->total_akhir?>">
                                <label class="form-label">Total Akhir</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" class="form-control" name="bayar" value="<?=$row->bayar?>">
                                <label class="form-label">Bayar</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="kembali" value="<?=$row->kembali?>">
                                <label class="form-label">Kembali</label>
                            </div>
                        </div>
                        
                        <button class="btn btn-primary waves-effect" name="<?=$page?>" type="submit">SUBMIT</button>
                        <button class="btn btn-default waves-effect" type="reset">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Advanced Validation -->
</div>