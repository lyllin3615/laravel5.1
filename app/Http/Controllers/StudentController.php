<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Models\Student;
use App\Http\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    // 展示数据
    public function myDisplay()
    {
//         print_r(App()->environment()); 
//        echo  \App::environment(); exit;
//           echo config('app.timezone');
        $arr['error'] = 0;
        $arr['message'] = 'lin3615';
        $list['list'] = $arr;
        // 调用model中的方法
        $res = Student::getAllRecord();
        $list['res'] = $res;
        

        return view('student/myDisplay', $list);
    }
    // 原始查询
  public function test1()
  {
      // 原始查询 
      // 查找
      $res = DB::select("select * from student where id < ?",[3]);
      print_r($res);
// 插入
//       //$bool = DB::insert("insert into student(name,age,sex) values(?,?,?)",['linyuanlong','28','man']);
//       // var_dump($bool);
//       print_r($res);
  // 更新    
//       $flag = DB::update("update student set sex=? where id = ?",['age', 1]);
//       var_dump($flag);
      
//       $res = DB::select("select * from student");
//       dd($res);
    // 删除
//     $flag = DB::delete("delete from student where id > ?",[1]);
//     var_dump($flag);
  }  
  
  // 用查询构造器之插入
  public function query1()
  {
        //      插入,并返回布尔值
        //      $bool = DB::table('student')->insert(['name'=>'test','age'=>29]);
        //      var_dump($bool);
        //         返回递增的id
        //         $lastId = DB::table('student')->insertGetId(['name'=>'fuck','age'=>31,'sex'=>'man']);
        //         var_dump($lastId);
    //     插入多条记录
        $flag = DB::table('student')->insert([['name'=>'fuck','age'=>31,'sex'=>'man'],['name'=>'fucktest','age'=>41,'sex'=>'feman']]);
        var_dump($flag);
  }
  // 用查询构造器之更新
  public function query2()
  {
    //       $flag = DB::table('student')->where('id',4)->update(['name'=>'lin']);
    //       var_dump($flag);
    // 自增
    //         $flag = DB::table('student')->increment('age',4);
    //         var_dump($flag);
    //自减
    // $flag = DB::table('student')->decrement('age',4);
    // var_dump($flag);
          // $flag = DB::table('student')->where('id',2)->decrement('age',4);
          // var_dump($flag);
  }
  
  // 构造器删除数据
  public function query3()
  {
        //       $res = DB::table('student')->where('id',5)->delete();
        //       var_dump($res);
        // $res = DB::table('student')->where('id','>=',5)->delete();
        // var_dump($res);
        
     // DB::table('student')->truncate();
  }
  
  // 构造器查找数据
  public function query4()
  {
      // 获取所有数据
//       $res = DB::table('student')->get();
//       print_r($res);

      //获取第一条记录
//       $res = DB::table('student')->orderBy('id','desc')->first();
//       dd($res);
    
      // 获取多条，根据条件
//       $res = DB::table('student')->where('id','>',1)->get();
//       dd($res);

      
//       $res1 = DB::table('student')->whereRaw('id > ? and age > ?',[1,28])->get();
//       dd($res1);

      // 返回指定的列,如 name字段
//       $name = DB::table('student')->pluck('id');
//       dd($name);
      // 返回指定的列,如 name字段,并以id作为键名
        //         $name = DB::table('student')->lists('name','sex');
        //         print_r($name);
        
      //指定返回的字段
//       $res = DB::table('student')->select('id','name')->get();
//       print_r($res);
      
      //分批每次取回多少记录, 如每次2条
//       $res = DB::table('student')->chunk(2,function($student){
//          print_r($student);
//             return false; // 中止，只一次
//             if()
//             {
//                 return false;
//             } 
//       });
        

 
  }
  
      // 构造器之聚合函数
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
      
     // orm 使用 
    public function orm1()
    {
        // 查询所有数据
        // all()方法
//         $student = Student::all();
//         dd($student);

        // find($where)条件查询
//            $student = Student::find(1);
//            dd($student); 

//         $student = Student::findOrFail(111);
//         print_r($student);
//         $student = Student::getAll(); // 从model中获取结果
//         dd($student);

            // 调用model中的方法       
//         $res = Student::getAllRecord();
//         print_r($res);
            // 根据条件查询第一条记录
//         $res = Student::where('id', '>', 1)
//         ->orderBy('id', 'desc')
//         ->first();
//         dd($res);

//         Student::chunk(2,function($student){
//             print_r($student);
//         });

        // 聚合函数
//         $res = Student::count();
//         print_r($res);

//             $res = Student::where('id', '>', 1)->max('age');
//             print_r($res);
            // 插入记录
//        $flag = Student::insertData();
//        var_dump($flag);
        
        
    }
    
    // 使用orm增加数据,要增加 updated_at,created_at时间字段,可在 student模型中关闭
    public function orm2()
    {
        // 使用模型增加数据
//        $student = new Student();
//        $student->name = 'lyl3615';
//        $student->age = 33;
//        $student->sex = 'feman';
//        $res = $student->save();
//        var_dump($res); // true

        // 使用模型create方法新增数据,要在 model设置 fillable字段属性
//         $res = Student::create(['name'=>'fuck', 'age'=>88]);
//         print_r($res);

        //以属性查找用户，有时不增加，没有时，就增加,返回全部记录
//         $res = Student::firstOrCreate(['name'=>'lin3615000', 'age'=>100]);
//         var_dump($res);

        
    }
    
    // 通过模型更新数据
    public function orm3()
    {
        // 通过模型更新
//         $student = Student::find(11);
//         $student->name = 'yes';
//         $student->sex = 'man';
//         $student->age = 100;
//         $res = $student->save();
//         var_dump($res);

            // 批量更新
//             $num = Student::where('id', '>',10)->update(['age'=>22]);
//             print_r($num);

    }
    
    
    // 通过模型删除数据
    public function orm4()
    {
        // 通过模型删除
//         $student = Student::find('12');
//         $bool = $student->delete();
//         var_dump($bool);

            // 通过主键删除
//             $num = Student::destroy(11);
//             var_dump($num);
            
//                 $num = Student::destroy(7,9);
//                 var_dump($num);

//                 $num = Student::destroy([7,9]);
//                 var_dump($num);

//             $num = Student::where('id','>=',10)->delete();
//             var_dump($num);
        
        
    }
    
    // 调用子目录中的 model
    public function testModel()
    {
        $res = Test::getTest();
        print_r($res);
    }
    
    // controller 中的 request对象(get,post,file,input,server ect)
    public function request1(Request $request)
    {
        // 获取传递过来的 参数
//         echo $request->input('name');
//         echo $request->input('age', 100); // 指定默认值

        // 判断是否指定的参数
//         if($request->has('name'))
//         {
//             echo 'Yes';
//         }else {
//             echo 'no';
//         }

            // 获取所有的参数
//            $res =  $request->all();
//            print_r($res);

            //判断请求类型
           // echo $request->method(); // GET
           
//            $flag = $request->isMethod('GET');
//            var_dump($flag);

//                $flag = $request->isMethod('post');
//                var_dump($flag);

//                   $flag = $request->ajax();
//                   var_dump($flag); 

//                     $res = $request->is('student/*');
//                     var_dump($res);
                // 获取当前的url,但不带参数
                $res = $request->url();
                print_r($res);


    }
    
    // session应用
    public function session1(Request $request)
    {
        // http request session()
//         $request->session()->put('key1', date('Y-m-d H:i:s', time()));
//         echo $request->session()->get('key1');

        // session()
//         session()->input('key','value');
//         echo session()->get('key');

        // Session 类
        // 存取 session的值
//         Session::put('key3', date('Y-m-d H:i:s', time()));
        // 获取 session的值
//         echo Session::get('key3', 'default'); // 不存在，就取默认值
        
        //存放数组值
//         Session::put(['key4'=>'value4']);
//         echo Session::get('key4', 'default');

            // 把数据放在session数组中
//         Session::push('key', '1111');
//         Session::push('key','0000');
//         $arr = Session::get('key');
//         print_r($arr);

//         $res = Session::pull('key', 'kkkk'); // 拿出来，然后销毁 session
//         print_r($res);

       // print_r(Session::all()); // 获取所有的 session
       
      //  var_dump(Session::has('key1vv')); // 判断指定的是否存在
      
     //   Session::forget('key4'); // 删除指定的值
     // Session::flush('key4'); // 清空所在的 session
     
        // 暂存数据，第一次可以取到，第二次取不到，即之后消毁
//         Session::flash('my-flash', 'my-flash');
//         echo Session::get('my-flash');
            print_r(Session::all());
        
    }
    
    // response
    public function response1()
    {
        // 以json数据格式返回
//         $data = array('error'=>0, 'msg'=>'success');
//         return response()->json($data);

      // 重定向
      // return redirect('student/session1');
      // 重定向，同时把参数以暂存的session返回，
     // return redirect('student/session1')->with('yes', 'ok');
      // 另一种跳转
      //  return redirect()->action('StudentController@session1')->with('key000','value');
      
      // return redirect()->route('路由中的别名')->with('key111', '----');
      
        // 返回上一页面
     //  return redirect()->back();
    }
    
    
}