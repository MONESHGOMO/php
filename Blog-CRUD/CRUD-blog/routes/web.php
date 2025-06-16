<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppUserController;




Route::get('/', [AppUserController::class, 'getAllUsers']);
Route::get('/addUser', [AppUserController::class, 'showAddUserForm']);
Route::post('/addUser', [AppUserController::class, 'addUser'])->name('user.add');

Route::get('/edit/{id}', [AppUserController::class, 'editUserData'])->name('user.edit');
Route::put('/updateUser/{id}', [AppUserController::class, 'updateUserData'])->name('user.update');

Route::delete('/delete/{id}', [AppUserController::class, 'deleteUserData'])->name('user.delete');


?>
