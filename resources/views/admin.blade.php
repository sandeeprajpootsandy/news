<head>
		<title>Admin Panel</title>
		
		<link rel="stylesheet" type="text/css" href="{{asset('public/bootstrap/css/bootstrap.min.css')}}">
		<link href="{{asset('public/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	
		<link href="{{asset('public/front/css/style.css')}}" rel="stylesheet">
	</head>

	<body class="backgrnd">
		<main  class="bg-dark">
			<header class="text-center"><a href="{{url('#')}}"> <img src="{{asset('public/ad.png')}}"  width="500px" height="220px"></a></header>
			<section class="container">
            {{Form::open(array('url'=>'/adminlogin'))}}
				
	             
                    <div class="form-group">
						{{Form::label('Email','',['class'=>'text-primary'])}}
						{{Form::Email('mail','',['placeholder'=>'Enter Email','class'=>'form-control','required'])}}
						<label id="emerror" class="text-danger" ></label>
					</div>

                    <div class="form-group">
						{{Form::label('Enter Password','',['class'=>'text-primary'])}}
						{{Form::password('ep',['placeholder'=>'Enter Password','class'=>'form-control','required'])}}
                        <label id="cperror" class="text-danger" ></label>

					</div>

					<div>
                    {{Form::submit('SUBMIT',['class'=>'btn btn-success'])}} 
					 
                    </div> 
				{!! Form::close() !!}
			</section>
		</main>
	</body>
</html>
            