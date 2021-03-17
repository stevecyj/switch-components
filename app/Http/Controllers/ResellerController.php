<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResellerController extends Controller
{
    public function show(Request $request)
    {
        $cert = DB::connection('mysql_test')->table('cert')->get();
        // return response()->json($cert);
        return $cert;
    }
}
