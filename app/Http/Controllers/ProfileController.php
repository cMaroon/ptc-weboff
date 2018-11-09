<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Student;
use App\User;
use Auth;
use App\Http\Resources\Profile as ProfileResource;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id_num = Auth::user()->id_num;
        //Get profile
        $profiles = Student::where('id_num', '=', $user_id_num)->first();
        // dd($profiles);
        // $profiles = Student::all();
        //Return collection of courses as a resource
        return new ProfileResource($profiles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {

    //     $student = $request->isMethod('put') ? Student::findOrFail($request->profile_id) : new Student;

    //     $student->id = $request->input('student_id');
    //     $student->dob = $request->input('dob');

    //     if($student->save()) {
    //         return new ProfileResource($student);
    //     }

    // }    
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        
        $student->update($request->all());
        return ['message'=>'Updated the student info'];
    }
    



}
