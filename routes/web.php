<?php
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



Route::get('/tratra', '\App\Admin\Controllers\BlockTestControllers@block');
Route::any('/attach', 'ImageController@attach');
Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', 'TestController@index');
Route::get('/category','\App\Admin\Controllers\CategoryController@page');
Route::get('/blocks/{alias}/{id}/{static}/{backend?}', '\App\Admin\Controllers\CategoryController@block');

foreach (\App\Models\Category::all() as $category){
    if(request()->getPathInfo() == $category->link){
        Route::get(request()->path() ,'\App\Admin\Controllers\CategoryController@content');
    }
}







