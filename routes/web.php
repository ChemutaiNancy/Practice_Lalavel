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

Route::get('pdf', 'PDFMaker@gen');

Route::get('/', function () {
    // return view('welcome');
    // Larademo::sayHello();

    $to_name="Nancy chemutai";
    $to_email="chemutain@gmail.com";
    $data=array("name"=>"Peter Furgerson", "body"=>"Test Mail");
    Mail::send('mail', $data, function($message)use ($to_name, $to_email)
{
    $message->to($to_email)
    ->subject('Lara mail Subject');
});
});

Route::get('/onetoone', 'OneRelationController@onetoone');
// Route::view('onetoone', 'onetoone');

Route::post('/delete', 'DeleteController@delete');
Route::view('delete', 'deletefile');

Route::post('/update', 'CompanyviewsController@update');
Route::view('updateform', 'companyviews');

Route::post('/submit', 'Companies@savecompany');
Route::view('submitform', 'companyview');

Route::get('/fruitlist', 'FruitController@fruitlist');
Route::view('fruit', 'fruit');

Route::get('/eloquent', 'EloquentController@eloquent');
Route::view('eloquentinterface', 'eloquent');

Route::post('/fileupload', 'FileController@fileupload');
Route::view('upload', 'fileupload');

Route::view('jquery', 'jquery');

Route::view('global', 'global');

Route::get('/blade', 'BladeController@useblade');

Route::get('/list', 'CompaniesController@list');

Route::get('/youtubetwo', 'YoutubeController@youtube');

Route::get('/db', 'DatabaseController@database');

Route::view('form', 'flash');
Route::post('flash', "FlashController@submit");

Route::view('users','users');
Route::get('/youtube', "Youtube@index");
Route::get('/users',  'Users@users');

Route::view('/userview', 'userview');
Route::post('/usercontroller', "UserController@formSubmit")->middleware('ageChecker');

Route::view('/viewuser', 'userss');
Route::post('/usersscontroller', "UserssController@formSubmit");
// Route::get('/user/{id?}', function($id = "No data pass"){//for optional id
//     return view('user',["user"=>$id]);
// });

// Route::redirect("/here","/welcome");
