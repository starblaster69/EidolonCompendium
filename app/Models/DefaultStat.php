<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DefaultStat extends Model
{

    public static function getStats(string $string, $data) {
        return DefaultStat::where($string, $data)->get();
    }

}
