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
						<li class="hide"><a href="/author_update">setting</a></li>
						<li class="hide"><a href="/auth/logout">logout</a></li>
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
			                    <td><a href="">{{$authors->username}}</a></td>
			                    <td><a href="">{{$authors->userRole}}</a></td>
			                    <td><a href="">{{$authors->firstName}}</a></td>
			                    <td><a href="">{{$authors->lastName}}</a></td>
			                    <td><a href="">{{$authors->email}}</a></td>
			                    <td><a href="">Photo</a></td>
			                    <td><a href="">{{$authors->about_user}}</a></td>
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

			                <?php $a=1;?>

			                <tr>
			                    <td>{{$a++}}</td>
			                    <td><a href="">{{$authors->username}}</a></td>
			                    <td><a href="">{{$authors->userRole}}</a></td>
			                    <td><a href="">{{$authors->firstName}}</a></td>
			                    <td><a href="">{{$authors->lastName}}</a></td>
			                    <td><a href="">{{$authors->email}}</a></td>
			                    <td><img src="{{'/photo/'.$authors->photo}}"></td>
			                    <td><a href="">{{$authors->about_user}}</a></td>
			                    <td><a href="/author_update">Update</a></td>
			                    <td><a href="delete/{{$authors->id}}">Delete</a></td>
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