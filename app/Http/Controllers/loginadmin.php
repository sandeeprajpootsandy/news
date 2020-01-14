<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\useradmin;
use App\Admin;
use App\category;
use App\news;
use App\comment;
use App\reply;
use App\contact;
use App\like;
use App\mail;

use PDF;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class loginadmin extends Controller
{


	function admin()
	{

		return view("admin");
	}
	function adminlogin(Request $ad)
	{

		$mail = $ad->mail;
		//echo"$mail";
		$ep = md5($ad->ep);
		//echo"$ep";
		$data = useradmin::where(['mail' => $mail, 'ep' => $ep])->get();
		if (count($data) > 0) {

			///echo"login successfully";
			Session::put('useradmin', $mail);
			return redirect("/dashboard");
		} else {
			//echo"Invalid";
			///Session::flash("status","Invalid login");
			return redirect("/admin");
		}
	}






	function login()
	{
		return view("login");
	}

	function register()
	{
		return view("register");
	}
	function  registrationdata(Request $req)
	{

		$un = $req->un;
		//echo"$ln";
		$gender = $req->gender;
		//echo"$gender";
		$age = $req->age;
		//echo"$age";
		$cn = $req->cn;
		$em = $req->em;
		$cp = $req->cp;
		//echo"$cn,$em,$cp";

		$form = new admin();
		$form->name = $un;

		$form->gender = $gender;
		$form->age = $age;
		$form->contact = $cn;
		$form->email = $em;
		$form->password = md5($cp);

		if ($form->save()) {
			Session::flash("status", "user register successfully");
			return redirect("/login");
		}
	}


	function userlogin(Request $req)
	{
		$em = $req->em;


		$cp = md5($req->cp);

		// $user =new admin();

		$data = admin::where(['email' => $em, 'password' => $cp])->get();
		// $data = DB::table('admins')->where(['email'=>$em,'password'=>$cp])->get();
		if (count($data) > 0) {
			Session::put("user", $em);
			return redirect("/index");
			///return redirect("dashboard");
		} else {
			Session::flash("status", "Invalid Login");
			echo "Invalid Login";
			return redirect('/login');
		}
	}


	function dash()
	{
		//$title = "Blog";
		return view("/dashboard"); ///->with("ti",$title);
	}



	function category()
	{
		$cdata = category::get();
		return view("category")->with("catdata", $cdata);
	}

	function addcategory()
	{
		return view("/addcategory");
	}

	function postaddcategory(Request $res)
	{
		$cn = $res->cname;
		$file = $res->file('att');
		$ext = $file->getClientOriginalExtension();
		$fnn = rand() . '.' . $ext;
		$destinationpath = "images";
		if ($file->move($destinationpath, $fnn)) {
			$cat = new category();
			$cat->cname = $cn;
			$cat->image = $fnn;
			if ($cat->save()) {
				Session::flash('status', "Add category successfully");
				return redirect("/category");
			}
		}
	}

	function news()
	{

		return view("news");
	}
	function addnews()
	{
		$cdata = Category::get();
		return view("addnews")->with("catdata", $cdata);

		return view("/addnews");
	}

	function postaddnews(Request $req)
	{


		$cn = $req->category;
		$ti = $req->title;
		$desc = $req->description;
		$file = $req->file('image');

		$ext = $file->getClientOriginalExtension();
		$fnn = rand() . '.' . $ext;

		$destinationpath = "images";

		if ($file->move($destinationpath, $fnn)) {
			$newstable = new news();
			$newstable->category = $cn;
			$newstable->title = $ti;
			$newstable->description = $desc;
			$newstable->image = $fnn;

			if ($newstable->save()) {
				Session::flash("status", "News Added Successfully");
				return redirect("/news");
			}
		}
	}


	function comment($nid)
	{


		if (Session::has('user')) {
			$em = Session('user');
			$data = admin::where(['email' => $em])->first();
			$uid = $data->id;
		}

		$commentdata = comment::get();
		return view("blogview/comment")->with("comment", $commentdata)->with('uid', $uid)->with('nid', $nid);
	}

	function postcomment(Request $comt)
	{


		$cmt = $comt->cmt;
		///echo"$cmt";  
		$newsid = $comt->nid;



		$commt = new comment();
		$commt->cmt = $cmt;
		$commt->userid = $comt->uid;
		$commt->blogid = $comt->nid;

		if ($commt->save()) {
			//Session::flash("status","user register successfully");


			return redirect("blogview/comment/" . $newsid);
		}
	}

	function postreply(Request $rply)
	{

		$reply = $rply->ply;
		//echo $reply;
		$newsid = $rply->nid;



		$pl = new reply();
		$pl->reply = $reply;
		$pl->userid = $rply->uid;
		$pl->blogid = $rply->nid;



		if ($pl->save()) {

			//Session::flash("status","user register successfully");


			return redirect("blogview/comment/". $newsid);
		}
	}







	function categoryblog($cid)
	{
		$cdata = DB::table('categories')->get();
		$ndata = news::where('category', $cid)->OrderBy('created_at', 'desc')->paginate(2);


		return view("blogview/categoryblog")->with("catdata", $cdata)->with("newsdata", $ndata);


		//return view("categoryblog")->with("category",$categoryid);

	}



	function contact()
	{


		return view("blogview/contact");
	}
	function contactdata(Request $cd)
	{


		$name = $cd->name;
		//echo"$name";
		$email = $cd->email;
		//echo"$email";
		$subject = $cd->subject;
		//echo"$subject";


		$cont = new contact();
		$cont->name = $name;
		$cont->email = $email;
		$cont->subject = $subject;


		if ($cont->save()) {
			Session::flash("status", "subject register successfully");
			return redirect("/index");
		}
	}



	public function getAjax()
	{


		$bid = $_GET['bid'];
		$uid =  $_GET['uid'];

		$ldata = like::where(['bid' => $bid, 'uid' => $uid])->get();

		// echo count($ldata);
		if (count($ldata) == 0) {
			$l = new like();
			$l->bid = $bid;
			$l->uid = $uid;


			if ($l->save()) {
				echo "success";
			}
		} else {
			echo "unlike";
		}
	}

	function blogdetail($nid)
	{
		$cdata = DB::table('categories')->get();
		$ndata = news::where('id', $nid)->get();

		//.echo $nid;
		return view("blogview/blogdetail")->with("catdata", $cdata)->with("newsdata", $ndata);
	}




	function mail(Request $ml)
	{
		$sendmail = $ml->sendmail;
		echo $sendmail;

		$mal = new mail();
		$mal->sendmail = $sendmail;

		if ($mal->save()) {
			return redirect("/index");
		}
	}


	public function send()
	{
		$md = DB::table('mails')->get();

		Mail::send(['$md' => 'mail'], ['name', 'sandeep'], function ($msg) {
			$msg->to('indiansandeeprajpoot@gmail.com', 'To rahulsingh')->subject('test email');
			$msg->from('indiasandeeprajpoot@gmail.com', 'rahulsingh');
		});
	}

     function PDF($nid)
        {    
		
	  /// $ndata= news::where('id', $nd)->get();
        $ndata = news::where('id', $nid)->get();
	
		
		if(isset($ndata)){
			foreach($ndata as $nd){
				///$title= "<img src='{{asset('images/'.$nd->image)}}'/> ";
				$title= " <h1> $nd->title </h1>  <p>$nd->description </p> ";
				
		
	
	   PDF::SetTitle('Sample PDF');
	   PDF::AddPage();
	   PDF::writeHTML($title);

	   PDF::Output('SamplePDF.pdf');
	}
}
   }


	function logout()
	{
		session::flush();
		return redirect('/login');
	}
}
