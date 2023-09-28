<?php

namespace App\Http\Controllers;

use App\Models\table;
use Illuminate\Http\Request;

class tableController extends Controller
{
    public function table() {
        $tables = table::all();
        return view('table',compact('tables'));
    }

    public function booking() {
        return view ('bookingtable');
    }

    public function home() {
        return view('home');
    }

    public function history() {
        return view('history');
    }

    public function home2() {
        return view ('home2');
    }

    public function promotion() {
        return view('pro');
    }

    public function payment() {
        return view('payment');
    }


    public function store(Request $request)
    {
        // ดึงข้อมูลจาก Form
        $name = $request->input('name');
        $email = $request->input('email');

        // ส่งข้อมูลไปยังหน้า booking.blade.php
        return view('payment', compact('name', 'email'));
    }





}
