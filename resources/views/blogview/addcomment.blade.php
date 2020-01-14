

<!DOCTYPE html>
<html lang="en">
<head>
<title>Blog  | Home</title>    
<link href="{{asset('public/front/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" media="all" /><!-- fontawesome -->     
<link href="{{asset('public/front/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all" /><!-- Bootstrap stylesheet -->
<link href="{{asset('public/front/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="{{asset('public/front/css/flexslider.css')}}" type="text/css" media="screen" property="" />
<!-- stylesheet -->

		<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav">
					<li><a class="btn btn-primary" href="#">Home</a></li>
					<li><a  class="btn btn-info" href="#">About</a></li>
					<li class="active"><a  class="btn btn-danger"   href="{{url('/logout')}}">LOG OUT</a></li>
					</div>
		</header>
	<!-- //header -->
	<!-- top-header and slider -->
	<div class="w3-slider">	
	
	<!-- //top-header and slider -->
	<div class="container">
		<div class="banner-btm-agile">
		<!-- //btm-wthree-left -->
			<div class="col-md-9 btm-wthree-left">
				
				@yield("container")
				
			</div>

			<main  class="bg-dark">
			<header class="jumbotron"><h1 class="text-center">COMMENT BOX </h1></header>
			
			<section class="container">
            {{Form::open(array('url'=>'req') )}}
				
					<div class="form-group">
						{{Form::label('COMMENT','',['class'=>'text-primary'])}}
						{{Form::textarea('cmt','',['placeholder'=>' Hey... say something!','class'=>'form-control'])}}
						<label id="lnerror" class="text-danger"></label>
						{{Form::submit('ADD COMMENT',['class'=>'btn btn-info'])}} 
					 
					</div>

				{!! Form::close() !!}

			</section>
		</main>











<!-- footer -->
<div class="footer-agile-info">
		<div class="container">
			<div class="col-md-4 w3layouts-footer">
				<h3>Contact Information</h3>
					<p><span><i class="fa fa-map-marker" aria-hidden="true"></i></span>22 Russell Street, Victoria ,Melbourne AUSTRALIA </p>
					<p><span><i class="fa fa-envelope" aria-hidden="true"></i></span><a href="#">E: info [at] domain.com</a> </p>
					<p><span><i class="fa fa-mobile" aria-hidden="true"></i></span>P: +254 2564584 / +542 8245658 </p>
					<p><span><i class="fa fa-globe" aria-hidden="true"></i></span><a href="#">W: www.w3layouts.com</a></p>
			</div>
			<div class="col-md-4 wthree-footer">
				<h2>Fashion Blog</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore magna aliqua uta enim ad minim ven iam quis nostrud exercitation ullamco labor nisi ut aliquip exea commodo consequat duis aute .</p>
			</div>
			<div class="col-md-4 w3-agile">
				<h3>Newsletter</h3>
				<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<form action="#" method="post">
					<input type="email" name="Email" placeholder="Email" required="">
					<input type="submit" value="Send">
				</form>
			</div>
		</div>
	</div>
	<!-- footer -->
	
<!-- here stars scrolling icon -->
	<script>
	</script>
<!-- //here ends scrolling icon -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('public/front/js/bootstrap.js')}}"></script>
</body>
</html>

