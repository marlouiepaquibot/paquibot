<!---Sweet Alert-->
<script src="{{ asset('admin/vendor/sweetalert2/dist/sweetalert2.min.js')}}"></script>
<script src="{{ asset('admin/js/plugins-init/sweetalert.init.js')}}"></script>

<!-- container-scroller -->
<!-- base:js -->
<script src="{{ asset('template/vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{ asset('template/js/off-canvas.js') }}"></script>
<script src="{{ asset('template/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('template/js/template.js') }}"></script>
<script src="{{ asset('template/js/settings.js') }}"></script>
<script src="{{ asset('template/js/todolist.js') }}"></script>
<!-- endinject -->
<!-- plugin js for this page -->
<script src="{{ asset('template/vendors/progressbar.js/progressbar.min.js') }}"></script>
<script src="{{ asset('template/vendors/chart.js/Chart.min.js') }}"></script>
<!-- End plugin js for this page -->
<!-- Custom js for this page-->
<script src="{{ asset('template/js/dashboard.js') }}"></script>
<!-- End custom js for this page-->


<!-- Datatable -->
<script src="{{ asset('admin/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('admin/js/plugins-init/datatables.init.js')}}"></script>

<script>
  $(document).ready(function () {
    $('#filipinodesserts').DataTable();
  })
</script>

<script>
  $(document).ready(function () {
    $('#lutongbahay').DataTable();
  })
</script>

<script>
  $(document).ready(function () {
    $('#streetfood').DataTable();
  })
</script>