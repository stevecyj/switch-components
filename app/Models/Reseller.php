<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reseller extends Model
{
    use HasFactory;
    protected $connection = 'mysql_test';
    protected $table = 'cert';
    // protected $fillable = [
    //     '*',
    // ];
    protected $guarded =['hostname'];
}
