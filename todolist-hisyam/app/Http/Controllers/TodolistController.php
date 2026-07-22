<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todolist;

class TodolistController extends Controller
{
        public function index() {
            $nama = "HISYAM";
            $data = Todolist::get(); // Mengambil semua data dari tabel tb_todolist
            return view('pages.todolist.index',
            [
                'data_todolist' => $data, // definisikan variabel data_todolist untuk digunakan di view
                'nama' => $nama

            ]);
        }

        public function addTodo() {
            return view('pages.todolist.add-todo');
        }

        public function storeTodo(Request $request) {
            $validatedData = $request->validate([
                'task' => 'required|string|max:255',
                'date' => 'nullable|date',
            ]); 
            dd($request->all());
        }
}
