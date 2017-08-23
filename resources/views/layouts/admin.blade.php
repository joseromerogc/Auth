<!DOCTYPE html>
<html>

<head>
    @include('layouts.head')
    @yield('head')
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        @include('headers.topbar')
        @include('sidebars.left')
        
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            @include('layouts.content')    
        </div>
            @include('layouts.footer')    
        @include('layouts.javascript')    
    </div>
</body>

<script type="text/javascript">
     $(document).ready(function () {
     "use strict";

@foreach (['danger', 'warning', 'success', 'info'] as $msg)
    @if(Session::has('alert-' . $msg))

    
     // toat popup js
     $.toast({
         heading: 'Message',
         text: "{{ Session::get('alert-' . $msg) }}",
         position: 'top-right',
         loaderBg: '#fff',
         icon: '{{ $msg }}',
         hideAfter: 6500,
         stack: 6
     });
 
    @endif
@endforeach

});
</script>

</html>
