use App\Http\Controllers\UserController;

// Show all users
Route::get('/users', [UserController::class, 'showAllUsers'])->name('showAllUsers');

// Create user
Route::get('/users/create', [UserController::class, 'createUser'])->name('createUser');
Route::post('/users/store', [UserController::class, 'storeUser'])->name('storeUser');

// Read user
Route::get('/users/{id}', [UserController::class, 'viewUser'])->name('viewUser');

// Update user
Route::get('/users/{id}/edit', [UserController::class, 'editUser'])->name('editUser');
Route::put('/users/{id}/update', [UserController::class, 'updateUser'])->name('updateUser');

// Delete user
Route::delete('/users/{id}/delete', [UserController::class, 'deleteUser'])->name('deleteUser');
