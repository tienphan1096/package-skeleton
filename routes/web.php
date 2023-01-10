<?php

Route::group(['middleware' => ['auth']], function () {
    Route::get('admin/my-first-package', [MyFirstPackageController::class, 'index'])->name('package.skeleton.index');
    Route::get('my-first-package', [MyFirstPackageController::class, 'index'])->name('package.skeleton.tab.index');
});
