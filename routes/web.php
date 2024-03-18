<?php

use App\Enums\UserRoleEnum;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => [sprintf('role:%s', UserRoleEnum::ADMIN->value)]], function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});

