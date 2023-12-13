<?php
use Illuminate\Support\Facades\Route;
use JivanSubedi\ContactHandler\Http\controllers\contactController;

Route::group(['middleware' => ['web']], function () {
    //routes here
    Route::get('contact',[contactController::class,'index']);
    Route::post('contact',[contactController::class,'send'])->name('contact');
    
});

?>