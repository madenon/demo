@extends('admin.admin_master')

@section('admin')
  <div class="content-wrapper">
    <div class="container-full">
      <section class="content">

        <!-- Basic Forms -->
        <div class="box">
          <div class="box-header with-border">
            <h4 class="box-title"> Update User</h4>

          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col">
                <form method="POST" action="{{ route('users.update', $editData->id) }}">
                  @csrf
                  <div class="row">
                    <div class="col-12">

                      {{-- row --}}

                      <div class="row">

                        <div class="col-md-6">


                          <div class="form-group">
                            <h5>User Rol <span class="text-danger">*</span></h5>
                            <div class="controls">
                              <select name="suertype" id="suertype" required=""
                                class="form-control">
                                <option value="" selected="" disabled>Select Role</option>
                                <option value="Admin"
                                  {{ $editData->suertype == 'Admin' ? 'selected' : '' }}>Admin
                                </option>
                                <option value="User"
                                  {{ $editData->suertype == 'User' ? 'selected' : '' }}>User
                                </option>

                              </select>
                            </div>
                          </div>
                        </div>
                        <!--  End col md-6-->
                        <div class="col-md-6">

                          <div class="form-group">
                            <h5>User Name <span class="text-danger">*</span></h5>
                            <div class="controls">
                              <input type="text" name="name" class="form-control"
                                placeholder="Admin" required="" value="{{ $editData->name }}">
                            </div>
                          </div>

                        </div> <!--  End col md-6-->

                      </div>
                      <div class="row">

                        <div class="col-md-6">


                          <div class="form-group">
                            <h5>User Email <span class="text-danger">*</span></h5>
                            <div class="controls">
                              <input type="email" name="email" class="form-control" required=""
                                value="{{ $editData->email }}" placeholder="admin@gmail.com">
                            </div>
                          </div>
                        </div>
                        <!--  End col md-6-->
                        <div class="col-md-6">



                        </div> <!--  End col md-6-->

                      </div>{{-- end row --}}
                      <div class="text-xs-right">

                        <input class="btn btn-rounded btn-info mt-5" type="submit" value="Update">
                      </div>
                </form>

              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

      </section>

    </div>
  </div>
@endsection