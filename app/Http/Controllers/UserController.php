<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function getUser()
    {
        return response()->json([
            'message'=>'Mantab'
        ]);

    }

    public function addUser()
    {
        $U = User::create([
            'name'=>'Rafsanjaya',
            'tgl_lahir'=> date('1993-08-12 00:00:00'),
        ]);
        return response()->json($U);
    }
}
