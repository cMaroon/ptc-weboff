<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Courses;
use App\Http\Resources\Course as CourseResource;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get Courses
        $courses = Courses::all();

        //Return collection of courses as a resource
        return CourseResource::collection($courses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = $request->isMethod('put') ? Courses::findOrFail($request->course_id) : new Courses;

        $course->id = $request->input('course_id');
        $course->course_code = $request->input('course_code');
        $course->descriptive_title = $request->input('descriptive_title');
        $course->lec_hr = $request->input('lec_hr');
        $course->lab_hr = $request->input('lab_hr');
        $course->course_unit = $request->input('course_unit');
        $course->course_pre_req = $request->input('course_pre_req');

        if($course->save()) {
            return new CourseResource($course);
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
        // Get course
        $course = Courses::findOrFail($id);
        // Return single course as a resource
        return new CourseResource($course);
        
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Get course
        $course = Courses::findOrFail($id);

        if($course->delete()) {
            return new CourseResource($course);
        }    

        
    }
}
