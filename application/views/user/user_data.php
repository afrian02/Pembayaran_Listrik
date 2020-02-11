<div class="container-fluid">
    <div class="block-header">
        <h2>
            Data User
            <small>Menampilkan Data User</small>
        </h2>
    </div>
    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2 style="padding-bottom: 5px">
                        Data User
                    </h2>
                    <a href="<?=site_url('user/add')?>" type="button" class="btn btn-primary waves-effect">
                        <i class="material-icons">add_circle</i>
                        <span>Tambah User</span>
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
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Telepon</th>
                                    <th>Alamat</th>
                                    <th>Level</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Telepon</th>
                                    <th>Alamat</th>
                                    <th>Level</th>
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
                                    <td><?=$data->nama?></td>
                                    <td><?=$data->username?></td>
                                    <td><?=$data->telepon?></td>
                                    <td><?=$data->alamat?></td>
                                    <td><?=$data->akses == 1 ? "Admin" : "Operator"?></td>
                                    <td class="text-center" width="100px">
                                        <a href="<?=site_url('user/update/'.$data->user_id)?>"type="button" class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">create</i>
                                        </a>
                                        <a href="<?=site_url('user/del/'.$data->user_id)?>" onclick="return confirm('Yakin hapus data?')" type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
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