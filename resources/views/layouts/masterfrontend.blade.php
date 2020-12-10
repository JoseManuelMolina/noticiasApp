<html lang="en"><head>
  <meta charset="utf-8">
  <title>Pratt - Free Bootstrap App Landing Page Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{url('assets/frontend/img/favicon.png')}}" rel="icon">
  <link href="{{url('assets/frontend/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic|Raleway:400,300,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{url('assets/frontend/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{url('assets/frontend/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
    Template Name: Pratt
    Template URL: https://templatemag.com/pratt-app-landing-page-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-offset="0" data-target="#navigation">

  <!-- Fixed navbar -->
  <div id="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand smothscroll" href="#home"><b>Pratt</b></a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#home" class="smothscroll">Home</a></li>
          <li class=""><a href="#desc" class="smothscroll">Description</a></li>
          <li class=""><a href="#showcase" class="smothscroll">Showcase</a></li>
          <li class=""><a href="#contact" class="smothscroll">Contact</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>

  <section id="home" name="home">
    <div id="headerwrap">
      <div class="container">
        @yield('content')
      </div>
      <!--/ .container -->
    </div>
    <!--/ #headerwrap -->
  </section>


  


  


  
  <div id="copyrights">
    <div class="container">
      <p>
        © Copyrights <strong>Pratt</strong>. All Rights Reserved 
      </p>
      <div class="credits">
        <!--
          You are NOT allowed to delete the credit link to TemplateMag with free version.
          You can delete the credit link only if you bought the pro version.
          Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/pratt-app-landing-page-template/
          Licensing information: https://templatemag.com/license/
        -->
        Created with Pratt template by <a href="https://templatemag.com/">TemplateMag</a>
      </div>
    </div>
  </div>

  <!-- JavaScript Libraries -->
  <script src="{{url('assets/frontend/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{url('assets/frontend/lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{url('assets/frontend/lib/php-mail-form/validate.js')}}"></script>
  <script src="{{url('assets/frontend/lib/easing/easing.min.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{url('assets/frontend/js/main.js')}}"></script>



</body></html>