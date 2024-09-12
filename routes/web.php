<?php

use Illuminate\Http\Request;
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
    return view('welcome');
});

Route::prefix('/blog')->name('blog.')->group(function () {
    Route::get('/', function (Request $request) {
        return [
            'title' => 'Blog',
            'content' => 'This is a blog page',
            'page' => $request->input('page'),
            'route' => route('blog.show', [
                'slug' => 'my-first-post',
                'id' => 1,
            ]),
        ];
    })->name('index');
    Route::get('/{slug}-{id}', function (string $slug, string $id) {
        return [
            'title' => 'Blog',
            'slug' => $slug,
            'id' => $id,
        ];
    })->where([
        'id' => '[0-9]+',
        'slug' => '[a-z0-9-]+',
    ])->name('show');
});


