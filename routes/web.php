<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Admin\DashboardController;


Route::get('/',
[HomeController::class,'index']
)->name('home');


Route::get('/candidate',
function(){

return view('frontend.candidate');

})->name('about');


Route::get('/manifesto',
function(){

return view('frontend.manifesto');

});

Route::get('/campaign',
function(){

return view('frontend.campaign');

});

Route::get('/impact',
function(){

return view('frontend.impact');

});


Route::middleware([
'auth'
])

->prefix('admin')

->group(function(){


Route::get('/dashboard',

[DashboardController::class,'index']

)->name('admin.dashboard');



Route::resource(
'candidate',
CandidateController::class
);


Route::resource(
'manifesto',
ManifestoController::class
);


Route::resource(
'posts',
PostController::class
);


Route::resource(
'events',
EventController::class
);


Route::resource(
'gallery',
GalleryController::class
);


Route::resource(
'settings',
SettingController::class
);


});


