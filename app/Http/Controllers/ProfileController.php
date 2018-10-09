<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Image;
use Storage;


class ProfileController extends Controller
{
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->Validate($request, [
            'user_id' => 'required|string|max:255|unique:users',
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'avater' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'bio' => 'string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);


        $person = new Profile;

        if ($request->file('avater')) {

            $file = $request->file('avater');

            //Display File Name
//            echo 'File Name: '.$file->getClientOriginalName();
//            echo '<br>';
//
//            //Display File Extension
//            echo 'File Extension: '.$file->getClientOriginalExtension();
//            echo '<br>';
//
//            //Display File Real Path
//            echo 'File Real Path: '.$file->getRealPath();
//            echo '<br>';
//
//            //Display File Size
//            echo 'File Size: '.$file->getSize();
//            echo '<br>';
//
//            //Display File Mime Type
//            echo 'File Mime Type: '.$file->getMimeType();


            //  create user
            User::create([
                'user_id' => $request->input('user_id'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
                'firstName' => $request->input('firstName'),
                'lastName' => $request->input('lastName'),
                'bio' => $request->input('bio'),
                'picture' => $request->input('user_id') . "." . $file->getClientOriginalExtension()
            ]);

            //Move Uploaded File
            $destinationPath = 'storage/avaters';
            $file->move($destinationPath, $request->input('user_id') . "." . $file->getClientOriginalExtension());


            return redirect()->route('login')->with('success', 'Registration successful you can create your blogs');
        } else {
            return redirect()->back()->withErrors('all', 'Something isn\'t Right');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Profile $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
