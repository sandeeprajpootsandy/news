<head>
		<title>Register</title>
		
		<link rel="stylesheet" type="text/css" href="{{asset('public/bootstrap/css/bootstrap.min.css')}}">
		<link href="{{asset('public/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />   
		<link href="{{asset('public/front/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" media="all" /><!-- fontawesome -->     
		<link href="{{asset('public/front/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all" /><!-- Bootstrap stylesheet -->
		<link href="{{asset('public/front/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
		<link rel="stylesheet" href="{{asset('public/front/css/flexslider.css')}}" type="text/css" media="screen" property="" />

	</head>

	<body>
		<main  class="bg-dark">
			<header><a href="{{url('/register/')}}"> <img src="{{asset('public/shyam.png')}}"  width="500px" height="120px"></a></header>
			
			<section class="container">
            {{Form::open(array('url'=>'login/req','name'=>'myform'))}}
				
					<div class="form-group">
						{{Form::label('Name','',['class'=>'text-primary'])}}
						{{Form::text('un','',['placeholder'=>' Name','class'=>'form-control'])}}
						<label id="lnerror" class="text-danger"></label>
					</div>

					
					<div class="form-group">

						{{Form::label('Gender','',['class'=>'text-primary'])}}
						{{Form::radio ('gender','male',['required'])}}Male 
                        {{Form::radio('gender','female')}}Female 
						<label id="gerror" class="text-danger"></label>
					</div>

                    <div class="form-group">
						{{Form::label('Age','',['class'=>'text-primary'])}}
					    {{Form::date ('age','',['required'])}}
                      <label id="aerror" class="text-danger"></label>

					</div>
                    
                    
                    <div class="form-group">
						{{Form::label('Contact number','',['class'=>'text-primary'])}}
						{{Form::text('cn','',['placeholder'=>'Enter Your Contact ','class'=>'form-control','required','pattern'=>'[6-9]{1}[0-9]{9}'])}}
						<label id="cnerror" class="text-danger"></label>
					</div>
                    
                    <div class="form-group">
						{{Form::label('Email','',['class'=>'text-primary'])}}
						{{Form::Email('em','',['placeholder'=>'Enter Email','class'=>'form-control'])}}
						<label id="emerror" class="text-danger" ></label>
					</div>

                    <div class="form-group">
						{{Form::label('Create Password','',['class'=>'text-primary'])}}
						{{Form::password('cp',['placeholder'=>'Create Password','class'=>'form-control'])}}
                        <label id="myInput" class="text-danger" ></label>
                        <input type="checkbox" onclick="myFunction()">Show Password
					</div>

					<div style="color:white;">
                    {{Form::submit('SUBMIT',['class'=>'btn btn-success'])}} 
					 Already have an account <a href="{{url('/login')}}" style="color:red;" >Login</a> 
                    </div> 
				{!! Form::close() !!}
				 <a href="{{url('/login')}}" ><button >Back to Home</button></a>
			</section>
		</main>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
				<script>
		function myFunction() {
		var x = document.getElementById("myInput");
		if (x.type === "cp") {
			x.type = "text";
		} else {
			x.type = "cp";
		}
		}
		</script>

	</body>
</html>