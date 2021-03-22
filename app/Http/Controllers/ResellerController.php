<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResellerController extends Controller
{
    public function show(Request $request, $hostname)
    {
        // $cert = DB::connection('mysql_test')->select('select * from cert');
        // $cert = DB::connection('mysql_test')->table('cert')->get();
        // $cert = DB::connection('mysql_test')->table('cert')->first();
        // $cert = DB::connection('mysql_test')->table('cert')->select('confirmed', 'visitor', 'hostname')->where('hostname', $hostname)->get();

        // 直接指定欄位
        // $cert = DB::connection('mysql_test')->table('cert')->where('hostname', $hostname)->value('visitor');

        // 是否有記錄
        // $cert = DB::connection('mysql_test')->table('cert')->where('hostname', $hostname)->exists();

        // 物件，以 id 為 key
        $cert = DB::connection('mysql_test')->table('cert')->pluck('hostname', 'id');

        // dd($cert);
        // return response()->json($cert);
        return $cert;
    }
}
