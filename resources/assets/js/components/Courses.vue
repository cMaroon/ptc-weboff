<template>
  <div>
    <h2>List of Courses</h2>

        <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="addNewLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                    <h5 class="modal-title" v-show="!edit" id="addNewLabel">Add Course Info</h5>
                    <h5 class="modal-title" v-show="edit" id="addNewLabel">Update Course Info</h5>

              </div>
              <form @submit.prevent="addCourse">
              <div class="modal-body">

                    <div class="form-group">
                      <input  type="text" placeholder="Course Code"
                        class="form-control" v-model="course.course_code" required>
                    </div>
                    
                    <div class="form-group">
                      <input  type="text"
                      placeholder="Descriptive Title"
                        class="form-control" v-model="course.descriptive_title" required>
                    </div>

                    <div class="form-group">
                      <input  type="text" 
                      placeholder="Lecture Hour"
                        class="form-control" v-model="course.lec_hr" required>

                    </div>

                    <div class="form-group">
                      <input  type="text" 
                      placeholder="Laboratory Hour"
                        class="form-control" v-model="course.lab_hr">

                    </div>

                    <div class="form-group">
                      <input  type="text" 
                      placeholder="Course Unit"
                        class="form-control" v-model="course.course_unit" required>
                    </div>

                    <div class="form-group">
                      <input  type="text" 
                      placeholder="Course Pre-requisite"
                        class="form-control" v-model="course.course_pre_req">
                    </div>
                    
              </div>
              <div class="modal-footer">

                    <button type="submit" v-show="edit" class="btn btn-success">Update <i class="fa fa-save"></i></button>
                    <button type="submit" v-show="!edit" class="btn btn-primary">Save <i class="fa fa-save"></i></button>
                    
              </div>
              </form>
            </div>
          </div>
        </div>

          <button class="btn btn-success" @click="newModal()">Add Course <i class="fa fa-plus"></i></button>
        <table id="datatable-fixed-header" class="table table-striped table-bordered">
              <thead>
                <tr>
                    <th>Course Code</th>
                    <th>Descriptive Title</th>
                    <th>Lecture Hour</th>
                    <th>Laboratory Hour</th>
                    <th>Course Unit</th>
                    <th>Course Pre-Requisite</th>
                    <th >Modify</th>

                </tr>
              </thead>

              <tbody>
                <tr v-for="course in courses" :key="course.id">
                    <td style="width:110px">{{course.course_code}}</td>
                    <td style="width:300px">{{course.descriptive_title}}</td>
                    <td style="width:100px">{{course.lec_hr}}</td>
                    <td style="width:100px">{{course.lab_hr}}</td>
                    <td style="width:100px">{{course.course_unit}}</td>
                    <td style="width:150px">{{course.course_pre_req}}</td>
                    <td style="text-align:center; width:140px">
                      <a href="#" @click="editCourse(course)" data-toggle="tooltip" data-placement="top" title="Edit">
                            <i class="fa fa-edit "></i>
                        </a>
                      |
                       <a href="#" @click="deleteCourse(course.id)" data-toggle="tooltip" data-placement="top" title="Delete">
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
      courses: [],
      course: {
                id: '',
                course_code: '',
                descriptive_title:'',
                lec_hr:'',
                lab_hr:'',
                course_unit:'',
                course_pre_req:''
      },
      course_id: '',
      edit: false
    };
  },
  created() {
    this.fetchCourses();
  },
  methods: {
    newModal(){
    this.clearForm();
    $('#addNew').modal('show');               
        
    },
    fetchCourses() {
      fetch('/api/courses')
        .then(res => res.json())
        .then(res => {
          this.courses = res.data;
        })
        .catch(err => console.log(err));
    },

    deleteCourse(id) {
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
                                fetch(`/api/course/${id}`,{
                                    method:'delete'
                                })
                                .then(res=>res.json())
                                .then(data => {
                                    swal(
                                        'Deleted!',
                                        'Your file has been deleted.',
                                        'success'
                                        )
                                    this.fetchCourses();
                                    location.reload();
                                    
                                    

                                })
                                    .catch(()=> {
                                    swal("Failed!", "UNAUTHORIZED ACTION.", "warning");
                                });
                             
                         }
                    })
    },
    addCourse() {
    this.$Progress.start();

        if (this.edit === false){
        // Add
        fetch('/api/course', {
          method: 'post',
          body: JSON.stringify(this.course),
          headers: {
            'content-type': 'application/json'
          }
        })
          .then(res => res.json())
          .then(data => {
            this.clearForm();
                toast({
                        type: 'success',
                        title: 'Course Added Successfully!'
                        })
            $('#addNew').modal('hide'); 
            this.$Progress.finish();
            this.fetchCourses();
            location.reload();
          })
          .catch(()=> {
                    swal("Failed!", "UNAUTHORIZED ACTION.", "warning");
            });

        }else{
        // Update
        fetch('/api/course', {
          method: 'put',
          body: JSON.stringify(this.course),
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
            this.fetchCourses();
            // location.reload();
          })
          .catch(()=> {
                    swal("Failed!", "UNAUTHORIZED ACTION.", "warning");
            });
        }
      



      
    },
    editCourse(course) {
        $('#addNew').modal('show');
      this.edit = true;
                this.course.id = course.id;
                this.course.course_id = course.id;
                this.course.course_code = course.course_code;
                this.course.descriptive_title = course.descriptive_title;
                this.course.lec_hr = course.lec_hr;
                this.course.lab_hr = course.lab_hr;
                this.course.course_unit = course.course_unit;
                this.course.course_pre_req = course.course_pre_req;

    },
    clearForm() {
      this.edit = false;
                this.course.id = null;
                this.course.course_id = null;
                this.course.course_code = '';
                this.course.descriptive_title = '';
                this.course.lec_hr = '';
                this.course.lab_hr = '';
                this.course.course_unit = '';
                this.course.course_pre_req = '';
    }
  }
};
</script>