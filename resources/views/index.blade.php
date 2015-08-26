@extends('app')

@section('content')


<div class="slider">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="image_slider">
					<!-- Jssor Slider Begin -->
					<!-- To move inline styles to css file/block, please specify a class name for each element. --> 
					<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 600px;
					    height: 300px; overflow: hidden;">

					    <!-- Loading Screen -->
					    <div u="loading" style="position: absolute; top: 0px; left: 0px;">
					        <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
					            background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
					        </div>
					        <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center;
					            top: 0px; left: 0px;width: 100%;height:100%;">
					        </div>
					    </div>
					    
					    <!-- Slides Container -->
					    <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px;
					        overflow: hidden;">
					        @foreach($slider as $post)
					        <div>
					            <a u=image href="/index.php/single/{{$post->id}}"><img src="{{'/photo/'.$post->photo}}" /></a>
					            <div u=caption t="*" class="captionOrange"  style="position:absolute; left:20px; top: 30px; width:300px; height:30px;"> 
					            <a href="/index.php/single/{{$post->id}}">{{str_limit($post->title, $limit=20, $end='')}}</a>
					            </div>
					        </div>
					        @endforeach
					    </div>
					    

					    <!-- bullet navigator container -->
					    <div u="navigator" class="jssorb01" style="bottom: 16px; right: 10px;">
					        <!-- bullet navigator item prototype -->
					        <div u="prototype"></div>
					    </div>


					    <!-- Arrow Left -->
					    <span u="arrowleft" class="jssora05l" style="top: 123px; left: 8px;">
					    </span>
					    <!-- Arrow Right -->
					    <span u="arrowright" class="jssora05r" style="top: 123px; right: 8px;">
					    </span>
					</div>
					<!-- Jssor Slider End -->

			</div>
			</div>
		</div>
	</div>
</div>
<article>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="article">
					 @foreach($posts as $post)
					<div class="post">
						<img src="{{'/photo/'.$post->photo}}" alt="">
						<h2><a href="/index.php/single/{{$post->id}}">{{$post->title}}</a></h2>
						<p><a href="">{{$post->author}}</a></p>	
						<p>{{str_limit($post->description, $limit=500)}}</p>
						<div class="more"><a href="">read more</a></div>
						
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