<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AuthController;
use App\Models\Cat;

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
                                        // Method Name
Route::get('/cats', [CatController::class , 'index']);
                // dynamic
Route::get('/cats/show/{id}',[CatController::class , 'show']);

Route::get("/cats/create",[CatController::class , 'create']);

Route::get("/teacher",[TeacherController::class,'index']);

Route::post('/cats/store',[CatController::class,'store']);

Route::get('/cats/edit/{id}',[CatController::class , 'edit']);

Route::post('/cats/update/{id}',[CatController::class , 'update']);

Route::get('/cats/delete/{id}' , [CatController::class,'delete']);

Route::get('/test',function () {
    // $cats = Cat::where("id" , '>=' , 2)->get();
    // $cats = DB::table('cats')->where("id" , '>=' , 3)->orWhere('name' , '=','testt2')->get();
    // $cats = Cat::where('id' , '>' , 1)->orderBy('id','desc')->get();
    // $cats = DB::table('cats')->where('id' , '>=' , 1)->orderBy('id','desc')->get();
    // $cats = DB::table('cats')->where('name' , '<>' , 'economy')->count('id');

    $maxId = DB::table('cats')->max('id');

    $lastCategory = DB::table('cats')->where('id' , '=' , $maxId);

    echo $lastCategory;

    // foreach($lastCategory as $cat) {
    //     echo $cat -> id ." - ". $cat->name."<br>";
    // }
});

Route::get('/books' , [BookController::class , 'index']);

Route::get('/books' , [BookController::class , 'show']);

Route::get('/register',[AuthController::class , 'registerForm']);
Route::post('/register',[AuthController::class , 'register']);