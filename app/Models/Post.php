<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    use HasFactory;

    public static function superInsert($title, $content)
    {
        return DB::statement('call super_insert_procedure(?,?)', [$title,$content]);
    }

    public static function superSelect($id)
    {
        return DB::select('call super_select_procedure(?)', [$id]) ;
    }
}
