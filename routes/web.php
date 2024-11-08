<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome' );
});

Route::get('/professionals', function () {
    $professionals = [
        ["name" => "John Doe", "skill" => 75, "id" => "1"],
        ["name" => "Jane Doe", "skill" => 80, "id" => "2"],
        ["name" => "John Smith", "skill" => 85, "id" => "3"],
        ["name" => "Jane Smith", "skill" => 90, "id" => "4"],
        ["name" => "John Johnson", "skill" => 95, "id" => "5"],

    ];
    return view('professionals.index', ["greetings" => "hi", "professionals" => $professionals ]);
});

Route::get('/professionals/add', function () {
    return view('professionals.add');
});

Route::get('/professionals/{id}', function ($id) {

    return view('professionals.show', ["id" => $id]);
});
