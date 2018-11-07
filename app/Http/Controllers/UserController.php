<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Student;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\Student as StudentResource;
use App\Http\Resources\User as UserResource;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get Users
        $users = User::all();

        //Return collection of users as a resource
        return UserResource::collection($users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $student = $request->isMethod('put') ? Student::findOrFail($request->student_id) : new Student;
        // $user = $request->isMethod('put') ? User::findOrFail($request->user_id) : new User;


        // $student->id_num = $request->input('id_num');
        // $student->firstname = $request->input('firstname');
        // $student->middlename = $request->input('middlename');
        // $student->lastname = $request->input('lastname');
        // $student->cd_email = $request->input('cd_email');
        // $student->acad_program = $request->input('acad_program');
        // $student->year_level = $request->input('year_level');
        // $student->section = $request->input('section');

        // $user->id_num = $request->input('id_num');
        // $user->name = $request->input('firstname') .' '. $request->input('lastname');
        // $user->email = $request->input('cd_email');
        // $user->password =  Hash::make($request->input('password'));

        // $user->save();

        // if($student->save()){
        //     return new StudentResource($student);
            


        // }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Get Single user
        $user = User::findOrFail($id);

        //Return single user as a resource
        return new UserResource($user);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Get Single user
        $student = Student::findOrFail($id);
        $id_num = $student->id_num;
        $user = User::findOrFail($id_num); 

        if($user->delete()){
            return new StudentResource($student);

        }
    }
}
