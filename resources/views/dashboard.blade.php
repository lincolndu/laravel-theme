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

			<h3 style="background:red;max-padding:10px;">{{Session::get('success_msg')}}</h3>

<!--New post submit area Start-->
				<div class="new_post">
					<h2>Please Add your New post</h2>
						<form action="/newpost" method="post" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="{{csrf_token()}}">

						<div><h4>your title here</h4></div>
						<input type="text" placeholder="type your title here" name="title">	

						<div><h4>Select your category here</h4></div>
						<select name="category" id="category">
							<option value="National">National</option>
							<option value="International">internation</option>
							<option value="IT">IT</option>
							<option value="Personal">Personal</option>
						</select>

						<div><h4>upload your photo here</h4></div>
						<input type="file" placeholder="select your photo here" name="photo">

						<div><h4>your post description here</h4></div>
						<textarea rows="6" name="description"></textarea>

						<div class=""></div>
						<input type="submit" value="publish" id="submit">
						</form>			
				</div>
<!--New post submit area End-->


<!--All posts show area-->
				<div class="all_post">
					<h2>Dashboard :: All post here</h2>
			        <table class="table table-bordered">
			                <th>Serial</th>
			                <th>Post title</th>
			                <th>Update</th>
			                <th>Delete</th>

			               <?php $num=1; ?>

			                @foreach($posts as $post)
			                <tr>
			                    <td>{{$num ++}}</td>
			                    <td><a href="/single/{{$post->id}}">{{$post->title}}</a></td>
			                    <td><a href="/edit/{{$post->id}}">Action</a></td>
			                    <td><a onclick="return jsDelete()" href="/delete/{{$post->id}}">Delete</a></td>
			                </tr>
			                 @endforeach
			                
			        </table>
				</div>
<!--All posts show area End-->

<!--Users Registration area-->
				<div class="register">
					<h2>Users Register area</h2>
						<form action="/register" method="post">

						<div><h4>type your username</h4></div>
						<input type="text" placeholder="user username" name="username">

						<div><h4>Select your user role</h4></div>
						<select name="userRole" id="role">
							<option value="">Administrator</option>
							<option value="">Admin</option>
							<option value="">Moderator</option>
							<option value="">Editor</option>
							<option value="">Subscriber</option>
						</select>

						<div><h4>type your first name</h4></div>
						<input type="text" placeholder="your first name" name="firstName">	

						<div><h4>type your last name</h4></div>
						<input type="text" placeholder="your last name" name="lastName">		

						<div><h4>type your valid Email</h4></div>
						<input type="email" placeholder="your email" name="email">		

						<div><h4>type your valid Password</h4></div>
						<input type="password" placeholder="type your password" name="password">	

						<div><h4>upload your photo</h4></div>
						<input type="file" placeholder="select your photo" name="photo">

						<div><h4>Say something about yourself</h4></div>
						<textarea name="about_user" id="about_user" cols="30" rows="6"></textarea>

						<div class=""></div>
						<input type="submit" value="Register" id="submit">

						</form>					
					</div>
<!--Users Registration Area End-->

<!--All users show area-->
					<div class="all_users">
					<h2>Dashboard :: All Author list</h2>
			        <table class="table table-bordered">
			                <th>Serial</th>
			                <th>Username</th>
			                <th>User Role</th>
			                <th>First Name</th>
			                <th>Last Name</th>
			                <th>Email</th>
			                <th>Photo</th>
			                <th>About</th>
			                <tr>
			                    <td>1</td>
			                    <td><a href="">mahmuddu</a></td>
			                    <td><a href="">Administrator</a></td>
			                    <td><a href="">first name</a></td>
			                    <td><a href="">last name</a></td>
			                    <td><a href="">Email</a></td>
			                    <td><a href="">Photo</a></td>
			                    <td><a href="">I love Bangladesh</a></td>
			                </tr> 
			        </table>
				</div>
<!--All users show area End-->

<!--All users show area-->
					<div class="edit_users">
					<h2>Dashboard :: All Author and Authors Actions here</h2>
			        <table class="table table-bordered">
			                <th>Serial</th>
			                <th>Username</th>
			                <th>User Role</th>
			                <th>First Name</th>
			                <th>Last Name</th>
			                <th>Email</th>
			                <th>Photo</th>
			                <th>About</th>
			                <th>Action</th>
			                <th>Action</th>
			                <tr>
			                    <td>1</td>
			                    <td><a href="">mahmuddu</a></td>
			                    <td><a href="">Administrator</a></td>
			                    <td><a href="">first name</a></td>
			                    <td><a href="">last name</a></td>
			                    <td><a href="">Email</a></td>
			                    <td><a href="">Photo</a></td>
			                    <td><a href="">I love Bangladesh</a></td>
			                    <td><a href="">Update</a></td>
			                    <td><a href="">Delete</a></td>
			                </tr> 
			        </table>
				</div>
<!--All users show area End-->


			</div>
		</div>
	</div>
</div>


	<script src="/js/script.js"></script>
</body>
</html>