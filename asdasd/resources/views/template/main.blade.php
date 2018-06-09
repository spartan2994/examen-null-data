<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>@yield('title', 'Default') |Panel de Administración |</title>
  <link rel="stylesheet" href="{{asset('plugins/icons/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="{{asset('plugins/jquery/js/jquery.js')}}"></script>
  <script src="{{asset('js/app.js')}}"></script>
  <link href="https://datatables.yajrabox.com/css/app.css" rel="stylesheet">
   <link href="https://datatables.yajrabox.com/css/demo.css" rel="stylesheet">
   <link href="https://datatables.yajrabox.com/css/datatables.bootstrap.css" rel="stylesheet">
   <link href='https://fonts.googleapis.com/css?family=Lato:400,700,300|Open+Sans:400,600,700,800' rel='stylesheet'
         type='text/css'>
   <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css' rel='stylesheet'
         type='text/css'>
   <link rel="stylesheet" href="https://datatables.yajrabox.com/highlight/styles/zenburn.css">
   <!-- Extra JavaScript/CSS added manually in "Settings" tab -->
    <!-- Include jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <!-- Include Date Range Picker -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

!--formden.js communicates with FormDen server to validate fields and submit via AJAX -->
    <script type="text/javascript" src="https://formden.com/static/cdn/formden.js"></script>

    <!-- Special version of Bootstrap that is isolated to content wrapped in .bootstrap-iso -->
    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

    <!--Font Awesome (added because you use icons in your prepend/append)-->
    <link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

    <!-- Inline CSS based on choices in "Settings" tab -->
    <style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>


  



    <!-- Extra JavaScript/CSS added manually in "Settings" tab -->
    <!-- Include jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <!-- Include Date Range Picker -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

   <script src="https://datatables.yajrabox.com/highlight/highlight.pack.js"></script>
   <script>hljs.initHighlightingOnLoad();</script>
   <script type="text/javascript">
     $(document).ready(function() {
         $('#miboton').click(function() {
             // Recargo la página
             location.reload();
         });
     });
 </script>

    <script>
      $(document).ready(function(){
        var date_input=$('input[name="Date_birthday"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
          format: 'yyyy-mm-dd',
          container: container,
          todayHighlight: true,
          autoclose: true,
        })
      })
      $(document).ready(function(){
        var date_input=$('input[name="date2"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
          format: 'yyyy-mm-dd',
          container: container,
          todayHighlight: true,
          autoclose: true,
        })
      })
    </script>
</head>
<body>
<style type="text/css">

@media only screen and (max-width: 800px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

  /* Force table to not be like tables anymore */
  table, thead, tbody, th, td, tr {
    display: block;
  }

  /* Hide table headers (but not display: none;, for accessibility) */
  thead tr {
    position: absolute;
    top: -9999px;
    left: -9999px;
  }

  tr { border: 1px solid #ccc; }

  td {

    /* Behave  like a "row" */
    border: none;
    border-bottom: 1px solid #eee;
    position: relative;
    padding-left: 50%;
  }

  td:before {
      white-space: pre-wrap;
    /* Now like a table header */
    position: absolute;
    /* Top/left values mimic padding */
    top: 6px;
    left: 6px;
    width: 45%;
    padding-right: 10px;
    white-space: nowrap;
  }

  /*
  Label the data
  */
  td:nth-of-type(1):before { content: "Id"; }
  td:nth-of-type(2):before { content: "Nombre"; }
  td:nth-of-type(3):before { content: "Email"; }
  td:nth-of-type(4):before { content: "Tipo"; }
  td:nth-of-type(5):before { content: "Acciòn"; }




}

/* Smartphones (portrait and landscape) ----------- */
@media only screen
and (min-device-width : 320px)
and (max-device-width : 480px) {
  body {
    padding: 0;
    margin: 0;
    width: 320px; }
  }

/* iPads (portrait and landscape) ----------- */
@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
  body {
    width: 495px;
  }
}


  body{background:#1f2935;}

</style>
@include('template.partials.nav')
<section class="section-admin" style="padding-right: 5%; padding-bottom: 5%; padding-left: 5%;">
<div class="panel panel-default" >
  <div class="panel-heading">@yield('title')</div>
  <div class="panel-body">
    @include('flash::message')
    @include('template.partials.errors')
  @yield('content')
</div>
</div>
</div>

</section>
<footer class="admin-footer">

  <div class="panel-footer">Copyright© 2017 All rights reserved.</div>
</div>
</footer >

</body>

</html>
