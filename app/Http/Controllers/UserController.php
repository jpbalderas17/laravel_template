<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    /**
     * Show form for editing of the authenticated user
     * @return \Illuminate\Http\Response
     */
    public function myProfile()
    {
        return view("user.my_profile", array("user"=>Auth::user()));
    }

    /**
     * Update Personal information of the authenticated User
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function personalInformation(Request $request)
    {

        $request->session()->flash('tab', 'personal_information');
        $this->validate($request, [
            'first_name'=>'required|max:255',
            'middle_name'=>'nullable|max:255',
            'last_name'=>'required|max:255',
            'email'=>'required|email|max:255',
            'contact_no'=>'max:255'
            ]);

        $user=Auth::user();
        
        $user->first_name=$request->first_name;
        $user->middle_name=$request->middle_name;
        $user->last_name=$request->last_name;
        $user->email=$request->email;
        $user->contact_no=$request->contact_no;

        $user->save();
        $request->session()->flash('alert', array("type"=>"success", "content"=>"Personal Information Updated."));
        return redirect()->back();
    }

    /**
     * Update Account information of the authenticated User
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function accountInformation(Request $request)
    {
        
        $user=Auth::user();
        $request->session()->flash('tab', 'account_information');
        
        $this->validate($request, [
            'username'=>'required|unique:users,username,'.$user->id.'|max:255',
            // 'old_password'=>'required|in:'.$user->password,
            'password'=>'nullable|confirmed|max:255',
            'security_question'=>'required_with:security_answer|max:255',
            'security_answer'=>'required_with:security_question|max:255'
            ]);

        
        
        $user->username=$request->username;
        $user->password=Hash::make($request->password);
        $user->security_question=$request->security_question;
        $user->security_answer=$request->security_answer;

        $user->save();
        $request->session()->flash('alert', array("type"=>"success", "content"=>"Account Information Updated."));
        return redirect()->back();
    }
}
