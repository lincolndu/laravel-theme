<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>-::LOGIN Area::Laravel-Theme::-</title>
	<link rel="stylesheet" href="/css/signin.css">
	<link rel="stylesheet" href="/css/bootstrap.css">
</head>


<body>


    <div class="container">

    	<h3>{{Session::get('success_msg')}}</h3>

      <form class="form-signin" action="/auth/login" method="post">
      		{!! csrf_field() !!}

        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in </button>

        <div class="register">
      		<a href="/auth/register"><p>create account</p></a>
      	</div>
      </form>

      

    </div> <!-- /container -->

    </div> <!-- /container -->
</body>
</html>
