@extends('app')
@section('content')

<article>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="article">
					<div class="single_post">
							<a href=""><img src="{{'/photo/'.$posts->photo}}" alt=""></a>
						<h2><a href="">{{$posts->title}}</a></h2>
						<p>{{$posts->description}}</p>
						
					</div>
					<div class="show_comment">
						@foreach($comments as $comment)
							<h3>Name : {{$comment->name}}</h3>
							<p>Comments : {{$comment->comment}}</p>
						@endforeach
					</div>
			<!--Comments Section-->
					<div class="comment">
						<form action="/index.php/comments" method="post">
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<input type="hidden" name="post_id" value="{{$posts->id}}">
							Your Name: <input type="text" name="name" id="" placeholder="Type your name">
							Your Email: <input type="email" name="email" id="" placeholder="Type your email">
							Website: <input type="website" name="website" id="" placeholder="type your valid website">
							Comment: <textarea name="comment" id="" cols="30" rows="10"></textarea>
							<input type="submit" value="Submit">
						</form>
					</div>

				</div>
			</div>


			<div class="col-md-4">
				<div class="right_sidebar">
					<div class="add">
						<h2><a href="">Lorem ipsum</a></h2>
						<img src="/img/post.jpg" alt="">
					</div>
					<div class="social">
						<h2><a href="">Latest News</a></h2>
						@foreach($post as $post)
						<ul>
							<li><a href="/index.php/single/{{$post->id}}">{{$post->title}}</a></li>
						</ul>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</article>

@endsection