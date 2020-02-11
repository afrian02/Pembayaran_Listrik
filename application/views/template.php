
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | Pembayaran Listrik</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="<?=base_url() ?>assets/fontawesome/font_family.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url() ?>assets/fontawesome/font_icon.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?=base_url() ?>assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?=base_url() ?>assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="<?=base_url() ?>assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Animation Css -->
    <link href="<?=base_url() ?>assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="<?=base_url() ?>assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

    <!-- Bootstrap DatePicker Css -->
    <link href="<?=base_url() ?>assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="<?=base_url() ?>assets/plugins/waitme/waitMe.css" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="<?=base_url() ?>assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="<?=base_url() ?>assets/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?=base_url() ?>assets/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?=base_url() ?>assets/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-orange">
    <!-- Page Loader -->
    
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">PEMBAYARAN LISTRIK</a>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?=base_url() ?>assets/images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Afrian</div>
                    <div class="email">afriyannurrohman@gmail.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="<?=site_url('auth/logout')?>"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li <?=$this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == ''? 'class="active"' : ''?>>
                        <a href="<?=site_url('dashboard')?>">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <?php if($this->fungsi->user_login()->akses == 1) { ?>
                    <li <?=$this->uri->segment(1) == 'pelanggan' ? 'class="active"' : ''?>>
                        <a href="<?=site_url('pelanggan')?>">
                            <i class="material-icons">text_fields</i>
                            <span>Pelanggan</span>
                        </a>
                    </li>
                    <?php } ?>
                    <?php if($this->fungsi->user_login()->akses == 1) { ?>
                    <li <?=$this->uri->segment(1) == 'tarif' ? 'class="active"' : ''?>>
                        <a href="<?=site_url('tarif')?>">
                            <i class="material-icons">layers</i>
                            <span>Tarif</span>
                        </a>
                    </li>
                    <?php } ?>
                    <?php if($this->fungsi->user_login()->akses == 2) { ?>
                    <li <?=$this->uri->segment(1) == 'transaksi' ? 'class="active"' : ''?>>
                        <a href="<?=site_url('transaksi')?>">
                            <i class="material-icons">layers</i>
                            <span>Pembayaran</span>
                        </a>
                    </li>
                    <?php } ?>
                    <?php if($this->fungsi->user_login()->akses == 2) { ?>
                    <li <?=$this->uri->segment(1) == 'pelanggan' ? 'class="active"' : ''?>>
                        <a href="<?=site_url('pelanggan')?>">
                            <i class="material-icons">layers</i>
                            <span>Pelanggan</span>
                        </a>
                    </li>
                    <?php } ?>
                    <?php if($this->fungsi->user_login()->akses == 2) { ?>
                    <li <?=$this->uri->segment(1) == 'tarif_operator' ? 'class="active"' : ''?>>
                        <a href="<?=site_url('tarif_operator')?>">
                            <i class="material-icons">layers</i>
                            <span>Tarif</span>
                        </a>
                    </li>
                    <?php } ?>
                    <?php if($this->fungsi->user_login()->akses == 1) { ?>
                    <li class="header">USER</li>
                    <li <?=$this->uri->segment(1) == 'user' ? 'class="active"' : ''?>>
                        <a href="<?=site_url('user')?>">
                            <i class="material-icons">people</i>
                            <span>User</span>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2020 <a href="javascript:void(0);">Pembayaran Listrik</a>.
                </div>
            </div>
            <!-- #Footer -->
        </aside>
    </section>

    <section class="content">
        <?php echo $contents ?>
    </section>

    <!-- Jquery Core Js -->
    <script src="<?=base_url() ?>assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?=base_url() ?>assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?=base_url() ?>assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?=base_url() ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?=base_url() ?>assets/plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="<?=base_url() ?>assets/plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="<?=base_url() ?>assets/plugins/raphael/raphael.min.js"></script>
    <script src="<?=base_url() ?>assets/plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="<?=base_url() ?>assets/plugins/chartjs/Chart.bundle.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="<?=base_url() ?>assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="<?=base_url() ?>assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="<?=base_url() ?>assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="<?=base_url() ?>assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="<?=base_url() ?>assets/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="<?=base_url() ?>assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="<?=base_url() ?>assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="<?=base_url() ?>assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="<?=base_url() ?>assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <script>
    $(document).ready(function(){
        $('#table1').DataTable()
    })
    </script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="<?=base_url() ?>assets/plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="<?=base_url() ?>assets/js/admin.js"></script>
    <script src="<?=base_url() ?>assets/js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="<?=base_url() ?>assets/js/demo.js"></script>

    <script src="<?=base_url() ?>assets/js/pages/ui/dialogs.js"></script>
</body>

</html>
