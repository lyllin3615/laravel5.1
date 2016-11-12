<?php
namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Student extends Model
{
    // ָ������
    protected $table = 'student';
    // ָ������
    protected $primaryKey = 'id';
    
    // �ر��Զ�ʱ��, true���� false�ر�
    public $timestamps = false;
    
    // ���������ֶ�,������ create��ط���ʱ
    public $fillable = ['name','age','sex'];
    
    //ָ��ĳЩ�ֶβ�����������ֵ
    // public $guarded = [];
    
    // �����Զ�ʱ���ʽ
    protected function getDateFormat(){
        return time();
    }
    
    // ��ֹʱ���ʽ��
    protected  function asDateTime($value)
    {
        return $value;
    }    
    
  
    // ��ȡ����
    public static function getAll()
    {
       return  self::all();
    }
    
    // ����ֱ��������ʹ��ԭʼ�ı�ʾ
    public static function getAllRecord()
    {
        $res = DB::select("select * from student where id <= ?",[3]);
//         $sql = self::toSql();
//         print_r($sql);
        return $res;
         
           
    }
    
    // ��ȡ��������ӵ�id
    public static function insertData()
    {
        $res = DB::table('address')->insertGetId(['student_id'=>3,'address'=>'beijing']);
        return $res;
    }
}