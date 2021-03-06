<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>-::Register::Laravel-Theme::-</title>
	<link rel="stylesheet" href="/css/register.css">
	<link rel="stylesheet" href="/css/bootstrap.css">
</head>

<body>
<div class="container">

<!--Users Registration area-->
				<div class="register">
					<h2>User Register area</h2>
						<form action="/auth/register" method="post" enctype="multipart/form-data">
							{!! csrf_field() !!}
						<div></div>
						<input type="text" placeholder="Type your username" name="username" value="{{ old('username') }}" required>

						<div><h5>Select your role</h5></div>
						<select name="userRole" id="role" value="{{ old('userRole') }}" required>
							<option value="Administrator">Administrator</option>
							<option value="Admin">Admin</option>
							<option value="Moderator">Moderator</option>
							<option value="Editor">Editor</option>
							<option value="Subscriber">Subscriber</option>
						</select>

						<div></h4></div>
						<input type="text" placeholder="Type your first name" name="firstName" value="{{ old('firstName') }}" required>	

						<div></div>
						<input type="text" placeholder="Type your last name" name="lastName" value="{{ old('lastName') }}" required>		

						<div></div>
						<input type="email" placeholder="Type your email" name="email" value="{{ old('email') }}" required>		

						<div></div>
						<input type="password" placeholder="Type your password" name="password" required>	
		

						<div></div>
						<input type="password" placeholder="Again password" name="password_confirmation" required>	

						<div><h5>upload your iamge</h5></div>
						<input type="file" placeholder="select your photo" name="photo" required>

						<div><h4></h4></div>
						<textarea name="about_user" id="about_user" cols="30" rows="6" placeholder="Say something about yourself"></textarea>

						<div class=""></div>
						<input type="submit" value="Register" id="submit" class="btn btn-lg btn-primary btn-block">
						
						<div class="login">
							<a href="/auth/login"><h4>Already registered ?</h4></a>
						</div>
						
						</form>					
					</div>
<!--Users Registration Area End-->
</div>
</body>
</html>