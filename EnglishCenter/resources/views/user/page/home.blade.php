@extends('user/layout/master')
@section('page_content')
<!-- Why Choose Us -->
<style type="text/css">
#intro{
	background-color:#FFF;
	margin-top: 20px;
	padding: 30px;
	border-radius: 5px;
	margin-bottom: 10px;
}
</style>
<div class="col-md-12" id="intro">
	<div class="col-md-8">
		<div id="about-slider" class="owl-carousel owl-theme">
			<img class="img-responsive" src="source_web/img/about1.jpg" alt="" style=" height:400px;">
			<img class="img-responsive" src="source_web/img/about2.jpg" alt="" style=" height:400px;">
			<img class="img-responsive" src="source_web/img/about1.jpg" alt="" style=" height:400px;">
			<img class="img-responsive" src="source_web/img/about2.jpg" alt="" style=" height:400px;">
		</div>
		<div class="col-md-12">
			<div class="col-md-8">
				<p>VIDEO GIẢNG DẠY</p>
				<iframe width="300" height="150" src="https://www.youtube.com/embed/Z4AhZLylP5o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>	
			</div>
			<div class="col-md-4">
				<h3 class="title">HỌC THỬ</h3>
				<button type="submit" style=" width: 100%; height: 100px" class="btn btn-primary">ĐĂNG KÍ HỌC THỬ</button>
			</div>	
		</div>
		
	</div>
	<div class="col-md-4">
		<div class="col-md-12">
			<h3 class="title">New Test</h3>
			<div class="widget-category">
				<a href="#">Web Design<span>(7)</span></a>
				<a href="#">Marketing<span>(142)</span></a>
				<a href="#">Web Development<span>(74)</span></a>
				<a href="#">Branding<span>(60)</span></a>
				<a href="#">Photography<span>(5)</span></a>
			</div>
		</div>
		<button type="submit" style=" width: 100%;" class="btn btn-danger">Trying Right Now</button>	
		<div class="col-md-12" style="margin-top:10px">
			<h3 class="title">LEARNING ENGLISH</h3>
			<div class="widget-post">
				<a href="#">
					<img src="source_web/img/post1.jpg" alt=""> How to learn english
				</a>
				<ul class="blog-meta">
					<li>Oct 18, 2017</li>
				</ul>
			</div>
			<div class="widget-post">
				<a href="#">
					<img src="source_web/img/post1.jpg" alt=""> Toiec one week
				</a>
				<ul class="blog-meta">
					<li>Oct 18, 2017</li>
				</ul>
			</div>
			<div class="widget-post">
				<a href="#">
					<img src="source_web/img/post1.jpg" alt=""> Challenge toeic
				</a>
				<ul class="blog-meta">
					<li>Oct 18, 2017</li>
				</ul>
			</div>
		</div>
	</div>
</div>

@endsection