@extends("blogview/master")

<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.fa {
  font-size: 50px;
  cursor: pointer;
  user-select: none;
}

.fa:hover {
  color: darkblue;
}




</style>
</head>
<body>







@section("container")


	@foreach($newsdata as $nd)

	
	<div class="">
		            
					<div class="w3agile-top">
						<div class="w3agile_special_deals_grid_left_grid"  height="300" width="800" style="hieght:120;width:700px;"    >
							<a href="{{url('/blogview/blogdetail/'.$nd->id)}}"><img src="{{asset('images/'.$nd->image)}}" class="img-responsive" alt="" /></a>
							
						</div>
						<br>
						<span >Updated :</span>{{$nd->updated_at}}
						<div class="interaction-item">
						<ul>
						
              <!-----
						<button  class="fa fa-thumbs-up like">LIKE </button>
                      ---->
					 
						@if(count($likedata) != 0)
						@foreach($likedata as $ld)
						
								@if($ld->uid == $uid && $ld->bid == $nd->id)
								<button  class="fa fa-thumbs-up like">UNLIKE </button>
								@endif	

						
						

						@endforeach			
						@else
						<button  class="fa fa-thumbs-up like">LIKE </button>
						@endif
					
	               <li><a href="{{url('/blogview/comment/'.$nd->id)}}"><i class="fas fa-heart" ></i> COMMENT</a></li>
						</ul>
					</div>
					
					
				

					<div class="col-md-9 w3agile-right">
							<h3><a href="{{url('/blogview/blogdetail/'.$nd->id)}}">{{$nd->title}}</a></h3>
							
							<p align="justify">{{substr($nd->description,0,450)}} </p>
							
						</div>
							<div class="clearfix"></div>
					</div>
				</div>
				
			@endforeach
			
			
			<h1 align="center">{{$newsdata->links()}}</h1>
@endsection



<script>
    $(document).ready(function(){
       $('.like').click(function() {
	     //alert("workig");
            $.ajax({
                url: "{{url('testUrl')}}",
                type: 'GET',
                data: { uid:"{{$uid}}",
						bid:"{{$nd->id}}"
				 },
                
                success: function(response)
                {
					//alert(response);
					if(response == 'success')
					{
					$('.like').html("UNLIKE");
					}
					if(response == 'unlike')
					{
					$('.like').html("LIKE");
					}
				   // $('#something').html(response);*/
                },
				error:function(){
					alert("error");
				}
            });
       });

});    
</script>




<!----- <script>
$(document).ready(function(){
	$('.like').click(function(){
		//alert("h");


		if($(this).html() == "LIKE" ){
		$(this).html("UNLIKE");}
		else{
			$(this).html("LIKE");
		}
	})
})
</script>
---->
</body>




