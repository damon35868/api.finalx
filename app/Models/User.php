<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;


    // 覆盖所有模型参数
    public function getRouteKeyName()
    {
        return 'id';
    }
}
