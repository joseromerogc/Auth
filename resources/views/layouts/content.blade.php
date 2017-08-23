<div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">@yield('title-page')</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        {{-- <a href="https://wrappixel.com/templates/ampleadmin/" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Upgrade to Pro</a> --}}
                        @yield('breadcrumb')
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
    @yield('content')            
</div>    