<!--New post Edit area Start-->
				<div class="edit_post">
					<h2>Edit your Post </h2>
						<form action="/index.php/edit/{{$id->id}}" method="post" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="{{csrf_token()}}">

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
						<input type="submit" value="publish" id="submit">
						</form>			
				</div>
<!--New post submit area End-->