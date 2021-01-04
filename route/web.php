<?php

Route::prefix('admin')->middleware(['web','auth'])->group(function (){
    Route::get('/', [\admin\LTE\http\controller\PanelController::class,'index'])->name('adminPanel');
    Route::resource('/user',\admin\LTE\http\controller\UserController::class);
    Route::resource('permissions', \admin\LTE\http\controller\PermissionController::class);
    Route::resource('roles', \admin\LTE\http\controller\RoleController::class);
});
