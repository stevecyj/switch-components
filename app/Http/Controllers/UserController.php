<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Services\ShortUrlService;
use App\Http\Services\OpenDataUbikeService;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function show(User $user)
    {
        // return view('ex1', ['user' => $user]);
        return response()->json(['user' => $user]);
    }

    // request
    public function chkrequest(Request $request, $user)
    {
        $path = $request->path();
        $url = $request->url();
        $input = $request->all();
        $request_arr = ['request'=> $request,'path'=>$path,'url'=>$url,'user'=>$user];
        // dd($request_arr);
        // dump($request_arr);
        // dump($request->input('aa'));
        // return response()->view('welcome');
        return response()->json($input);
    }

    // response
    public function chkresponse(Response $response)
    {
        return response('Oops!', 500)
            ->header('header_name', 'header_value')
            ->cookie('cookie_name', 'cookie_value');

        // return response()->json(['name' =>'Nicolas']);

        // $dl_path = storage_path('app/public/docs/linux命令大全.pdf');
        // return response()->download($dl_path);
    }

    // 縮網址
    public function sharedUrl($id)
    {
        $service = new ShortUrlService();
        $url = $service->makeShortUrl("http://localhost:3000/$id");
        return response(['url' =>$url]);
    }

    // open data
    public function openDataUbike(Request $request)
    {
        // dd($request->headers);
        $service = new OpenDataUbikeService();
        $ubkie_data = $service->getUbikeData();
        return response(['ubikeData' =>$ubkie_data]);
    }
}
