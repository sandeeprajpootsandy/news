<?php
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin','loginadmin@admin');
Route::post('/adminlogin','loginadmin@adminlogin');

Route::get('/index',"blogview@index");

Route::get('/login','loginadmin@login');
 
Route::get('/register','loginadmin@register');
Route::post('/login/req','loginadmin@registrationdata');
Route::post('/login/userlogin','loginadmin@userlogin');
Route::get('/dashboard','loginadmin@dash');
Route::get('/category','loginadmin@category');
Route::get('/addcategory','loginadmin@addcategory');
Route::post('/postaddcat','loginadmin@postaddcategory');
Route::get('/news','loginadmin@news');
Route::get('/addnews','loginadmin@addnews');
Route::post('/postaddnews','loginadmin@postaddnews');
Route::get('/blogview/comment/{nid}','loginadmin@comment');
Route::post('/postcomment','loginadmin@postcomment');

Route::post('/postreply','loginadmin@postreply');
Route::get('/contact','loginadmin@contact');
Route::post('/contactdata','loginadmin@contactdata');

Route::get('testUrl', 'loginadmin@getAjax');
Route::get('/blogview/blogdetail/{nid}','loginadmin@blogdetail');
Route::get('/categoryblog/{cid}','loginadmin@categoryblog');

/// payment
Route::get('stripe', 'StripePaymentController@stripe');
Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');
///paypal 

Route::get('paywithpaypal', array('as' => 'addmoney.paywithpaypal','uses' => 'AddMoneyController@payWithPaypal',));
Route::post('paypal', array('as' => 'addmoney.paypal','uses' => 'AddMoneyController@postPaymentWithpaypal',));
Route::get('paypal', array('as' => 'payment.status','uses' => 'AddMoneyController@getPaymentStatus',));

Route::get('/search/{cid}','blogview@search');
Route::get('/logout','loginadmin@logout');

Route::post('/mail','loginadmin@mail');
Route::get('send','loginadmin@send');

//gmail
Route::get('google', function () {
    return view('googleAuth');
});    
Route::get('auth/google', 'Auth\LoginController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\LoginController@handleGoogleCallback');


//facebook

Route::get('facebook', function () {
    return view('facebook');
});
Route::get('auth/facebook', 'Auth\FacebookController@redirectToFacebook');
Route::get('auth/facebook/callback', 'Auth\FacebookController@handleFacebookCallback');


//PDF generate

Route::get('/pdf/{nid}','loginadmin@pdf');
Route::get('/sample-pdf','loginadmin@sample-pdf');




Route::get('/PdfDemo', ['as'=>'PdfDemo','uses'=>'PdfDemoController@PdfDemo']);
Route::get('/sample-pdf', ['as'=>'SamplePDF','uses'=>'PdfDemoController@samplePDF']);
Route::get('/save-pdf', ['as'=>'SavePDF','uses'=>'PdfDemoController@savePDF']);
Route::get('/download-pdf', ['as'=>'DownloadPDF','uses'=>'PdfDemoController@downloadPDF']);
Route::get('/html-to-pdf', ['as'=>'HtmlToPDF','uses'=>'PdfDemoController@htmlToPDF']);


