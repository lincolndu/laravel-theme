@extends('app')
@section('content')


<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="nav">
				<ul>
					<li class="current"><a href="/index.php">Home</a></li>
					<li><a href="">All post</a></li>
					<li><a href="">Contact</a></li>
					<li><a href="">National</a></li>
					<li><a href="">International</a></li>
					<li><a href="">Gallery</a></li>
					<li><a href="">login</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>



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