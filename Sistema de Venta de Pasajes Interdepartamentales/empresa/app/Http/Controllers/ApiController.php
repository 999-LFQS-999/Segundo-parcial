<?php

namespace App\Http\controllers;

use Illiminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class Controller extends Controller
{
    public function pasajeros ($ci = null){
        if ($codigo){
            $pasajero = DB::table('ci')->where('ci',$ci)->first();
            return response()->json($pasajero);
        }
        return response()->json('DB::table('pasajeros')');
    }
}