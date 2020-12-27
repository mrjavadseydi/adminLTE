<?php

Route::prefix('admin')->middleware('web')->group(function (){

    Route::get('/', [\admin\LTE\http\controller\PanelController::class,'index'])->name('adminPanel');
    Route::resource('/user',\admin\LTE\http\controller\UserController::class);
});
