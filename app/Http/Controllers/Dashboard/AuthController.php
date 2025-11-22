<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function index(){
        return view('dashboard.pages.index');
    }
    public function showLogin(){
        return view('dashboard.pages.login');
    }
    public function login(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:8'
        ]);
        $user=User::where('email',$request->email)->first();
        if(!$user){
            return back()->with('fail','Email not found');
        }
        if(!Hash::check($request->password,$user->password)){
            return back()->with('fail','Password is incorect');
        }
        Auth::login($user);
        if($user->role =="admin"){
            return redirect()->route('index')->with('success','Admin Login Successfully');
        }
    }
    public function showProfile(){
        $admin=Auth::user();
        return view('dashboard.pages.profile',[
            'admin'=>$admin
        ]);
    }
    public function updateProfile(Request $request){
        $request->validate([
            'fname'=>'required|string',
            'lname'=>'required|string',
            'phone'=>'required|integer',
            'password'=>'nullable|min:8',
            'image'=>'nullable|image'
        ]);
        $admin=Auth::user();
        $admin->fname=$request->fname;
        $admin->lname=$request->lname;
        $admin->email=$request->email;
        $admin->phone=$request->phone;
        if($request->password){
            $admin->password=Hash::make($request->password);
        }
        if ($request->hasFile('image')) {
            if ($admin->image) {
                $path = public_path($admin->image);
                if (file_exists($path)) {
                    unlink($path);
                }
        }
            $image = $request->file('image');
            $imageName = uniqid().'.'.$image->getClientOriginalExtension(); // ← dot lagaya hai
            $image->move(public_path('uploads/user-image'), $imageName);

            $admin->image = 'uploads/user-image/'.$imageName;
        }

        $admin->save();
        return redirect()->route('showProfile')->with('success','Admin Profile Updated');
    }
    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('login')->with('success','You have been logout Successfuly');
    }
}
