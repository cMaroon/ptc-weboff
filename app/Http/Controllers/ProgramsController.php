<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Programs;
use App\Http\Resources\Program as ProgramResource;

class ProgramsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get Programs
        $programs = Programs::all();

        //Return collection of programs as a resource
        return ProgramResource::collection($programs);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $program = $request->isMethod('put') ? Programs::findOrFail($request->program_id) : new Programs;

        $program->id = $request->input('program_id');
        $program->program_code = $request->input('program_code');
        $program->descriptive_title = $request->input('descriptive_title');


        if($program->save()) {
            return new ProgramResource($program);
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
        // Get program
        $program = Programs::findOrFail($id);
        // Return single program as a resource
        return new ProgramResource($program);
        
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Get program
        $program = Programs::findOrFail($id);

        if($program->delete()) {
            return new ProgramResource($program);
        }    

        
    }


}
