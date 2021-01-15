<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header" style="text-align:center;font-size:18px;color:white;">--MAIN NAVIGATION--</li>
        <li>
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-sitemap"></i> <span>Human Resource</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Employee Details
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('department.index') }}"><i class="fa fa-circle-o"></i> Department</a></li>
                <li><a href="{{ route('designation.index') }}"><i class="fa fa-circle-o"></i> Designation</a></li>
                <li><a href="{{route('emp_type.index')}}"><i class="fa fa-circle-o"></i> Employment Type</a></li>
                <li><a href="{{ route('employee.create') }}"><i class="fa fa-circle-o"></i> Add Employees</a></li>
                <li><a href="{{ route('employee.index') }}"><i class="fa fa-circle-o"></i> Employees List</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Payroll Details
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('payroll.index') }}"><i class="fa fa-circle-o"></i> Allowance Type</a></li>
                <li><a href="{{ route('deduction.index') }}"><i class="fa fa-circle-o"></i> Deduction Type</a></li>
                <li><a href="{{ route('payslip.make') }}"><i class="fa fa-circle-o"></i> Create Payslip</a></li>
                <li><a href="pages/human-resource/view_payslip"><i class="fa fa-circle-o"></i> View Payslip</a></li>
                <li><a href="pages/human-resource/view_allowances"><i class="fa fa-circle-o"></i> View Allowances</a></li>
                <li><a href="pages/human-resource/view_deductions"><i class="fa fa-circle-o"></i> View Deductions</a></li>
              </ul>
            </li>
          </ul>
        </li>


      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
