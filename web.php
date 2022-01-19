<?php


use Illuminate\Support\Facades\Route;
//use PostController;
use App\Http\Controllers\PostController;
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
//Route::get ('/',[PostController::class,'returnindexview']);
Route :: get ('/',[PostController::class,'indexview']);



//Route::get ('','App\Http\Controllers\PostController@returnindexview');

/*Route::get('/', function () {
    return view('articles');
});
*/
/*
Route::get('posts',function(){
    
     return 'Listes des livres';

});

Route::get('postsjson',function(){
    
    return response()->json([
          
        'title'=> 'mon super livre',
        'description' => 'ma description simple',
        'nombre de page '=>20

    ]);

});
Route::get('articles',function(){
      
       return view('articles');


});
*/
