@extends('admin.admin_master')

@section('admin')
  <div class="content-wrapper">
    <div class="container-full">
      <section class="content">

        <!-- Basic Forms -->
        <div class="box">
          <div class="box-header with-border">
            <h4 class="box-title">Change Password</h4>

          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col">
                <form method="POST" action="{{ route('password.update') }}">
                  @csrf
                  <div class="row">
                    <div class="col-12">

                      {{-- row --}}





                      <div class="form-group">
                        <h5>Current Password <span class="text-danger">*</span></h5>
                        <div class="controls">
                          <input type="password" name="oldpassword" id="current_password"
                            class="form-control"  placeholder="mot de passe actuel">

                          @error('oldpassword')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                      <!--  End col md-6-->

                      <div class="form-group">
                        <h5>New Password <span class="text-danger">*</span></h5>
                        <div class="controls">
                          <input type="password" id="password" name="password" class="form-control"
                            placeholder="nouveau mot de passe ">
                          @error('password')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group">
                        <h5>Confirm Password <span class="text-danger">*</span></h5>
                        <div class="controls">
                          <input type="password" name="password_confirmation"
                            id="password_confirmation" class="form-control"
                            placeholder="confirmer nouveau mot de passe ">

                          @error('password_confirmation')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>






                      <div class="text-xs-right">

                        <input class="btn btn-rounded btn-info mt-5" type="submit" value="Submit">
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
