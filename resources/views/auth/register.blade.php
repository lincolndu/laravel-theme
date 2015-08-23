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
						<li class="home active"><a href="/dashboard">Home</a></li>
						<li class="n_post">new post</li>
						<li class="user_regist">Register</li>
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


<!--Users Registration area-->
				<div class="register">
					<h2>Users Register area</h2>
						<form action="/auth/register" method="post" enctype="multipart/form-data">
							{!! csrf_field() !!}
						<div><h4>type your username</h4></div>
						<input type="text" placeholder="user username" name="username" value="{{ old('username') }}">

						<div><h4>Select your user role</h4></div>
						<select name="userRole" id="role" value="{{ old('userRole') }}">
							<option value="Administrator">Administrator</option>
							<option value="Admin">Admin</option>
							<option value="Moderator">Moderator</option>
							<option value="Editor">Editor</option>
							<option value="Subscriber">Subscriber</option>
						</select>

						<div><h4>type your first name</h4></div>
						<input type="text" placeholder="your first name" name="firstName" value="{{ old('firstName') }}">	

						<div><h4>type your last name</h4></div>
						<input type="text" placeholder="your last name" name="lastName" value="{{ old('lastName') }}">		

						<div><h4>type your valid Email</h4></div>
						<input type="email" placeholder="your email" name="email" value="{{ old('email') }}">		

						<div><h4>type your valid Password</h4></div>
						<input type="password" placeholder="type your password" name="password">	
		

						<div><h4>type your valid Password</h4></div>
						<input type="password" placeholder="again your password" name="password_confirmation">	

						<div><h4>upload your photo</h4></div>
						<input type="file" placeholder="select your photo" name="photo">

						<div><h4>Say something about yourself</h4></div>
						<textarea name="about_user" id="about_user" cols="30" rows="6"></textarea>

						<div class=""></div>
						<input type="submit" value="Register" id="submit">

						</form>					
					</div>
<!--Users Registration Area End-->





			</div>
		</div>
	</div>
</div>


	<script src="/js/script.js"></script>
</body>
</html>