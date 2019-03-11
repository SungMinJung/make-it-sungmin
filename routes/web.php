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

Route::get('/', function () {
    return view('main/index');
});
Route::get('/test', function () {
    return view('test');
});

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix'=>'Service','as'=>'service.'],function(){
    Route::get('/website','ServiceController@web')->name('web');
    Route::get('/Mobile_Application','ServiceController@mobile')->name('mobile');
    Route::get('/Responsive_Application','ServiceController@responsive')->name('responsive');

});
Route::get('/About_us','AboutusController@index')->name('about');
Route::get('/Portfolio','PortfolioController@index')->name('portfolio');
Route::get('/Port/{seq}','PortfolioController@index2')->name('port');
Route::get('/QandA','QnaController@index')->name('qna');
// contactus관련라우트
// Route::get('/admin','ContactusController@admin')->name('contact.admin');
Route::get('/Contact_us','ContactusController@index')->name('contact');
Route::post('/Contact_us','ContactusController@store')->name('contact.store');
// Route::get('/Portfolio','')


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function()
{
    Route::get('/', 'Admin\HomeController@index')->name('home');
    //contactus관련라우트
    Route::get('/contact', 'Admin\ContactusController@index')->name('contact');
    Route::get('/contact/{id}', 'Admin\ContactusController@show')->name('contact.show');
    Route::delete('/contact/{id}', 'Admin\ContactusController@destroy')->name('contact.destroy');
    //qna관련 라우트
    Route::resource('notice','Admin\NoticeController');
    Route::get('qnacreate','Admin\QnaController@create')->name('qnacreate');
    Route::get('common','Admin\QnaController@common')->name('typecommon');
    Route::get('qnatest/{type}','Admin\QnaController@test')->name('qnatest');
    Route::post('qnastore/{type}','Admin\QnaController@store')->name('qnastore');


    Route::resource('/portfolio', 'Admin\PortfolioController');
});
