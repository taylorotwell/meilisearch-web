<?php

use App\Models\Movie;
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

// private: f74b11819a296ad9e100207e5de5c95987fe9a0367ab69d95fc58896c16332eb
// public: 9ee6561c62c008cc61690f35b0272b2d8c4736efd7d323d02b64fbebd0753479

Route::get('/', function () {
    return Movie::search($request->query('search', 'Star Wars'))->get();
});
