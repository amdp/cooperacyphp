<!DOCTYPE html>
<html class="nice-scroll" lang="en-US">
<head>
  <meta charset="UTF-8" />
  <link rel="profile" href="http://gmpg.org/xfn/11">

  <title>@yield('title')</title>

  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" href="images/favicon.ico">
  <link rel="apple-touch-icon-precomposed" href="images/cooperacy-logo-squared-iphone.png">
  <link rel="apple-touch-icon-precomposed" sizes="76x76" href="images/cooperacy-logo-squared-ipad.png">
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="images/cooperacy-logo-squared-iphone-retina.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/cooperacy-logo-squared-ipad-retina.png">

  <!-- STYLES -->
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel='stylesheet' id='contact-form-7-css'  href='css/contactform.css' type='text/css' media='all' />
  <link rel='stylesheet' id='ks-icons-css'  href='css/akt/icons.min.css' type='text/css' media='all' />
  <link rel='stylesheet' id='ks-style-css'  href='css/style.css' type='text/css' media='all' />
  <link rel='stylesheet' id='ks-responsive-css'  href='css/responsive.css' type='text/css' media='all' />
  <link rel='stylesheet' id='purple-skin-css'  href='css/akt/purple-style.css' type='text/css' media='all' />
  <link rel='stylesheet' id='ks-style-css'  href='css/home.css' type='text/css' media='all' />
  <link href="https://fonts.googleapis.com/css?family=Prompt:300" rel="stylesheet">
  <link rel='stylesheet' id='ks-style-css'  href='css/appstyle.css' type='text/css' media='all' />

  <!--SCRIPTS-->
  <script type='text/javascript' src='js/jquery/jquery.js'></script>
  <script type='text/javascript' src='js/jquery/jquery-migrate.min.js'></script>
  <script type='text/javascript' src='js/retina.js'></script><!-- RETINA LOGO -->
  <!--[if lt IE 8]><script type='text/javascript' src='js/json2.min.js'></script><![endif]-->
  <!--[if IE 8]><link rel="stylesheet" type="text/css" href="css/ie8.css" media="screen"><![endif]-->
</head>

<!-- Begin Body -->
<body class="page-template-default page page-id-239 pmpro-body-has-access ks-theme header_minimal head_mt headers head ks-responsive link_effect1 no-dropdown-border no-main-top-margin no-main-bottom-margin footer-normal sidebar-widget-icons">

<div id="wrap" class="clr">
@include('layouts.header')
  <div id="main" class="site-main clr">
@yield('content')
  </div><!-- #main -->
@include('layouts.footer')
</div><!-- #wrap -->

<div class="mob-overlay"></div>
<!-- Memberships powered by Paid Memberships Pro v1.8.13.-->
<div class="searchform-wrap mobile-search">
<form role="search" method="get" class="searchform" action="http://cooperacy.org/">
    <div class="search-field">
      <input type="search" name="s" autocomplete="off" placeholder="Search" />
    </div>
    <div class="search-button">
      <button type="submit" class="search-submit" value=""><i class="fa fa-search"></i></button>
    </div>
  </form>
</div>


<script type='text/javascript' src='js/cform/jquery.form.min.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpcf7 = {"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}}};
/* ]]> */
</script>
<script type='text/javascript' src='js/cform/cform.js'></script>
<script type='text/javascript' src='js/akt/retina.js'></script>
<script type='text/javascript' src='js/akt/smoothscroll.js'></script>
<script type='text/javascript' src='js/akt/akt-min.js'></script>
<script type='text/javascript' src='js/oldsite.js'></script>

</body>
</html>
