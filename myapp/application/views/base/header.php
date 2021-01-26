<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?><!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Landing Page - Start Bootstrap Theme</title>
  
	<!-- Bootstrap core -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

	<!-- Custom fonts for this template -->
	<link href="/assets/theme/landing-page/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
	<link href="/assets/theme/landing-page/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

	<!-- Custom styles for this template -->
	<link href="/assets/theme/landing-page/css/landing-page.min.css" rel="stylesheet">

</head>

<body>

	<!-- Navigation -->
	<nav class="navbar navbar-light bg-light static-top">
	<div class="container">
		<a class="navbar-brand" href="#">[TRAVELAHR]</a>
		<!-- <a class="btn btn-primary" href="#">Sign In</a> -->
	</div>
	</nav>

	<!-- Masthead -->
	<header class="masthead text-white text-center">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
		<div class="col-xl-9 mx-auto">
			<h1 class="mb-5">Lets travel! And enjoy!</h1>
		</div>
		<div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
			<form action="/travel-to" method="get">
			<div class="form-row">
				<div class="col-12 col-md-7 mb-2 mb-md-0">
					<!-- <input type="email" class="form-control form-control-xlg" placeholder="Where do you want to go?"> -->
					<input type="hidden" name="country" value="JP">
					<select name="city" class="form-control form-control-lg">
						<option value="Kyoto">Kyoto</option>
						<option value="Nagoya">Nagoya</option>
						<option value="Osaka">Osaka</option>
						<option value="Sapporo">Sapporo</option>
						<option value="Tokyo">Tokyo</option>
						<option value="Yokohama">Yokohama</option>
					</select>
				</div>
				<div class="col-12 col-md-5">
					<button type="submit" class="btn btn-block btn-lg btn-primary">Go!</button>
				</div>
			</div>
			</form>
		</div>
		</div>
	</div>
	</header>

  