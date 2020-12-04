<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('assets/Admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('assets/Admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2"
                     alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('Admin.departments') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Category
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('Admin.News') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            News
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('Admin.Opinion') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Opinion
                        </p>
                    </a>
                </li>

                <li class="side-item side-item-category">التقارير</li>
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="">
                        <span class="side-menu__label">التقارير</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                        <li><a class="slide-item" href="">تقارير الفواتير</a></li>
                        <li><a class="slide-item" href="">تقارير العملاء</a></li>

                    </ul>
                </li>


                <li class="side-item side-item-category">المستخدمين</li>
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="">
                        <span class="side-menu__label">المستخدمين</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                            <li><a class="slide-item" href="">قائمة المستخدمين</a>
                            </li>
                            <li><a class="slide-item" href="">صلاحيات المستخدمين</a>
                            </li>

                    </ul>
                </li>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
