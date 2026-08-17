<?php
    // Applying the Group to Route

    use Illuminate\Http\Request;
    use App\Http\Controllers\Admin\DashboardController;
    use App\Http\Controllers\Admin\UserController;


    // Applying to route group
    Route::middleware(['admin'])->prefix('admin')->name('admin.')->group(function () {
          Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
          Route::resource('users', UserController::class);
    });

        // Apply to Single Route
    Route::get('/reports', [DashboardController::class, 'reports'])
        ->middleware('admin')
        ->name('reports');

    Route::middleware(['auth'])->prefix('auth')->name('auth.')->group(function () {
            // Route by group
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('client', [DashboardController::class, 'client']);
    });




    // Single Route Middleware
    Route::get('/detail', [DashboardController::class, 'detail'])
        ->middleware('admin')
        ->name('detail');



?>
