<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';

Route::prefix('/')->name('front.')->group(function () {
    Route::get('/', function () {
        return view('front.index');
    })->name('index');

    Route::get('/about', function () {
        return view('front.about');
    })->name('about');

    Route::get('/contact', function () {
        return view('front.contact');
    })->name('contact');

    Route::get('/404', function () {
        return view('front.404');
    })->name('404');

    Route::get('/project', function () {
        return view('front.project');
    })->name('project');

    Route::get('/service', function () {
        return view('front.service');
    })->name('service');

    Route::get('/team', function () {
        return view('front.team');
    })->name('team');

    Route::get('/testimonial', function () {
        return view('front.testimonial');
    })->name('testimonial');
});


Route::prefix('/admin')->name('admin.')->group(function () {
    Route::middleware('guest:admin')->group(function () {
        Route::get('/login', fn() => view('admin.login'))->name('login');
    });

    Route::middleware('admin')->group(function () {
        Route::get('/', fn() => view('admin.index'))->name('index');
        Route::get('/settings', fn() => view('admin.settings.index'))->name('settings');
        Route::get('/skills', fn() => view('admin.skills.index'))->name('skills');
        Route::get('/subscribers', fn() => view('admin.subscribers.index'))->name('subscribers');
        Route::get('/counters', fn() => view('admin.counters.index'))->name('counters');
        Route::get('/services', fn() => view('admin.services.index'))->name('services');
        Route::get('/messages', fn() => view('admin.messages.index'))->name('messages');
        Route::get('/categories', fn() => view('admin.categories.index'))->name('categories');
        Route::get('/projects', fn() => view('admin.projects.index'))->name('projects');
    });
});
