<!DOCTYPE html>
<html lang="en">
<head>
  @include('partials._head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

  <!-- Navbar -->
  @include('partials._navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('partials._sidebar')
  <!--/.sidebar-->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid" style="margin-top: 10px">
          <router-view></router-view>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  @include('partials._footer')

</div>
<!-- ./wrapper -->

<script src="js/app.js"></script>
</body>
</html>
