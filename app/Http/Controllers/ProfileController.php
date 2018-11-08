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

       $id = Auth::id();
        // $user_id_num = Auth::user()->getId_Num();
 
        // //Get profile
        // $profile = Student::where('id_num', '=', $user_id_num)->first();


        // //Return collection of courses as a resource
        // return ProfileResource::collection($profile);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $course = $request->isMethod('put') ? Courses::findOrFail($request->course_id) : new Courses;

        // $course->id = $request->input('course_id');
        // $course->course_code = $request->input('course_code');
        // $course->descriptive_title = $request->input('descriptive_title');
        // $course->lec_hr = $request->input('lec_hr');
        // $course->lab_hr = $request->input('lab_hr');
        // $course->course_unit = $request->input('course_unit');
        // $course->course_pre_req = $request->input('course_pre_req');

        // if($course->save()) {
        //     return new CourseResource($course);
        // }
    }
    



}
