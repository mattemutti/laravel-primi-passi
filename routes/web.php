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

Route::get('/', function () {

    $data = [

        'name' => 'Matteo',
        'colors' => ['yellow', 'red', 'blue', 'green', 'black', 'white']

    ];

    return view('home', $data);
});


Route::get('/contact', function () {

    $mail = 'mmmmm@mmm.it';
    $cell = 33333333333;
    $address = 'via le mani 66';

    return view('contact', compact('mail', 'cell', 'address'));
})->name('contact');