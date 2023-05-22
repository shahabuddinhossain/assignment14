<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::post('/submit', function (Request $request) {
    $email = $request->input('email');

    return response()->json([
        'success' => true,
        'message' => 'Form submitted successfully.'
    ]);
});
