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
                                  <a data-toggle="tab" href="#tab1"><i class="fa fa-user"></i> Identitas</a>
                              </li>
                              <li>
                                  <a data-toggle="tab" href="#tab2"><i class="fa fa-tint"></i> Penerimaan BBM</a>
                              </li>
                              <li>
                                  <a data-toggle="tab" href="#tab3"><i class="fa fa-align-left"></i> Kalibrasi Sebelum</a>
                              </li>
                              <li>
                                  <a data-toggle="tab" href="#tab4"><i class="fa fa-edit"></i> Matematis Sesudah</a>
                              </li>
                              <li>
                                  <a data-toggle="tab" href="#tab5"><i class="fa fa-calendar"></i> Konversi Sebelum</a>
                              </li>
                              <li>
                                  <a data-toggle="tab" href="#tab6"><i class="fa fa-car"></i> Kalibrasi Sesudah</a>
                              </li>
                              <li>
                                  <a data-toggle="tab" href="#tab7"><i class="fa fa-user"></i> Matematis Sesudah</a>
                              </li>
                              <li>
                                  <a data-toggle="tab" href="#ta8"><i class="fa fa-edit"></i> Konversi Sesudah</a>
                              </li>
                              <li>
                                  <a data-toggle="tab" href="#tab9"><i class="fa fa-user"></i> Lain-lain</a>
                              </li>
                              <li>
                                  <a data-toggle="tab" href="#tab10"><i class="fa fa-edit"></i> Upload & Checklist</a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>

                <div class="box-body">
                    <div class="form-group">
                        <div class="tab-content">

                        <div id="tab1" class="tab-pane active">
                        <label class="control-label" for="identitas">Identitas</label>

                            <div class="form-group">
                                {!! Form::label('unitpln', 'Unit PLN', ['class' => 'control-label']) !!}
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
                                {!! Form::label('tahun', 'Tahun', ['class' => 'control-label']) !!}
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
                                {!! Form::label('semester', 'Semester', ['class' => 'control-label']) !!}
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
                        <label class="control-label" for="sopbbm">SOP dan BPM Penerimaan BBM</label>

                            <div class="form-group">
                                <table class="table table-hover">
                                    <tbody>
                                    <tr>
                                        <th>ID Auditee</th>
                                        <th>Unit PLN</th>
                                        <th>Tahun</th>
                                        <th></th>
                                    </tr>
                                    <?php for ($i=0; $i<5; $i++){ ?>
                                        <tr>
                                            <td>Dummy</td>
                                            <td>Dummy</td>
                                            <td>Dummy</td>
                                            <td>
                                                <a href="" class="btn btn-primary"><span class="glyphicon glyphicon-cloud-download"></span>Download</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>

                            <div class="btn-group" role="group" style="float: right;">
                                <a data-toggle="tab" href="#tab1" data-trigger="tab">
                                   <button type="button" align="right" class="btn btn-info btn-md mundur">Kembali</button>
                                </a>
                                <a data-toggle="tab" href="#tab3" data-trigger="tab">
                                   <button type="button" align="right" class="btn btn-primary btn-md maju">Lanjut</button>
                                </a>
                            </div>
                        </div>
                        <!-- end of tab2 -->

                        <div id="tab3" class="tab-pane">
                        <label class="control-label" for="sopbbm">Menentukan Volume BBM Menggunakan Tabel Kalibrasi Sebelum Pengisian BBM dari Transportir</label>
                            <div class="form-group">                                
                                <div class="col-md-10">
                                    <label>Hasil Pengukuran Sounding Tangki A Sebelum Pengisisan BBM dari Transportir (dalam satuan meter)</label>
                                </div>
                                <div class="col-md-4">
                                    {!! Form::text('ta_sblm', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group">                                
                                <div class="col-md-10">
                                    <label>Hasil Pengukuran Sounding Tangki B Sebelum Pengisisan BBM dari Transportir (dalam satuan meter)</label>
                                </div>
                                <div class="col-md-4">
                                    {!! Form::text('tb_sblm', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>   
                            <div class="form-group">                                
                                <div class="col-md-10">
                                    <label>Hasil Pengukuran Sounding Tangki C Sebelum Pengisisan BBM dari Transportir (dalam satuan meter)</label>
                                </div>
                                <div class="col-md-4">
                                    {!! Form::text('tc_sblm', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>             

                            <div class="btn-group" role="group" style="float: right;">
                                <a data-toggle="tab" href="#tab2" data-trigger="tab">
                                   <button type="button" align="right" class="btn btn-info btn-md mundur">Kembali</button>
                                </a>
                                <a data-toggle="tab" href="#tab4" data-trigger="tab">
                                   <button type="button" align="right" class="btn btn-primary btn-md maju">Lanjut</button>
                                </a>
                            </div>
                        </div>
                        <!-- end of tab3 -->

                        <div id="tab4" class="tab-pane">
                        <label class="control-label" for="sopbbm">Menentukan Volume BBM Menggunakan Rumus Matematis Sebelum Pengisian BBM dari Transportir</label>
                            <ul>                                
                                <div class="form-group">
                                    <li>
                                        <label>Menentukan Volume BBM Tangki A Menggunakan Rumus Matematis Sebelum Pengisisan BBM dari Transportir</label>
                                        <div class="form-group">
                                            {!! Form::label('jenistangki', 'Jenis Tangki', ['class' => 'control-label']) !!}
                                            </br>{!! Form::select('jenistangki', [
                                                '' => '--',
                                                'Tabung' => 'Tabung',
                                                'Balok' => 'Balok',

                                            ], null, ['class' => 'form-control select2']) !!}                                            
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('jenistangki', 'Jari-jari Tangki', ['class' => 'control-label']) !!}
                                            {!! Form::text('ta_sblm', null, ['class' => 'form-control']) !!}                                        
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('jenistangki', 'Tinggi Tangki', ['class' => 'control-label']) !!}
                                            {!! Form::text('ta_sblm', null, ['class' => 'form-control']) !!}                                        
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('jenistangki', 'Panjang Tangki', ['class' => 'control-label']) !!}
                                            {!! Form::text('ta_sblm', null, ['class' => 'form-control']) !!}                                        
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('jenistangki', 'Lebar Tangki', ['class' => 'control-label']) !!}
                                            {!! Form::text('ta_sblm', null, ['class' => 'form-control']) !!}                                        
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('jenistangki', 'Tinggi Tangki', ['class' => 'control-label']) !!}
                                            {!! Form::text('ta_sblm', null, ['class' => 'form-control']) !!}                                        
                                        </div>
                                    </li>
                                </div>

                                <div class="form-group">
                                    <li>
                                        <label>Menentukan Volume BBM Tangki B Menggunakan Rumus Matematis Sebelum Pengisisan BBM dari Transportir</label>
                                        <div class="form-group">
                                            {!! Form::label('jenistangki', 'Jenis Tangki', ['class' => 'control-label']) !!}
                                            </br>{!! Form::select('jenistangki', [
                                                '' => '--',
                                                'Tabung' => 'Tabung',
                                                'Balok' => 'Balok',

                                            ], null, ['class' => 'form-control select2']) !!}                                            
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('jenistangki', 'Jari-jari Tangki', ['class' => 'control-label']) !!}
                                            {!! Form::text('ta_sblm', null, ['class' => 'form-control']) !!}                                        
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('jenistangki', 'Tinggi Tangki', ['class' => 'control-label']) !!}
                                            {!! Form::text('ta_sblm', null, ['class' => 'form-control']) !!}                                        
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('jenistangki', 'Panjang Tangki', ['class' => 'control-label']) !!}
                                            {!! Form::text('ta_sblm', null, ['class' => 'form-control']) !!}                                        
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('jenistangki', 'Lebar Tangki', ['class' => 'control-label']) !!}
                                            {!! Form::text('ta_sblm', null, ['class' => 'form-control']) !!}                                        
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('jenistangki', 'Tinggi Tangki', ['class' => 'control-label']) !!}
                                            {!! Form::text('ta_sblm', null, ['class' => 'form-control']) !!}                                        
                                        </div>
                                    </li>                                
                                </div>   

                                <div class="form-group"> 
                                    <li>
                                        <label>Menentukan Volume BBM Tangki C Menggunakan Rumus Matematis Sebelum Pengisisan BBM dari Transportir</label>
                                        <div class="form-group">
                                            {!! Form::label('jenistangki', 'Jenis Tangki', ['class' => 'control-label']) !!}
                                            </br>{!! Form::select('jenistangki', [
                                                '' => '--',
                                                'Tabung' => 'Tabung',
                                                'Balok' => 'Balok',

                                            ], null, ['class' => 'form-control select2']) !!}                                            
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('jenistangki', 'Jari-jari Tangki', ['class' => 'control-label']) !!}
                                            {!! Form::text('ta_sblm', null, ['class' => 'form-control']) !!}                                        
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('jenistangki', 'Tinggi Tangki', ['class' => 'control-label']) !!}
                                            {!! Form::text('ta_sblm', null, ['class' => 'form-control']) !!}                                        
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('jenistangki', 'Panjang Tangki', ['class' => 'control-label']) !!}
                                            {!! Form::text('ta_sblm', null, ['class' => 'form-control']) !!}                                        
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('jenistangki', 'Lebar Tangki', ['class' => 'control-label']) !!}
                                            {!! Form::text('ta_sblm', null, ['class' => 'form-control']) !!}                                        
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('jenistangki', 'Tinggi Tangki', ['class' => 'control-label']) !!}
                                            {!! Form::text('ta_sblm', null, ['class' => 'form-control']) !!}                                        
                                        </div>
                                    </li>
                                </div>
                            </ul>
                            
                            <div class="btn-group" role="group" style="float: right;">
                                <a data-toggle="tab" href="#tab3" data-trigger="tab">
                                   <button type="button" align="right" class="btn btn-info btn-md mundur">Kembali</button>
                                </a>
                                <a data-toggle="tab" href="#tab5" data-trigger="tab">
                                   <button type="button" align="right" class="btn btn-primary btn-md maju">Lanjut</button>
                                </a>
                            </div>
                        </div>
                        <!-- end of tab4 -->

                        <div id="tab5" class="tab-pane">
                        <label class="control-label" for="sopbbm">Konversi ke Litre Standard Sebelum Pengisian BBM dari Transportir</label>
                            <div class="form-group">                                
                                <div class="col-md-10">
                                    <label>Litre Observed (dalam satuan Liter)</label>
                                </div>
                                <div class="col-md-4">
                                    {!! Form::text('ta_sblm', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group">                                
                                <div class="col-md-10">
                                    <label>Suhu (dalam satuan derajat Celcius)</label>
                                </div>
                                <div class="col-md-4">
                                    {!! Form::text('tb_sblm', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>           

                            <div class="btn-group" role="group" style="float: right;">
                                <a data-toggle="tab" href="#tab4" data-trigger="tab">
                                   <button type="button" align="right" class="btn btn-info btn-md mundur">Kembali</button>
                                </a>
                                <a data-toggle="tab" href="#tab6" data-trigger="tab">
                                   <button type="button" align="right" class="btn btn-primary btn-md maju">Lanjut</button>
                                </a>
                            </div>
                        </div>
                        <!-- end of tab5 -->

                        <div id="tab6" class="tab-pane">
                        <label class="control-label" for="sopbbm">Menentukan Volume BBM Menggunakan Tabel Kalibrasi Setelah Pengisian BBM dari Transportir</label>
                            <div class="form-group">                                
                                <div class="col-md-10">
                                    <label>Hasil Pengukuran Sounding Tangki A Setelah Pengisisan BBM dari Transportir (dalam satuan meter)</label>
                                </div>
                                <div class="col-md-4">
                                    {!! Form::text('ta_sblm', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group">                                
                                <div class="col-md-10">
                                    <label>Hasil Pengukuran Sounding Tangki B Setelah Pengisisan BBM dari Transportir (dalam satuan meter)</label>
                                </div>
                                <div class="col-md-4">
                                    {!! Form::text('tb_sblm', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>   
                            <div class="form-group">                                
                                <div class="col-md-10">
                                    <label>Hasil Pengukuran Sounding Tangki C Setelah Pengisisan BBM dari Transportir (dalam satuan meter)</label>
                                </div>
                                <div class="col-md-4">
                                    {!! Form::text('tc_sblm', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>           

                            <div class="btn-group" role="group" style="float: right;">
                                <a data-toggle="tab" href="#tab5" data-trigger="tab">
                                   <button type="button" align="right" class="btn btn-info btn-md mundur">Kembali</button>
                                </a>
                                <a data-toggle="tab" href="#tab7" data-trigger="tab">
                                   <button type="button" align="right" class="btn btn-primary btn-md maju">Lanjut</button>
                                </a>
                            </div>
                        </div>
                        <!-- end of tab6 -->

                        <div id="tab7" class="tab-pane">
                        <label class="control-label" for="sopbbm">Menentukan Volume BBM Menggunakan Rumus Matematis Setelah Pengisian BBM dari Transportir</label>
                            <ul>                                
                                <div class="form-group">
                                    <li>
                                        <label>Menentukan Volume BBM Tangki A Menggunakan Rumus Matematis Setelah Pengisisan BBM dari Transportir</label>
                                        <div class="form-group">
                                            {!! Form::label('jenistangki', 'Jenis Tangki', ['class' => 'control-label']) !!}
                                            </br>{!! Form::select('jenistangki', [
                                                '' => '--',
                                                'Tabung' => 'Tabung',
                                                'Balok' => 'Balok',

                                            ], null, ['class' => 'form-control select2']) !!}                                            
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('jenistangki', 'Jari-jari Tangki', ['class' => 'control-label']) !!}
                                            {!! Form::text('ta_sblm', null, ['class' => 'form-control']) !!}                                        
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('jenistangki', 'Tinggi Tangki', ['class' => 'control-label']) !!}
                                            {!! Form::text('ta_sblm', null, ['class' => 'form-control']) !!}                                        
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('jenistangki', 'Panjang Tangki', ['class' => 'control-label']) !!}
                                            {!! Form::text('ta_sblm', null, ['class' => 'form-control']) !!}                                        
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('jenistangki', 'Lebar Tangki', ['class' => 'control-label']) !!}
                                            {!! Form::text('ta_sblm', null, ['class' => 'form-control']) !!}                                        
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('jenistangki', 'Tinggi Tangki', ['class' => 'control-label']) !!}
                                            {!! Form::text('ta_sblm', null, ['class' => 'form-control']) !!}                                        
                                        </div>
                                    </li>
                                </div>

                                <div class="form-group">
                                    <li>
                                        <label>Menentukan Volume BBM Tangki B Menggunakan Rumus Matematis Setelah Pengisisan BBM dari Transportir</label>
                                        <div class="form-group">
                                            {!! Form::label('jenistangki', 'Jenis Tangki', ['class' => 'control-label']) !!}
                                            </br>{!! Form::select('jenistangki', [
                                                '' => '--',
                                                'Tabung' => 'Tabung',
                                                'Balok' => 'Balok',

                                            ], null, ['class' => 'form-control select2']) !!}                                            
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('jenistangki', 'Jari-jari Tangki', ['class' => 'control-label']) !!}
                                            {!! Form::text('ta_sblm', null, ['class' => 'form-control']) !!}                                        
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('jenistangki', 'Tinggi Tangki', ['class' => 'control-label']) !!}
                                            {!! Form::text('ta_sblm', null, ['class' => 'form-control']) !!}                                        
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('jenistangki', 'Panjang Tangki', ['class' => 'control-label']) !!}
                                            {!! Form::text('ta_sblm', null, ['class' => 'form-control']) !!}                                        
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('jenistangki', 'Lebar Tangki', ['class' => 'control-label']) !!}
                                            {!! Form::text('ta_sblm', null, ['class' => 'form-control']) !!}                                        
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('jenistangki', 'Tinggi Tangki', ['class' => 'control-label']) !!}
                                            {!! Form::text('ta_sblm', null, ['class' => 'form-control']) !!}                                        
                                        </div>
                                    </li>                                
                                </div>   

                                <div class="form-group"> 
                                    <li>
                                        <label>Menentukan Volume BBM Tangki C Menggunakan Rumus Matematis Setelah Pengisisan BBM dari Transportir</label>
                                        <div class="form-group">
                                            {!! Form::label('jenistangki', 'Jenis Tangki', ['class' => 'control-label']) !!}
                                            </br>{!! Form::select('jenistangki', [
                                                '' => '--',
                                                'Tabung' => 'Tabung',
                                                'Balok' => 'Balok',

                                            ], null, ['class' => 'form-control select2']) !!}                                            
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('jenistangki', 'Jari-jari Tangki', ['class' => 'control-label']) !!}
                                            {!! Form::text('ta_sblm', null, ['class' => 'form-control']) !!}                                        
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('jenistangki', 'Tinggi Tangki', ['class' => 'control-label']) !!}
                                            {!! Form::text('ta_sblm', null, ['class' => 'form-control']) !!}                                        
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('jenistangki', 'Panjang Tangki', ['class' => 'control-label']) !!}
                                            {!! Form::text('ta_sblm', null, ['class' => 'form-control']) !!}                                        
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('jenistangki', 'Lebar Tangki', ['class' => 'control-label']) !!}
                                            {!! Form::text('ta_sblm', null, ['class' => 'form-control']) !!}                                        
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('jenistangki', 'Tinggi Tangki', ['class' => 'control-label']) !!}
                                            {!! Form::text('ta_sblm', null, ['class' => 'form-control']) !!}                                        
                                        </div>
                                    </li>
                                </div>
                            </ul>
                            
                            <div class="btn-group" role="group" style="float: right;">
                                <a data-toggle="tab" href="#tab6" data-trigger="tab">
                                   <button type="button" align="right" class="btn btn-info btn-md mundur">Kembali</button>
                                </a>
                                <a data-toggle="tab" href="#tab8" data-trigger="tab">
                                   <button type="button" align="right" class="btn btn-primary btn-md maju">Lanjut</button>
                                </a>
                            </div>
                        </div>
                        <!-- end of tab7 -->

                        <div id="tab8" class="tab-pane">
                        <label class="control-label" for="sopbbm">Konversi ke Litre Standard Setelah Pengisian BBM dari Transportir</label>
                            <div class="form-group">                                
                                <div class="col-md-10">
                                    <label>Litre Observed (dalam satuan Liter)</label>
                                </div>
                                <div class="col-md-4">
                                    {!! Form::text('ta_sblm', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group">                                
                                <div class="col-md-10">
                                    <label>Suhu (dalam satuan derajat Celcius)</label>
                                </div>
                                <div class="col-md-4">
                                    {!! Form::text('tb_sblm', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>           

                            <div class="btn-group" role="group" style="float: right;">
                                <a data-toggle="tab" href="#tab7" data-trigger="tab">
                                   <button type="button" align="right" class="btn btn-info btn-md mundur">Kembali</button>
                                </a>
                                <a data-toggle="tab" href="#tab9" data-trigger="tab">
                                   <button type="button" align="right" class="btn btn-primary btn-md maju">Lanjut</button>
                                </a>
                            </div>
                        </div>
                        <!-- end of tab8 -->

                        <div id="tab9" class="tab-pane">
                        <label class="control-label" for="sopbbm">Lain-lain</label>
                            <div class="form-group">                                
                                <div class="col-md-10">
                                    <label>Nomor DO</label>
                                </div>
                                <div class="col-md-4">
                                    {!! Form::text('ta_sblm', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group">                                
                                <div class="col-md-10">
                                    <label>Kuantitas</label>
                                </div>
                                <div class="col-md-4">
                                    {!! Form::text('tb_sblm', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>

                            <div class="form-group">                                
                                <div class="col-md-10">
                                    <label>Tanggal, Bulan, dan Tahun Periksa</label>
                                </div>
                                <div class="col-md-4">
                                    {!! Form::date('tb_sblm', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>           

                            <div class="form-group">                                
                                <div class="col-md-10">
                                    <label>Tanggal, Bulan, dan Tahun Laporan</label>
                                </div>
                                <div class="col-md-4">
                                    {!! Form::date('tb_sblm', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>

                            <div class="form-group">                                
                                <div class="col-md-10">
                                    <label>Lokasi Periksa</label>
                                </div>
                                <div class="col-md-4">
                                    {!! Form::text('tb_sblm', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>

                            <div class="btn-group" role="group" style="float: right;">
                                <a data-toggle="tab" href="#tab8" data-trigger="tab">
                                   <button type="button" align="right" class="btn btn-info btn-md mundur">Kembali</button>
                                </a>
                                <a data-toggle="tab" href="#tab10" data-trigger="tab">
                                   <button type="button" align="right" class="btn btn-primary btn-md maju">Lanjut</button>
                                </a>
                            </div>
                        </div>
                        <!-- end of tab9 -->

                        <div id="tab10" class="tab-pane">
                        <label class="control-label" for="sopbbm">Lain-lain</label>
                            <div class="form-group">                                
                                <div class="col-md-10">
                                    <label>Tabel Kalibrasi</label>
                                </div>
                                <div class="col-md-4">
                                    {!! Form::text('ta_sblm', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group">                                
                                <div class="col-md-10">
                                    <label>Alat Ukur Terkalibrasi</label>
                                </div>
                                <div class="col-md-4">
                                    {!! Form::text('tb_sblm', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>

                            <div class="form-group">                                
                                <div class="col-md-10">
                                    <label>Surveyor</label>
                                </div>
                                <div class="col-md-4">
                                    {!! Form::text('tb_sblm', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>                                       

                            <div class="btn-group" role="group" style="float: right;">
                                <a data-toggle="tab" href="#tab9" data-trigger="tab">
                                   <button type="button" align="right" class="btn btn-info btn-md mundur">Kembali</button>
                                </a>
                            </div>
                        </div>
                        <!-- end of tab10 -->

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
