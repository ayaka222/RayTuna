<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    // ブラックリスト
    protected $guarded = ['id'];
}
