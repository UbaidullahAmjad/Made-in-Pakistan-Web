<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <style>
        .icon-font-size{
            font-size: 25px;
        }
        .icon-font-color{
            color: red;
        }
        </style>
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
    <link href="{{ asset('css/app.css') }}">
    <script src="https://media.twiliocdn.com/sdk/js/chat/v3.3/twilio-chat.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>@yield('title', 'Dashboard')</title>
    <link href="{{asset('vendor/theme-assets/fonts/simple-line-icons/style.min.css')}}">
    <link rel="apple-touch-icon" href="{{asset('vendor/theme-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('vendor/theme-assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/theme-assets/css/vendors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/theme-assets/vendors/css/charts/chartist.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/theme-assets/css/app-lite.css')}}">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/theme-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/theme-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/theme-assets/css/pages/dashboard-ecommerce.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/theme-assets/css/plugins/forms/switch.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/theme-assets/vendors/css/forms/icheck/icheck.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link href="{{asset('app-assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <script src="{{asset('vendor/theme-assets/vendors/js/forms/toggle/switchery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('vendor/theme-assets/vendors/js/forms/icheck/icheck.min.js')}}" type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
    

    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
@yield('css')
<!-- END Custom CSS-->




</head>
<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">
@include('sweetalert::alert')
@include('backend.customer.layout.partials.nav')
@include('backend.customer.layout.partials.left-nav')
<div class="app-content content" id="app">
    <div class="content-wrapper">
        <div class="content-wrapper-before" style="height: 120px!important;"></div>
        <div class="content-body">
            @yield('contents')
        </div>
    </div>
</div>
@include('backend.customer.layout.partials.footer')
<!-- BEGIN VENDOR JS-->
<script src="{{asset('vendor/theme-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="{{asset('vendor/theme-assets/vendors/js/charts/chartist.min.js')}}" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN CHAMELEON  JS-->
<script src="{{asset('vendor/theme-assets/js/core/app-menu-lite.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/theme-assets/js/core/app-lite.js')}}" type="text/javascript"></script>
<!-- END CHAMELEON  JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{asset('vendor/theme-assets/js/scripts/pages/dashboard-lite.js')}}" type="text/javascript"></script>
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script src="cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://media.twiliocdn.com/sdk/js/chat/v3.3/twilio-chat.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>
<script src="{{ asset('js/app.js') }}"></script>
<!-- END PAGE LEVEL JS-->
@yield('js')
</body>
</html>
