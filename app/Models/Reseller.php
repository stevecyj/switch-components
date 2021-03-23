<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reseller extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $connection = 'mysql_test';
    protected $table = 'cert';
    // protected $fillable = [
    //     '*',
    // ];
    protected $guarded =[];
}
