<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><?php echo $title ?></h4>
                            </div>
                            <div class="content">
                            	<?php echo form_open('tarif/update') ?>
                                <form method="post">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
												<label for="">Kode Tarif</label>
                                                <input type="hidden" name="id" class="form-control" value="<?php echo $tarif_data->tarif_id ?>">
                                                
												<input type="text" class="form-control" name="kode_tarif" readonly="readonly"value="<?php echo $tarif_data->kode_tarif ?>" >

											</div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
												<label for="">Daya</label>
												<input type="text" class="form-control" name="daya" required="required" value="<?php echo $tarif_data->daya ?>">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
												<label for="">Tarif/Kwh</label>
												<input type="text" class="form-control" name="tarif_perkwh" required="required" value="<?php echo $tarif_data->tarif_perkwh ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Simpan</button>
                                    <div class="clearfix"></div>
                                </form>
                                <?php echo form_close() ?>
                            </div>
                        </div>
                    </div>