<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use GuzzleHttp\Client;
use App\Http\Services\ShortUrlService;

class UserController extends Controller
{
    public function show(User $user)
    {
        // return view('ex1', ['user' => $user]);
        return response()->json(['user' => $user]);
    }

    public function chkrequest(Request $request, $user)
    {
        $path = $request->path();
        $url = $request->url();
        $input = $request->all();
        $request_arr = ['request'=> $request,'path'=>$path,'url'=>$url,'user'=>$user];
        // dd($request_arr);
        // dump($request_arr);
        // dump($request->input('aa'));
        return response()->view('welcome');
        // return response()->json($input);
    }

    // 縮網址
    public function sharedUrl($id)
    {
        $service = new ShortUrlService();
        $url = $service->makeShortUrl("http://localhost:3000/$id");
        return response(['url' =>$url]);
    }
}
