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
 Route::get('/',[ReviewController::class,'index']);
 Route::get('/reviews/create',[ReviewController::class,'create']);
 Route::get('/reviews/{review}',[ReviewController::class,'show']);
 Route::get('/reviews/{review}/edit',[ReviewController::class,'edit']);
 Route::put('/reviews/{review}',[ReviewController::class,'put']);
 Route::post('/review',[ReviewController::class,'store']);
 Route::delete('reviews/{review}',[ReviewController::class,'delete']);
 
 Route::get('/comments/{review}/create',[CommentController::class,'create']);
 Route::post('/comments/{review}',[CommentController::class,'store']);
 Route::delete('/comments/{comment}',[CommentController::class,'delete']);
 Route::get('/comments/{review}/{comment}/edit',[CommentController::class,'edit']);
 Route::put('/comments/{comment}',[CommentController::class,'update']);
 
 Route::get('/combination',[CombinationController::class,'combi']);
 Route::get('/combinations/ccreate',[CombinationController::class,'ccreate']);
 Route::get('/combinations/{combination}',[CombinationController::class,'cshow']);
 Route::post('/combinations',[CombinationController::class,'cstore']);
 Route::get('/combinations/{combination}/cedit',[CombinationController::class,'cedit']);
 Route::delete('/combination/{combination}',[CombinationController::class,'delete']);
 Route::put('/combinations/{combination}',[CombinationController::class,'cput']);

 Route::get('/neta',[NetaController::class,'neta']);
 Route::get('/netas/ncreate',[NetaController::class,'ncreate']);
 Route::get('/netas/{neta}',[NetaController::class,'nshow']);
 Route::post('/netas',[NetaController::class,'nstore']);
 Route::get('/netas/{neta}/nedit',[NetaController::class,'nedit']);
 Route::put('/netas/{neta}',[NetaController::class,'nput']);
 Route::delete('/netas/{neta}',[NetaController::class,'delete']);
 Route::get('/neta/rank',[NetaController::class,'rank']);
 Route::get('/neta/mrank',[NetaController::class,'mrank']);
 Route::get('/neta/crank',[NetaController::class,'crank']);
 Route::get('/neta/rrank',[NetaController::class,'rrank']);
 
 
 Route::get('/office',[OfficeController::class,'office']);
 Route::get('/offices/ocreate',[OfficeController::class,'ocreate']);
 Route::get('/offices/{office}',[OfficeController::class,'oshow']);
 Route::post('/offices',[OfficeController::class,'ostore']);
 Route::get('/offices/{office}/oedit',[OfficeController::class,'oedit']);
 Route::put('/offices/{office}',[OfficeController::class,'oput']);
 Route::delete('/offices/{office}',[OfficeController::class,'delete']);
 
 Route::get('/user',[UserController::class,'user']);
 Route::get('/users/{user}',[UserController::class,'ushow']);
 Route::get('/users/{user}/uedit',[UserController::class,'uedit']);
 Route::put('/users/{user}',[UserController::class,'uput']);
 
 // {}=動的に変化するもの
 });
require __DIR__.'/auth.php';
