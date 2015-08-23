<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> -:: Laravel Theme ::- </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/style.css">
	<link rel="stylesheet" href="/css/bootstrap.css">
	<script src="/js/bootstrap.js"></script>
    <script src="/js/jquery-2.1.4.js"></script>
    <script type="text/javascript" src="/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="/js/slider.js"></script>
    <script type="text/javascript" src="/js/jssor.js"></script>
    <script type="text/javascript" src="/js/jssor.slider.min.js"></script>
</head>
<body>


<!--Header part start-->
<header>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="logo">
					<a href="/"><img src="/img/logo.jpg" alt=""></a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="social_icon">
					<a href=""><img src="/img/facebook.jpg" alt="facebook"></a>
					<a href=""><img src="/img/twitter.jpg" alt="twitter"></a>
					<a href=""><img src="/img/google-plus.jpg" alt="google plus"></a>
				</div>
				<div class="search">
					<input type="text" name="search" id="search" value="" placeholder="Searching...">
					<input type="submit" value="" class="button-search">
				</div>
			</div>
		</div>
	</div>
</header>
<!--Header part End-->

<!--Main menu part start-->

<div class="container">
	<div class="row">
		<h3>{{Session::get('success_msg')}}</h3>
		<div class="col-md-12">
			<div class="nav">
				<ul>
					<li class="current"><a href="/">Home</a></li>
					<li><a href="">All post</a></li>
					<li><a href="">Contact</a></li>
					<li><a href="">National</a></li>
					<li><a href="">International</a></li>
					<li><a href="/gallery">Gallery</a></li>
					<li><a href="/blog">Blog</a></li>
					<li><a href="/auth/login">login</a></li>
					<li><a href="/dashboard">Dashboard</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--Main menu part End-->


@yield('content')

<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="copyright">
					<p>Copyright 2015. All rights reserved.</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="developer">
					<h2><a href="">LINCOLN MAHMUD</a></h2>
				</div>
			</div>
		</div>
	</div>
</footer>
	
</body>
</html>