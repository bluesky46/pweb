<?php

namespace App\Http\Controllers;

use App\Models\booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class bookingController extends Controller
{

    public function storeBooking(Request $request)
    {
        // Create a new booking record with the provided data
        $booking = new booking();
        $booking->table_number = $request->input('table_number');
        $booking->name = $request->input('user_email');
        $booking->count = $request->input('count');
        $booking->phone = $request->input('phone');
        $booking->save();

        // Update the status of selected tables to 1
        $selectedTables = explode(',', $request->input('table_number'));
        DB::table('tables')->whereIn('id', $selectedTables)->update(['status' => 1]);

        Auth::user()->email  = explode(',', $request->input('user_email'));


        return redirect()->route('home2');
    }
}
