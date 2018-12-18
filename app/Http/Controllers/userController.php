<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\user;
class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return user::get();
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
        $form =$request->all();
        $form ['password'] = base64_encode($form['password']);

        $test = new user();
        $test->fill($form) ;
        $test->save();
        
        return 'save success';
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return user::find($id);
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
        $test = user::find($id);
        $test->fill($request->all());
        $test->save();
        return 'update success';  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $test = user::find($id); 
        $test->delete = 3;
        $test->save();
        return 'Delete success';   
    }
    public function check($username)
    {
        $test = user :: where('username',$username)->first();
        try {
            $user =  $test->username;
            return 1;
        } catch (\Exception $th) {
             return 0;
        }
    }
        public function login()
        {   
                       
         $username = $_GET ['username'];
         $password = base64_encode($_GET ['password']);
         $test = user :: where('username',$username)->where('password',$password)->first();      
            try{
                return $test;
            } catch(\Exception $th){

            }
     
        }
    }    

