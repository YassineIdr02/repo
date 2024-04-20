<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //    
    public function getNames()
    {
        // Dummy list of names
        $names = ['John', 'Alice', 'Bob', 'Emily', 'Michael'];

        // Return the list of names
        return response()->json([
            'names' => $names
        ], 200);
    }
}
