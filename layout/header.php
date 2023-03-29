<?php session_start();

ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);

$Lanuage = "en";
if(isset($_COOKIE['lang'])){
    $Lanuage = $_COOKIE['lang'];
}
require_once("lang/".$Lanuage.".php");



?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <title>Wareed</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Wareed">
        <meta name="author" content="Wareed">
        <link rel="shortcut icon" href="assets/images/favicon.png" />

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- The styles -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" >
        <link href="assets/css/animate.css" rel="stylesheet" type="text/css" >
        <link href="assets/css/owl.carousel.css" rel="stylesheet" type="text/css" >
        <link href="assets/css/venobox.css" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="assets/css/styles.css?v=0.5" />
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.jqueryui.min.css"/>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <body> 

        <div id="preloader">
            <span class="margin-bottom"><img src="assets/images/loader.gif" alt="" /></span>
        </div>

        <!--  HEADER -->

        <header class="main-header clearfix" data-sticky_header="true">


            <section class="header-wrapper navgiation-wrapper">

                <?php require_once("layout/navbar.php"); ?>

            </section>

        </header> 