<div class="container-fluid">
    <div class="block-header">
        <h2>
            Update User
            <small>Menambahkan Data User</small>
        </h2>
    </div>
    <!-- Advanced Validation -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>Update User</h2>
                </div>
                <div class="body">
                    <form id="form_advanced_validation" action="" method="POST">
                        <div class="form-group form-float">
                            <div class="form-line <?=form_error('name') ? 'has-error' : null?>">
                                <input type="hidden" name="user_id" value="<?=$row->user_id?>">
                                <input type="text" class="form-control" name="name" value="<?=$this->input->post('name') ?? $row->nama?>" 
                                minlength="3">
                                <label class="form-label">Name*</label>
                            </div>
                            <div class="help-info"><?=form_error('name')?></div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line <?=form_error('username') ? 'has-error' : null?>">
                                <input type="text" class="form-control" name="username" value="<?=$this->input->post('username') ?? $row->username?>" 
                                max="200">
                                <label class="form-label">Username*</label>
                            </div>
                            <div class="help-info"><?=form_error('username')?></div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line <?=form_error('password') ? 'has-error' : null?>">
                                <input type="password" class="form-control" name="password" value="<?=$this->input->post('password')?>">
                                <label class="form-label">Password</label>
                            </div>
                            <small>(Biarkan kosong jika tidak diganti)</small>
                            <div class="help-info"><?=form_error('password')?></div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line" <?=form_error('pasconf') ? 'has-error' : null?>>
                                <input type="password" class="form-control" name="passconf" value="<?=$this->input->post('passconf')?>" >
                                <label class="form-label">Password Confirmation</label>
                            </div>
                            <div class="help-info"><?=form_error('passconf')?></div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line <?=form_error('telepon') ? 'has-error' : null?>">
                                <input type="number" class="form-control" name="telepon" value="<?=$this->input->post('telepon') ?? $row->telepon?>" >
                                <label class="form-label">Telepon</label>
                            </div>
                            <div class="help-info"><?=form_error('telepon')?></div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line <?=form_error('address') ? 'has-error' : null?>">
                                <textarea name="address" cols="30" rows="4" class="form-control no-resize" required><?=set_value('address')?><?=$this->input->post('address') ?? $row->alamat?></textarea>
                                <label class="form-label">Address</label>
                            </div>
                            <div class="help-info"><?=form_error('address')?></div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line <?=form_error('level') ? 'has-error' : null?>">
                                <select class="form-control show-tick" name="level">
                                    <?php $level = $this->input->post('level') ? $this->input->post('level') : $row->akses?>
                                    <option value="1" >Admin</option>
                                    <option value="2" <?=$level == 2 ? 'selected' : null?>>Operator</option>
                                </select>
                            </div>
                            <div class="help-info"><?=form_error('level')?></div>
                        </div>
                        <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Advanced Validation -->
</div>