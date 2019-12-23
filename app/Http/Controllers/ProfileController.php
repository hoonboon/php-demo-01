<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use Storage;

class ProfileController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(){
        return view('user.profile');
    }

    public function update(Request $request){
        $rules = [
            'name' => 'required|string|min:3|max:191',
            'email' => 'required|email|min:3|max:191',
            'password' => 'nullable|string|min:5|max:191',
            'image' => 'nullable|image|max:1999', //formats: jpeg, png, bmp, gif, svg
        ];
        $request->validate($rules);
        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->hasFile('image')){
            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $filename = uniqid().'.'.$ext;
            $image->storeAs('public/pics',$filename);
            Storage::delete("public/pics/{$user->image}");
            $user->image = $filename;
        }
        if($request->password){
            $user->password = Hash::make($request->password);
        }
        $user->save();
        return redirect()
            ->route('profile.index')
            ->with('status','Your profile has been updated!');
    }
    
}
