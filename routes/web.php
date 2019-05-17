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


define('MENU',\App\Models\Category::list());

Route::get('/tim/{alias?}','\App\Models\Tim@index');

Route::get('/tratra', '\App\Admin\Controllers\BlockTestControllers@block');
Route::any('/attach', 'ImageController@attach');
Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', 'TestController@index');
Route::get('/category','\App\Admin\Controllers\CategoryController@page');
Route::get('/blocks/{alias}/{id}/{static}/{backend?}', '\App\Admin\Controllers\CategoryController@block');


$categories = \App\Models\Category::all();
//static pages
foreach ($categories as $category){
    if(request()->getPathInfo() == $category->link){
        Route::get(request()->path().'' ,'\App\Admin\Controllers\CategoryController@content');
    }
}
// dynamic pages
foreach ($categories as $category){
    if(strpos($category->link,'{alias}')){
        $resource = \App\Models\Resource::find($category->hook);
        Route::get($category->link ,$resource->controller."@content");
    }
}
