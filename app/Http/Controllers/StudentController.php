<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Models\Student;
use App\Http\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    // չʾ����
    public function myDisplay()
    {
//         print_r(App()->environment()); 
//        echo  \App::environment(); exit;
//           echo config('app.timezone');
        $arr['error'] = 0;
        $arr['message'] = 'lin3615';
        $list['list'] = $arr;
        // ����model�еķ���
        $res = Student::getAllRecord();
        $list['res'] = $res;
        

        return view('student/myDisplay', $list);
    }
    // ԭʼ��ѯ
  public function test1()
  {
      // ԭʼ��ѯ 
      // ����
      $res = DB::select("select * from student where id < ?",[3]);
      print_r($res);
// ����
//       //$bool = DB::insert("insert into student(name,age,sex) values(?,?,?)",['linyuanlong','28','man']);
//       // var_dump($bool);
//       print_r($res);
  // ����    
//       $flag = DB::update("update student set sex=? where id = ?",['age', 1]);
//       var_dump($flag);
      
//       $res = DB::select("select * from student");
//       dd($res);
    // ɾ��
//     $flag = DB::delete("delete from student where id > ?",[1]);
//     var_dump($flag);
  }  
  
  // �ò�ѯ������֮����
  public function query1()
  {
        //      ����,�����ز���ֵ
        //      $bool = DB::table('student')->insert(['name'=>'test','age'=>29]);
        //      var_dump($bool);
        //         ���ص�����id
        //         $lastId = DB::table('student')->insertGetId(['name'=>'fuck','age'=>31,'sex'=>'man']);
        //         var_dump($lastId);
    //     ���������¼
        $flag = DB::table('student')->insert([['name'=>'fuck','age'=>31,'sex'=>'man'],['name'=>'fucktest','age'=>41,'sex'=>'feman']]);
        var_dump($flag);
  }
  // �ò�ѯ������֮����
  public function query2()
  {
    //       $flag = DB::table('student')->where('id',4)->update(['name'=>'lin']);
    //       var_dump($flag);
    // ����
    //         $flag = DB::table('student')->increment('age',4);
    //         var_dump($flag);
    //�Լ�
    // $flag = DB::table('student')->decrement('age',4);
    // var_dump($flag);
          // $flag = DB::table('student')->where('id',2)->decrement('age',4);
          // var_dump($flag);
  }
  
  // ������ɾ������
  public function query3()
  {
        //       $res = DB::table('student')->where('id',5)->delete();
        //       var_dump($res);
        // $res = DB::table('student')->where('id','>=',5)->delete();
        // var_dump($res);
        
     // DB::table('student')->truncate();
  }
  
  // ��������������
  public function query4()
  {
      // ��ȡ��������
//       $res = DB::table('student')->get();
//       print_r($res);

      //��ȡ��һ����¼
//       $res = DB::table('student')->orderBy('id','desc')->first();
//       dd($res);
    
      // ��ȡ��������������
//       $res = DB::table('student')->where('id','>',1)->get();
//       dd($res);

      
//       $res1 = DB::table('student')->whereRaw('id > ? and age > ?',[1,28])->get();
//       dd($res1);

      // ����ָ������,�� name�ֶ�
//       $name = DB::table('student')->pluck('id');
//       dd($name);
      // ����ָ������,�� name�ֶ�,����id��Ϊ����
        //         $name = DB::table('student')->lists('name','sex');
        //         print_r($name);
        
      //ָ�����ص��ֶ�
//       $res = DB::table('student')->select('id','name')->get();
//       print_r($res);
      
      //����ÿ��ȡ�ض��ټ�¼, ��ÿ��2��
//       $res = DB::table('student')->chunk(2,function($student){
//          print_r($student);
//             return false; // ��ֹ��ֻһ��
//             if()
//             {
//                 return false;
//             } 
//       });
        

 
  }
  
      // ������֮�ۺϺ���
      public function query5()
      {
//         $res = DB::table('student')->count();
//         print_r($res);
            
//           $res = DB::table('student')->max('age');
//           print_r($res);

//                     $res = DB::table('student')->min('age');
//                     print_r($res);
//                     $res = DB::table('student')->avg('age');
//                     print_r($res);
//                     $res = DB::table('student')->sum('age');
//                     print_r($res);
      }
      
     // orm ʹ�� 
    public function orm1()
    {
        // ��ѯ��������
        // all()����
//         $student = Student::all();
//         dd($student);

        // find($where)������ѯ
//            $student = Student::find(1);
//            dd($student); 

//         $student = Student::findOrFail(111);
//         print_r($student);
//         $student = Student::getAll(); // ��model�л�ȡ���
//         dd($student);

            // ����model�еķ���       
//         $res = Student::getAllRecord();
//         print_r($res);
            // ����������ѯ��һ����¼
//         $res = Student::where('id', '>', 1)
//         ->orderBy('id', 'desc')
//         ->first();
//         dd($res);

//         Student::chunk(2,function($student){
//             print_r($student);
//         });

        // �ۺϺ���
//         $res = Student::count();
//         print_r($res);

//             $res = Student::where('id', '>', 1)->max('age');
//             print_r($res);
            // �����¼
//        $flag = Student::insertData();
//        var_dump($flag);
        
        
    }
    
    // ʹ��orm��������,Ҫ���� updated_at,created_atʱ���ֶ�,���� studentģ���йر�
    public function orm2()
    {
        // ʹ��ģ����������
//        $student = new Student();
//        $student->name = 'lyl3615';
//        $student->age = 33;
//        $student->sex = 'feman';
//        $res = $student->save();
//        var_dump($res); // true

        // ʹ��ģ��create������������,Ҫ�� model���� fillable�ֶ�����
//         $res = Student::create(['name'=>'fuck', 'age'=>88]);
//         print_r($res);

        //�����Բ����û�����ʱ�����ӣ�û��ʱ��������,����ȫ����¼
//         $res = Student::firstOrCreate(['name'=>'lin3615000', 'age'=>100]);
//         var_dump($res);

        
    }
    
    // ͨ��ģ�͸�������
    public function orm3()
    {
        // ͨ��ģ�͸���
//         $student = Student::find(11);
//         $student->name = 'yes';
//         $student->sex = 'man';
//         $student->age = 100;
//         $res = $student->save();
//         var_dump($res);

            // ��������
//             $num = Student::where('id', '>',10)->update(['age'=>22]);
//             print_r($num);

    }
    
    
    // ͨ��ģ��ɾ������
    public function orm4()
    {
        // ͨ��ģ��ɾ��
//         $student = Student::find('12');
//         $bool = $student->delete();
//         var_dump($bool);

            // ͨ������ɾ��
//             $num = Student::destroy(11);
//             var_dump($num);
            
//                 $num = Student::destroy(7,9);
//                 var_dump($num);

//                 $num = Student::destroy([7,9]);
//                 var_dump($num);

//             $num = Student::where('id','>=',10)->delete();
//             var_dump($num);
        
        
    }
    
    // ������Ŀ¼�е� model
    public function testModel()
    {
        $res = Test::getTest();
        print_r($res);
    }
    
    // controller �е� request����(get,post,file,input,server ect)
    public function request1(Request $request)
    {
        // ��ȡ���ݹ����� ����
//         echo $request->input('name');
//         echo $request->input('age', 100); // ָ��Ĭ��ֵ

        // �ж��Ƿ�ָ���Ĳ���
//         if($request->has('name'))
//         {
//             echo 'Yes';
//         }else {
//             echo 'no';
//         }

            // ��ȡ���еĲ���
//            $res =  $request->all();
//            print_r($res);

            //�ж���������
           // echo $request->method(); // GET
           
//            $flag = $request->isMethod('GET');
//            var_dump($flag);

//                $flag = $request->isMethod('post');
//                var_dump($flag);

//                   $flag = $request->ajax();
//                   var_dump($flag); 

//                     $res = $request->is('student/*');
//                     var_dump($res);
                // ��ȡ��ǰ��url,����������
                $res = $request->url();
                print_r($res);


    }
    
    // sessionӦ��
    public function session1(Request $request)
    {
        // http request session()
//         $request->session()->put('key1', date('Y-m-d H:i:s', time()));
//         echo $request->session()->get('key1');

        // session()
//         session()->input('key','value');
//         echo session()->get('key');

        // Session ��
        // ��ȡ session��ֵ
//         Session::put('key3', date('Y-m-d H:i:s', time()));
        // ��ȡ session��ֵ
//         echo Session::get('key3', 'default'); // �����ڣ���ȡĬ��ֵ
        
        //�������ֵ
//         Session::put(['key4'=>'value4']);
//         echo Session::get('key4', 'default');

            // �����ݷ���session������
//         Session::push('key', '1111');
//         Session::push('key','0000');
//         $arr = Session::get('key');
//         print_r($arr);

//         $res = Session::pull('key', 'kkkk'); // �ó�����Ȼ������ session
//         print_r($res);

       // print_r(Session::all()); // ��ȡ���е� session
       
      //  var_dump(Session::has('key1vv')); // �ж�ָ�����Ƿ����
      
     //   Session::forget('key4'); // ɾ��ָ����ֵ
     // Session::flush('key4'); // ������ڵ� session
     
        // �ݴ����ݣ���һ�ο���ȡ�����ڶ���ȡ��������֮������
//         Session::flash('my-flash', 'my-flash');
//         echo Session::get('my-flash');
            print_r(Session::all());
        
    }
    
    // response
    public function response1()
    {
        // ��json���ݸ�ʽ����
//         $data = array('error'=>0, 'msg'=>'success');
//         return response()->json($data);

      // �ض���
      // return redirect('student/session1');
      // �ض���ͬʱ�Ѳ������ݴ��session���أ�
     // return redirect('student/session1')->with('yes', 'ok');
      // ��һ����ת
      //  return redirect()->action('StudentController@session1')->with('key000','value');
      
      // return redirect()->route('·���еı���')->with('key111', '----');
      
        // ������һҳ��
     //  return redirect()->back();
    }
    
    
}