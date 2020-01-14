@extends("master")


@section("title","Category")

@section("container")
	<h1>Category</h1>
	
		@if(Session::has('status'))
				<label class="alert-info">{{Session('status')}}</label>
		@endif
	
	<table class="table">
		<tr>
			<th colspan="5" class="text-center"><a href="{{url('/addcategory')}}" class="btn btn-success">Add Category</a></th>
		</tr>
	
		<tr>
			<th>S.No.</th>
			<th>CName</th>
			<th>Image</th>
			<th>Date</th>
			
		</tr>
		@php
		$sn = 1;
		@endphp
		
		@foreach($catdata as $cd)
			<tr>
				<td>{{$sn}}</td>
				<td>{{$cd->cname}}</td>
				<td><img src="{{asset('images/'.$cd->image)}}" height="30" width="60"></td>
				<td>{{$cd->created_at}}</td>
				
			
			</tr>
			
			@php
			$sn++;
			@endphp
			
		@endforeach
	</table>
@endsection
