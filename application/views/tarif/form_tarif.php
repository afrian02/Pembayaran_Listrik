<div class="container-fluid">
    <div class="block-header">
        <h2>
            Tarif
            <small>Tarif Listrik</small>
        </h2>
    </div>
    <!-- Advanced Validation -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2><?=ucfirst($page)?> Tarif</h2>
                </div>
                <div class="body">
                    <form id="form_advanced_validation" action="<?=site_url('tarif/proccess')?>" method="POST">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="hidden" name="tarif_id" value="<?=$row->tarif_id?>">
                                <input type="text" class="form-control" name="kode_tarif" value="<?php echo 'T0'.time() ?>" readonly="readonly  ">
                                <label class="form-label">Kode Tarif</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="daya" value="<?=$row->daya?>">
                                <label class="form-label">Daya</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="tarif_perkwh" value="<?=$row->tarif_perkwh?>">
                                <label class="form-label">Tarif per KWH</label>
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