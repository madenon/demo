<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('../images/favicon.ico') }}">
    <title>Sunny Admin - Dashboard</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ asset('css/vendors_css.css') }}">

    <!-- Style-->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/skin_color.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.css" rel="stylesheet">
  </head>

  <body class="hold-transition dark-skin sidebar-mini theme-primary fixed">

    <div class="wrapper">

      @include('admin.body.header')
      <!-- Left side column. contains the logo and sidebar -->
      @include('admin.body.sidebar')

      <!-- Content Wrapper. Contains page content -->
      @yield('admin')
      <!-- /.content-wrapper -->
      @include('admin.body.footer')
      <!-- Control Sidebar -->


      <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>

    </div>
    <!-- ./wrapper -->


    <!-- Vendor JS -->
    <script src="{{ asset('js/vendors.min.js') }}"></script>
    <script src="{{ asset('../assets/icons/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('../assets/vendor_components/easypiechart/dist/jquery.easypiechart.js') }}">
    </script>
    <script src="{{ asset('../assets/vendor_components/apexcharts-bundle/irregular-data-series.js') }}">
    </script>
    <script src="{{ asset('../assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') }}">
    </script>

    <!-- Sunny Admin App -->

    <script src="{{ asset('../assets/vendor_components/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('js/pages/data-table.js') }}"></script>

    <script src="{{ asset('js/template.js') }}"></script>
    <script src="{{ asset('js/pages/dashsboard.js') }}"></script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script type="text/javascript">
      $(function() {
        $(document).on('click', '#delete', function(e) {
          e.preventDefault();
          var link = $(this).attr("href");

          Swal.fire({
            title: "Are you sure?",
            text: "Delete The User?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.href = link
              Swal.fire({
                title: "Deleted!",
                text: "User has been deleted.",
                icon: "success"
              });
            }
          });



        })

      });
    </script>



    <script src=" https://cdn.jsdelivr.net/npm/toastr@2.1.4/toastr.min.js "></script>

    <script>
      @if (Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}"

        switch (type) {
          case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;

          case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

          case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

          case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;


        }
      @endif
    </script>
  </body>

</html>
