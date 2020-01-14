@extends("blogview/master")


@section("container")


	@foreach($newsdata as $nd)

            
	<div class="wthree-top">
					<div class="w3agile-top">
						<div class="w3agile_special_deals_grid_left_grid"  height="300" width="800" style="hieght:120;width:700px;"    >
							<a href="#"><img src="{{asset('images/'.$nd->image)}}"    class="img-responsive" alt="" /></a>
						</div>
						<br>
						<div class="">
						<ul>
						<span >Updated :</span>{{$nd->updated_at}}			
							<li><a href="#" ><i></i> LIKE</a></li>
							<li><a href="{{url('/blogview/comment/'.$nd->id)}}"><i></i> COMMENT </a></li>
						</ul>
					</div>
					
					
				

					<div class="col-md-9 w3agile-right">
							<h3><a href="#">{{$nd->title}}</a></h3>
							<p align="justify">{{substr($nd->description,0,1000)}} </p>
							
						</div>
							<div class="clearfix"></div>
					</div>
				</div>
				
			@endforeach
			
			
			<h1 align="center">{{$newsdata->links()}}</h1>
@endsection


