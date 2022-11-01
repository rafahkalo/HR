@extends('admin_layout')

@section('navbar_items')
    <li ><a href="{{ route('admin.dashboard') }}"><i class="la la-dashboard"></i> <span>Dashbord</span> </a></li>

    <li class="submenu">
        <a href="#" class="noti-dot"><i class="la la-user"></i> <span> Employees</span> <span
                class="menu-arrow"></span></a>
        <ul style="display: none;">
            <li ><a  href="{{ route('admin.employees.index') }}">All Employees</a></li>
            <li><a  href="{{ route('admin.departments.index') }}">Departments</a></li>
            <li><a  style="text-decoration: none" href="{{ route('admin.jobs.index') }}">Jobs</a></li>

        </ul>
    </li>
    <li class="submenu"><a href="#" class="noti-dot"><i class="	la la-edit"></i> <span> Leaves</span> <span
                class="menu-arrow"></span></a>
        <ul style="display: none;">
            <li><a  href="{{ route('admin.leaves.index') }}"> Employees Leaves </a></li>
            <li><a href="{{ route('admin.leaves.my_leaves') }}">My Leaves </a></li>
            <li><a class="active" style="text-decoration: none" href="{{ route('admin.leaves.leave_type') }}">Leave Type</a></li>
            <li><a href="{{ route('admin.leaves.leave_settings') }}">Leave Settings</a></li>
        </ul>
    </li>
    <li class="submenu" >
        <a href="#" class="noti-dot"><i class="	la la-calendar-o"></i> <span> Attendance</span>
            <span class="menu-arrow"></span></a>
        <ul style="display: none;">
            <li><a href="{{ route('admin.attendance.index') }}"> Employees Attendance </a></li>
            <li><a href="{{ route('admin.attendance.my_attendance') }}"> My Attendance </a></li>
            <li><a href="{{ route('admin.overtime.index') }}"> Employees Overtime </a></li>
            <li><a href="{{ route('admin.overtime.my_overtime') }}"> My Overtime </a></li>
            <!-- <li><a href="overtime2.html">Overtime (Employee)</a></li> -->
        </ul>

    </li>
    <li class="submenu">
        <a href="#"><i class="la la-money"></i> <span> Payroll </span> <span
                class="menu-arrow"></span></a>
        <ul style="display: none;">
            <li><a href="{{ route('admin.salaries.index') }}"> Employee Salary </a></li>
            <li><a href="{{ route('admin.salaries.my_salary') }}"> My  Salary </a></li>

        </ul>
    </li>
    <li><a href="{{ route('admin.holiday.index') }}"><i class="la la-flag-o"></i> <span>Holidays</span> </a>
    </li>


    <li>
        <a href="{{ route('admin.activities.index') }}"><i class="la la-bell"></i> <span>Activities</span></a>
    </li>
    <li class="submenu">
        <a href="#"><i class="la la-pie-chart"></i> <span> Reports </span> <span
                class="menu-arrow"></span></a>
        <ul style="display: none;">
            <li><a href="{{ route('admin.reports.index') }}"> Employee Reports</a></li>
            <li><a href="{{ route('admin.reports.my_reports') }}"> My Reports </a></li>

        </ul>
    </li>
    <li>
        <a  href="{{ route('admin.company.index') }}"><i class="la la-cog"></i> <span>Company Settings</span> </a>
    </li>
@endsection


@section('content')


			<!-- Page Wrapper -->
            <div class="page-wrapper">
				<div class="content container-fluid">
					<div class="row">
						<div class="col-md-8 offset-md-2">

							<!-- Page Header -->
							<div class="page-header">
								<div class="row">
									<div class="col-sm-4">
										<h3 class="page-title">Add Leave Type</h3>
									</div>
								</div>
							</div>


                            <form method="post" action="{{route('admin.leaves.store')}}" >
                                @csrf

								<div class="form-group">
									<label>Leave Name <span class="text-danger"></span></label>
									<input class="form-control" type="text" name="name" value="{{ old('name') }}" required>
                                    @error('name')
                                    <p style="color: red"> {{ $message }} </p>
                                    <br>
                                    @enderror
								</div>
								<div class="form-group">
									<label>Max Days Per Month <span class="text-danger"></span></label>
									<input class="form-control" type="number" name="max_per_month" value="{{ old('max_per_month') }}" required>
                                    @error('max_per_month')
                                    <p style="color: red"> {{ $message }} </p>
                                    <br>
                                    @enderror
								</div>
								<div class="form-group">
									<label>Stauts <span class="text-danger"></span></label>
									<select name="is_paid" class="form-control" required>
										<option value="{{ 1 }}" >Paid</option>
										<option value="{{ 0 }}" >Unpaid</option>

									</select>
                                    @error('is_paid')
                                    <p style="color: red"> {{ $message }} </p>
                                    <br>
                                    @enderror
								</div>


								<div class="submit-section">
                                    <input type="submit" value="Add" class="btn btn-primary submit-btn">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /Add Employee Modal -->
            </div>
			<!-- /Page Wrapper -->

        </div>
		<!-- /Main Wrapper -->
		<!-- jQuery -->
	<script src="../assets/js/jquery-3.5.1.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="../assets/js/popper.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>

	<!-- Slimscroll JS -->
	<script src="../assets/js/jquery.slimscroll.min.js"></script>

	<!-- Select2 JS -->
	<script src="../assets/js/select2.min.js"></script>

	<!-- Datetimepicker JS -->
	<script src="../assets/js/moment.min.js"></script>
	<script src="../assets/js/bootstrap-datetimepicker.min.js"></script>

	<!-- Datatable JS -->
	<script src="../assets/js/jquery.dataTables.min.js"></script>
	<script src="../assets/js/dataTables.bootstrap4.min.js"></script>

	<!-- Custom JS -->
	<script src="../assets/js/app.js"></script>

    </body>
</html>


@endsection
