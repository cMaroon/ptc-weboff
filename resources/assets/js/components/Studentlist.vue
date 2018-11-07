<template>
    <div>
        <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Student List</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            
            <table id="datatable-fixed-header" class="table table-striped table-bordered">
              <thead>
                <tr>
                    <th>Registered At</th>
                    <th>ID Number</th>
                    <th>Fullname</th>
                    <th >Program</th>
                    <th>Year and Section </th>
                    <th >Modify</th>

                </tr>
              </thead>

              <tbody>
                <tr v-for="student in students" :key="student.id">
                    <td style="width:140px">{{student.created_at}}</td>
                    <td style="width:110px">{{student.id_num}}</td>
                    <td style="width:300px">{{student.firstname}} {{student.middlename}} {{student.lastname}} {{student.suffixname}}</td>
                    <td style="text-align:center; width:140px">{{student.acad_program}}</td>
                    <td style="width:140px">{{student.year_level}} - {{student.section}}</td>
                    <td style="text-align:center; width:140px">
                      <a href="#" @click="editModal(student)" data-toggle="tooltip" data-placement="top" title="Edit">
                            <i class="fa fa-edit "></i>
                        </a>
                      |
                       <a href="#" @click="deleteStudent(student.id)" data-toggle="tooltip" data-placement="top" title="Delete">
                            <i class="fa fa-trash "></i>
                        </a>
                    </td>

                </tr>
                
              </tbody>
            </table>
          </div>
        </div>
    </div>

<!-- Modal -->
        <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="addNewLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                    <h5 class="modal-title" v-show="!editmode" id="addNewLabel">Add New</h5>
                    <h5 class="modal-title" v-show="editmode" id="addNewLabel">Update Student's Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form @submit.prevent="editmode ? updateStudent() : createStudent()">
              <div class="modal-body">

                    <div class="form-group">
                      <input v-model="student.id_num" type="text" name="id_num"
                      placeholder="ID Number"
                        class="form-control" >
                    </div>
                    
                    <div class="form-group">
                      <input v-model="student.firstname" type="text" name="firstname"
                      placeholder="First Name"
                        class="form-control" >
                    </div>

                    <div class="form-group">
                      <input v-model="student.middlename" type="text" name="middlename"
                      placeholder="Middle Name"
                        class="form-control">

                    </div>

                    <div class="form-group">
                      <input v-model="student.lastname" type="text" name="lastname"
                      placeholder="Last Name"
                        class="form-control">

                    </div>

                    <div class="form-group">
                      <input v-model="student.suffixname" type="text" name="suffixname"
                      placeholder="Suffix Name"
                        class="form-control">
                    </div>

                    <div class="form-group">
                    <select v-model="student.acad_program" type="text" id="acad_program" name="acad_program" class="form-control" required>
                                <option value="">Please select your program*</option>
                                <option value="ABA">Associate in Business Administration</option>
                                <option value="COA">Certificate in Office Administration</option>
                                <option value="CCS">Certificate in Computer Science</option>
                                <option value="CHRM">Certificate in Hotel and Restaurant Management</option>
                                <option value="BSIT">Bachelor of Science in Information Technology</option>
                                <option value="BSOA">Bachelor of Science in Office Administration</option>
                                <option value="BSIT-EXEC">Executive - Bachelor of Science in Information Technology</option>
                                <option value="BSOA-EXEC">Executive - Bachelor of Science in Office Administration </option>
                                <option value="ABM">Accountancy, Business and Management </option>
                                <option value="HUMSS">Humanities and Social Science </option>
                                <option value="TECH-VOC ICT">Tech-Voc Information and Communications Technology </option>
                        </select>
                    </div>

                    <div class="form-group">
                    <select v-model="student.year_level" type="text" id="year_level" name="year_level" class="form-control"  required >
                            <option value="">Please select year level*</option>
                            <option value="First Year">First Year</option>
                            <option value="Second Year">Second Year</option>
                            <option value="Third Year">Third Year</option>
                            <option value="Fourth Year">Fourth Year</option>
                            <option value="Grade 11">Grade 11</option>
                            <option value="Grade 12">Grade 12</option>
                    </select>

                    </div>                    

                    <div class="form-group">
                            <select v-model="student.section" type="text" id="section" name="section" class="form-control"  required  >
                                    <option value="">Please select section*</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="Executive">Executive</option>
                                    <option value="SHS">Senior High School</option>
                            </select>

                    </div>
                    
              </div>
              <div class="modal-footer">
                    <button v-show="editmode" type="submit" class="btn btn-success">Update <i class="fas fa-pen fa-fw"></i></button>
                    <button v-show="!editmode" type="submit" class="btn btn-primary">Create <i class="fas fa-save fa-fw"></i></button>
              </div>
              </form>
            </div>
          </div>
        </div>


    </div>
</template>

<script>
export default {
    data() {
        return {
            students: [],
            student: {
                id: '',
                id_num: '',
                firstname:'',
                middlename:'',
                lastname:'',
                suffixname:'',
                acad_program:'',
                year_level:'',
                section:''
            },
            editmode: false
        }
    },

    created() {
        this.fetchStudents();
    },

    methods: {
        fetchStudents() {
            fetch('/api/students')
            .then(res => res.json())
            .then(res => {
                this.students = res.data;

            })
        },
        editModal(student){
                this.editmode = true;
                $('#addNew').modal('show');

                this.student.id = student.id;
                this.student.id_num = student.id_num;
                this.student.firstname = student.firstname;
                this.student.middlename = student.middlename;
                this.student.lastname = student.lastname;
                this.student.suffixname = student.suffixname;
                this.student.acad_program = student.acad_program;
                this.student.year_level = student.year_level;
                this.student.section = student.section;
            },
          updateStudent(){

                // console.log('Editing data');
                fetch('/api/student/'+this.student.id,{
                    method: 'put',
                    body: JSON.stringify(this.student),
                    headers: {
                        'content-type':'application/json'
                    }
                })
                .then(res => res.json()) 
                .then(data => {
                    // success
                     swal(
                        'Updated!',
                        'Information has been updated.',
                        'success'
                        ) 
                    this.student.id_num = '';
                    this.student.firstname = '';
                    this.student.middlename = '';
                    this.student.lastname = '';
                    this.student.suffixname = '';
                    this.student.acad_program = '';
                    this.student.year_level = '';
                    this.student.section = '';
                    this.editmode = false;
                    $('#addNew').modal('hide');               
                    this.fetchStudents();
                })
                .catch(()=> {
                    swal("Failed!", "UNAUTHORIZED ACTION.", "warning");
                });

            },
        deleteStudent(id){
                swal({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        // Send request to the server
                         if (result.value) {
                                fetch(`/api/student/${id}`,{
                                    method:'delete'
                                })
                                .then(res=>res.json())
                                .then(data => {
                                    swal(
                                        'Deleted!',
                                        'Your file has been deleted.',
                                        'success'
                                        )
                                    this.fetchStudents();
                                    // location.reload();
                                    

                                })
                                    .catch(()=> {
                                    swal("Failed!", "UNAUTHORIZED ACTION.", "warning");
                                });
                             
                         }
                    })
            },
    }
}
</script>
