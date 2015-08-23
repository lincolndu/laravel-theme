<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>-::Dashboard::Laravel-Theme::-</title>
	<link rel="stylesheet" href="/style.css">
	<link rel="stylesheet" href="/dashboard.css">
	<link rel="stylesheet" href="/css/bootstrap.css">
	<link rel="stylesheet" href="/css/bootstrap-responsive.css">
	<script src="/js/bootstrap.js"></script>
	<script src="/js/jquery-2.1.4.js"></script>

	<script>
		function jsDelete(){
			return confirm('are you sure to delete this ID ?');
		}
	</script>
</head>


<body>
<header class="header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="left_dash">
					<ul>
						<li class="home active">Home</li>
						<li class="n_post">new post</li>
						<li class="user_regist"><a href="/auth/register">Register</a></li>
						<li class="user_regist"><a href="/auth/logout">Logout</a></li>
						<li><a href="/">index</a></li>
						<li class="all_author menu_list">All Author</li>
						<li class="edit_author menu_list">Author Edit panel</li>	
						<li class="update_post menu_list">edit post</li>
						<li class="show_post menu_list">show post</li>										
					</ul>
				</div>
				<div class="right_dash">
					<ul>
						<li><a href="">
						<img src="/img/author.jpg"class="img-circle" id="author">
						</a></li>
						<li class="hide" ><a href="">author</a></li>
						<li class="hide"><a href="">setting</a></li>
						<li class="hide"><a href="">logout</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</header>

<div class="container">
	<div class="row">
		<div class="col-md-3 menu_area" id="sticky">
		<div class="menubar">
			<div class="author">
				<img src="/img/author.jpg" class="img-circle" alt="">
			</div>
			<div class="items">
				<ul>
					<li class="home">Dashboard</li>
					<li class="n_post">Add new post</li>
					<li class="home">All post</li>
					<li class="user_regist">Register</li>
					<li class="all_author">All Author</li>
					<li class="edit_author">Author Edit panel</li>
				</ul>
			</div>
			<div class="area_hide">
				<p>X</p>
			</div>
		</div>
		</div>
		
		<div class="col-md-9">
			<div class="main_post">


				<!-- resources/views/auth/login.blade.php -->

				<form method="POST" action="/auth/login">
				    {!! csrf_field() !!}

				    <div>
				        Email<input type="email" name="email" value="{{ old('email') }}">
				    </div>

				    <div>
				        Password <input type="password" name="password" id="password">
				    </div>

				    <div> <input type="checkbox" name="remember"> Remember Me </div>

				    <div> <button type="submit">Login</button></div>
				</form>


			</div>
		</div>
	</div>
</div>


	<script src="/js/script.js"></script>
</body>
</html>