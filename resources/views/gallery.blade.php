@extends('app')

@section('content')


<article>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="article">
					 @foreach($posts as $post)
					<div class="post gallery">
						<img src="{{'/photo/'.$post->photo}}" alt="">
						<h2><a href="/index.php/single/{{$post->id}}">{{str_limit($post->title, $limit=30, $end='')}}</a></h2>						
					</div>
					@endforeach

				
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
						<ul>
						@foreach($posts as $post)
							<li><a href="/index.php/single/{{$post->id}}">{{$post->title}}</a></li>
						@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</article>


@endsection