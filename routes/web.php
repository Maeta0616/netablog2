<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CombinationController;
use App\Http\Controllers\NetaController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\UserController;
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
 Route::group(['middleware'=>['auth']],function(){
  
  Route::get("/dashboard", function() {
  return view("dashboard");
 })->name("dashboard");
 
 Route::get('/introduction',[ReviewController::class,'introduction'])->name("introduction");
 Route::get('/',[ReviewController::class,'index'])->name("index");
 Route::get('/reviews/create',[ReviewController::class,'create'])->name("create");
 Route::get('/reviews/{review}',[ReviewController::class,'show'])->name("show");
 Route::get('/reviews/{review}/edit',[ReviewController::class,'edit'])->name("edit");
 Route::put('/reviews/{review}',[ReviewController::class,'put'])->name("put");
 Route::post('/review',[ReviewController::class,'store'])->name("store");
 Route::delete('reviews/{review}',[ReviewController::class,'delete'])->name("delete");
 
 Route::get('/comments/{review}/create',[CommentController::class,'create'])->name("create");
 Route::post('/comments/{review}',[CommentController::class,'store'])->name("store");
 Route::delete('/comments/{comment}',[CommentController::class,'delete'])->name("delete");
 Route::get('/comments/{review}/{comment}/edit',[CommentController::class,'edit'])->name("edit");
 Route::put('/comments/{comment}',[CommentController::class,'update'])->name("update");
 
 Route::get('/combination',[CombinationController::class,'combi'])->name("combi");
 Route::get('/combinations/ccreate',[CombinationController::class,'ccreate'])->name("ccreate");
 Route::get('/combinations/{combination}',[CombinationController::class,'cshow'])->name("cshow");
 Route::post('/combinations',[CombinationController::class,'cstore'])->name("cstore");
 Route::get('/combinations/{combination}/cedit',[CombinationController::class,'cedit'])->name("cedit");
 Route::delete('/combination/{combination}',[CombinationController::class,'delete'])->name("delete");
 Route::put('/combinations/{combination}',[CombinationController::class,'cput'])->name("cput");

 Route::get('/neta',[NetaController::class,'neta'])->name("neta");
 Route::get('/netas/ncreate',[NetaController::class,'ncreate'])->name("necreate");
 Route::get('/netas/{neta}',[NetaController::class,'nshow'])->name("nshow");
 Route::post('/netas',[NetaController::class,'nstore'])->name("nsotre");
 Route::get('/netas/{neta}/nedit',[NetaController::class,'nedit'])->name("nedit");
 Route::put('/netas/{neta}',[NetaController::class,'nput'])->name("nput");
 Route::delete('/netas/{neta}',[NetaController::class,'delete'])->name("delete");
 Route::get('/neta/rank',[NetaController::class,'rank'])->name("rank");
 Route::get('/neta/mrank',[NetaController::class,'mrank'])->name("mrank");
 Route::get('/neta/crank',[NetaController::class,'crank'])->name("crank");
 Route::get('/neta/rrank',[NetaController::class,'rrank'])->name("rrank");
 
 
 Route::get('/office',[OfficeController::class,'office'])->name("office");
 Route::get('/offices/ocreate',[OfficeController::class,'ocreate'])->name("ocreate");
 Route::get('/offices/{office}',[OfficeController::class,'oshow'])->name("oshow");
 Route::post('/offices',[OfficeController::class,'ostore'])->name("ostore");
 Route::get('/offices/{office}/oedit',[OfficeController::class,'oedit'])->name("oedit");
 Route::put('/offices/{office}',[OfficeController::class,'oput'])->name("oput");
 Route::delete('/offices/{office}',[OfficeController::class,'delete'])->name("delete");
 
 Route::get('/user',[UserController::class,'user'])->name("user");
 Route::get('/users/{user}',[UserController::class,'ushow'])->name("ushow");
 Route::get('/users/{user}/uedit',[UserController::class,'uedit'])->name("uedit");
 Route::put('/users/{user}',[UserController::class,'uput'])->name("uput");
 
 // {}=動的に変化するもの
 });
require __DIR__.'/auth.php';
