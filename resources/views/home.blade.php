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

@endsection
