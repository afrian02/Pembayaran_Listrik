<div class="container-fluid">
    <div class="block-header">
        <h2>
            Pelanggan
            <small>Tambah Pelanggan</small>
        </h2>
    </div>
    <!-- Advanced Validation -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2><?=ucfirst($page)?> Pelanggan</h2>
                </div>
                <div class="body">
                    <form id="form_advanced_validation" action="<?=site_url('pelanggan/proccess')?>" method="POST">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="hidden" name="pelanggan_id" value="<?=$row->pelanggan_id?>">
                                <input type="text" class="form-control" name="no_meter" value="<?php echo 'NM0'.time() ?>" readonly="readonly">
                                <label class="form-label">No Meter</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="nama" value="<?=$row->nama?>">
                                <label class="form-label">Nama Pelanggan</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="alamat" value="<?=$row->alamat?>">
                                <label class="form-label">Alamat</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="masa_tenggang" value="<?=$row->masa_tenggang?>">
                                <label class="form-label">Masa Tenggang</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                                <label class="form-label">Tarif</label>
                                <select name="tarif" class="form-control">
                                    <option value="">--Pilih--</option>
                                    <?php foreach($tarif->result() as $key => $data) { ?>
                                        <option value="<?=$data->daya?>"><?=$data->daya?></option>

                                    <?php    } ?>
                                </select>
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