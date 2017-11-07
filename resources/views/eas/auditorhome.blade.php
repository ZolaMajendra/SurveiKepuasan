@extends('layouts.headerfootereasauditor')

@section('content')

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>

        <li class="active treeview">
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

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-body" align="center">
                                You are logged in as a <strong>EAS AUDITOR</strong>!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
