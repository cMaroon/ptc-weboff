 <!-- start form for validation -->
 <form name="admission-form" id="admission-form" role="form" onsubmit="return checkForm(this);" data-parsley-validate>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"><h5><b>Programs</b></h5></div>
                <div class="panel-body">
                     <!-- Programs -->
                        <div class="row">
                            <div class="col-sm-6">
                                <label>
                                <input type="radio" checked="" value="ABA" id="program1" name="optionsProgram"> ABA - Associate in Business Administration
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <label>
                                <input type="radio" value="COA" id="program2" name="optionsProgram"> COA - Certificate in Office Administration
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label>
                                <input type="radio" value="CCS" id="program3" name="optionsProgram"> CCS - Certificate in Computer Science
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <label>
                                <input type="radio" value="CHRM" id="program4" name="optionsProgram"> CHRM - Certificate in Hotel and Restaurant Management
                                </label>                            
                            </div>
                        </div>                     
                        <div class="row">
                            <div class="col-sm-6">
                                <label>
                                <input type="radio" value="BSIT" id="program5" name="optionsProgram"> BSIT - Bachelor of Science in Information Technology
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <label>
                                <input type="radio" value="BSIT-EXEC" id="program6" name="optionsProgram"> Bachelor of Science in Information Technology (<a href="#">Executive Class</a>) 
                                </label>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-sm-6">
                                <label>
                                <input type="radio" value="BSOA" id="program7" name="optionsProgram"> BSOA - Bachelor of Science in Office Administration
                                </label>  
                            </div>
                            <div class="col-sm-6">
                                <label>
                                <input type="radio" value="BSOA-EXEC" id="program8" name="optionsProgram"> Bachelor of Science in Office Administration (<a href="#">Executive Class</a>)
                                </label>                            
                            </div>
                        </div>                     
                </div>
        </div>
    </div>
<br>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"><h5><b>Types of Scholarship</b></h5></div>
                <div class="panel-body">
                     <!-- Scholarship -->
                     <div class="row">
                            <div class="col-sm-6">
                                <label>
                                <input type="radio" value="brgyscholarship" id="scholarship1" name="optionsScholarship"> Barangay Scholarship (<a href="">requirements</a>)
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <label>
                                <input type="radio" value="acadscholarship" id="scholarship2" name="optionsScholarship"> Academic Scholarship (<a href="">requirements</a>)
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label>
                                <input type="radio" value="gadscholarship" id="scholarship3" name="optionsScholarship"> GAD - Women in Sports Scholarship (<a href="">requirements</a>)
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <label>
                                <input type="radio" value="mayorscholarship" id="scholarship4" name="optionsScholarship"> Mayor Lani - Taguig Scholarship (<a href="">requirements</a>)
                                </label>                            
                            </div>
                        </div>                     
                        <div class="row">
                            <div class="col-sm-6">
                                <label>
                                <input type="radio" value="chedscholarship" id="scholarship5" name="optionsScholarship"> CHED Tulong Dulong Scholarship (<a href="">requirements</a>)
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <label>
                                <input type="radio" value="entrancescholarship" id="scholarship6" name="optionsScholarship"> Entrance Scholarship (<a href="">requirements</a>)
                                </label>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-sm-6">
                                <label>
                                <input type="radio" value="BSOA" id="scholarship7" name="optionsScholarship"> Executive Municipal Scholarship Ordinance (<a href="">requirements</a>)
                                </label>  
                            </div>
                        </div>    
                </div>
        </div>
    </div>
<br>

    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"><h5><b>Admit Type and Year Level</b></h5></div>
                <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <select class="form-control" name="admittype" id="admittype" required="">    
                                    <option value="">Admit Type*</option>
                                    <option value="New">New Student</option>
                                    <option value="Transferee">Transferee</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <select class="form-control" name="yrlvl" id="yrlvl" required="">
                                    <option value="">Please select year level*</option>
                                    <option value="1st Year">First Year</option>
                                    <option value="2nd Year">Second Year</option>
                                    <option value="3rd Year">Third Year</option>
                                    <option value="4th Year">Fourth Year</option>
                                </select>
                            </div>
                        </div>  
                </div>
        </div>
    </div>  
<br>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"><h5><b>Student's Information</b></h5></div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-3">First Name: *<input type="text" class="form-control" id="fname" name="fname" placeholder="Given Name" maxlength="100" required=""></div>
                        <div class="col-sm-3">Middle Name: <input type="text" class="form-control" id="mname" name="mname" placeholder="Middle Name" maxlength="100" ></div>
                        <div class="col-sm-3">Last Name: *<input type="text" class="form-control" id="lname" name="lname" placeholder="Surname" maxlength="100" required=""></div>
                        <div class="col-sm-3">Suffix Name: <input type="text" class="form-control" id="sname" name="sname" maxlength="3" placeholder="(e.g. Jr.)"></div>
                    </div>         
                    <br>
                    <div class="row">
                        <div class="col-sm-4">Sex: *
                            <select class="form-control" name="sex" required="">
                                <option value=""></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="col-sm-4">Civil Status: *
                            <select class="form-control" name="civil_status" required="">
                                <option value=""></option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                            </select>
                        </div>
                        <div class="col-sm-4">Citizenship: *<input type="text" class="form-control" id="citizenship" name="citizenship" placeholder="Citizenship" required=""></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-4">Birthplace: *<input type="text" class="form-control" id="birthplace" name="birthplace" placeholder="Birthplace" required=""></div>
                        <div class="col-sm-4">Religion: *<input type="text" class="form-control" id="religion" name="religion" placeholder="Religion" required=""></div> 
                        <div class="col-sm-4">Date of Birth: * <input data-provide="datepicker" class="form-control" name="bdate" id="bdate" placeholder="mm/dd/yyyy" maxlength="10" required=""></div>
                    </div>
                </div>
        </div>
    </div>
<br>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"><h5><b>Current Address</b></h5></div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-3">Street No. / Unit No.: *<input type="text" class="form-control" id="add_st_num" name="add_st_num" placeholder="" maxlength="20" required=""></div>
                        <div class="col-sm-9">Street: *<input type="text" class="form-control" id="add_st_name" name="add_st_name" placeholder="" maxlength="40" required=""></div>
                    </div>    
                    <br> 
                    <div class="row">
                        <div class="col-sm-6">Subdivision / Village / Building: <input type="text" class="form-control" id="add_subd" name="add_subd" maxlength="40" placeholder=""></div>
                        <div class="col-sm-6">Barangay: *<input type="text" class="form-control" id="add_brgy" name="add_brgy" placeholder="" maxlength="40" required=""></div>
                    </div>    
                    <br>                    
                    <div class="row">
                        <div class="col-sm-5">City / Municipality: *<input type="text" class="form-control" id="add_city" name="add_city" placeholder="" maxlength="60" required=""></div>
                        <div class="col-sm-5">Province: *<input type="text" class="form-control" id="add_province" name="add_province" placeholder="" maxlength="60" required=""></div>
                        <div class="col-sm-2">Zip Code: *<input type="text" class="form-control" id="add_zipcode" name="add_zipcode" placeholder="xxxx" oninput="this.value = this.value.replace(/[^0-9.]/g, &#39;&#39;); this.value = this.value.replace(/(\..*)\./g, &#39;$1&#39;);" onkeydown="limitText(this,4);" onkeyup="limitText(this,4);" min="4" maxlength="4" required="" title="4 characters only"></div>                    
                    </div>                         
                </div>
        </div>
    </div> 
<br>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"><h5><b>Permanent Address</b> &nbsp;&nbsp;<input type="checkbox" name="checker" id="checker"> <small>Same as Current Address</small></h5></div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-3">Street No. / Unit No.: *<input type="text" class="form-control" id="per_add_st_num" name="per_add_st_num" placeholder="" maxlength="20" required=""></div>
                        <div class="col-sm-9">Street: *<input type="text" class="form-control" id="per_add_st_name" name="per_add_st_name" placeholder="" maxlength="40" required=""></div>
                    </div>    
                    <br> 
                    <div class="row">
                        <div class="col-sm-6">Subdivision / Village / Building: <input type="text" class="form-control" id="per_add_subd" name="per_add_subd" maxlength="40" placeholder=""></div>
                        <div class="col-sm-6">Barangay: *<input type="text" class="form-control" id="per_add_brgy" name="per_add_brgy" placeholder="" maxlength="40" required=""></div>
                    </div>    
                    <br>                    
                    <div class="row">
                        <div class="col-sm-5">City / Municipality: *<input type="text" class="form-control" id="per_add_city" name="per_add_city" placeholder="" maxlength="60" required=""></div>
                        <div class="col-sm-5">Province: *<input type="text" class="form-control" id="per_add_province" name="per_add_province" placeholder="" maxlength="60" required=""></div>
                        <div class="col-sm-2">Zip Code: *<input type="text" class="form-control" id="per_add_zipcode" name="per_add_zipcode" placeholder="xxxx" oninput="this.value = this.value.replace(/[^0-9.]/g, &#39;&#39;); this.value = this.value.replace(/(\..*)\./g, &#39;$1&#39;);" onkeydown="limitText(this,4);" onkeyup="limitText(this,4);" min="4" maxlength="4" required="" title="4 characters only"></div>     
                    </div>                         
                </div>
        </div>  
    </div>
<br>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"><h5><b>Contact Details</b></h5></div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-4">Telephone No.:<input type="text" class="form-control" id="telno" name="telno" maxlength="30" placeholder="Landline" oninput="this.value = this.value.replace(/[^0-9.]/g, &#39;&#39;); this.value = this.value.replace(/(\..*)\./g, &#39;$1&#39;);" onkeydown="limitText(this,30);" onkeyup="limitText(this,30);" title="Minimum 7 &amp; Maximum 30 characters only" pattern=".{7,30}"></div>
                        <div class="col-sm-4">Mobile No.: *<input type="text" class="form-control" id="mobno" name="mobno" placeholder="09XXxxxxxxx" maxlength="11" oninput="this.value = this.value.replace(/[^0-9.]/g, &#39;&#39;); this.value = this.value.replace(/(\..*)\./g, &#39;$1&#39;);" onkeydown="limitText(this,11);" onkeyup="limitText(this,11);" title="11 characters only" required=""></div>
                        <div class="col-sm-4">Email Address: *<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" maxlength="100" required=""></div>
                    </div>
                </div>
        </div>
    </div>
<br>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"><h5><b>Current or Last School Attended</b></h5></div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-3">
                            School Type: *
                            <select name="lastsch_type" id="lastsch_type" class="form-control" required="">
                                <option value="">Please select type</option>
                                <option value="high school">High School</option>
                                <option value="juinor high school">Juinor High School</option>
                                <option value="senior high school">Senior High School</option>
                                <option value="als/pept">Alternative Learning System Accreditation &amp; Equivalency / Philippine Educational Placement Test</option>
                                <option value="college">College</option>
                            </select>
                        </div>  
                        <div class="col-sm-3">
                            Name of School:* <input type="text" name="lastsch_name" id="lastsch_name" class="form-control" placeholder="Name of School" maxlength="90" required="">
                        </div>                  
                        <div class="col-sm-3">
                            Program / Track &amp; Strand<input type="text" name="lastsch_program" id="lastsch_program" class="form-control" placeholder="Program or Track" maxlength="90">
                        </div> 
                        <div class="col-sm-3">
                            Date Last Attended:  <input data-provide="datepicker" class="form-control" name="lastsch_attended" id="lastsch_attended" placeholder="mm/dd/yyyy" maxlength="10">
                        </div>
                    </div>    
                </div>
        </div>
    </div>
<br>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"><h5><b>Parents / Guardian's Information</b></h5></div>
                <div class="panel-body">

                    <div class="col-md-12">
                        <div id="txt-selectguardian" style="display:none;" class="alert alert-danger" role="alert">Please select at least one.<br></div>
                    </div>

                    <div class="row">
                        <div class="col-md-12"><br><p><b>Father's Information</b></p></div>
                            <div class="col-md-4">First Name<input type="text" class="form-control" name="fathersname" id="fathersname" placeholder="Given Name" maxlength="100"></div>
                            <div class="col-md-4">Last Name<input type="text" class="form-control" name="fatherslname" id="fatherslname" placeholder="Surname" maxlength="100"></div>
                            <div class="col-md-2">Middle Initial<input type="text" class="form-control" name="fathersmname" id="fathersmname" placeholder="Middle initial" maxlength="3"></div>
                            <div class="col-md-2">Suffix<input type="text" class="form-control" name="fatherssname" id="fatherssname" placeholder="(eg. Jr.)" maxlength="3"></div>
                    </div>
                    <br>
                    <div class="row">    
                            <div class="col-md-4">Mobile Number<input type="text" class="form-control" name="fatherscontact" id="fatherscontact" placeholder="09XXxxxxxxx" maxlength="11" oninput="this.value = this.value.replace(/[^0-9.]/g, &#39;&#39;); this.value = this.value.replace(/(\..*)\./g, &#39;$1&#39;);" onkeydown="limitText(this,11);" onkeyup="limitText(this,11);" title="11 characters only"></div>
                            <div class="col-md-4">Email<input type="email" class="form-control" name="fathersemail" id="fathersemail" placeholder="example@domain.com" maxlength="100"></div>
                            <div class="col-md-4">Occupation<input type="text" class="form-control" name="fathersoccupation" id="fathersoccupation" placeholder="Occupation" maxlength="100"></div>           
                    </div>         
                    <br>
                    <div class="row">
                        <div class="col-md-12"><br><p><b>Mother's Information</b></p></div>
                            <div class="col-md-5">First Name<input type="text" class="form-control" name="mothersname" id="mothersname" placeholder="Given Name" maxlength="100"></div>
                            <div class="col-md-5">Last Name<input type="text" class="form-control" name="motherslname" id="motherslname" placeholder="Surname" maxlength="100"></div>
                            <div class="col-md-2">Middle Initial<input type="text" class="form-control" name="mothersmname" id="mothersmname" placeholder="Middle initial" maxlength="3"></div>
                    </div>
                    <br>
                    <div class="row">
                            <div class="col-md-4">Mobile Number<input type="number" class="form-control" name="motherscontact" id="motherscontact" placeholder="09XXxxxxxxx" maxlength="11" oninput="this.value = this.value.replace(/[^0-9.]/g, &#39;&#39;); this.value = this.value.replace(/(\..*)\./g, &#39;$1&#39;);" onkeydown="limitText(this,11);" onkeyup="limitText(this,11);" title="11 characters only"></div>
                            <div class="col-md-4">Email<input type="email" class="form-control" name="mothersemail" id="mothersemail" placeholder="example@domain.com" maxlength="100"></div>
                            <div class="col-md-4">Occupation<input type="text" class="form-control" name="mothersoccupation" id="mothersoccupation" placeholder="Occupation" maxlength="100"></div>     
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12"><br><p><b>Guardian's Information</b></p></div>
                            <div class="col-md-4">First Name<input type="text" class="form-control" name="guardiansname" id="guardiansname" placeholder="Given Name" maxlength="100"></div>
                            <div class="col-md-4">Last Name<input type="text" class="form-control" name="guardianslname" id="guardianslname" placeholder="Surname" maxlength="100"></div>
                            <div class="col-md-2">Middle Initial<input type="text" class="form-control" name="guardiansmname" id="guardiansmname" placeholder="Middle initial" maxlength="3"></div>
                            <div class="col-md-2">Suffix<input type="text" class="form-control" name="guardianssname" id="guardianssname" placeholder="Suffix" maxlength="3"></div>
                    </div>
                    <br>
                    <div class="row">
                            <div class="col-md-3">Mobile Number<input type="number" class="form-control" name="guardianscontact" id="guardianscontact" placeholder="09XXxxxxxxx" maxlength="11" oninput="this.value = this.value.replace(/[^0-9.]/g, &#39;&#39;); this.value = this.value.replace(/(\..*)\./g, &#39;$1&#39;);" onkeydown="limitText(this,11);" onkeyup="limitText(this,11);" title="11 characters only"></div>
                            <div class="col-md-3">Email<input type="email" class="form-control" name="guardiansemail" id="guardiansemail" placeholder="example@domain.com" maxlength="100"></div>
                            <div class="col-md-3">Occupation<input type="text" class="form-control" name="guardiansoccupation" id="guardiansoccupation" placeholder="Occupation" maxlength="100"></div>
                            <div class="col-md-3">Relationship<input type="text" class="form-control" name="guardiansrelationship" id="guardiansrelationship" placeholder="Relationship" maxlength="100"></div>   
                    </div>
                </div>
        </div>
    </div>













        <br/>
        <input class="btn btn-success" type="submit" value="Submit">

  </form>
  <!-- end form for validations -->