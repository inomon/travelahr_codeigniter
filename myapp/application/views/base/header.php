<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Header for the base template, we have here initialized the HTML5 meta data
 * We've also included here all the necessary JavaScript files & CSS stylesheets: bootstrap, google fonts, bootstrap theme, jquery
 *
 * On this template, we always declare the fixed navbar, for usage this also contains the dropdown list for the location search
 */
?><!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?php echo !isset($pageName) ? 'Home' : $pageName ?> - Lets go, travelAHHR!</title>

    <!-- Bootstrap core -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

	<!-- Custom fonts for this template -->
	<link href="/assets/theme/landing-page/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
	<link href="/assets/theme/landing-page/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:wght@600&family=Indie+Flower&display=swap" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="/assets/theme/landing-page/css/landing-page.css" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/"><span class="prefix-brand">travel</span>AHHR</a>

            <?php if ( !(isset($showFooterForm) && $showFooterForm) ): ?>
                <div class="col-4">
                    <?php $this->load->view('base/places_form', ['selectedCity' => $selectedCity??null]) ?>
                </div>
            <?php else: ?>
                <!-- to hold the space -->
                <div class="form-row"></div>
            <?php endif; ?>
        </div>
    </nav>
