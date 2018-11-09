<template>
  <div>
<div class="right_col" role="main">
    <div class="clearfix">  
      <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Student Infromation </h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                <!-- Avatar -->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="col-lg-12">
                        <div class="panel panel-default" style="background-image:url('/images/hero.png'); background-position:center center; background-size:cover;" >
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h1 style="color:white">{{this.form.data.firstname}} {{this.form.data.middlename}} {{this.form.data.lastname}} {{this.form.data.suffixname}}</h1>
                                        <br>
                                        <ul class="list-unstyled user_data">
                                            <li>
                                                <h3 style="color:white">
                                                    <i class="fa fa-university user-profile-icon"></i> 
                                                    ID Number : {{this.form.data.id_num}}
                                                </h3>
                                            </li>
  
                                            <li>
                                                <h3 style="color:white">
                                                    <i class="fa fa-briefcase user-profile-icon"></i> 
                                                    Year level and Section : {{this.form.data.year_level}} - {{this.form.data.section}}
                                                </h3>
                                            </li>
  
                                            <li>
                                                <h3 style="color:white">
                                                    <i class="fa fa-list-alt user-profile-icon"></i> 
                                                    Program : {{this.form.data.acad_program}}
                                                </h3>
                                            </li>
  
                                            <li>
                                                <h3 style="color:white">
                                                    <i class="fa fa-envelope user-profile-icon"></i> 
                                                    Email : {{this.form.data.cd_email}}
                                                </h3>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="profile_img">
                                            <div id="crop-avatar">
                                                <!-- Current avatar -->
                                                <img class="img-responsive avatar-view" src="/images/no-image.png" alt="Avatar" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <!-- End of Avatar -->
              
               <form >

                <!-- General Information -->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h5><b>Student's Information</b></h5></div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-3">Suffix Name: <input type="text" class="form-control" maxlength="3" placeholder="(e.g. Jr.)" v-model="form.data.suffixname"></div>
                                            <div class="col-sm-3">Sex: *
                                                <select class="form-control"  v-model="form.data.sex">
                                                    <option value=""></option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-3">Civil Status: *
                                                <select class="form-control"  v-model="form.data.civil_status">
                                                    <option value=""></option>
                                                    <option value="Single">Single</option>
                                                    <option value="Married">Married</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-3">Citizenship: *
                                                <input type="text" class="form-control" placeholder="Citizenship"  v-model="form.data.citizenship">
                                            </div>
                                    </div>     
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-4">Birthplace: *
                                            <input type="text" class="form-control" placeholder="Birthplace"  v-model="form.data.birthplace">
                                        </div>
                                        <div class="col-sm-4">Religion: *
                                            <input type="text" class="form-control" placeholder="Religion"  v-model="form.data.religion">
                                        </div> 
                                        <div class="col-sm-4">Date of Birth: * 
                                            <div class='input-group date' id='myDatepicker2'>
                                                <input class="form-control" placeholder="mm/dd/yyyy" maxlength="10"  v-model="form.data.dob" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                        </div>         
                                    </div>    
                                </div>
                        </div>
                    </div>
                </div>
                <!-- End of General Information -->

               <!-- Address -->
              <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h5><b>Current Address</b></h5></div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-3">Street No. / Unit No.: *<input type="text" class="form-control" placeholder="" maxlength="20"  v-model="form.data.ca_st_num"></div>
                                    <div class="col-sm-9">Street: *<input type="text" class="form-control" placeholder="" maxlength="40"  v-model="form.data.ca_st_name"></div>
                                </div>    
                                <br> 
                                <div class="row">
                                    <div class="col-sm-6">Subdivision / Village / Building: <input type="text" class="form-control"  maxlength="40" placeholder="" v-model="form.data.ca_subd"></div>
                                    <div class="col-sm-6">Barangay: *<input type="text" class="form-control" placeholder="" maxlength="40"  v-model="form.data.ca_brgy"></div>
                                </div>    
                                <br>                    
                                <div class="row">
                                    <div class="col-sm-5">City / Municipality: *<input type="text" class="form-control" placeholder="" maxlength="60"  v-model="form.data.ca_city"></div>
                                    <div class="col-sm-5">Province: *<input type="text" class="form-control" placeholder="" maxlength="60"  v-model="form.data.ca_province"></div>
                                    <div class="col-sm-2">Zip Code: *<input type="text" class="form-control" placeholder="xxxx" min="4" maxlength="4"  title="4 characters only" v-model.number="form.data.ca_zipcode"></div>                    
                                </div>                         
                            </div>
                    </div>
                </div> 
              </div>
              <!-- End of Address -->

              <!-- Permanent Address  -->
              <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h5><b>Permanent Address</b> </h5></div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-3">Street No. / Unit No.: *<input type="text" class="form-control" placeholder="" maxlength="20"  v-model="form.data.per_add_st_num"></div>
                                    <div class="col-sm-9">Street: *<input type="text" class="form-control" placeholder="" maxlength="40"  v-model="form.data.per_st_name"></div>
                                </div>    
                                <br> 
                                <div class="row">
                                    <div class="col-sm-6">Subdivision / Village / Building: <input type="text" class="form-control" maxlength="40" placeholder="" v-model="form.data.per_subd"></div>
                                    <div class="col-sm-6">Barangay: *<input type="text" class="form-control" placeholder="" maxlength="40"  v-model="form.data.per_brgy"></div>
                                </div>    
                                <br>                    
                                <div class="row">
                                    <div class="col-sm-5">City / Municipality: *<input type="text" class="form-control" placeholder="" maxlength="60"  v-model="form.data.per_city"></div>
                                    <div class="col-sm-5">Province: *<input type="text" class="form-control" placeholder="" maxlength="60"  v-model="form.data.per_province"></div>
                                    <div class="col-sm-2">Zip Code: *<input type="text" class="form-control" placeholder="xxxx" min="4" maxlength="4"  title="4 characters only" v-model.number="form.data.per_zipcode"></div>     
                                </div>                         
                            </div>
                    </div>  
                </div>
              </div>
              <!-- End of Permanent Address -->

              <!-- Contact Details -->
              <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h5><b>Contact Details</b></h5></div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">Telephone No.:<input type="text" class="form-control" maxlength="30" placeholder="Landline" title="Minimum 7 &amp; Maximum 30 characters only" pattern=".{7,30}" v-model.number="form.data.cd_telno"></div>
                                    <div class="col-sm-6">Mobile No.: *<input type="text" class="form-control"  placeholder="09XXxxxxxxx" maxlength="11" title="11 characters only"  v-model.number="form.data.cd_mobno"></div>
                                    
                                </div>
                            </div>
                    </div>
                </div>
              </div>
              <!-- End of Contact Details -->

              <!-- Last School Attended -->
              <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h5><b>Last School Attended</b></h5></div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        School Type: *
                                        <select  class="form-control"  v-model="form.data.lastsch_type">
                                            <option value="">Please select type</option>
                                            <option value="high school">High School</option>
                                            <option value="juinor high school">Juinor High School</option>
                                            <option value="senior high school">Senior High School</option>
                                            <option value="als/pept">Alternative Learning System Accreditation &amp; Equivalency / Philippine Educational Placement Test</option>
                                            <option value="college">College</option>
                                        </select>
                                    </div>  
                                    <div class="col-sm-3">
                                        Name of School:* <input type="text" class="form-control" placeholder="Name of School" maxlength="90"  v-model="form.data.lastsch_name">
                                    </div>                  
                                    <div class="col-sm-3">
                                        Program / Track &amp; Strand<input type="text" class="form-control" placeholder="Program or Track" maxlength="90" v-model="form.data.lastsch_program">
                                    </div> 
                                    <div class="col-sm-3">
                                        Date Last Attended:  <input data-provide="datepicker" class="form-control"  placeholder="mm/dd/yyyy" maxlength="10" v-model="form.data.lastsch_attended">
                                    </div>
                                </div>    
                            </div>
                    </div>
                </div>
              </div>
              <!-- End of Last School Attended -->

              <!-- Parents and Guardian -->
              <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h5><b>Parents / Guardian's Information</b></h5></div>
                            <div class="panel-body">
                        
                                <div class="row">
                                    <div class="col-md-12"><br><p><b>Father's Information</b></p></div>
                                        <div class="col-md-4">First Name<input type="text" class="form-control" placeholder="Given Name" maxlength="100" v-model="form.data.fa_fname"></div>
                                        <div class="col-md-4">Last Name<input type="text" class="form-control" placeholder="Surname" maxlength="100" v-model="form.data.fa_lname"></div>
                                        <div class="col-md-2">Middle Initial<input type="text" class="form-control" placeholder="Middle initial" maxlength="3" v-model="form.data.fa_mname"></div>
                                        <div class="col-md-2">Suffix<input type="text" class="form-control" placeholder="(eg. Jr.)" maxlength="3" v-model="form.data.fa_sname"></div>
                                </div>
                                <br>
                                <div class="row">    
                                        <div class="col-md-4">Mobile Number<input type="text" class="form-control" placeholder="09XXxxxxxxx" maxlength="11" title="11 characters only" v-model.number="form.data.fa_mobno"></div>
                                        <div class="col-md-4">Email<input type="email" class="form-control"  placeholder="example@domain.com" maxlength="100" v-model="form.data.fa_email"></div>
                                        <div class="col-md-4">Occupation<input type="text" class="form-control" placeholder="Occupation" maxlength="100" v-model="form.data.fa_occu"></div>           
                                </div>         
                                <br>
                                <div class="row">
                                    <div class="col-md-12"><br><p><b>Mother's Information</b></p></div>
                                        <div class="col-md-5">First Name<input type="text" class="form-control" placeholder="Given Name" maxlength="100" v-model="form.data.mo_fname"></div>
                                        <div class="col-md-5">Last Name<input type="text" class="form-control" placeholder="Surname" maxlength="100" v-model="form.data.mo_lname"></div>
                                        <div class="col-md-2">Middle Initial<input type="text" class="form-control"  placeholder="Middle initial" maxlength="3" v-model="form.data.mo_mname"></div>
                                </div>
                                <br>
                                <div class="row">
                                        <div class="col-md-4">Mobile Number<input type="text" class="form-control" placeholder="09XXxxxxxxx" maxlength="11" title="11 characters only" v-model.number="form.data.mo_mobno"></div>
                                        <div class="col-md-4">Email<input type="email" class="form-control"  placeholder="example@domain.com" maxlength="100" v-model="form.data.mo_email"></div>
                                        <div class="col-md-4">Occupation<input type="text" class="form-control" placeholder="Occupation" maxlength="100" v-model="form.data.mo_occu"></div>     
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12"><br><p><b>Guardian's Information</b></p></div>
                                        <div class="col-md-4">First Name<input type="text" class="form-control" placeholder="Given Name" maxlength="100" v-model="form.data.gu_fname"></div>
                                        <div class="col-md-4">Last Name<input type="text" class="form-control" placeholder="Surname" maxlength="100" v-model="form.data.gu_lname"></div>
                                        <div class="col-md-2">Middle Initial<input type="text" class="form-control" placeholder="Middle initial" maxlength="3" v-model="form.data.gu_mname"></div>
                                        <div class="col-md-2">Suffix<input type="text" class="form-control" placeholder="Suffix" maxlength="3" v-model="form.data.gu_sname"></div>
                                </div>
                                <br>
                                <div class="row">
                                        <div class="col-md-3">Mobile Number<input type="text" class="form-control" placeholder="09XXxxxxxxx" maxlength="11" title="11 characters only" v-model.number="form.data.gu_mobno"></div>
                                        <div class="col-md-3">Email<input type="email" class="form-control" placeholder="example@domain.com" maxlength="100" v-model="form.data.gu_email"></div>
                                        <div class="col-md-3">Occupation<input type="text" class="form-control" placeholder="Occupation" maxlength="100" v-model="form.data.gu_occu"></div>
                                        <div class="col-md-3">Relationship<input type="text" class="form-control" placeholder="Relationship" maxlength="100" v-model="form.data.gu_rel"></div>   
                                </div>
                            </div>
                    </div>
                </div>
              </div>
              <!-- End of Parents and Guardian -->
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-12">
                    <button @click.prevent="updateInfo" type="submit" class="btn btn-success">Update <i class="fa fa-save"></i></button>
                </div>
              </div>
               </form>
            </div>
          </div>
        </div>
      </div>
      <!-- End of Row -->
      
    </div>
</div>
        

  </div>
</template>

<script>
    export default {
        data(){
            return { 
                 form: new Form({
                     //important details
                    id : '',
                    id_num : '',
                    cd_email:'',
                    firstname : '',
                    middlename : '',
                    lastname : '',
                    year_level: '',
                    section:'',
                    acad_program:'',
                    profile_photo: '',
                    student_type: '',
                    //supporting details
                    suffixname:'',
                    scholarship:'',
                    sex:'',
                    civil_status:'',
                    citizenship:'',
                    birthplace:'',
                    religion:'',
                    dob:'',
                    //current address
                    ca_st_num:'',
                    ca_st_name:'',
                    ca_subd:'',
                    ca_brgy:'',
                    ca_city:'',
                    ca_province:'',
                    ca_zipcode:'',
                    //permanent address
                    per_st_num:'',
                    per_st_name:'',
                    per_subd:'',
                    per_brgy:'',
                    per_city:'',
                    per_province:'',
                    per_zipcode:'',
                    //contact details
                    cd_telno:'',
                    cd_mobno:'',
                    //school attended
                    lsa_schtype:'',
                    lsa_schname:'',
                    lsa_schprogram:'',
                    lsa_schattended:'',
                    //parent information
                    //father
                    fa_fname:'',
                    fa_mname:'',
                    fa_lname:'',
                    fa_sname:'',
                    fa_mobno:'',
                    fa_email:'',
                    fa_occu:'',
                    //mother
                    mo_fname:'',
                    mo_mname:'',
                    mo_lname:'',
                    mo_mobno:'',
                    mo_email:'',
                    mo_occu:'',
                    //guardian
                    gu_fname:'',
                    gu_mname:'',
                    gu_lname:'',
                    gu_sname:'',
                    gu_mobno:'',
                    gu_email:'',
                    gu_occu:'',
                    gu_rel:'',

                })               
   
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            // getProfilePhoto(){
            //     let profile_photo = "img/profile/"+ this.form.profile_photo ;
            //     return profile_photo;
            // },
            updateInfo(){
                
        // Update
        fetch('/api/profile/'+this.form.data.id, {
          method: 'put',
          body: JSON.stringify(this.form.data),
          headers: {
            'content-type': 'application/json'
          }
        })
          .then(res => res.json())
          .then(data => {
            this.clearForm();
            swal(
                'Updated!',
                'Information has been updated.',
                'success'
            ) 
            $('#addNew').modal('hide');   
            this.$Progress.finish();            
            this.fetchPrograms();
            // location.reload();
          })
          .catch(()=> {
                    swal("Failed!", "UNAUTHORIZED ACTION.", "warning");
            });
            },
            // updateProfile(e){
            //     // console.log('uploading');
            //         let file = e.target.files[0];
            //         // console.log(file);
            //         let reader = new FileReader();
            //         // let vm = this;
            //         if(file['size'] < 2111775){
            //             reader.onloadend = (file) => {
            //                 // console.log('RESULT', reader.result)
            //                 this.form.profile_photo = reader.result;
            //             }
            //             reader.readAsDataURL(file);
            //         }else{
            //              swal({
            //                 type: 'error',
            //                 title: 'Exceeded File Size',
            //                 text: 'Maximum upload image file size: 2 MB',
            //             })
            //         }
            // }
        },
        created() {
            axios.get("/api/profiles").then(({data}) =>(this.form = data))
                // axios.get("api/profiles")
                // .then(({ data }) => (this.form.fill(data)));
                // axios.get("/api/profiles").then(({ data }) => (this.form.fill(data)));
                // axios.get("api/user").then(({data}) =>(this.users = data.data));

        }
    }

    
                
</script>