<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function getCalendar() {
        return view('pages.calendar');  
    }

    public function getDetail($id) {
        return view('pages.detail', [
            'id' => $id
        ]);
    }
}
