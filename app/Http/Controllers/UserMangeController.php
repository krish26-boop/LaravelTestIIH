<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\UserManage;

class UserMangeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $users = UserManage::all();
        return view('index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $users = UserManage::select('id','name')->get();
        return view('index', compact('users'));
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
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:App\Models\UserManage',
            'officer' => 'required',
            'date_of_birth' => 'required',
            'skills' => 'required',

        ]);
       
   
      
        $user = new UserManage();
        $user->name = $request->name==null?'':$request->name;
        $user->email = $request->email==null?'':$request->email;
        $user->officer = $request->officer==null?'':$request->officer;
        $user->date_of_birth =  $request->filled('date_of_birth') ? date('Y-m-d', strtotime($request->date_of_birth)) : NULL;
        $user->skills = $request->skills==null?'':$request->skills;

      
       
        $user->save();
        return response()->json(
            [
                'success' => true,
                'message' => 'Data inserted successfully'
            ]
        );
  
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
