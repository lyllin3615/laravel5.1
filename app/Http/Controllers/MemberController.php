<?php
namespace App\Http\Controllers;
use App\Member;
class MemberController extends Controller{
    public function info($id=null)
    {
       // return route('memberinfo');
       // return 'member-info-id-' . $id;
       return Member::getMember();
       
       //$msg = array('id'=>100, 'name'=>['v'=>'lin3615']);
       // return view('member-info', $msg); 
      // return view('info'); // info.blade.php
      //return view('member/member-info', $msg);
    }
}