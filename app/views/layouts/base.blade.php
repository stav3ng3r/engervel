<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Engervel Framework</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/ace-fonts.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/ace.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/ace-skins.css') }}"/>

    <script src="{{ asset('assets/js/ace-extra.js') }}"></script>
 </head>
  
 <body class="no-skin">
    <div class="navbar" id="navbar">
     <!-- navbar goes here -->
    </div>
 
    <div class="main-container" id="main-container">
     <div class="sidebar responsive" id="sidebar">
      <!-- sidebar goes here -->
     </div>
  
     <div class="main-content">
      <div class="breadcrumbs">
       <!-- breadcrumbs goes here -->
      </div>
   
      <div class="page-content">
        <!-- setting box goes here if needed -->

        <div class="row">
          <div class="col-xs-12">
           <!-- page content goes here -->

          @section('body')
          @show


          </div><!-- /.col -->
        </div><!-- /.row -->

      </div><!-- /.page-content -->
     </div><!-- /.main-content -->
	 
     <!-- footer area -->

   </div><!-- /.main-container -->

   <!-- list of script files -->
   <script src="{{ asset('assets/js/jquery.js') }}"></script>
   <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
   <script src="{{ asset('assets/js/ace-extra.js') }}"></script>
   <script src="{{ asset('assets/js/ace.js') }}"></script>

 </body>
</html>