<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;
use App\category;
use App\news;
use App\Admin;
use App\like;
class blogview extends Controller
{

    function index()
	{
			
        
        $cdata = DB :: table('categories')->get();
		$ndata = DB ::  table('news')->OrderBy('created_at','desc')->paginate(3);
		$uem = Session('user');
		$udata =  Admin::where('email',$uem)->get();
		foreach($udata as $ud)
		{
			$uid =  $ud->id;
		}
		$likedata = like::get();
		return view("blogview/front")->with("likedata",$likedata)->with("catdata",$cdata)->with("newsdata",$ndata)->with("uid",$uid);
	}


	public function search()
	{
	  
	  $cdata = DB :: table('categories')->get();
	////	$newsdata = DB :: table('news')->get();
		foreach($cdata as $cd)
		{
			$cid = $cd->id;
		}
	return view('blogview/front',compact('$cdata'),compact('$newsdata'));
	
	}
	

}
