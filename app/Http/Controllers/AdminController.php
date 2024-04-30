<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;

class AdminController extends Controller
{
    public function list(){
        $users = user::where('user_type',1)->orderby('id','desc')->get();
        $data['admin_user']= $users;
        $data['header_title']='Admin list';
        return view('admin/admin/list')->with($data);
    }

    public function add(){
        $data['header_title']='Add New Admin';
        return view(('admin/admin/add'))->with($data);
    }
    public function insert(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required|min:5',
        ]);

        $user = new User;
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = Hash::make($request['password']);
        $user->user_type = 1;
        $user->save();
        return redirect('admin/admin/list')->with('seccess','New admin is created thank you. please check admin list');
    }
}
