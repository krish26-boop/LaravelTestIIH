<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Users</title>
	<!-- core:css -->
	<link rel="stylesheet" href="{{asset('../assets/vendors/core/core.css')}}">
	<!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{asset('../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
	<!-- end plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="{{asset('../assets/fonts/feather-font/css/iconfont.css') }}">
	<link rel="stylesheet" href="{{asset('../assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
	<!-- endinject -->
    <link rel="stylesheet" href="{{asset('../assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <!-- Layout styles -->  
	<link rel="stylesheet" href="{{asset('../assets/css/demo_1/style.css')}}">
  <!-- End layout styles -->
</head>
<body>
	<div class="main-wrapper">
		<!-- partial:partials/_sidebar.html -->
		<nav class="sidebar">
      <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
          Users<span>Manage</span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item">
            <a href="{{ route('usermanage.index')}}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
            </a>
          </li>
        
        </ul>
      </div>
    </nav>
  
		<!-- partial -->
	
		<div class="page-wrapper">
					
			<!-- partial:partials/_navbar.html -->
			<nav class="navbar">
				<a href="#" class="sidebar-toggler">
					<i data-feather="menu"></i>
				</a>
				<div class="navbar-content">
					<form class="search-form">
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<i data-feather="search"></i>
								</div>
							</div>
							<input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
						</div>
					</form>
					
				</div>
			</nav>



@yield('body')

<footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
				<p class="text-muted text-center text-md-left">Copyright © 2022 <a>Chirs Coder</a>. All rights reserved</p>
				<p class="text-muted text-center text-md-left mb-0 d-none d-md-block">Handcrafted With <i class="mb-1 text-primary ml-1 icon-small" data-feather="heart"></i></p>
			</footer>
			<!-- partial -->

		</div>
	</div>
            	<!-- core:js -->
	<script src="{{asset('../assets/vendors/core/core.js')}}"></script>
	<!-- endinject -->
  <!-- plugin js for this page -->
  <script src="{{asset('../assets/vendors/chartjs/Chart.min.js')}}"></script>
  <script src="{{asset('../assets/vendors/jquery.flot/jquery.flot.js')}}"></script>
  <script src="{{asset('../assets/vendors/jquery.flot/jquery.flot.resize.js')}}"></script>
  <script src="{{asset('../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('../assets/vendors/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('../assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
	<!-- end plugin js for this page -->
	<!-- inject:js -->
	<script src="{{asset('../assets/vendors/feather-icons/feather.min.js')}}"></script>
	<script src="{{asset('../assets/js/template.js')}}"></script>
	<!-- endinject -->
  <!-- custom js for this page -->
  <script src="{{asset('../assets/js/dashboard.js')}}"></script>
  <script src="{{asset('../assets/js/datepicker.js')}}"></script>
	<!-- end custom js for this page -->
     <!-- plugin js for this page -->
  <script src="{{asset('../assets/vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{asset('../assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
   <!-- custom js for this page -->
   <script src="{{asset('../assets/js/data-table.js')}}"></script>
   <script src="{{asset('../assets/vendors/tinymce/tinymce.min.js')}}"></script>
   <script src="{{asset('../assets/js/tinymce.js')}}"></script>
   	<!-- custom js for this page -->
	<script src="{{asset('../assets/js/file-upload.js')}}"></script>
</body>
</html>    

