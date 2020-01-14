
<!DOCTYPE html>
<html lang="en">
<head>
 <title>Blog  | Home</title> 
 <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />   
 <link href="{{asset('public/front/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" media="all" /><!-- fontawesome -->     
 <link href="{{asset('public/front/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all" /><!-- Bootstrap stylesheet -->
 <link href="{{asset('public/front/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
 <link rel="stylesheet" href="{{asset('public/front/css/flexslider.css')}}" type="text/css" media="screen" property="" />
</head>

<body>
   <header>

					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav">
					<li><a class="btn btn-primary" href="{{url('/index')}}">HOME</a></li>
					<li><a class="btn btn-info" href="#">ABOUT</a></li>
					<li><a class="btn btn-warning" href="{{url('/contact')}}">CONTACT US</a></li>
			<!---		<li><a class="btn btn-primary" href="{{url('/register/')}}">SIGN UP</a></li> --->
					<li class=""><a> WELCOME:{{Session('user')}}</a></li>
					<li><a class="btn btn-danger" href="{{url('/logout')}}">LOG OUT</a></li>
					<li><a class="btn btn-secondary" href="{{url('/stripe')}}">PAYMENT</a></li>
					<li><a class="btn btn-danger" href="{{url('/paypal')}}">PAYPAL</a></li>
					</div>

    </header>
	<!-- //header -->
	<!-- top-header and slider -->
	<div class="w3-slider">	
	
	<!-- //top-header and slider -->
	<div class="container">
		<div class="banner-btm-agile">
			<div class="col-md-9 btm-wthree-left">
				
				@yield("container")
				
			</div>
			<div class="col-md-3 w3agile_blog_left">
			<section>
            <span></span>
			<select id="searchid" style="width:200px">
			<option></option>
			@foreach($catdata as $cd )
			<option value="{{'http://localhost/blog/categoryblog/'.$cd->id}}"> {{$cd->cname }} </a></option>

			@endforeach
	               
				</select>
				<br>
				   <div class="w3l_categories">
				 
					<h3>Latest Posts</h3>

					<ul>
					
					  @foreach($newsdata as $nd)
					  <a href="{{url('/blogview/blogdetail/'.$nd->id)}}"> <img src="{{asset('images/'.$nd->image)}}"class="img-responsive" width="90px;"/> </a>
					  				
					   <li><a href="{{url('/categoryblog/'.$cd->id)}}"><span class="glyphicon glyphicon-arrow-right " aria-hidden="true"></span>{{$nd->title}}</a></li>
		
					  @endforeach
					
			    	</ul>

				</div>

				<div class="w3l_categories">
					<h3>Categories</h3>
					<ul>
					
						@foreach($catdata as $cd)
											
						<li><a href="{{url('/categoryblog/'.$cd->id)}}"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>{{$cd->cname}}</a></li>
						
						
						@endforeach
						
					</ul>
				</div >
				  <br>
				  <br>
				  <iframe width="250" height="200" src="https://www.youtube.com/embed/Ky-OAhQ-szk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<div class="agileits_recent_posts_grid">
						<div class="agileits_recent_posts_gridl">
							<div class="w3agile_special_deals_grid_left_grid">
									<a href="singlepage.html"><img src="images/r1.jpg" class="img-responsive" alt="" /></a>
								</div>
						</div>
				              		
						<div class="clearfix"> </div>
					</div>

					
					<div class="agileits_recent_posts_grid">
						<div class="agileits_recent_posts_gridl">
							<div class="w3agile_special_deals_grid_left_grid">
									<a href="singlepage.html"><img src="images/r2.jpg" class="img-responsive" alt="" /></a>
								</div>
						</div>
						
						<div class="clearfix"> </div>
					</div>
				</div>
			

			<!-- //btm-wthree-right -->
			<div class="clearfix">
				
			</div>
		</div>
	</div>
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
				{{Form::open(array('url'=>'/mail') )}}

						{{Form::text('sendmail','',['placeholder'=>'Email','class'=>'form-control','required'])}}
				
						{{Form::submit('Subscribe ',['class'=>'btn btn-warning'])}} 
					 
				     {!! Form::close() !!}
				
				
				
				
						<!-----<form action="#" method="post">
							<input type="email" name="Email" placeholder="Email" required="">
							<input type="submit" value="Send">
							</form> --->
			        
		</div>
	</div>
	<!-- footer -->
	

 <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

  <script type="text/javascript">
$(document).ready(function(){
  $("#searchid").select2({
            placeholder: "Search",
            allowClear: true
        });
		$("#searchid").on('change',function(){
		serval = $('#searchid').val();
		
		//alert(serval);
		window.location.href = serval; 
		});
	});

 </script>


</body>
</html>