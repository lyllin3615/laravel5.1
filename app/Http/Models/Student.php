<?php
namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Student extends Model
{
    // 指定表名
    protected $table = 'student';
    // 指定主键
    protected $primaryKey = 'id';
    
    // 关闭自动时间, true开， false关闭
    public $timestamps = false;
    
    // 允许插入的字段,当调用 create相关方法时
    public $fillable = ['name','age','sex'];
    
    //指定某些字段不允许批量赋值
    // public $guarded = [];
    
    // 设置自动时间格式
    protected function getDateFormat(){
        return time();
    }
    
    // 防止时间格式化
    protected  function asDateTime($value)
    {
        return $value;
    }    
    
  
    // 获取数据
    public static function getAll()
    {
       return  self::all();
    }
    
    // 可以直接在里面使用原始的表示
    public static function getAllRecord()
    {
        $res = DB::select("select * from student where id <= ?",[3]);
//         $sql = self::toSql();
//         print_r($sql);
        return $res;
         
           
    }
    
    // 获取插入后增加的id
    public static function insertData()
    {
        $res = DB::table('address')->insertGetId(['student_id'=>3,'address'=>'beijing']);
        return $res;
    }
}