<aside class="main-sidebar sidebar-dark-primary elevation-4 ">
    <!-- Brand Logo -->
    <div class="os-padding">
        <div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;">
            <div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">

                <a href="{{ route('home') }}" class="brand-link">
                    <img src="{{ asset('assets') }}/images/uploads/settings/{{ getSetting()->site_icon }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">{{ getSetting()->site_name }}</span>
                </a>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->

                        <li class="nav-item">
                            <a href="{{ route('admin.dashboard') }}" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        @if(Auth::user()->role_type == 'admin')
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-users-cog"></i>
                                    <p>
                                        Staffs
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('admin.staff.add') }}" class="nav-link">
                                            <i class="fas fa-user ml-3"></i>
                                            <p class="ml-1">Add Staff</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('admin.staff.list') }}" class="nav-link">
                                            <i class="fas fa-users ml-3"></i>
                                            <p class="ml-1">View Staffs</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('admin.staff.permission') }}" class="nav-link">
                                            <i class="fas fa-user-cog ml-3"></i>
                                            <p class="ml-1">Manage Permissions</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                        @if(
                            Auth::user()->role_type == 'admin' ||
                            (
                                Auth::user()->role_type == 'staff' &&
                                (
                                    findStaffPermission('admin.slider.list') || findStaffPermission('admin.setting.edit')
                                )

                            ))
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-cogs"></i>
                                <p>
                                    Website Settings
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                @if(Auth::user()->role_type == 'admin' || (Auth::user()->role_type == 'staff' && findStaffPermission('admin.slider.list')))
                                    <li class="nav-item">
                                        <a href="{{ route('admin.slider.list') }}" class="nav-link">
                                            <i class="fas fa-file-image ml-3"></i>
                                            <p class="ml-1">Sliders</p>
                                        </a>
                                    </li>
                                @endif
                                @if(Auth::user()->role_type == 'admin' || (Auth::user()->role_type == 'staff' && findStaffPermission('admin.setting.edit')))
                                    <li class="nav-item">
                                        <a href="{{ route('admin.setting.edit') }}" class="nav-link">
                                            <i class="fas fa-edit ml-3"></i>
                                            <p class="ml-1">Change Settings</p>
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </li>
                        @endif
                        {{-- <li class="nav-item">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-cogs"></i>
                            <p>
                              Administration
                              <i class="right fas fa-angle-left"></i>
                            </p>
                          </a>
                          <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <a href="{{ route('admin.department.list') }}" class="nav-link">
                                <i class="fas fa-building ml-3"></i>
                                <p class="ml-1">Departments</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="{{ route('admin.teacher.list') }}" class="nav-link">
                                <i class="fas fa-edit ml-3"></i>
                                <p class="ml-1">Teachers</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="{{ route('admin.student.list') }}" class="nav-link">
                                <i class="fas fa-edit ml-3"></i>
                                <p class="ml-1">Student</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="{{ route('admin.location.list') }}" class="nav-link">
                                <i class="fas fa-map-marker ml-3"></i>
                                <p class="ml-1">Staff Working Locations</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="{{ route('admin.staff.list') }}" class="nav-link">
                                <i class="fas fa-briefcase ml-3"></i>
                                <p class="ml-1">Staffs</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="{{ route('admin.notice.list') }}" class="nav-link">
                                <i class="fas fa-bullhorn ml-3"></i>
                                <p class="ml-1">Notices</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="{{ route('admin.news.list') }}" class="nav-link">
                                <i class="fas fa-book ml-3"></i>
                                <p class="ml-1">News</p>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a href="{{ route('admin.about.edit') }}" class="nav-link">
                            <i class="nav-icon fas fa-caret-down"></i>
                            <p>
                              About Section
                            </p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="{{ route('admin.quran-campus-male.edit') }}" class="nav-link">
                            <i class="nav-icon fas fa-caret-down"></i>
                            <p>
                              Quran Campus Male
                            </p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="{{ route('admin.quran-campus-female.edit') }}" class="nav-link">
                            <i class="nav-icon fas fa-caret-down"></i>
                            <p>
                              Quran Campus Female
                            </p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="{{ route('admin.more.edit') }}" class="nav-link">
                            <i class="nav-icon fas fa-bars"></i>
                            <p>
                             More Module
                            </p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="{{ route('admin.applied-student.view') }}" class="nav-link">
                            <i class="nav-icon fas fa-chalkboard"></i>
                            <p>
                             Applied Student Data
                            </p>
                          </a>
                        </li>

                        <li class="nav-item">
                          <a href="{{ route('admin.online.list') }}" class="nav-link">
                            <i class="nav-icon fas fa-landmark"></i>
                            <p>
                             Online Class
                            </p>
                          </a>
                        </li> --}}
                        {{-- <li class="nav-item">
                          <a href="{{ route('admin.teacher.list') }}" class="nav-link">
                            <i class="nav-icon fas fa-chalkboard-teacher"></i>
                            {{-- <i class="fas fa-chalkboard-teacher"></i>
                            <p>
                             Teacher's
                            </p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="{{ route('admin.department.list') }}" class="nav-link">
                              <i class="nav-icon fas fa-caret-down"></i>

                               <i class="fas fa-edit"></i>
                              <i class="fas fa-chalkboard-teacher"></i>
                            <p>
                             Courses
                            </p>
                          </a>
                        </li> --}}

                        {{-- <li class="nav-item">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-chalkboard-teacher"></i>
                            <p>
                              Teachers Module
                              <i class="right fas fa-angle-left"></i>
                            </p>
                          </a>
                          <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <a href="{{ route('admin.teacher.list') }}" class="nav-link">
                                <i class="fas fa-caret-down ml-3"></i>
                                <p class="ml-1">Teacher's List</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="{{ route('admin.department.list') }}" class="nav-link">
                                <i class="fas fa-caret-down ml-3 ml-3"></i>
                                <p class="ml-1">Department</p>
                              </a>
                            </li>
                          </ul>
                        </li> --}}
                        @if(Auth::user()->role_type == 'admin' || (Auth::user()->role_type == 'staff' && findStaffPermission('admin.package.list')))

                            <li class="nav-item">
                                <a href="{{ route('admin.package.list') }}" class="nav-link">
                                    <i class="nav-icon fas fa-tasks"></i>
                                    <p>
                                        Packages
                                    </p>
                                </a>
                            </li>
                        @endif
                        @if(Auth::user()->role_type == 'admin' || (Auth::user()->role_type == 'staff' && findStaffPermission('admin.fund.request.list')))
                            <li class="nav-item">
                                <a href="{{ route('admin.fund.request.list') }}" class="nav-link">
                                    <i class="nav-icon fas fa-dollar-sign"></i>
                                    <p>
                                        Fund Requests
                                    </p>
                                </a>
                            </li>
                        @endif
                        @if(Auth::user()->role_type == 'admin' || (Auth::user()->role_type == 'staff' && findStaffPermission('admin.fund.request.history')))
                            <li class="nav-item">
                                <a href="{{ route('admin.fund.request.history') }}" class="nav-link">
                                    <i class="nav-icon fas fa-list"></i>
                                    <p>
                                        Fund Add History
                                    </p>
                                </a>
                            </li>
                        @endif
                        @if(Auth::user()->role_type == 'admin' || (Auth::user()->role_type == 'staff' && findStaffPermission('admin.balance.transfer.history')))
                            <li class="nav-item">
                                <a href="{{ route('admin.balance.transfer.history') }}" class="nav-link">
                                    <i class="nav-icon fa fa-share"></i>
                                    <p>
                                        Balance Transfer History
                                    </p>
                                </a>
                            </li>
                        @endif
                        @if(Auth::user()->role_type == 'admin' || (Auth::user()->role_type == 'staff' && findStaffPermission('admin.deposit.request.list')))
                            <li class="nav-item">
                                <a href="{{ route('admin.deposit.request.list') }}" class="nav-link">
                                    <i class="nav-icon fas fa-save"></i>
                                    <p>
                                        Deposit List
                                    </p>
                                </a>
                            </li>
                        @endif
                        @if(Auth::user()->role_type == 'admin' || (Auth::user()->role_type == 'staff' && findStaffPermission('admin.bank.list')))
                            <li class="nav-item">
                                <a href="{{ route('admin.bank.list') }}" class="nav-link">
                                    <i class="nav-icon fas fa-university"></i>
                                    <p>
                                        Bank List
                                    </p>
                                </a>
                            </li>
                        @endif
                        {{-- <li class="nav-item">
                          <a href="{{ route('admin.assigned.list') }}" class="nav-link">
                            <i class="nav-icon fas fa-tasks"></i>
                            <p>
                              Assigned
                            </p>
                          </a>
                        </li> --}}
                        @if(Auth::user()->role_type == 'admin' || (Auth::user()->role_type == 'staff' && findStaffPermission('admin.referal-bonus.list')))
                            <li class="nav-item">
                                <a href="{{ route('admin.referal-bonus.list') }}" class="nav-link">
                                    <i class="nav-icon fas fa-gift"></i>
                                    <p>
                                        Sign Up Referral Bonus
                                    </p>
                                </a>
                            </li>
                        @endif
                        @if(Auth::user()->role_type == 'admin' || (Auth::user()->role_type == 'staff' && findStaffPermission('admin.deposit-bonus.list')))
                            <li class="nav-item d-none">
                                <a href="{{ route('admin.deposit-bonus.list') }}" class="nav-link">
                                    <i class="nav-icon fa fa-money-bill"></i>
                                    <p>
                                        Deposit Referral Bonus
                                    </p>
                                </a>
                            </li>
                        @endif
                        @if(Auth::user()->role_type == 'admin' || (Auth::user()->role_type == 'staff' && findStaffPermission('admin.activation.list')))
                            <li class="nav-item">
                                <a href="{{ route('admin.activation.list') }}" class="nav-link">
                                    <i class="nav-icon fas fa-toggle-on"></i>
                                    <p>
                                        Activation List
                                    </p>
                                </a>
                            </li>
                        @endif
                        @if(Auth::user()->role_type == 'admin' || (Auth::user()->role_type == 'staff' && findStaffPermission('admin.payment.list')))
                            <li class="nav-item">
                                <a href="{{ route('admin.payment.list') }}" class="nav-link">
                                    <i class="nav-icon fa fa-money-bill"></i>
                                    <p>
                                        Payment Options
                                    </p>
                                </a>
                            </li>
                        @endif
                        @if(Auth::user()->role_type == 'admin' || (Auth::user()->role_type == 'staff' && findStaffPermission('admin.bank.list')))
                            <li class="nav-item">
                                <a href="{{ route('admin.bank.list') }}" class="nav-link">
                                    <i class="nav-icon fas fa-university"></i>
                                    <p>
                                        Bank List
                                    </p>
                                </a>
                            </li>
                        @endif
                        @if(Auth::user()->role_type == 'admin' || (Auth::user()->role_type == 'staff' && findStaffPermission('admin.withdraw.list')))
                            <li class="nav-item">
                                <a href="{{ route('admin.withdraw.list') }}" class="nav-link">
                                    <i class="nav-icon fas fa-bell"></i>
                                    <p>
                                        Withdraw Request
                                    </p>
                                </a>
                            </li>
                        @endif
                        @if(Auth::user()->role_type == 'admin' || (Auth::user()->role_type == 'staff' && findStaffPermission('admin.student.list')))
                            <li class="nav-item">
                                <a href="{{ route('admin.student.list') }}" class="nav-link">
                                    <i class="nav-icon fas fa-user-graduate"></i>
                                    <p>
                                        Member List
                                    </p>
                                </a>
                            </li>
                        @endif
                        @if(Auth::user()->role_type == 'admin' || (Auth::user()->role_type == 'staff' && findStaffPermission('admin.student.unactive')))
                            <li class="nav-item">
                                <a href="{{ route('admin.student.unactive') }}" class="nav-link">
                                    <i class="nav-icon fas fa-lock"></i>
                                    <p>
                                        Inactive Member List
                                    </p>
                                </a>
                            </li>
                        @endif

                        {{-- <li class="nav-item">
                          <a href="{{ route('admin.course.list') }}" class="nav-link">
                            <i class="nav-icon fas fa-chalkboard"></i>
                            <p>
                             Courses
                            </p>
                          </a>
                        </li> --}}
                        {{-- <li class="nav-item">
                          <a href="{{ route('binstructor.list') }}" class="nav-link">
                            <i class="nav-icon fas fa-chalkboard"></i>
                            <p>
                             Instructor Apply
                            </p>
                          </a>
                        </li> --}}
                        {{-- <li class="nav-item">
                          <a href="{{ route('admin.category.list') }}" class="nav-link">
                            <i class="nav-icon fas fa-chalkboard"></i>
                            <p>
                             Category
                            </p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="{{ route('admin.sub_category.list') }}" class="nav-link">
                            <i class="nav-icon fas fa-chalkboard"></i>
                            <p>
                             Sub-Category
                            </p>
                          </a>
                        </li> --}}
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
        </div>
    </div>
    <!-- /.sidebar -->
</aside>
