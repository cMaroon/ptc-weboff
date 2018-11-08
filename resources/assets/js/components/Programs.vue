<template>
  <div>
    <h2>List of Programs</h2>

        <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="addNewLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                    <h5 class="modal-title" v-show="!edit" id="addNewLabel">Add Program Info</h5>
                    <h5 class="modal-title" v-show="edit" id="addNewLabel">Update Program Info</h5>

              </div>
              <form @submit.prevent="addProgram">
              <div class="modal-body">

                    <div class="form-group">
                      <input  type="text" placeholder="Program Code"
                        class="form-control" v-model="program.program_code" required>
                    </div>
                    
                    <div class="form-group">
                      <input  type="text"
                      placeholder="Descriptive Title"
                        class="form-control" v-model="program.descriptive_title" required>
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

          <button class="btn btn-success" @click="newModal()">Add Program <i class="fa fa-plus"></i></button>
        <table id="datatable-fixed-header" class="table table-striped table-bordered">
              <thead>
                <tr>
                    <th>Course Code</th>
                    <th>Descriptive Title</th>
                    <th >Modify</th>

                </tr>
              </thead>

              <tbody>
                <tr v-for="program in programs" :key="program.id">
                    <td style="width:110px">{{program.program_code}}</td>
                    <td style="width:300px">{{program.descriptive_title}}</td>
                    <td style="text-align:center; width:140px">
                      <a href="#" @click="editProgram(program)" data-toggle="tooltip" data-placement="top" title="Edit">
                            <i class="fa fa-edit "></i>
                        </a>
                      |
                       <a href="#" @click="deleteProgram(program.id)" data-toggle="tooltip" data-placement="top" title="Delete">
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
      program: {
                id: '',
                program_code: '',
                descriptive_title:''

      },
      program_id: '',
      edit: false
    };
  },
  created() {
    this.fetchPrograms();
  },
  methods: {
    newModal(){
    this.clearForm();
    $('#addNew').modal('show');               
        
    },
    fetchPrograms() {
      fetch('/api/programs')
        .then(res => res.json())
        .then(res => {
          this.programs = res.data;
        })
        .catch(err => console.log(err));
    },

    deleteProgram(id) {
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
                                fetch(`/api/program/${id}`,{
                                    method:'delete'
                                })
                                .then(res=>res.json())
                                .then(data => {
                                    swal(
                                        'Deleted!',
                                        'Your file has been deleted.',
                                        'success'
                                        )
                                    this.fetchPrograms();
                                    location.reload();
                                    
                                    

                                })
                                    .catch(()=> {
                                    swal("Failed!", "UNAUTHORIZED ACTION.", "warning");
                                });
                             
                         }
                    })
    },
    addProgram() {
    this.$Progress.start();

        if (this.edit === false){
        // Add
        fetch('/api/program', {
          method: 'post',
          body: JSON.stringify(this.program),
          headers: {
            'content-type': 'application/json'
          }
        })
          .then(res => res.json())
          .then(data => {
            this.clearForm();
                toast({
                        type: 'success',
                        title: 'Program Added Successfully!'
                        })
            $('#addNew').modal('hide'); 
            this.$Progress.finish();
            this.fetchPrograms();
            location.reload();
          })
          .catch(()=> {
                    swal("Failed!", "UNAUTHORIZED ACTION.", "warning");
            });

        }else{
        // Update
        fetch('/api/program', {
          method: 'put',
          body: JSON.stringify(this.program),
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
        }
      



      
    },
    editProgram(program) {
        $('#addNew').modal('show');
      this.edit = true;
                this.program.id = program.id;
                this.program.program_id = program.id;
                this.program.program_code = program.program_code;
                this.program.descriptive_title = program.descriptive_title;

    },
    clearForm() {
      this.edit = false;
                this.program.id = null;
                this.program.program_id = null;
                this.program.program_code = '';
                this.program.descriptive_title = '';

    }
  }
};
</script>