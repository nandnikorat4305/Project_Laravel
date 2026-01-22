<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Controllers\RecipeController;

/*
|--------------------------------------------------------------------------
| Home
|--------------------------------------------------------------------------
*/
Route::get('/', [RecipeController::class, 'home'])->name('home');


/*
|--------------------------------------------------------------------------
| Recipes
|--------------------------------------------------------------------------
*/
Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes.index');

/* Protect Add Recipe page */
Route::get('/recipes/create', function () {

    if (!session()->has('logged_in')) {
        return redirect('/login');
    }

    return view('recipes.create');

})->name('recipes.create');

/* Store recipe (DB) */
Route::post('/recipes/store', [RecipeController::class, 'store'])
    ->name('recipes.store');

/* Show single recipe */
Route::get('/recipes/{id}', [RecipeController::class, 'show'])
    ->name('recipes.show');

/*
|--------------------------------------------------------------------------
| Contact
|--------------------------------------------------------------------------
*/
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', function (Request $request) {
    return back()->with('success', 'Message sent successfully!');
})->name('contact.submit');

/*
|--------------------------------------------------------------------------
| Login / Logout
|--------------------------------------------------------------------------
*/
Route::get('/login', function () {

    return view('login');
});

Route::post('/login', function (Request $request) {

    $user = User::where('email', $request->email)->first();

    if ($user && Hash::check($request->password, $user->password)) {
        session(['logged_in' => true]);
        return redirect('/recipes');
    }

    return back()->with('error', 'Invalid login details');
});

Route::get('/logout', function () {
    session()->forget('logged_in');
    return redirect('/login');
});
