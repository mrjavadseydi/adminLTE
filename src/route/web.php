<?php

Route::prefix('admin')->group(function (){
    Route::get('/', [\admin\LTE\http\controller\PanelController::class,'index'])->name('adminPanel');
});
