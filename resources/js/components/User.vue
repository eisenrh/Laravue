<template>
  <div class="container">
    <div class="row mt-4">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Users Table</h3>

            <div class="card-tools">
              <button
                class="btn btn-success"
                data-toggle="modal"
                data-target="#addNewUser"
              >Add New User</button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover">
              <tbody>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th>Modify</th>
                </tr>
                <tr>
                  <td>183</td>
                  <td>John Doe</td>
                  <td>11-7-2014</td>
                  <td>
                    <span class="tag tag-success">Approved</span>
                  </td>
                  <td>
                    <a href="#" class="btn btn-success btn-sm" alt="Edit">
                      <i class="fa fa-edit"></i>
                    </a>
                    <a href="#" class="btn btn-danger btn-sm" alt="Delete">
                      <i class="fa fa-trash"></i>
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>

    <!-- Modal -->
    <div
      class="modal fade"
      id="addNewUser"
      tabindex="-1"
      role="dialog"
      aria-labelledby="addNewUserLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addNewUserLabel">Add New User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- <div class="form-group">
              <input
                v-model="form.username"
                type="text"
                name="name"
                placeholder="Name"
                class="form-control"
                :class="{ 'is-invalid': form.errors.has('name') }"
              >
              <has-error :form="form" field="name"></has-error>
            </div>-->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Create New User</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ./container -->
</template>

<script>
export default {
  // data() {
  //   return {
  //     form: new Form({
  //       name: "",
  //       email: "",
  //       password: "",
  //       role: "",
  //       bio: "",
  //       photo: ""
  //     })
  //   };
  // },

  mounted() {
    console.log("Component mounted.");
  }
};
</script>
