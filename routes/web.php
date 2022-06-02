<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandyControl ;

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

Route::get('/Home', function () {
    return view('Candy');
});     
Route::get('/about', function () {
    return view('about');
});     
Route::get('/contact', function () {
    return view('contact');
});     
Route::get('/footer', function () {
    return view('master');
});     
Route::get('/ss', function () {
    return view('home');
});     



// Route::get('/asd', function () {
//     return view('Hadi');
// });     

                                                    /*=======================================>optional parameters*/
// Route::get('/{name?}/{id?}', function ($name,$id) {
    
//     return "Your Name is".$name." your id is ".$id;
// });

//                                                    =======================================>required parameters
// Route::get('/{name}/{id}', function ($name,$id) {
//    
//     return "Your Name is".$name." your id is ".$id;
// });


Route::view('signup','signub');
// =======================================>short code
    
    

Route::get('/listo', function () {

    $list = ['mars','layz','batat'];

    return view('test',compact('list'));  
    
});     
// Route::get('/Testcontroller', [CandyControl::class ,'Candy']) ;
// Route::get('/Testcontroller2', [CandyControl::class ,'ViewWelcome']) ;

Route::get('/id/{id}/name/{name}', [CandyControl::class ,'User']) ;
Route::get('/land', [CandyControl::class ,'land']) ;

   

// Route::get('/obada', function () {
//     $articleName = ['obada','majd','hadi','bahaa'];
   
//     return view('test', compact('articleName'));
// });