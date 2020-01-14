<!DOCTYPE html>
<html lang="en">

<head>

	<link href="{{asset('public/front/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" media="all" /><!-- fontawesome -->
	<link href="{{asset('public/front/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all" /><!-- Bootstrap stylesheet -->
	<link href="{{asset('public/front/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="{{asset('public/front/css/flexslider.css')}}" type="text/css" media="screen" property="" />
	<title>Home | Contact</title>
	<link rel="stylesheet" type="text/css" href="{{asset('public/bootstrap/css/bootstrap.min.css')}}">
	<link href="{{asset('public/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
</head>

<body class="backgrnd">
	<div class="row">


		<div class="col-md-4">
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">

					<!---	<li><a class="btn btn-info" href="#">ABOUT</a></li> --->

					<!---		<li><a class="btn btn-primary" href="{{url('/register/')}}">SIGN UP</a></li> --->
					<!--	<li class=""><a> WELCOME:{{Session('user')}}</a></li>
					<li><a class="btn btn-danger" href="{{url('/logout')}}">LOG OUT</a></li>
					</div> -->

			</div>
		</div>
		</header>




		<main class="bg-dark">

			<header class="jumbotron">
				<!-- <a href="{{url('/contact')}}">
				  <img src="{{asset('public/cont.jpeg')}}" ></a></header>
				  <a><i class="fas fa-arrow-left"></i></a> --->
				<section class="container">
					{{Form::open(array('url'=>'contactdata'))}}

					<div class="form-group">
						{{Form::label('Name','',['class'=>'text-primary'])}}
						{{Form::text('name','',['placeholder'=>' Name','class'=>'form-control','required'])}}
						<label id="name" class="text-danger"></label>
					</div>
					<div class="form-group">
						{{Form::label('Email','',['class'=>'text-primary'])}}
						{{Form::Email('email','',['placeholder'=>'Enter Email','class'=>'form-control','required'])}}
						<label id="email" class="text-danger"></label>
					</div>



					<div class="form-group">
						{{Form::label('Message','',['class'=>'text-primary'])}}
						{{Form::textarea('subject','',['placeholder'=>'Write something....','class'=>'form-control','required'])}}
						<label id="lnerror" class="text-danger"></label>
						<div>
							{{Form::submit('SUBMIT',['class'=>'btn btn-success'])}}

						</div>
						{!! Form::close() !!}
				</section>
				<a class="" href="{{url('/index')}}">Back to Home</a>
	</div>
	</main>
</body>

</html>