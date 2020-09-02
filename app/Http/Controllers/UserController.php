<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auth=Auth::user();
        $userid=$auth->id;

        $auth_role = Auth::user()->roles()->pluck('name')[0];

        if ($auth_role == 'admin') {
            $title = 'Manger List';

            $manager_role = Role::findByName('manager');
            $users = $manager_role->users;
        }
        else{
            $title = 'Staff List';

            $staff_role = Role::findByName('staff');
            $users = $staff_role->users;
        }

        return view('backend.user.list',compact('title','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.user.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator=$request->validate([
            'name'=>['required','string','max:255'],
            'photo'=>'required|mimes:jpeg,bmp,png,jpg'
        ]);

        if ($validator) {
        $name=$request->name;
        $phone=$request->phone;
        $address=$request->address;
        $email=$request->email;
        $shop=$request->shop;
        
        $profile=$request->photo;

        $imageName=time().'.'.$profile->extension();
        $profile->move(public_path('profile/manager'),$imageName);
        $filepath='profile/manager/'.$imageName;

            $user=User::create([

                'name'=>$name,
                'profile'=>$filepath,
                'email'=>$email,
                'password'=>Hash::make('123456789'),
                'phone'=>$phone,
                'address'=>$address,
                'shop_id'=>$shop

            ]);
            $profile=Auth::user()->profile;
            $auth_role = Auth::user()->roles()->pluck('name')[0];

            if ($auth_role == 'admin') {
                $user->assignRole('manager');
            }
            else{
                $user->assignRole('staff');
            }

            return redirect('user');

        }
        else
        {
             return redirect::back()->withErrors($validator);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
