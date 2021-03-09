<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\motokaryawan;

// Route::get('kly', function () {
//     return view('kly');
// });


Route::get('/content', function () {
    return view('master.contentmaster');
})->name('kontenmaster');
Route::get('/', function () {
    return view('master.contentmaster');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/profile', function () {
    return view('profile');
})->name('profile');
Route::post('/change/profile', [motokaryawan::class, 'changeprofile']);
// Route::post('/change/profile', [motokaryawan::class, 'sesi']);



route::group(['middleware'=>'admin'],function(){
    Route::get('/add', [motokaryawan::class,'add']);

    Route::post('/insert', [motokaryawan::class,'insert']);
    
    
    Route::get('/update', [motokaryawan::class,'indexall']);
    Route::get('/update/{id}', [motokaryawan::class,'update']);
    Route::post('/change/{id}', [motokaryawan::class,'change']);
    Route::get('/delete/{id}', [motokaryawan::class,'delete']);

});
route::group(['middleware'=>'user'],function(){

    // Route::get('/contentpage?page={id}', [motokaryawan::class,'index'])->name('indexa');

    Route::get('/contentpage', [motokaryawan::class,'index'])->name('index');

    Route::get('/content/next/{id}', [motokaryawan::class,'nextcontent']);
    Route::get('/content/previous/{id}', [motokaryawan::class,'previouscontent']);

});


Auth::routes();
