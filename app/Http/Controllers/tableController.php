<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\product;
use App\Models\single;
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
        return view('home2');
    }

    public function promotion() {
        $pro = product::all();
        return view('pro',compact('pro'));
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

    public function adminhome(){
        return view('adminhome');
    }

    // public function bdata() {
    //     return view('bdata');
    // }

    public function storelayout() {
        $tables = table::all();
        return view('storelayout',compact('tables'));
    }

    public function product() {
        return view('product');

    }
    public function product_menu(Request $request) {
        $menu = new product;
        $menu->name_menu = $request->input('name_menu');
        $menu->price = $request->input('price');
        $menu->save();
        return redirect('/product');

    }


    public function deleteAll()
    {
        // Update the status field of all records to 0
        booking::truncate();

        Table::query()->update(['status' => 0]);

        // Redirect back to the storelayout page or any other page you prefer
        return redirect()->route('storelayout')->with('success', 'All tables have been set to available.');
    }
    public function refreshAll()
    {
        // Update the status field of all records to 0

        Table::query()->update(['status' => 0]);

        // Redirect back to the storelayout page or any other page you prefer
        return redirect()->route('storelayout')->with('success', 'All tables have been set to available.');
    }
    public function bdata()
    {
        $bookings = booking::all();
        return view('bdata', compact('bookings'));
    }
    public function addsingle()
    {
        $sing = single::all();

        return view('addsingle',compact('sing'));
    }
    public function addsingleInsert(Request $request)
    {
        $single = new single;
        $single->name = $request->input('single_name');
        $single->date = $request->input('date');
        $single->save();
        return redirect('/addsingle');
    }
    public function showsingle()
    {
        $sing = single::all();
        return view('showsingle',compact('sing'));
    }
    public function deleteSingle($id)
{
    $single = single::findOrFail($id);
    $single->delete();

    return redirect('/addsingle')->with('success', 'ลบข้อมูลเรียบร้อยแล้ว');
}




}
