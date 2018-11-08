<template>
  <div>
    <h2>Student List</h2>

        <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="addNewLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                    <h5 class="modal-title" id="addNewLabel">Update Student's Info</h5>

              </div>
              <form @submit.prevent="updateStudent">
              <div class="modal-body">

                    <div class="form-group">
                      <input  type="text" placeholder="ID Number"
                        class="form-control" v-model="student.id_num" readonly>
                    </div>
                    
                    <div class="form-group">
                      <input  type="text"
                      placeholder="First Name"
                        class="form-control" v-model="student.firstname" >
                    </div>

                    <div class="form-group">
                      <input  type="text" 
                      placeholder="Middle Name"
                        class="form-control" v-model="student.middlename">

                    </div>

                    <div class="form-group">
                      <input  type="text" 
                      placeholder="Last Name"
                        class="form-control" v-model="student.lastname">

                    </div>

                    <div class="form-group">
                      <input  type="text" 
                      placeholder="Suffix Name"
                        class="form-control" v-model="student.suffixname">
                    </div>

                    <div class="form-group">
                    <select  type="text" class="form-control" required v-model="student.acad_program">
                        <option v-for="program in programs" :key="program.id" v-bind:value="program.program_code">{{program.descriptive_title}}</option>
                        </select>
                    </div>

                    <div class="form-group">
                    <select  type="text"  class="form-control"  required v-model="student.year_level" >
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
                            <select  type="text"  class="form-control"  required  v-model="student.section">
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

                    <button type="submit" class="btn btn-success">Update <i class="fa fa-save"></i></button>
                    
              </div>
              </form>
            </div>
          </div>
        </div>
          
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
                      <a href="#" @click="editStudent(student)" data-toggle="tooltip" data-placement="top" title="Edit">
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
</template>

<script>
export default {
  data() {
    return {
      programs: [],
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
      student_id: '',
      user_id:'',
      pagination: {},
      edit: false
    };
  },
  created() {
    this.fetchStudents();
    this.fetchPrograms();
  },
  methods: {
    fetchStudents() {
      fetch('/api/students')
        .then(res => res.json())
        .then(res => {
          this.students = res.data;
        })
        .catch(err => console.log(err));
    },
    fetchPrograms() {
      fetch('/api/programs')
        .then(res => res.json())
        .then(res => {
          this.programs = res.data;
        })
        .catch(err => console.log(err));
    },

    deleteStudent(id) {
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
                                    location.reload();
                                    

                                })
                                    .catch(()=> {
                                    swal("Failed!", "UNAUTHORIZED ACTION.", "warning");
                                });
                             
                         }
                    })
    },
    updateStudent() {
        fetch('/api/user', {
          method: 'put',
          body: JSON.stringify(this.student),
          headers: {
            'content-type': 'application/json'
          }
        })
          .then(res => res.json())

          .catch(()=> {
                    swal("Failed!", "UNAUTHORIZED ACTION.", "warning");
            });
      
        // Update
        fetch('/api/student', {
          method: 'put',
          body: JSON.stringify(this.student),
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
            this.fetchStudents();
            // location.reload();
          })
          .catch(()=> {
                    swal("Failed!", "UNAUTHORIZED ACTION.", "warning");
            });


      
    },
    editStudent(student) {
        $('#addNew').modal('show');
      this.edit = true;
                this.student.id = student.id;
                this.student.student_id = student.id;
                this.student.user_id = student.id_num;
                this.student.id_num = student.id_num;
                this.student.firstname = student.firstname;
                this.student.middlename = student.middlename;
                this.student.lastname = student.lastname;
                this.student.suffixname = student.suffixname;
                this.student.acad_program = student.acad_program;
                this.student.year_level = student.year_level;
                this.student.section = student.section;
    },
    clearForm() {
      this.edit = false;
                    this.student.id = null;
                    this.student.student_id = null;
                    this.student.id_num = '';
                    this.student.firstname = '';
                    this.student.middlename = '';
                    this.student.lastname = '';
                    this.student.suffixname = '';
                    this.student.acad_program = '';
                    this.student.year_level = '';
                    this.student.section = '';
    }
  }
};
</script>