<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = [
        'numbers' => [1,23,1,412,4,512,412,5,124,561,24,6,125,15,124],
        'name' => 'Ginetta',
        'content' => 'Lorem ispum datum ecciaone daje ispum datum ecciaone daje ispum datum ecciaone daje ispum datum ecciaone daje ispum datum ecciaone daje ispum datum ecciaone daje ispum datum ecciaone daje ispum datum ecciaone daje ispum datum ecciaone daje ispum datum ecciaone daje ispum datum ecciaone daje ispum datum ecciaone daje ispum datum ecciaone daje ispum datum ecciaone daje ispum datum ecciaone daje ispum datum ecciaone daje ispum datum ecciaone daje ispum datum ecciaone daje ispum datum ecciaone daje ispum datum ecciaone daje ispum datum ecciaone daje ispum datum ecciaone daje ispum datum ecciaone daje ispum datum ecciaone daje ispum datum ecciaone daje ispum datum ecciaone daje ispum datum ecciaone daje ispum datum ecciaone daje ispum datum ecciaone daje ispum datum ecciaone daje ispum datum ecciaone daje ispum datum ecciaone daje ispum datum ecciaone daje ispum datum ecciaone daje ispum datum ecciaone daje ispum datum ecciaone daje ispum datum ecciaone daje ispum datum ecciaone daje ispum datum ecciaone daje ispum datum ecciaone daje ispum datum ecciaone daje ispum datum ecciaone daje ispum datum ecciaone daje ispum datum ecciaone daje ispum datum ecciaone daje ispum datum ecciaone daje ispum datum ecciaone daje ispum datum ecciaone daje '
    ];

    return view('home', $data);
})->name('homepage');

Route::get('/gino-e-arrivato-in-town', function () {
    $data = [
        'teamMembers' => [
            [
                'name' => 'Gina',
                'role' => 'CEO',
            ],
            [
                'name' => 'Gino',
                'role' => 'Warehouse Manager',
            ],
            [
                'name' => 'Luchetto',
                'role' => 'Administration Advisor',
            ],
            [
                'name' => 'Lorella',
                'role' => 'CTO',
            ]
        ]

    ];

    return view('about-us', $data);
})->name('about-us');