<html>
 <head>
		<title>Login </title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />   
	<link href="{{asset('public/front/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" media="all" /><!-- fontawesome -->     
	<link href="{{asset('public/front/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all" /><!-- Bootstrap stylesheet -->
	<link href="{{asset('public/front/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="{{asset('public/front/css/flexslider.css')}}" type="text/css" media="screen" property="" />

		<link href="{{asset('public/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
		
		<script src="{{asset('public/bootstrap/js/bootstrap.min.js')}}"></script>
</head>

	<body>
		<main  class="bg-dark">
			<header class="jumbotron text-center" ><a href=""><img src="{{asset('public/login2.png')}}" ></a></header>
			
			<section class="container">
     <div class="row">
			<div class="col-md-2"></div>

            <div class="col-md-8">
				{!! Form::open(array('url'=>'login/userlogin'))!!}
					<div class="form-group">
						{{Form::label('Email','',['class'=>'text-primary'])}}
						{{Form::text('em','',['placeholder'=>'Enter Email','class'=>'form-control','required'])}}
					</div>
					
					<div class="form-group">
						{{Form::label('Password','',['class'=>'text-primary'])}}
						{{Form::Password('cp',['placeholder'=>'Enter Password','class'=>'form-control','required'])}}
					</div>
					
					<div>
						 {{Form::submit('Login',['class'=>'btn btn-success'])}} 
						<a class="btn btn-primary"href="{{url('/register/')}}" > Sign up </a>
						<a class="btn btn-success" href="{{url('auth/google')}}">Login with Google</a>
						<a class="btn btn-danger" href="{{url('auth/facebook')}}">Login with Facebook </a>
					</div>
					
					
				{!! Form::close() !!}
				</div>
				</div>
			</section>
		</main>
	</body>
</html>