<?php

namespace App\Http\Controllers;

use App\Models\table;
use Illuminate\Http\Request;

class testcontroller extends Controller
{
    public function test(){
        $id = array(
            array(
                "count" => "8",
            ),
            array(
                "count" => "8",
            ),
            array(
                "count" => "8",
            ),
            array(
                "count" => "8",
            ),
            array(
                "count" => "8",
            ),
            array(
                "count" => "8",
            ),
            array(
                "count" => "8",
            ),
            array(
                "count" => "8",
            ),
            array(
                "count" => "8",
            ),
            array(
                "count" => "8",
            ),
            array(
                "count" => "8",
            ),
            array(
                "count" => "8",
            ),
            array(
                "count" => "8",
            ),
            array(
                "count" => "8",
            ),
            array(
                "count" => "8",
            ),
            array(
                "count" => "8",
            ),
            array(
                "count" => "5",
            ),

            array(
                "count" => "5",
            ),
            array(
                "count" => "5",
            ),
            array(
                "count" => "5",
            ),
            array(
                "count" => "5",
            ),
            array(
                "count" => "5",
            ),
            array(
                "count" => "5",
            ),
            array(
                "count" => "5",
            ),
            array(
                "count" => "5",
            ),
            array(
                "count" => "5",
            ),
            array(
                "count" => "5",
            ),
            array(
                "count" => "5",
            ),
            array(
                "count" => "5",
            ),
            array(
                "count" => "5",
            ),
            array(
                "count" => "5",
            ),
            array(
                "count" => "5",
            ),
            array(
                "count" => "5",
            ),
            array(
                "count" => "5",
            ),
            array(
                "count" => "5",
            ),
            );
            foreach($id as $u ){
                $id = new table;
                $id->count = $u['count'];

                $id->save();
            }

    }
}
