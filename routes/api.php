<?php

use Illuminate\Support\Facades\Route;

Route::get('/posts', function () {
    return response()->json ([
        "posts" => [
            [
                "title" => "First Post"
            ]
        ]
    ] );
} );