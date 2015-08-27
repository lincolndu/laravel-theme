<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>-::Post Edit::- Laravel-Theme::-</title>
	<link rel="stylesheet" href="/css/edit.css">
	<link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
<!--New post Edit area Start-->
				<div class="edit_post">
					<h2>Edit your Post </h2>
						<form action="/index.php/edit/{{$id->id}}" method="post" enctype="multipart/form-data">
							{!! csrf_field() !!}
						<div><h4>Edit your title</h4></div>
						<input type="text" value="{{$id->title}}" name="title">	

						<div><h4>Select your category here</h4></div>
						<select name="category" id="category">
							<option value="">National</option>
							<option value="">internation</option>
							<option value="">IT</option>
							<option value="">personal</option>
						</select>

						<div><h4>You can change your photo again here</h4></div>
						<input type="file" value="{{$id->photo}}" name="photo">

						<div><h4>Edit your post</h4></div>
						<textarea rows="6" name="description">{{$id->description}}</textarea>

						<div class=""></div>
						<input type="submit" value="submit now" id="submit">
						</form>			
				</div>
<!--New post submit area End-->
			</div>
		</div>
	</div>
	
</body>
</html>

