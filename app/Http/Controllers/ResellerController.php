<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Reseller;
use Carbon\Carbon;

use Faker\Generator;
use Illuminate\Container\Container;
use Illuminate\Support\Str;

class ResellerController extends Controller
{
    public function show(Request $request)
    {
        $hostnames = [];
        // 原生 query
        // $cert = DB::connection('mysql_test')->select('select * from cert');
        // $cert = DB::connection('mysql_test')->table('cert')->get();
        // $cert = DB::connection('mysql_test')->table('cert')->first();
        // $cert = DB::connection('mysql_test')->table('cert')->select('confirmed', 'visitor', 'hostname')->where('hostname', $hostname)->get();

        // 📝直接指定欄位
        // $cert = DB::connection('mysql_test')->table('cert')->where('hostname', $hostname)->value('visitor');

        // 📝是否有記錄
        // $cert = DB::connection('mysql_test')->table('cert')->where('hostname', $hostname)->exists();

        // 📝物件，以 id 為 key
        // $cert = DB::connection('mysql_test')->table('cert')->pluck('hostname', 'id');

        // 📝資料分組，chunk，每次處理3筆資料
        // DB::connection('mysql_test')->table('cert')->orderBy('id')->chunk(3, function ($hosts) use (&$hostnames) {
        //     foreach ($hosts as $host) {
        //         $hostnames[] = $host-> hostname;
        //     }
        // });
        // dd($hostnames);

        // 📝統計
        // DB::connection('mysql_test')->table('cert')->count(); //計數
        // DB::connection('mysql_test')->table('cert')->sum('id'); //加總
        // DB::connection('mysql_test')->table('cert')->avg('id'); //平均
        // DB::connection('mysql_test')->table('cert')->min('id'); //最小
        // DB::connection('mysql_test')->table('cert')->max('id'); //最大

        // 📝基本查詢
        // $cert = DB::connection('mysql_test')->table('cert')->where('main_group', 'like', 'Ve%')->get();
        // $cert = DB::connection('mysql_test')->table('cert')->where('id', '<', 15)->where('main_group', 'like', 'Ve%')->get();
        // $cert = DB::connection('mysql_test')->table('cert')->where('id', '<', 15)->orWhere('main_group', 'like', 'Ve%')->get();

        // 📝time between
        // $t_from ='2021-01-10 10:23:12';
        // $t_to ='2021-02-08 14:20:55';
        // $from = date("Y-m-d H:i:s", strtotime($t_from));
        // $to = date("Y-m-d H:i:s", strtotime($t_to));
        // $cert = DB::connection('mysql_test')->table('cert')->whereBetween('created_at', [$from, $to])->get();

        // 📝IN
        // $cert = DB::connection('mysql_test')->table('cert')->whereIn('id', [1,3,5,7,9])->get();

        // 📝日期
        // $cert = DB::connection('mysql_test')->table('cert')->whereYear('created_at', '2021')->get();
        // $cert = DB::connection('mysql_test')->table('cert')->whereMonth('created_at', '1')->get();
        // $cert = DB::connection('mysql_test')->table('cert')->whereDay('created_at', '7')->get();
        // $cert = DB::connection('mysql_test')->table('cert')->whereDate('created_at', '2021-01-14')->get();
        // $cert = DB::connection('mysql_test')->table('cert')->whereTime('created_at', '02:18:57')->get();
        // $cert = DB::connection('mysql_test')->table('cert')->whereColumn('updated_at', '>', 'created_at')->get();

        // 📝union
        // $cert_01 = DB::connection('mysql_test')->table('cert')->whereMonth('created_at', '1');
        // $cert_03_union = DB::connection('mysql_test')->table('cert')->whereMonth('created_at', '3')->union($cert_01)->get();

        // 📝排序
        // $cert = DB::connection('mysql_test')->table('cert')->orderByDesc('created_at')->get();

        // 📝分組
        // $cert = DB::connection('mysql_test')->table('cert')->selectRaw('created_at,visitor')->get()->groupBy('created_at');

        /*
        |--------------------------------------------------------------------------
        | Eloquent Start
        |--------------------------------------------------------------------------
        |
        */

        // $cert = Reseller::all();

        // foreach(Reseller::all() as $reseller){
        //     dump( $reseller->visitor . ':' . $reseller->main_group);
        // }

        // 📝chunk
        // Reseller::chunk(3, function($resellers){
        //     foreach ($resellers as $reseller) {
        //         if($reseller->confirmed == 0){
        //             continue;
        //         }else{
        //             dump($reseller->hostname . ':' . $reseller->confirmed);
        //         }
        //     }
        // });

        // 📝cursor, 資料量大時
        // $cert = Reseller::all()->filter(function($reseller){
        //     return $reseller->confirmed == 0;
        // });

        // $cert = Reseller::cursor()->filter(function($reseller){
        //     return $reseller->confirmed == 0;
        // });

        // 📝指定欄位
        // $cert = Reseller::where('confirmed', '=' , 1 )->select('confirmed','visitor','hostname')->get();

        // 📝Eloquent 統計
        // $num = Reseller::whereNotNull('hostname')->count();
        // $sum = Reseller::whereNotNull('hostname')->sum('id');
        // $avg = Reseller::whereNotNull('hostname')->avg('id');
        // $min = Reseller::whereNotNull('hostname')->min('id');
        // $max = Reseller::whereNotNull('hostname')->max('id');
        // return response()->json(array('num' => $num, 'sum' => $sum, 'avg'=>$avg, 'min'=>$min, 'max'=>$max));

        // 📝Eloquent 新增
        // $faker = $this->withFaker();
        // $reseller = new Reseller;
        // $reseller->confirmed =$faker->boolean($chanceOfGettingTrue = 50);
        // $reseller->visitor = $faker->ipv4;
        // $reseller->hostname = $faker->word;
        // $reseller->main_group = Str::random(10);
        // $reseller->sub_group = Str::random(10);
        // $reseller->monitor = $faker->boolean;
        // $reseller->alert = $faker->boolean;
        // $reseller->community = Str::random(30);
        // $reseller->email = $faker->unique()->safeEmail;
        // $reseller->note = $faker->text(200);
        // $reseller->created_at =Carbon::now();
        // $reseller->updated_at =Carbon::now();
        // $reseller->save();

        // 📝Eloquent 修改
        // $faker = $this->withFaker();
        // $reseller = Reseller::find(25);
        // $reseller->note = $faker->text(50);
        // $reseller->save();

        // 📝Eloquent 刪除
        // Reseller::destroy(25,29,31);

        // dd($cert);
        // return response($cert);
        // return response()->json($cert);
        // return $cert;
    }

    // 📑關閉黑名單，新增
    public function showmass(Request $request)
    {
        // 📝writing 1
        // $data = $request->all();
        // return Reseller::create($data);

        // 📝writing 2
        $reseller = new Reseller($request->all());
        $reseller->save();
    }

    // 📑關閉黑名單，修改
    public function certUpdate(Request $request)
    {
        $data = $request->all();
        $reseller = Reseller::findOrFail(11);
        $reseller->fill($data);
        $reseller->save();
    }

    /**
     * 獲取 Faker 實例
     *
     * @return Generator
     */
    protected function withFaker()
    {
        return Container::getInstance()->make(Generator::class);
    }
}
