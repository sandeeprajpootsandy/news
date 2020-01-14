@if(Session('user') == "")
<script> </script>
@endif
<html>

<head>
	<title>@yield("title")</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
	<link href="{{asset('public/front/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" media="all" /><!-- fontawesome -->
	<link href="{{asset('public/front/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all" /><!-- Bootstrap stylesheet -->
	<link href="{{asset('public/front/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="{{asset('public/front/css/flexslider.css')}}" type="text/css" media="screen" property="" />
	<link href="{{asset('public/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	<script src="{{asset('public/bootstrap/js/bootstrap.min.js')}}"></script>
</head>

<body>
	<main>
		<header>
			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="#">BLOG</a>
					</div>
					<ul class="nav navbar-nav">
						<li class="active"><a href="{{url('/dashboard')}}">Home</a></li>

					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome : {{Session('useradmin')}}</a></li>
						<li><a href="{{url('/admin')}}"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
					</ul>
				</div>
			</nav>
		</header>

		<div>
			<div class="col-sm-4">
				<ul class="list-group">
					<li class="list-group-item"><a href="{{url('/category')}}">Category</a></li>
					<li class="list-group-item"><a href="{{url('/news')}}">News</a></li>
				</ul>
			</div>

			<div class="col-sm-8">@yield("container")</div>
		</div>
	</main>
</body>

</html>