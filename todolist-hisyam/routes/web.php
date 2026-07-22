<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodolistController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\BerandaController;

// PENERAPAN CONTROLLER PADA BERANDA
Route::get('/', [BerandaController::class, 'getBeranda']);

// PENERAPAN CONTROLLER PADA CALENDAR
Route::get('/calendar', [CalendarController::class, 'getCalendar']);
Route::get('/calendar/{id}', [CalendarController::class, 'getDetail']);

// PENERAPAN CONTROLLER PADA TODOLIST
Route::get('/todolist', [TodolistController::class, 'index']); // menampilkan daftar tugas

Route::get('/todolist/add', [TodolistController::class, 'addTodo']);
Route::post('/todolist', [TodolistController::class, 'storeTodo']);
