<?php

Route::group(['middleware' => ['auth:api', 'bindings']], function () {
    Route::get('admin/my-first-package/fetch', [MyFirstPackageController::class, 'fetch'])->name('package.skeleton.fetch');
    Route::apiResource('admin/my-first-package', MyFirstPackageController::class);
});
