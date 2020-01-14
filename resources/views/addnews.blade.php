@extends("master")


@section("title","News")

@section("container")
	<h1>Add News</h1>
	
	
	
	{!! Form::open(array('url'=>'/postaddnews','enctype'=>'multipart/form-data')) !!}
					<div class="form-group">
						{{Form::label('Category Name','',['class'=>'text-primary'])}}
						
						<select name="category" class="form-control">
							<option hidden value="">Select</option>
							
							@foreach($catdata as $cd)
								<option value="{{$cd->id}}">{{$cd->cname}}</option>
							@endforeach
						</select>
						
					</div>
					
					<div class="form-group">
						{{Form::label('Title','',['class'=>'text-primary'])}}
						{{Form::text('title','',['class'=>'form-control'])}}
						
					</div>
					
					
					<div class="form-group">
						{{Form::label('Description','',['class'=>'text-primary'])}}
						{{Form::textarea('description','',['class'=>'form-control'])}}
						
					</div>
					
					
					<div class="form-group">
						{{Form::label('Image','',['class'=>'text-primary'])}}
						{{Form::file('image',['class'=>'form-control'])}}
						<label class="text-danger">{{$errors->first('att')}}</label>
					</div>
					

					
					<div>
						{{Form::submit('Submit',['class'=>'btn btn-success'])}}
					</div>
				{!! Form::close() !!}
@endsection