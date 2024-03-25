@extends('admin.admin_master')
@section('admin')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


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
                <form method="POST" action="{{ route('profile.store') }}" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-12">

                      {{-- row --}}


                      <div class="row">

                        <div class="col-md-6">


                          <div class="form-group">
                            <h5>User Mobile <span class="text-danger">*</span></h5>
                            <div class="controls">
                              <input type="text" name="mobile" class="form-control" required=""
                                value="{{ $editData->mobile }}" placeholder="Mobile">
                            </div>
                          </div>
                        </div>
                        <!--  End col md-6-->
                        <div class="col-md-6">

                          <div class="form-group">
                            <h5>User Address <span class="text-danger">*</span></h5>
                            <div class="controls">
                              <input type="text" name="address" class="form-control" required=""
                                value="{{ $editData->address }}" placeholder="Address">
                            </div>
                          </div>

                        </div> <!--  End col md-6-->

                      </div>{{-- end row --}}


                      <div class="row">

                        <div class="col-md-6">


                          <div class="form-group">
                            <h5>Username <span class="text-danger">*</span></h5>
                            <div class="controls">
                              <input type="name" name="name" class="form-control" required=""
                                value="{{ $editData->name }}" placeholder="Username">
                            </div>
                          </div>
                        </div>
                        <!--  End col md-6-->
                        <div class="col-md-6">

                          <div class="form-group">
                            <h5>User Email <span class="text-danger">*</span></h5>
                            <div class="controls">
                              <input type="email" name="email" class="form-control" required=""
                                value="{{ $editData->email }}" placeholder="admin@gmail.com">
                            </div>
                          </div>

                        </div> <!--  End col md-6-->

                      </div>

                      <div class="row">

                        <div class="col-md-6">


                          <div class="form-group">
                            <h5>Gender <span class="text-danger">*</span></h5>
                            <div class="controls">
                              <select name="gender" id="gender" required=""
                                class="form-control">
                                <option value="" selected="" disabled>Select Gender</option>
                                <option value="Male"
                                  {{ $editData->gender == 'Mal' ? 'selected' : '' }}>Mal
                                </option>
                                <option value="Femal"
                                  {{ $editData->gender == 'Femal' ? 'selected' : '' }}>Femal
                                </option>

                              </select>
                            </div>
                          </div>
                        </div>
                        <!--  End col md-6-->
                        <div class="col-md-6">

                          <div class="form-group">
                            <h5>Profile Image <span class="text-danger">*</span></h5>
                            <div class="controls">
                              <input type="file" name="image" class="form-control"
                                id="image">
                            </div>
                          </div>


                          <div class="form-group">
                            <div class="controls">
                              <img id="showImage"
                                src="{{ !empty($user->image) ? url('upload/user_images/' . $user->image) : url('upload/no_image.jpg') }}"
                                style="width:100px;  border:1px solid #000000; ">
                            </div>
                          </div>

                        </div> <!--  End col md-6-->

                      </div>
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




  <script type="text/javascript">
    $(document).ready(function() {
      $('#image').change(function(e) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#showImage').attr('src', e.target.result);
        }
        reader.readAsDataURL(e.target.files['0']);
      });
    });
  </script>
@endsection
