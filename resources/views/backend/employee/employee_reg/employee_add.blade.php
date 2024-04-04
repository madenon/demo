@extends('admin.admin_master')
@section('admin')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <div class="content-wrapper">
    <div class="container-full">
      <section class="content">

        <!-- Basic Forms -->
        <div class="box">
          <div class="box-header with-border">
            <h4 class="box-title">Add Employee </h4>

          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col">
                <form method="post" action="{{ route('store.employee.registration') }}"
                  enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-12">

                      {{-- row --}}

                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <h5>Employee Name <span class="text-danger">*</span></h5>
                            <div class="controls">
                              <input type="text" name="name" id="name" class="form-control"
                                required="">

                            </div>
                          </div>

                        </div>


                        <div class="col-md-4">
                          <div class="form-group">
                            <h5>Father's Name <span class="text-danger">*</span></h5>
                            <div class="controls">
                              <input type="text" name="fname" id="name" class="form-control"
                                required="" placeholder="">

                            </div>
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <h5>Mother's Name <span class="text-danger">*</span></h5>
                            <div class="controls">
                              <input type="text" name="mname" id="name" class="form-control"
                                required="" placeholder="">

                            </div>
                          </div>

                        </div>

                      </div>
                      <!--  End col md-6-->

                      {{-- 2ND PARTIE ROW --}}

                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <h5>Mobile Number <span class="text-danger">*</span></h5>
                            <div class="controls">
                              <input type="text" name="mobile" id="name" class="form-control"
                                required="" placeholder="">

                            </div>
                          </div>

                        </div>



                        <div class="col-md-4">
                          <div class="form-group">
                            <h5>Full Address <span class="text-danger">*</span></h5>
                            <div class="controls">
                              <input type="text" name="address" id="name" class="form-control"
                                required="" placeholder="">

                            </div>
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <h5>Gender <span class="text-danger">*</span></h5>
                            <div class="controls">
                              <select name="gender" id="gender" required=""
                                class="form-control">
                                <option value="" selected="" disabled>Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>

                              </select>

                            </div>
                          </div>

                        </div>

                      </div>

                      {{-- Three part row --}}
                      <div class="row">


                        <div class="col-md-4">
                          <div class="form-group">
                            <h5>Religion <span class="text-danger">*</span></h5>
                            <div class="controls">
                              <select name="religion" id="religion" required=""
                                class="form-control">
                                <option value="" selected="" disabled>Select Religion
                                </option>
                                <option value="Islam">Islam</option>
                                <option value="Christiam">Christiam</option>
                                <option value="Other">Other</option>

                              </select>

                            </div>
                          </div>

                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <h5>Date Of Birth <span class="text-danger">*</span></h5>
                            <div class="controls">
                              <input type="date" name="dob" id="dob" class="form-control"
                                required="" placeholder="">

                            </div>
                          </div>

                        </div>


                        <div class="col-md-4">
                          <div class="form-group">
                            <h5>Designation <span class="text-danger">*</span></h5>
                            <div class="controls">
                              <select name="year_id" id="year_id" required=""
                                class="form-control">
                                <option value="" selected="" disabled>Select Shift
                                </option>
                                @foreach ($designation as $desi)
                                  <option value="{{ $desi->id }}">{{ $desi->name }}</option>
                                @endforeach

                              </select>

                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">
                              <h5>Salary<span class="text-danger">*</span></h5>
                              <div class="controls">
                                <input type="text" name="salary" id="salary"
                                  class="form-control" required="" placeholder="">

                              </div>
                            </div>

                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <h5>Joining Date <span class="text-danger">*</span></h5>
                              <div class="controls">
                                <input type="date" name="join_date" id="join_date"
                                  class="form-control" required="" placeholder="">

                              </div>
                            </div>

                          </div>

                          <div class="col-md-4">

                            <div class="form-group">
                              <h5>Email <span class="text-danger">*</span></h5>
                              <div class="controls">
                                <input type="email" name="email" id="email"
                                  class="form-control" required="" placeholder="">

                              </div>
                            </div>
                          </div>



                        </div>




                        <div class="row">
                          <div class="col-md-4">

                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <div class="form-group">
                                <h5>Profile Image <span class="text-danger">*</span></h5>
                                <div class="controls">
                                  <input type="file" name="image" class="form-control"
                                    id="image">
                                </div>
                              </div>
                            </div>

                          </div>

                          <div class="col-md-4">
                            <div class="form-group">
                              <div class="controls">
                                <img id="showImage" src="{{ url('upload/no_image.jpg') }}"
                                  style="width:100px;  border:1px solid #000000; ">
                              </div>
                            </div>

                          </div>



                        </div>








                        <div class="text-xs-right">

                          <input class="btn btn-rounded btn-info mt-5" type="submit"
                            value="Submit">
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
