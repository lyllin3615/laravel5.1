<?php
namespace app\Http\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Test extends Model
{
    public static function getTest()
    {
        return DB::table('student')->get();
    }
}