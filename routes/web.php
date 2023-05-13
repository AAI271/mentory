<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia; // We are going to use this class to render React components

Route::get('/', function () {
    return Inertia::render('home'); // Отображение страницы "Home" из папки resources/js/Pages/Home.vue
});

Route::get('lessons/{lesson}', function () {
    return Inertia::render('lesson'); // Отображение страницы "Lesson" из папки resources/js/Pages/Lesson.vue
});
Route::get('lessons/{lesson}', function () {
    return Inertia::render('lesson');
})->name('lesson');

