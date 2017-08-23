@extends('layouts.admin')

@section('title')
Home | SiteName
@endsection

@section('title-page')
Dashboard |
@endsection


@section('breadcrumb')
<ol class="breadcrumb">
                            <li><a href="#">@yield('title-page')</a></li>
</ol>
@endsection

@section('content')
<div class="row">
                <!--quick info section -->
                <div class="col-lg-3">
                    <div class="alert alert-danger text-center">
                        <i class="fa fa-user fa-3x"></i>&nbsp;<b> {{$cantidadusuarios}}</b> {{trans_choice('pluralization.usuariosregistrados', $cantidadusuarios)}}
                    </div>
                </div>
</div>
@endsection

@endsection
