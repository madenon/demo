@extends('admin.admin_master')

@section('admin')
  <div class="content-wrapper">
    <div class="container-full">
      <section class="content">

        <!-- Basic Forms -->
        <div class="box">
          <div class="box-header with-border">
            <h4 class="box-title">Add Fee Category</h4>

          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col">
                <form method="POST" action="{{ route('store.fee.category') }}">
                  @csrf
                  <div class="row">
                    <div class="col-12">

                      {{-- row --}}

                      <div class="form-group">
                        <h5>Fee Category Name <span class="text-danger">*</span></h5>
                        <div class="controls">
                          <input type="text" name="name" id="name" class="form-control"
                            placeholder="Class Name">

                          @error('name')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                      <!--  End col md-6-->

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
