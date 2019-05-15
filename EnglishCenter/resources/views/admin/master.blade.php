<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>English Center</title>

    <base href="{{asset('')}}">
    <!-- Bootstrap Core CSS -->
    <link href="source/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="source/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="source/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="source/dist/css/AdminLTE.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="source/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- DataTables CSS -->
    <link href="source/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
    <!-- DataTables Responsive CSS -->
    <link href="source/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
    <!-- My Css -->
    <link href="source/my_css/css.css" rel="stylesheet">
    <!-- JQuyery -->
    <script type="text/javascript" src="source/js/jquery-3.3.1.min.js" ></script>
    <!-- Ckeditor and ckfinder -->
    <script type="text/javascript" src="source/plugins/ckeditor/ckeditor.js" ></script>
    <script type="text/javascript" src="source/plugins/ckfinder/ckfinder.js" ></script>
    {!! Charts::assets() !!}
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        @include('admin/layout/header')
        @include('admin/layout/slidebar')
    </nav>
    <div id="page-wrapper">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="col-lg-4">
                    <h1 class="page-header">@yield('function')&nbsp </h1>
                </div>
                <div class="col-lg-8">
                    <h1 class="page-header">@yield('function2') &nbsp</h1>
                </div>
            </div>
            
            <div class="col-md-12">
                @if(session('flash_message'))
                <div class="alert alert-{{session('flash_level')}} ">
                    {{session('flash_message')}}
                </div>
                @endif
                @if(count($errors)>0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                    {{$error}}<br>
                    @endforeach
                </div>
                @endif
            </div>
            <div class="col-md-12">
                @yield('content')  
            </div>        
        </div>  
    </div>
</div>
@include('admin/layout/footer')
</div>
<!-- jQuery -->
<script src="source/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="source/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Metis Menu Plugin JavaScript -->
<script src="source/bower_components/metisMenu/dist/metisMenu.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="source/dist/js/sb-admin-2.js"></script>
<!-- DataTables JavaScript -->
<script src="source/bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
<script src="source/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
<!-- My script -->
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script src="source/js/myscript.js"></script>
</body>
</html>