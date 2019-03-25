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
                  <th>Registered At</th>
                  <th>Modify</th>
                </tr>

                <tr v-for="user in users" :key="user.id">
                  <td>{{user.id}}</td>
                  <td>{{user.name}}</td>
                  <td>{{user.email}}</td>
                  <td>{{user.role}}</td>
                  <td>{{user.created_at | dateType1}}</td>
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

          <form @submit.prevent="createUser">
            <div class="modal-body">
              <div class="form-group">
                <input
                  v-model="form.name"
                  type="text"
                  name="name"
                  placeholder="Name"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('name') }"
                >
                <has-error :form="form" field="name"></has-error>
              </div>

              <div class="form-group">
                <input
                  v-model="form.email"
                  type="text"
                  name="email"
                  placeholder="Email Address"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('email') }"
                >
                <has-error :form="form" field="email"></has-error>
              </div>

              <div class="form-group">
                <input
                  v-model="form.password"
                  type="password"
                  name="password"
                  placeholder="Password"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('password') }"
                >
                <has-error :form="form" field="password"></has-error>
              </div>

              <div class="form-group">
                <input
                  v-model="form.bio"
                  type="text"
                  name="bio"
                  placeholder="Short bio for user (Optional)."
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('bio') }"
                >
                <has-error :form="form" field="bio"></has-error>
              </div>

              <div class="form-group">
                <select
                  name="role"
                  v-model="form.role"
                  id="role"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('role') }"
                >
                  <option value>Select Authenticated Role</option>
                  <option value="Super User">Super User</option>
                  <option value="Admin">Admin</option>
                  <option value="User">User</option>
                  <option value="Author">Author</option>
                </select>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Create New User</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- ./container -->
</template>

<script>
export default {
  data() {
    return {
      users: {},
      form: new Form({
        name: "",
        email: "",
        password: "",
        role: "",
        bio: "",
        photo: ""
      })
    };
  },

  methods: {
    loadUsers() {
      axios.get("api/user").then(({ data }) => (this.users = data.data));
    },

    createUser() {
      this.form.post("api/user");
    }
  },

  created() {
    this.loadUsers();
  }
};
</script>
