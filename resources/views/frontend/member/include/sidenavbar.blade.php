@php $route = Route::current()->getName(); @endphp
<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">
        <div class="user-profile px-30 py-15">
            <div class="text-center d-none">
                <div class="image">
                    <img src="{{ asset('assets') }}/images/uploads/students/{{ $student->image }}" class="avatar avatar-xxxl box-shadowed" alt="User Image">
                </div>
                <div class="info mt-20">
                    <a class="px-20" href="#">{{ $student->first_name }} {{ $student->last_name }}</a>
{{--                    <div class="dropdown-menu">--}}
{{--                        <a class="dropdown-item" href="#"><i class="ti-user"></i> Logout</a>--}}
{{--                        <a class="dropdown-item" href="#"><i class="ti-email"></i> Inbox</a>--}}
{{--                        <a class="dropdown-item" href="#"><i class="ti-link"></i> Connections</a>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>--}}
{{--                    </div>--}}
                </div>
            </div>
{{--            <ul class="list-inline profile-setting mt-20 mb-0 d-flex justify-content-center">--}}
{{--                <li class="pe-15"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Search"><i data-feather="search"></i></a></li>--}}
{{--                <li class="pe-15"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Notification"><i data-feather="bell"></i></a></li>--}}
{{--                <li class="pe-15"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Chat"><i data-feather="message-square"></i></a></li>--}}
{{--                <li><a href="auth_login.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Logout"><i data-feather="log-out"></i></a></li>--}}
{{--            </ul>--}}
        </div>
        <div class="multinav">
            <div class="multinav-scroll" style="height: 100%;">
                <!-- sidebar menu-->
                <ul class="sidebar-menu" data-widget="tree">
{{--                    <li class="header">MENU</li>--}}
                    <li class="{{$route == 'member.dashboard' ? 'active':''}}">
                        <a href="{{ route('member.dashboard') }}">
                            <i data-feather="home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#" class="text-white">
                            <i data-feather="dollar-sign"></i>
                            <span>Fund History</span>
                            <span class="pull-right-container">
					            <i class="fa fa-angle-left pull-right"></i>
					        </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="{{$route == 'money.add' ? 'active':''}}">
                                <a href="{{route('money.add')}}">

                                    <span>Add Fund</span>
                                </a>
                            </li>
                            <li class="{{$route == 'money.add.list' ? 'active':''}}">
                                <a href="{{route('money.add.list')}}">
                                    <span> Fund Add History</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="{{$route == 'deposit-packages' ? 'active':''}}">
                        <a href="{{route('deposit-packages')}}">
                            <i data-feather="grid"></i>
                            <span>Package</span>
                        </a>
                    </li>
                    <li class="{{$route == 'deposit.list' ? 'active':''}}">
                        <a href="{{route('deposit.list')}}">
                            <i data-feather="download"></i>
                            <span>Deposit</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#" class="text-white">
                            <i data-feather="server"></i>
                            <span>Deposit History</span>
                            <span class="pull-right-container">
					            <i class="fa fa-angle-left pull-right"></i>
					        </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="{{$route == 'passbook' ? 'active':''}}">
                                <a href="{{ route('passbook') }}">
                                    <span>Deposit Returns</span>
                                </a>
                            </li>
                            <li class="{{$route == 'deposit.gift' ? 'active':''}}">
                                <a href="{{ route('deposit.gift') }}">
                                    <span>Deposit Gits</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#" class="text-white">
                            <i data-feather="code"></i>
                            <span>Activation Code</span>
                            <span class="pull-right-container">
					            <i class="fa fa-angle-left pull-right"></i>
					        </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="{{$route == 'genarate-activation-code' ? 'active':''}}">
                                <a href="{{ route('genarate-activation-code') }}">
                                    <span>Generated Codes</span>
                                </a>
                            </li>
                            <li class="{{$route == 'used-activation-code' ? 'active':''}}">
                                <a href="{{ route('used-activation-code') }}">
                                    <span>Used Activation Code</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="{{$route == 'reference' ? 'active':''}}">
                        <a href="{{ route('reference') }}">
                            <i data-feather="file-text"></i>
                            <span>Reference</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#" class="text-white">
                            <i data-feather="dollar-sign"></i>
                            <span>Balance Transfer</span>
                            <span class="pull-right-container">
					            <i class="fa fa-angle-left pull-right"></i>
					        </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="{{$route == 'balance-transfer' ? 'active':''}}">
                                <a href="{{ route('balance-transfer') }}">
                                    <span>Transfer Balance</span>
                                </a>
                            </li>
                            <li class="{{$route == 'balance.transfer.list' ? 'active':''}}">
                                <a href="{{ route('balance.transfer.list') }}">
                                    <span>Balance Transfer History</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="{{$route == 'withdraw' ? 'active':''}}">
                        <a href="{{ route('withdraw') }}">
                            <i data-feather="upload"></i>
                            <span>Withdrawal</span>
                        </a>
                    </li>
                    <li class="{{$route == 'training' ? 'active':''}}">
                        <a href="{{ route('training.session') }}">
                            <i data-feather="award"></i>
                            <span>Training</span>
                        </a>
                    </li>
                    <li class="{{$route == 'password-change' ? 'active':''}}">
                        <a href="{{ route('password-change') }}">
                            <i data-feather="lock"></i>
                            <span>Change Password</span>
                        </a>
                    </li>
                    <li class="{{$route == 'profile-settings' ? 'active':''}}">
                        <a href="{{ route('profile-settings') }}">
                            <i data-feather="user"></i>
                            <span>My Account</span>
                        </a>
                    </li>
                </ul>

                <div class="sidebar-widgets">
                    <div class="copyright text-start m-25">
                        <p><strong class="d-block">{{getSetting()->site_name ?? ''}} | </strong> © {{date('Y')}} | All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</aside>
