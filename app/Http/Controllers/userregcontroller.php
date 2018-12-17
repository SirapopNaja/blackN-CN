<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\userreg;
class userregcontroller extends Controller
{  
    public function index()
    {
        return userreg::get();
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
        $form ['passwordreg'] = base64_encode($form['passwordreg']);

        $test = new userreg();
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
        return userreg::find($id);
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
        $test = userreg::find($id);
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
        $test = userreg::find($id); 
        $test->delete = 3;
        $test->save();
        return 'Delete success';   
    }
    public function checkreg($usernamereg)
    {
        $test = userreg :: where('usernamereg',$usernamereg)->first();
        try {
            $userreg =  $test->usernamereg;
            return 1;
        } catch (\Exception $th) {
             return 0;
        }
    }
        public function loginreg()
        {   
                       
         $test1 = $_GET ['usernamereg'];
         $test2 = base64_encode($_GET ['passwordreg']);
         $test = userreg :: where('usernamereg',$usernamereg)->where('passwordreg',$passwordreg)->first();      
            try{
                return $test;
            } catch(\Exception $th){

            }
     
        }
    }    

