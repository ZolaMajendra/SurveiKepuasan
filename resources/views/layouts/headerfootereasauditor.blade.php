<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Portal Improvement Kinerja Auditor SPI PT PLN (Persero) Regional 19</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/adminlte/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/adminlte/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/adminlte/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/adminlte/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="/adminlte/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="/adminlte/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/adminlte/plugins/daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]><!--
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
    <!--<![endif]-->
</head>
<body class="hold-transition skin-purple sidebar-mini" onload="multiload()">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <div class="logo">
            <img src="/adminlte/dist/img/pln2.png" alt="User Image" width="30px" height="40px"> PT <b>PLN</b> (Persero)
        </div>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu pull-left">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu pull-left">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <span class="hidden-xs">Satuan Pengawasan Intern (SPI) PT PLN (Persero) Regional 19</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="/adminlte/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs">{{ Auth::user()->username }}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="/adminlte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                <p>
                                    {{ Auth::user()->username }}
                                    <small>Member since Nov. 2012</small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-right">
                                    <a href="{{ route('logout') }}" class="btn btn-default btn-flat"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="/adminlte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->username }}</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>

    @yield('content')

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.3.8
        </div>
        <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
        reserved.
    </footer>

    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="/adminlte/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script type="text/javascript">
    $('select').select2();
</script>
<script src="/adminlte/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="/adminlte/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="/adminlte/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="/adminlte/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="/adminlte/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="/adminlte/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="/adminlte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/adminlte/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/adminlte/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/adminlte/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/adminlte/dist/js/demo.js"></script>
<script type="text/javascript">
        $('.maju').bind('click', function(){
                $('.nav-pills > .active').next('li').find('a').trigger('click');
            });
         $('.mundur').bind('click', function(){
                $('.nav-pills > .active').prev('li').find('a').trigger('click');
            });
</script>

<script type="text/javascript">
    var kalib_sblm_ctr = 1;
    var kalib_sblm_alph = 66;
    function tambah_kalib_sblm(){
        var isi_table = document.getElementById('isi-table-kalib-sblm');

        var row = document.createElement('tr');

        var th1 = document.createElement('th');
        th1.setAttribute('align', 'center');
        th1.innerHTML += '<div class="col-md-10"><label>Hasil Pengukuran <em>Sounding</em> Tangki '+ String.fromCharCode(kalib_sblm_alph) +' Sebelum Pengisisan BBM dari Transportir (liter)</label></div>';


        var th2 = document.createElement('th');
        th2.setAttribute('align', 'center');
        th2.innerHTML += '<div class="col-md-6"><input class="form-control" name="kalib_sblm['+kalib_sblm_ctr+']" type="text"></div>';

        isi_table.appendChild(row);
        row.appendChild(th1);
        row.appendChild(th2);

        kalib_sblm_ctr++;
        kalib_sblm_alph++;
    }
</script>

<script type="text/javascript">
    var kalib_stlh_ctr = 1;
    var kalib_stlh_alph = 66;
    function tambah_kalib_stlh(){
        var isi_table = document.getElementById('isi-table-kalib-stlh');

        var row = document.createElement('tr');

        var th1 = document.createElement('th');
        th1.setAttribute('align', 'center');
        th1.innerHTML += '<div class="col-md-10"><label>Hasil Pengukuran <em>Sounding</em> Tangki '+ String.fromCharCode(kalib_stlh_alph) +' Setelah Pengisisan BBM dari Transportir (liter)</label></div>';


        var th2 = document.createElement('th');
        th2.setAttribute('align', 'center');
        th2.innerHTML += '<div class="col-md-6"><input class="form-control" name="kalib_sblm['+kalib_stlh_ctr+']" type="text"></div>';

        isi_table.appendChild(row);
        row.appendChild(th1);
        row.appendChild(th2);

        kalib_stlh_ctr++;
        kalib_stlh_alph++;
    }
</script>

<script type="text/javascript">
    var litre_sblm_ctr = 1;
    var litre_sblm_alph = 66;
    function tambah_litre_sblm(){
        var isi_table = document.getElementById('isi-table-litre-sblm');

        var row = document.createElement('tr');
        row.innerHTML += '<th align="center">'+
                                    '<div class="col-md-10">'+
                                        '<label><em>Litre Observed</em> Tangki '+ String.fromCharCode(litre_sblm_alph) +' Sebelum Pengisian BBM (liter)</label>'+
                                    '</div>'+
                                '</th>'+
                                '<th align="center">'+
                                    '<div class="col-md-8">'+
                                        '<input class="form-control" name="vol_litre_sblm['+litre_sblm_ctr+']" type="text">'+
                                    '</div>'+
                                '<th align="center">'+
                                    '<div class="col-md-10">'+
                                        '<label><em>Suhu</em> Tangki '+ String.fromCharCode(litre_sblm_alph) +' Sebelum Pengisian BBM (°C)</label>'+
                                    '</div>'+
                                '</th>'+
                                '<th align="center">'+
                                    '<div class="col-md-8">'+
                                    '<input class="form-control" name="suhu_litre_sblm['+litre_sblm_ctr+']" type="text">'+
                                    '</div>'+
                                '</th>'+
                            '</th>';

        isi_table.appendChild(row);

        litre_sblm_ctr++;
        litre_sblm_alph++;
    }
</script>

<script type="text/javascript">
    var litre_stlh_ctr = 1;
    var litre_stlh_alph = 66;
    function tambah_litre_stlh(){
        var isi_table = document.getElementById('isi-table-litre-stlh');

        var row = document.createElement('tr');
        row.innerHTML += '<th align="center">'+
                                    '<div class="col-md-10">'+
                                        '<label><em>Litre Observed</em> Tangki '+ String.fromCharCode(litre_stlh_alph) +' Sebelum Pengisian BBM (liter)</label>'+
                                    '</div>'+
                                '</th>'+
                                '<th align="center">'+
                                    '<div class="col-md-8">'+
                                        '<input class="form-control" name="vol_litre_stlh['+litre_stlh_ctr+']" type="text">'+
                                    '</div>'+
                                '<th align="center">'+
                                    '<div class="col-md-10">'+
                                        '<label><em>Suhu</em> Tangki '+ String.fromCharCode(litre_stlh_alph) +' Sebelum Pengisian BBM (°C)</label>'+
                                    '</div>'+
                                '</th>'+
                                '<th align="center">'+
                                    '<div class="col-md-8">'+
                                    '<input class="form-control" name="suhu_litre_stlh['+litre_stlh_ctr+']" type="text">'+
                                    '</div>'+
                                '</th>'+
                            '</th>';

        isi_table.appendChild(row);

        litre_stlh_ctr++;
        litre_stlh_alph++;
    }
</script>

<script type="text/javascript">
    function select_tangki_sblm(id_tangki){
        
        document.getElementById('var-balok-sblm-'+id_tangki).removeAttribute('hidden', '');
        document.getElementById('var-tab-sblm-'+id_tangki).removeAttribute('hidden', '');

        var bentuk_tangki = document.getElementById('bentuktangki-sblm-'+id_tangki).value;
        if(bentuk_tangki == 'Tabung'){
            document.getElementById('var-balok-sblm-'+id_tangki).setAttribute('hidden', '');
        }else{
            document.getElementById('var-tab-sblm-'+id_tangki).setAttribute('hidden', '');
        }
    }
</script>

<script type="text/javascript">
    var mtm_sblm_ctr = 0;
    var mtm_sblm_alph = 65;
    
    function tambah_mtm_sblm(){
        var isi_table = document.getElementById('isi-table-mtm-sblm');        

        isi_table.innerHTML += '<thead>'+
                                    '<tr>'+
                                        '<div class="form-group">'+
                                            '<th align="center">'+
                                                '<label class="control-label">'+(mtm_sblm_ctr+1) +'.</label>'+
                                            '</th>'+
                                            '<th align="center">'+
                                                '<div class="col-md-10">'+
                                                    '<label>Menentukan Volume BBM Tangki '+ String.fromCharCode(mtm_sblm_alph) +' Menggunakan Rumus Matematis Sebelum Pengisisan BBM dari Transportir</label>'+
                                                '</div>'+
                                            '</th>'+

                                            '<th align="center">'+
                                                '<div class="col-md-10">'+                                            
                                                    '<label class="control-label" for="bentuktangki-sblm">Bentuk Tangki</label>'+
                                                    '<select class="form-control" name="bentuktangki-sblm['+mtm_sblm_ctr+']" id="bentuktangki-sblm-'+mtm_sblm_ctr+'" onchange="select_tangki_sblm('+mtm_sblm_ctr+')">'+
                                                        '<option value="--">--</option>'+
                                                        '<option value="Tabung">Tabung</option>'+
                                                        '<option value="Balok">Balok</option>'+
                                                    '</select>'+
                                                '</div>'+
                                            '</th>'+
                                        '</div>'+
                                    '</tr>'+
                                    '</thead>'+
                                    '<tbody hidden id="var-balok-sblm-'+mtm_sblm_ctr+'">'+
                                        '<tr>'+
                                            '<td></td>'+
                                            '<td>'+
                                                '<div class="col-md-4">'+
                                                    '<label class="control-label">Panjang </label>'+
                                                '</div>'+
                                            '</td>'+
                                            '<td>'+
                                                '<div class="col-md-8">'+
                                                    '<input type="text" class="form-control" name="bal_pjg['+mtm_sblm_ctr+']">'+
                                                '</div>'+
                                            '</td>'+
                                        '</tr>'+
                                         '<tr>'+
                                            '<td ></td>'+
                                            '<td>'+
                                                '<div class="col-md-4">'+
                                                    '<label class="control-label">Lebar (meter)</label>'+
                                                '</div>'+
                                            '</td>'+
                                            '<td>'+
                                                '<div class="col-md-8">'+
                                                    '<input type="text" class="form-control" name="bal_leb['+mtm_sblm_ctr+']">'+
                                                '</div>'+
                                            '</td>'+
                                        '</tr>'+
                                        '<tr>'+
                                            '<td></td>'+
                                            '<td>'+
                                                '<div class="col-md-4">'+
                                                    '<label class="control-label">Tinggi (meter)</label>'+
                                                '</div>'+
                                            '</td>'+
                                            '<td>'+
                                                '<div class="col-md-8">'+
                                                    '<input type="text" class="form-control" name="bal_ting['+mtm_sblm_ctr+']">'+
                                                '</div>'+
                                            '</td>'+
                                        '</tr>'+
                                    '</tbody>'+

                                    '<tbody hidden id="var-tab-sblm-'+mtm_sblm_ctr+'">'+                                    
                                        '<tr>'+
                                            '<td></td>'+
                                            '<td>'+
                                                '<div class="col-md-4">'+
                                                    '<label class="control-label">Tinggi (meter)</label>'+
                                                '</div>'+
                                            '</td>'+
                                            '<td>'+
                                                '<div class="col-md-8">'+
                                                    '<input type="text" class="form-control" name="tab_ting['+mtm_sblm_ctr+']">'+
                                                '</div>'+
                                            '</td>'+
                                        '</tr>'+
                                        '<tr>'+
                                            '<td></td>'+
                                            '<td>'+
                                                '<div class="col-md-4">'+
                                                    '<label class="control-label">Jari-jari (meter)</label>'+
                                                '</div>'+
                                            '</td>'+
                                            '<td>'+
                                                '<div class="col-md-8">'+
                                                    '<input type="text" class="form-control" name="tab_jar['+mtm_sblm_ctr+']">'+
                                                '</div>'+
                                            '</td>'+
                                        '</tr>'+
                                    '</tbody>';
        mtm_sblm_ctr++;
        mtm_sblm_alph++;
    }
</script>

<script type="text/javascript">
    function select_tangki_stlh(id_tangki){
        
        document.getElementById('var-balok-stlh-'+id_tangki).removeAttribute('hidden', '');
        document.getElementById('var-tab-stlh-'+id_tangki).removeAttribute('hidden', '');

        var bentuk_tangki = document.getElementById('bentuktangki-stlh-'+id_tangki).value;
        if(bentuk_tangki == 'Tabung'){
            document.getElementById('var-balok-stlh-'+id_tangki).setAttribute('hidden', '');
        }else{
            document.getElementById('var-tab-stlh-'+id_tangki).setAttribute('hidden', '');
        }
    }
</script>

<script type="text/javascript">
    var mtm_stlh_ctr = 0;
    var mtm_stlh_alph = 65;
    
    function tambah_mtm_stlh(){
        var isi_table = document.getElementById('isi-table-mtm-stlh');        

        isi_table.innerHTML += '<thead>'+
                                    '<tr>'+
                                        '<div class="form-group">'+
                                            '<th align="center">'+
                                                '<label class="control-label">'+(mtm_stlh_ctr+1) +'.</label>'+
                                            '</th>'+
                                            '<th align="center">'+
                                                '<div class="col-md-10">'+
                                                    '<label>Menentukan Volume BBM Tangki '+ String.fromCharCode(mtm_stlh_alph) +' Menggunakan Rumus Matematis Setelah Pengisisan BBM dari Transportir</label>'+
                                                '</div>'+
                                            '</th>'+

                                            '<th align="center">'+
                                                '<div class="col-md-10">'+                                            
                                                    '<label class="control-label" for="bentuktangki-stlh">Bentuk Tangki</label>'+
                                                    '<select class="form-control" name="bentuktangki-stlh['+mtm_stlh_ctr+']" id="bentuktangki-stlh-'+mtm_stlh_ctr+'" onchange="select_tangki_stlh('+mtm_stlh_ctr+')">'+
                                                        '<option value="--">--</option>'+
                                                        '<option value="Tabung">Tabung</option>'+
                                                        '<option value="Balok">Balok</option>'+
                                                    '</select>'+
                                                '</div>'+
                                            '</th>'+
                                        '</div>'+
                                    '</tr>'+
                                    '</thead>'+
                                    '<tbody hidden id="var-balok-stlh-'+mtm_stlh_ctr+'">'+
                                        '<tr>'+
                                            '<td></td>'+
                                            '<td>'+
                                                '<div class="col-md-4">'+
                                                    '<label class="control-label">Panjang </label>'+
                                                '</div>'+
                                            '</td>'+
                                            '<td>'+
                                                '<div class="col-md-8">'+
                                                    '<input type="text" class="form-control" name="bal_pjg['+mtm_stlh_ctr+']">'+
                                                '</div>'+
                                            '</td>'+
                                        '</tr>'+
                                         '<tr>'+
                                            '<td ></td>'+
                                            '<td>'+
                                                '<div class="col-md-4">'+
                                                    '<label class="control-label">Lebar (meter)</label>'+
                                                '</div>'+
                                            '</td>'+
                                            '<td>'+
                                                '<div class="col-md-8">'+
                                                    '<input type="text" class="form-control" name="bal_leb['+mtm_stlh_ctr+']">'+
                                                '</div>'+
                                            '</td>'+
                                        '</tr>'+
                                        '<tr>'+
                                            '<td></td>'+
                                            '<td>'+
                                                '<div class="col-md-4">'+
                                                    '<label class="control-label">Tinggi (meter)</label>'+
                                                '</div>'+
                                            '</td>'+
                                            '<td>'+
                                                '<div class="col-md-8">'+
                                                    '<input type="text" class="form-control" name="bal_ting['+mtm_stlh_ctr+']">'+
                                                '</div>'+
                                            '</td>'+
                                        '</tr>'+
                                    '</tbody>'+

                                    '<tbody hidden id="var-tab-stlh-'+mtm_stlh_ctr+'">'+                                    
                                        '<tr>'+
                                            '<td></td>'+
                                            '<td>'+
                                                '<div class="col-md-4">'+
                                                    '<label class="control-label">Tinggi (meter)</label>'+
                                                '</div>'+
                                            '</td>'+
                                            '<td>'+
                                                '<div class="col-md-8">'+
                                                    '<input type="text" class="form-control" name="tab_ting['+mtm_stlh_ctr+']">'+
                                                '</div>'+
                                            '</td>'+
                                        '</tr>'+
                                        '<tr>'+
                                            '<td></td>'+
                                            '<td>'+
                                                '<div class="col-md-4">'+
                                                    '<label class="control-label">Jari-jari (meter)</label>'+
                                                '</div>'+
                                            '</td>'+
                                            '<td>'+
                                                '<div class="col-md-8">'+
                                                    '<input type="text" class="form-control" name="tab_jar['+mtm_stlh_ctr+']">'+
                                                '</div>'+
                                            '</td>'+
                                        '</tr>'+
                                    '</tbody>';
        mtm_stlh_ctr++;
        mtm_stlh_alph++;
    }
</script>

<script type="text/javascript">
    function multiload(){
        tambah_mtm_sblm();
        tambah_mtm_stlh();
    }
</script>

<script type="text/javascript">
    upl_ctr = 2;
    upl_alph = 66;
    
    function tambah_upload(){        
        var isi_table = document.getElementById('isi-table-upload');

        isi_table.innerHTML += '<tr>'+
                                    '<th align="center">Tabel Kalibrasi Tangki '+ String.fromCharCode(upl_alph) +'</th>'+
                                    '<th align="center"><a href="" class="btn btn-primary"><span class="glyphicon glyphicon-cloud-upload"></span>Upload</a></th>'+
                                '</tr>';
        upl_ctr++;
        upl_alph++;
    }
</script>

</body>
</html>
