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
        color: red;
        }


</style>
</head>
<body>


@section("container")


	@foreach($newsdata as $nd)


	<div class="">
					<div class="w3agile-top">
						<div class="w3agile_special_deals_grid_left_grid"  height="300" width="800" style="hieght:120;width:700px;"    >
							<a href="#"><img src="{{asset('images/'.$nd->image)}}"    class="img-responsive" alt="" /></a>
						</div>
						<br>
						<div class="interaction-item">

                        <div class="form-group">
                                <a href="{{url('/pdf/'.$nd->id)}}" class="btn btn-danger">DOWNLOAD PDF</a>
                            </div>
				
						<ul>
                        <button class="fa fa-thumbs-up like">LIKE</button>
                        <li><a href="{{url('/blogview/comment/'.$nd->id)}}"><i class="fas fa-heart" ></i> COMMENT </a></li>
						</ul>
					</div>
					
					
				

					<div class="col-md-9 w3agile-right">
                            <h3><a href="{{url('/blogview/blogdetail/'.$nd->id)}}">{{$nd->title}}</a></h3>
                            <p align="justify">{{$nd->description}} </p>
							
                        </div>
                            
							<div class="clearfix"></div>
					</div>
                </div>
                
                
			@endforeach

@endsection
</script>

 <script>
    $(document).ready(function(){
        $('.like').click(function(){
            alert("Like");


            if($(this).html() == "LIKE" ){
            $(this).html("UNLIKE");}
            else{
                $(this).html("LIKE");
            }
        })
    })
</script>

</body>

