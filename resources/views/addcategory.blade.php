@extends("master")


@section("title","Category")

@section("container")
	<h1>Comment</h1>
	
	{!! Form::open(array('url'=>'/postaddcat','enctype'=>'multipart/form-data')) !!}
					<div class="form-group">
						{{Form::label('Category Name','',['class'=>'text-primary'])}}
						{{Form::text('cname','',['class'=>'form-control'])}}
						<label class="text-danger">{{$errors->first('cname')}}</label>
					</div>
					
					<div class="form-group">
						{{Form::label('Image','',['class'=>'text-primary'])}}
						{{Form::file('att',['class'=>'form-control'])}}
						<label class="text-danger">{{$errors->first('att')}}</label>
					</div>
					
					<div>
						{{Form::submit('Submit',['class'=>'btn btn-danger'])}}
					</div>
				{!! Form::close() !!}
@endsection