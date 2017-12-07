@extends('layouts.headerfootereasauditor')

@section('content')

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>

        <li class="treeview">
            <a href="{{route('easauditor')}}">
                <i class="fa fa-home"></i>
                <span>Home</span>
            </a>
        </li>

        <li class="active treeview">
            <a href="{{route('identitas_auditor')}}">
                <i class="fa fa-files-o"></i>
                <span>Penerimaan BBM</span>
            </a>
            
        </li>
    </ul>
    </section>
    <!-- /.sidebar -->
    </aside>

    <div class="content-wrapper">
        @if(Session::has('flash_message'))
            <div class="alert alert-success">
                {{ Session::get('flash_message') }} dengan ID: <b>{{ session()->get('simpanid') }}</b>
            </div>
        @endif
        <section class="content-header">
            <h1>Penerimaan BBM</h1>
        </section>

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <div class="rootwizard">
        {!! Form::open(['route' => 'skkaperpostore']) !!}
        <section class="content">
            <div class="box box-default">
                
                <div class="box-header">
                  <div class="navbar" style="margin-bottom:0;">
                      <div class="navbar-inner">
                          <ul class="nav nav-pills">
                              <li class="active">
                                  <a data-toggle="tab" href="#tab1"><i class="fa fa-edit"></i>Identitas</a>
                              </li>
                              <li>
                                  <a data-toggle="tab" href="#tab2"><i class="fa fa-edit"></i>SOP dan BPM</a>
                              </li>
                              <li>
                                  <a data-toggle="tab" href="#tab3"><i class="fa fa-edit"></i>Tabel Kalibrasi Sebelum</a>
                              </li>
                              <li>
                                  <a data-toggle="tab" href="#tab4"><i class="fa fa-edit"></i>Rumus Matematis Sebelum</a>
                              </li>
                              <li>
                                  <a data-toggle="tab" href="#tab5"><i class="fa fa-edit"></i><em>Litre Standard</em> Sebelum</a>
                              </li>
                              <li>
                                  <a data-toggle="tab" href="#tab6"><i class="fa fa-edit"></i>Tabel Kalibrasi Setelah</a>
                              </li>
                              <li>
                                  <a data-toggle="tab" href="#tab7"><i class="fa fa-edit"></i>Rumus Matematis Setelah</a>
                              </li>
                              <li>
                                  <a data-toggle="tab" href="#tab8"><i class="fa fa-edit"></i><em>Litre Standard</em> Setelah</a>
                              </li>
                              <li>
                                  <a data-toggle="tab" href="#tab9"><i class="fa fa-edit"></i>Lain-Lain</a>
                              </li>
                              <li>
                                  <a data-toggle="tab" href="#tab10"><i class="fa fa-edit"></i><em>Checklist</em></a>
                              </li>
                              <li>
                                  <a data-toggle="tab" href="#tab11"><i class="fa fa-edit"></i><em>Upload</em></a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>

                <div class="box-body">
                    <div class="form-group">
                        <div class="tab-content">

                        <div id="tab1" class="tab-pane active">

                            <h1><label class="control-label" for="identitas"><strong>IDENTITAS</strong></label></h1>

                            <div class="form-group">
                                {!! Form::label('unitpln', 'Unit PLN yang Diaudit', ['class' => 'control-label']) !!}
                                {!! Form::select('up_audit', [
                                    '' => '--',
                                    'Direktorat Bisnis Regional Maluku dan Papua' => 'Direktorat Bisnis Regional Maluku dan Papua',
                                    'Wilayah Papua & Papua Barat' => 'Wilayah Papua & Papua Barat',
                                    'Wilayah Maluku & Maluku Utara'=> 'Wilayah Maluku & Maluku Utara',
                                    'Area Biak' => 'Area Biak',
                                    'Area Jayapura' => 'Area Jayapura',
                                    'Area Manokwari' => 'Area Manokwari',
                                    'Area Merauke' => 'Area Merauke',
                                    'Area Sorong' => 'Area Sorong',
                                    'Area Timika' => 'Area Timika',
                                    'Area Ambon' => 'Area Ambon',
                                    'Area Masohi' => 'Area Masohi',
                                    'Area Ternate' => 'Area Ternate',
                                    'Area Tual' => 'Area Tual',
                                    'Area Sofifi' => 'Area Sofifi',
                                    'Sektor Papua dan Papua Barat' => 'Sektor Papua dan Papua Barat',
                                    'Sektor Maluku' => 'Sektor Maluku',
                                    'UIP Maluku' => 'UIP Maluku',
                                    'UPP Pembangkit dan Jaringan Maluku' => 'UPP Pembangkit dan Jaringan Maluku',
                                    'UPP Pembangkit dan Jaringan Maluku Utara' => 'UPP Pembangkit dan Jaringan Maluku Utara',
                                    'UIP Papua' => 'UIP Papua',
                                    'UPP Pembangkit dan Jaringan Papua' => 'UPP Pembangkit dan Jaringan Papua',
                                    'UPP Pembangkit dan Jaringan Papua Barat' => 'UPP Pembangkit dan Jaringan Papua Barat',
                                ], null, ['class' => 'form-control select2']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('tahun', 'Tahun Dilaksanakannya Audit', ['class' => 'control-label']) !!}
                                {!! Form::select('tahun', [
                                    '' => '--',
                                    '2012' => '2012',
                                    '2013' => '2013',
                                    '2014' => '2014',
                                    '2015' => '2015',
                                    '2016' => '2016',
                                    '2017' => '2017',
                                    '2018' => '2018',
                                    '2019' => '2019',
                                    '2020' => '2020',
                                    '2021' => '2021',
                                    '2022' => '2022',
                                    '2023' => '2023',
                                    '2024' => '2024',
                                    '2025' => '2025',
                                    '2026' => '2026',
                                    '2027' => '2027',
                                    '2028' => '2028',
                                    '2029' => '2029',
                                    '2030' => '2030',
                                    '2031' => '2031',
                                    '2032' => '2032',
                                    '2033' => '2033',
                                    '2034' => '2034',
                                    '2035' => '2035',
                                    '2036' => '2036',
                                    '2037' => '2037',
                                    '2038' => '2038',
                                    '2039' => '2039',

                                ], null, ['class' => 'form-control select2']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('semester', 'Semester Dilaksanakannya Audit', ['class' => 'control-label']) !!}
                                {!! Form::select('tahun', [
                                    '' => '--',
                                    'Semester 1' => 'Semester 1',
                                    'Semester 2' => 'Semester 2',

                                ], null, ['class' => 'form-control select2']) !!}
                            </div>

                            <div class="btn-group" role="group" style="float: right;">
                                <a data-toggle="tab" href="#tab2" data-trigger="tab">
                                <button type="button" align="right" class="btn btn-primary btn-md maju">Lanjut</button>
                              </a>
                            </div>
                        </div>
                        <!-- end of tab1 -->

                        <div id="tab2" class="tab-pane">
                        <h1><label class="control-label" for="sopbbm">SOP dan BPM Penerimaan BBM</label></h1>

                            <div class="form-group">
                                <table class="table table-hover">
                                    <tbody>
                                        <tr>
                                            <th align="center">SOP Penerimaan BBM</th>
                                            <th align="center"><a href="" class="btn btn-primary"><span class="glyphicon glyphicon-cloud-download"></span>Download</a></th>
                                        </tr>
                                        <tr>
                                            <th align="center">BPM Penerimaan BBM Moda Transportasi Truk</th>
                                            <th align="center"><a href="" class="btn btn-primary"><span class="glyphicon glyphicon-cloud-download"></span>Download</a></th>
                                        </tr>
                                        <tr>
                                            <th align="center">BPM Penerimaan BBM Moda Transportasi Tongkang</th>
                                            <th align="center"><a href="" class="btn btn-primary"><span class="glyphicon glyphicon-cloud-download"></span>Download</a></th>
                                        </tr>
                                        <tr>
                                            <th align="center">BPM Penerimaan BBM Moda Transportasi Pipa</th>
                                            <th align="center"><a href="" class="btn btn-primary"><span class="glyphicon glyphicon-cloud-download"></span>Download</a></th>
                                        </tr>
                                        <tr>
                                            <th align="center">BPM Penerimaan BBM Moda Transportasi Campuran</th>
                                            <th align="center"><a href="" class="btn btn-primary"><span class="glyphicon glyphicon-cloud-download"></span>Download</a></th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="btn-group" role="group" style="float: right;">
                                <a data-toggle="tab" href="#tab1" data-trigger="tab">
                                   <button type="button" align="right" class="btn btn-warning btn-md mundur">Kembali</button>
                                </a>
                                <a data-toggle="tab" href="#tab3" data-trigger="tab">
                                   <button type="button" align="right" class="btn btn-primary btn-md maju">Lanjut</button>
                                </a>
                            </div>
                        </div>
                        <!-- end of tab2 -->

                        <div id="tab3" class="tab-pane">
                        <h1><label class="control-label" for="sopbbm">Menentukan Volume BBM Menggunakan Tabel Kalibrasi Sebelum Pengisian BBM dari Transportir</label></h1>

                            <div class="form-group">
                                <table class="table table-hover">
                                    <tbody id="isi-table-kalib-sblm">
                                        <tr>
                                            <th align="center">
                                            <div class="col-md-10">
                                                <label>Hasil Pengukuran <em>Sounding</em> Tangki A Sebelum Pengisisan BBM dari Transportir (liter)</label>
                                            </div>
                                            </th>
                                            <th align="center">
                                            <div class="col-md-4">
                                                {!! Form::text('kalib_sblm[0]', null, ['class' => 'form-control']) !!}
                                            </div>
                                            </th>
                                        </tr>                                    
                                    </tbody>
                                </table>
                                <div class="form-group">
                                    <th align="center">
                                        <button type="button" align="right" class="btn btn-success" onclick="tambah_kalib_sblm()">Tambah</button>
                                    </th>                                        
                                </div>
                            </div>

                            <div class="btn-group" role="group" style="float: right;">
                                <a data-toggle="tab" href="#tab2" data-trigger="tab">
                                   <button type="button" align="right" class="btn btn-warning btn-md mundur">Kembali</button>
                                </a>
                                <a data-toggle="tab" href="#tab4" data-trigger="tab">
                                   <button type="button" align="right" class="btn btn-primary btn-md maju">Lanjut</button>
                                </a>
                            </div>
                        </div>

                        <div id="tab4" class="tab-pane">
                        <h1><label class="control-label" for="sopbbm">Menentukan Volume BBM Menggunakan Rumus Matematis Sebelum Pengisian BBM dari Transportir</label></h1>                            
                            <div class="form-group">                            
                                <table class="table table-hover" id="isi-table-mtm-sblm">
                                                          
                                </table>
                                <div class="form-group">
                                    <th align="center">
                                        <button type="button" align="right" class="btn btn-success" onclick="tambah_mtm_sblm()">Tambah</button>
                                    </th>                                        
                                </div>
                            </div>

                            <div class="btn-group" role="group" style="float: right;">
                                <a data-toggle="tab" href="#tab3" data-trigger="tab">
                                   <button type="button" align="right" class="btn btn-warning btn-md mundur">Kembali</button>
                                </a>
                                <a data-toggle="tab" href="#tab5" data-trigger="tab">
                                   <button type="button" align="right" class="btn btn-primary btn-md maju">Lanjut</button>
                                </a>
                            </div>
                        </div>


                            <div id="tab5" class="tab-pane">
                                <h1><label class="control-label" for="sopbbm">Konversi ke <em>Litre Standard</em> Sebelum Pengisian BBM dari Transportir</label></h1>

                                <div class="form-group">
                                    <table class="table table-hover">
                                        <tbody id="isi-table-litre-sblm">
                                            <tr>
                                                    <th align="center">
                                                        <div class="col-md-10">
                                                            <label><em>Litre Observed</em> Tangki A Sebelum Pengisian BBM (liter)</label>
                                                        </div>
                                                    </th>
                                                    <th align="center">
                                                        <div class="col-md-4">
                                                            {!! Form::text('vol_litre_sblm[0]', null, ['class' => 'form-control']) !!}
                                                        </div>
                                                    <th align="center">
                                                        <div class="col-md-10">
                                                            <label><em>Suhu</em> Tangki A Sebelum Pengisian BBM (°C)</label>
                                                        </div>
                                                    </th>
                                                    <th align="center">
                                                        <div class="col-md-4">
                                                            {!! Form::text('suhu_litre_sblm[0]', null, ['class' => 'form-control']) !!}
                                                        </div>
                                                    </th>
                                                    </th>
                                            </tr>                                        
                                        </tbody>
                                    </table>
                                    <div class="form-group">
                                        <th align="center">
                                            <button type="button" align="right" class="btn btn-success" onclick="tambah_litre_sblm()">Tambah</button>
                                        </th>                                        
                                    </div>
                                </div>

                                <div class="btn-group" role="group" style="float: right;">
                                    <a data-toggle="tab" href="#tab4" data-trigger="tab">
                                        <button type="button" align="right" class="btn btn-warning btn-md mundur">Kembali</button>
                                    </a>
                                    <a data-toggle="tab" href="#tab6" data-trigger="tab">
                                        <button type="button" align="right" class="btn btn-primary btn-md maju">Lanjut</button>
                                    </a>
                                </div>
                            </div>


                            <div id="tab6" class="tab-pane">
                                <h1><label class="control-label" for="sopbbm">Menentukan Volume BBM Menggunakan Tabel Kalibrasi Setelah Pengisian BBM dari Transportir</label></h1>

                                <div class="form-group">
                                    <table class="table table-hover">
                                        <tbody id="isi-table-kalib-stlh">
                                            <tr>
                                                <th align="center">
                                                <div class="col-md-10">
                                                    <label>Hasil Pengukuran <em>Sounding</em> Tangki A Setelah Pengisisan BBM dari Transportir (liter)</label>
                                                </div>
                                                </th>
                                                <th align="center">
                                                <div class="col-md-4">
                                                    {!! Form::text('kalib_stlh[0]', null, ['class' => 'form-control']) !!}
                                                </div>
                                                </th>
                                            </tr>                                    
                                        </tbody>
                                    </table>
                                    <div class="form-group">
                                        <th align="center">
                                            <button type="button" align="right" class="btn btn-success" onclick="tambah_kalib_stlh()">Tambah</button>
                                        </th>                                        
                                    </div>
                                </div>

                                <div class="btn-group" role="group" style="float: right;">
                                    <a data-toggle="tab" href="#tab5" data-trigger="tab">
                                        <button type="button" align="right" class="btn btn-warning btn-md mundur">Kembali</button>
                                    </a>
                                    <a data-toggle="tab" href="#tab7" data-trigger="tab">
                                        <button type="button" align="right" class="btn btn-primary btn-md maju">Lanjut</button>
                                    </a>
                                </div>
                            </div>



                            <div id="tab7" class="tab-pane">
                                <h1><label class="control-label" for="sopbbm">Menentukan Volume BBM Menggunakan Rumus Matematis Setelah Pengisian BBM dari Transportir</label></h1>

                                <div class="form-group">
                                    <table class="table table-hover" id="isi-table-mtm-stlh">
                                                          
                                    </table>
                                    <div class="form-group">
                                        <th align="center">
                                            <button type="button" align="right" class="btn btn-success" onclick="tambah_mtm_stlh()">Tambah</button>
                                        </th>                                        
                                    </div>
                                </div>

                                <div class="btn-group" role="group" style="float: right;">
                                    <a data-toggle="tab" href="#tab6" data-trigger="tab">
                                        <button type="button" align="right" class="btn btn-warning btn-md mundur">Kembali</button>
                                    </a>
                                    <a data-toggle="tab" href="#tab8" data-trigger="tab">
                                        <button type="button" align="right" class="btn btn-primary btn-md maju">Lanjut</button>
                                    </a>
                                </div>
                            </div>

                            <div id="tab8" class="tab-pane">
                                <h1><label class="control-label" for="sopbbm">Konversi ke <em>Litre Standard</em> Setelah Pengisian BBM dari Transportir</label></h1>

                                <div class="form-group">
                                    <table class="table table-hover">
                                        <tbody id="isi-table-litre-stlh">
                                            <tr>
                                                    <th align="center">
                                                        <div class="col-md-10">
                                                            <label><em>Litre Observed</em> Tangki A Setelah Pengisian BBM (liter)</label>
                                                        </div>
                                                    </th>
                                                    <th align="center">
                                                        <div class="col-md-4">
                                                            {!! Form::text('vol_litre_stlh[0]', null, ['class' => 'form-control']) !!}
                                                        </div>
                                                    <th align="center">
                                                        <div class="col-md-10">
                                                            <label><em>Suhu</em> Tangki A Setelah Pengisian BBM (°C)</label>
                                                        </div>
                                                    </th>
                                                    <th align="center">
                                                        <div class="col-md-4">
                                                            {!! Form::text('suhu_litre_stlh[0]', null, ['class' => 'form-control']) !!}
                                                        </div>
                                                    </th>
                                                    </th>
                                            </tr>                                        
                                        </tbody>
                                    </table>
                                    <div class="form-group">
                                        <th align="center">
                                            <button type="button" align="right" class="btn btn-success" onclick="tambah_litre_stlh()">Tambah</button>
                                        </th>                                        
                                    </div>
                                </div>

                                <div class="btn-group" role="group" style="float: right;">
                                    <a data-toggle="tab" href="#tab7" data-trigger="tab">
                                        <button type="button" align="right" class="btn btn-warning btn-md mundur">Kembali</button>
                                    </a>
                                    <a data-toggle="tab" href="#tab9" data-trigger="tab">
                                        <button type="button" align="right" class="btn btn-primary btn-md maju">Lanjut</button>
                                    </a>
                                </div>
                            </div>


                            <div id="tab9" class="tab-pane">
                                <h1><label class="control-label" for="sopbbm">Lain-Lain</label></h1>

                                        <div class="form-group">
                                            <table class="table table-hover">
                                                <tbody>

                                                <tr>
                                                    <div class="form-group">
                                                        <th align="center">
                                                            <div class="col-md-10">
                                                                <label>Nomor <em>Delivery Order</em> (DO)</label>
                                                            </div>
                                                        </th>
                                                        <th align="center">
                                                            <div class="col-md-4">
                                                                {!! Form::text('ta_sblm', null, ['class' => 'form-control']) !!}
                                                            </div>
                                                        </th>
                                                    </div>
                                                </tr>

                                                <tr>
                                                    <div class="form-group">
                                                        <th align="center">
                                                            <div class="col-md-10">
                                                                <label>Kuantitas (liter)</label>
                                                            </div>
                                                        </th>
                                                        <th align="center">
                                                            <div class="col-md-4">
                                                                {!! Form::text('ta_sblm', null, ['class' => 'form-control']) !!}
                                                            </div>
                                                        </th>
                                                    </div>
                                                </tr>

                                                <tr>
                                                    <div class="form-group">
                                                        <th align="center">
                                                            <div class="col-md-10">
                                                                <label>Tanggal, Bulan, dan Tahun Periksa <em>(dd/mm/yyyy)</em></label>
                                                            </div>
                                                        </th>
                                                        <th align="center">
                                                            <div class="col-md-4">
                                                                {!! Form::date('ta_sblm', null, ['class' => 'form-control']) !!}
                                                            </div>
                                                        </th>
                                                    </div>
                                                </tr>

                                                <tr>
                                                    <div class="form-group">
                                                        <th align="center">
                                                            <div class="col-md-10">
                                                                <label>Tanggal, Bulan, dan Tahun Laporan <em>(dd/mm/yyyy)</em></label>
                                                            </div>
                                                        </th>
                                                        <th align="center">
                                                            <div class="col-md-4">
                                                                {!! Form::date('ta_sblm', null, ['class' => 'form-control']) !!}
                                                            </div>
                                                        </th>
                                                    </div>
                                                </tr>

                                                <tr>
                                                    <div class="form-group">
                                                        <th align="center">
                                                            <div class="col-md-10">
                                                                <label>Lokasi Periksa</label>
                                                            </div>
                                                        </th>
                                                        <th align="center">
                                                            <div class="col-md-4">
                                                                {!! Form::text('ta_sblm', null, ['class' => 'form-control']) !!}
                                                            </div>
                                                        </th>
                                                    </div>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                <div class="btn-group" role="group" style="float: right;">
                                    <a data-toggle="tab" href="#tab8" data-trigger="tab">
                                        <button type="button" align="right" class="btn btn-warning btn-md mundur">Kembali</button>
                                    </a>
                                    <a data-toggle="tab" href="#tab10" data-trigger="tab">
                                        <button type="button" align="right" class="btn btn-primary btn-md maju">Lanjut</button>
                                    </a>
                                </div>
                            </div>


                            <div id="tab10" class="tab-pane">
                                <h1><label class="control-label" for="sopbbm"><em>Checklist</em></label></h1>

                                <div class="form-group">
                                    <table class="table table-hover">
                                        <tbody>

                                        <tr>
                                            <div class="form-group">
                                                <th align="center">
                                                    <div class="col-md-10">
                                                        <label>Alat ukur terkalibrasi?</label>
                                                    </div>
                                                </th>
                                                <th align="center">
                                                        <input type="checkbox" checked="checked">
                                                        <span class="checkmark"></span>
                                                </th>
                                            </div>
                                        </tr>

                                        <tr>
                                            <div class="form-group">
                                                <th align="center">
                                                    <div class="col-md-10">
                                                        <label><em>Surveyor</em>?</label>
                                                    </div>
                                                </th>
                                                <th align="center">
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </th>
                                            </div>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="btn-group" role="group" style="float: right;">
                                    <a data-toggle="tab" href="#tab9" data-trigger="tab">
                                        <button type="button" align="right" class="btn btn-warning btn-md mundur">Kembali</button>
                                    </a>
                                    <a data-toggle="tab" href="#tab11" data-trigger="tab">
                                        <button type="button" align="right" class="btn btn-primary btn-md maju">Lanjut</button>
                                    </a>
                                </div>
                            </div>

                            <div id="tab11" class="tab-pane">
                                <h1><label class="control-label" for="sopbbm"><em>Upload</em></label></h1>

                                <div class="form-group">
                                    <table class="table table-hover">
                                        <tbody id="isi-table-upload">
                                            <tr>
                                                <th align="center">Tabel Kalibrasi Tangki A</th>
                                                <th align="center"><a href="" class="btn btn-primary"><span class="glyphicon glyphicon-cloud-upload"></span>Upload</a></th>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="form-group">
                                        <th align="center">
                                            <button type="button" align="right" class="btn btn-success" onclick="tambah_upload()">Tambah</button>
                                        </th>                                        
                                    </div>
                                </div>



                                <div class="btn-group" role="group" style="float: right;">
                                    <a data-toggle="tab" href="#tab10" data-trigger="tab">
                                        <button type="button" align="right" class="btn btn-warning btn-md mundur">Kembali</button>
                                    </a>
                                </div>
                            </div>


                        </div>
                    <!-- end of tab-content -->
                </div>
                </div>

                <!-- <div class="box-footer">
                    <div class="form-group">
                        <div class="pull-right">
                            {!! Form::submit('Lanjut', ['class' => 'btn btn-primary']) !!}
                        </div>
                    </div>
                </div> -->
            </div>
        </section>
        {!! Form::close() !!}
        </div>
    </div>
@endsection