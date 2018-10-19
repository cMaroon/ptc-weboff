<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admission;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.collegeapplication');
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
                // $this->validate($request);
                $admission = new Admission;
                $admission->admission_refno = $request->input('admission_refno');
                $admission->fname = $request->input('fname');
                $admission->mname = $request->input('mname');
                $admission->lname = $request->input('lname');
                $admission->sname = $request->input('sname');
                $admission->program = $request->input('optionsProgram');
                $admission->scholarship = $request->input('optionsScholarship');
                $admission->admit_type = $request->input('admittype');
                $admission->year_level = $request->input('yrlvl');
                $admission->sex = $request->input('sex');
                $admission->civil_status = $request->input('civil_status');
                $admission->citizenship = $request->input('citizenship');
                $admission->birthplace = $request->input('birthplace');
                $admission->religion = $request->input('religion');
                $admission->dob = $request->input('bdate');
                $admission->ca_st_num = $request->input('add_st_num');
                $admission->ca_st_name = $request->input('add_st_name');
                $admission->ca_subd = $request->input('add_subd');
                $admission->ca_brgy = $request->input('add_brgy');
                $admission->ca_city = $request->input('add_city');
                $admission->ca_province = $request->input('add_province');
                $admission->ca_zipcode = $request->input('add_zipcode');
                $admission->per_st_num = $request->input('per_add_st_num');
                $admission->per_st_name = $request->input('per_add_st_name');
                $admission->per_subd = $request->input('per_add_subd');
                $admission->per_brgy = $request->input('per_add_brgy');
                $admission->per_city = $request->input('per_add_city');
                $admission->per_province = $request->input('per_add_province');
                $admission->per_zipcode = $request->input('per_add_zipcode');
                $admission->cd_telno = $request->input('telno');
                $admission->cd_mobno = $request->input('mobno');
                $admission->cd_email = $request->input('email');
                $admission->lsa_schtype = $request->input('lastsch_type');
                $admission->lsa_schname = $request->input('lastsch_name');
                $admission->lsa_schprogram = $request->input('lastsch_program');
                $admission->lsa_schattended = $request->input('lastsch_attended');
                $admission->fa_fname = $request->input('fathersname');
                $admission->fa_mname = $request->input('fathersmname');
                $admission->fa_lname = $request->input('fatherslname');
                $admission->fa_sname = $request->input('fatherssname');
                $admission->fa_mobno = $request->input('fatherscontact');
                $admission->fa_email = $request->input('fathersemail');
                $admission->fa_occu = $request->input('fathersoccupation');
                $admission->mo_fname = $request->input('mothersname');
                $admission->mo_mname = $request->input('mothersmname');
                $admission->mo_lname = $request->input('motherslname');
                $admission->mo_mobno = $request->input('motherscontact');
                $admission->mo_email = $request->input('mothersemail');
                $admission->mo_occu = $request->input('mothersoccupation');
                $admission->gu_fname = $request->input('guardiansname');
                $admission->gu_mname = $request->input('guardiansmname');
                $admission->gu_lname = $request->input('guardianslname');
                $admission->gu_sname = $request->input('guardianssname');
                $admission->gu_mobno = $request->input('guardianscontact');
                $admission->gu_email = $request->input('guardiansemail');
                $admission->gu_occu = $request->input('guardiansoccupation');
                $admission->gu_rel = $request->input('guardiansrelationship');
        
                $admission->save();


                $studentname =  $request->input('lname').' '.$request->input('sname') .', '. $request->input('fname') .' '.$request->input('mname');
                
                $request->session()->flash('message_title','Congratulation! ');
                $request->session()->flash('message_name',$studentname);
                $request->session()->flash('message_body_line1',' You have successfully filled up your admission form. Your reference number is ');
                $request->session()->flash('message_refno', $request->input('admission_refno'));
                $request->session()->flash('message_note','Please copy your reference number and present it to the PTC admission officer.');

                $msg = [
                    'message' => 'Congratulation! '. $studentname .
                    '<br> You have successfully filled up your admission form.
                    <br> Your reference number is <br>'.$request->input('admission_refno').'<br>
                    Please copy your reference number and present it to the PTC admission officer.',
                ];

               
                return redirect('collegeapplication');
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
