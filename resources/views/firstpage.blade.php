@extends('layouts.firstpagelayout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-2">
                <div class="panel panel-default">
                    <a href="{{ url('/esurvei') }}"><div class="panel-heading"><b>E-Survey</b></div></a>                                        
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel panel-default">
                    <a href=""><div class="panel-heading"><b>Expert System Audit</b></div></a>                    
                </div>
            </div>
        </div>
        <div class="flex-center position-ref full-height">
                <div class="logo m-b-md">
                    <div class="image" align="center">
                        <img src="adminlte/dist/img/pln2.png" alt="PLNImage" height="550">
                    </div>
                </div>
        </div>
    </div>

@endsection
