<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <title> @yield('title')</title>
    <!-- Custom CSS -->
    <link href="{{asset('/')}}back_end/editor.css" type="text/css" rel="stylesheet"/>
    <link href="{{asset('/')}}back_end/assets/libs/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet" />
    <link href="{{asset('/')}}back_end/assets/extra-libs/calendar/calendar.css" rel="stylesheet" />
    <link href="{{asset('/')}}back_end/dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<div id="main-wrapper" data-sidebartype="mini-sidebar">
    @include("admin.include.header")
    @include("admin.include.left_sidebar")
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        @yield('body')
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->

         @include("admin.include.footer")
    </div>
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{asset('/')}}back_end/assets/libs/jquery/dist/jquery.min.js"></script>
<script src="{{asset('/')}}back_end/dist/js/jquery.ui.touch-punch-improved.js"></script>
<script src="{{asset('/')}}back_end/dist/js/jquery-ui.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('/')}}back_end/assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="{{asset('/')}}back_end/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{asset('/')}}back_end/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="{{asset('/')}}back_end/assets/extra-libs/sparkline/sparkline.js"></script>
<script src="{{asset('/')}}back_end/editor.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>
<!--Wave Effects -->
<script src="{{asset('/')}}back_end/dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="{{asset('/')}}back_end/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="{{asset('/')}}back_end/dist/js/custom.min.js"></script>
<!-- this page js -->
<script src="{{asset('/')}}back_end/assets/libs/moment/min/moment.min.js"></script>
<script src="../../assets/libs/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="{{asset('/')}}back_end/dist/js/pages/calendar/cal-init.js"></script>
<script type="text/javascript">
    $(document).ready( function() {
        ClassicEditor.create( document.querySelector( '#editor' ) )
        .then( editor => {
                console.log( editor );
        } )
        .catch( error => {
                console.error( error );
        } );                   
    });
</script>

</body>

</html>
