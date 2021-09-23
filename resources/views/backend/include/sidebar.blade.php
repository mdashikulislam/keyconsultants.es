@php
    $currentRouteName = Route::currentRouteName();
    $prefix = request()->route()->getPrefix();
@endphp
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.dashboard')}}" class="brand-link">
        <img src="{{asset('backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Keyconsultants</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{Auth::user()->name}}</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a target="_blank" href="{{route('landing')}}" class="nav-link ">
                        <i class="nav-icon far fa-eye"></i>
                        <p>
                            Visit Website
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a  href="{{route('admin.dashboard')}}" class="nav-link @if($currentRouteName == 'admin.dashboard') active @endif">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item @if($prefix == 'admin/properties') menu-open @endif ">
                    <a href="#" class="nav-link @if($prefix == 'admin/properties') active @endif">
                        <i class="nav-icon fa fa-university"></i>
                        <p>
                            Properties
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.property.index')}}" class="nav-link {{$currentRouteName == 'admin.property.index' ? 'active':''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Properties List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.property.create')}}" class="nav-link {{$currentRouteName == 'admin.property.create' ? 'active':''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Properties</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.property.seeker')}}" class="nav-link {{$currentRouteName == 'admin.property.seeker' ? 'active':''}}">
                                <i class="nav-icon far fa-plus-square"></i>
                                <p>
                                    Property Seeker
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.contact.message')}}" class="nav-link {{$currentRouteName == 'admin.contact.message' ? 'active':''}}">
                        <i class="nav-icon fa fa-envelope-open"></i>
                        <p>
                            Contact Message
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.enquiry')}}" class="nav-link {{$currentRouteName == 'admin.enquiry' ? 'active':''}}">
                        <i class="nav-icon fa fa-list-alt"></i>
                        <p>
                            Enquiry
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.seo')}}" class="nav-link {{$currentRouteName == 'admin.seo' ? 'active':''}}">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            SEO
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.transaction')}}" class="nav-link {{$currentRouteName == 'admin.transaction' ? 'active':''}}">
                        <i class="nav-icon fa fa-money-check-alt"></i>
                        <p>
                            Transaction
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
