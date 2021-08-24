<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.dashboard')}}" class="brand-link">
        <img src="{{asset('assets/logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{env('APP_NAME')}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{auth()->user()->path_image}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{auth()->user()->name}}</a>
            </div>
        </div>




        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('admin.dashboard')}}" class="nav-link ">
                        <i class="nav-icon fas fa-tachometer-alt blue"></i>

                        <p>

                            Dashboard

                        </p>
                    </a>
                </li>

                <li class="nav-item ">
                    <a href="#" class="nav-link ">
                        <i class="far fa-images indigo"></i>

                        <p>
                            Sliders
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('sliders.index')}}" class="nav-link active">
                                <i class="fas fa-eye nav-icon teal"></i>
                                <p>All Slider</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('sliders.create')}}" class="nav-link">
                                <i class=" nav-icon fas fa-plus-square green"></i>
                                <p>New Slider</p>
                            </a>
                        </li>

                    </ul>

                </li>
                <li class="nav-item ">
                    <a href="#" class="nav-link ">
                        <i class="fab fa-blogger-b teal"></i>

                        <p>
                            Blogs
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('blogs.index')}}" class="nav-link active">
                                <i class="fas fa-eye nav-icon teal"></i>
                                <p>All blogs</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('blogs.create')}}" class="nav-link">
                                <i class=" nav-icon fas fa-plus-square green"></i>
                                <p>New blog</p>
                            </a>
                        </li>

                    </ul>

                </li>
                <li class="nav-item ">
                    <a href="#" class="nav-link ">
                        <i class="fas fa-ad pink"></i>

                        <p>
                            Advertisements

                            <i class="right fas fa-angle-left"></i>

                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('advertisements.index')}}" class="nav-link active">
                                <i class="fas fa-eye nav-icon teal"></i>
                                <p>All advertisements</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('advertisements.create')}}" class="nav-link">
                                <i class=" nav-icon fas fa-plus-square green"></i>
                                <p>New advertisement</p>
                            </a>
                        </li>

                    </ul>

                </li>
                <li class="nav-item ">
                    <a href="#" class="nav-link ">
                        <i class="fab fa-youtube red"></i>
                        <p>
                            Visuals

                            <i class="right fas fa-angle-left"></i>

                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('visuals.index')}}" class="nav-link active">
                                <i class="fas fa-eye nav-icon teal"></i>
                                <p>All Visuals</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('visuals.create')}}" class="nav-link">
                                <i class=" nav-icon fas fa-plus-square green"></i>
                                <p>New visuals</p>
                            </a>
                        </li>

                    </ul>

                </li>


                <li class="nav-item ">
                    <a href="#" class="nav-link ">
                        <i class="fab fa-soundcloud orange"></i>
                        <p>
                            Acoustics

                            <i class="right fas fa-angle-left"></i>

                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('acoustics.index')}}" class="nav-link active">
                                <i class="fas fa-eye nav-icon teal"></i>
                                <p>All Acoustics</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('acoustics.create')}}" class="nav-link">
                                <i class=" nav-icon fas fa-plus-square green"></i>
                                <p>New Acoustics</p>
                            </a>
                        </li>

                    </ul>

                </li>
                <li class="nav-item ">
                    <a href="#" class="nav-link ">
                        <i class="fas fa-step-backward white "></i>
                        <p>
                            Stages

                            <i class="right fas fa-angle-left"></i>

                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('stages.index')}}" class="nav-link active">
                                <i class="fas fa-eye nav-icon teal"></i>
                                <p>All Stages</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('stages.create')}}" class="nav-link">
                                <i class=" nav-icon fas fa-plus-square green"></i>
                                <p>New Stages</p>
                            </a>
                        </li>

                    </ul>

                </li>
                <li class="nav-item ">
                    <a href="#" class="nav-link ">
                        <i class="fas fa-drum-steelpan red"></i>                        <p>
                            Subjects

                            <i class="right fas fa-angle-left"></i>

                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('subjects.index')}}" class="nav-link active">
                                <i class="fas fa-eye nav-icon teal"></i>
                                <p>All Subjects</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('subjects.create')}}" class="nav-link">
                                <i class=" nav-icon fas fa-plus-square green"></i>
                                <p>New Subjects</p>
                            </a>
                        </li>

                    </ul>

                </li>

                <li class="nav-item " onclick="toggle(this)">
                    <a href="#" class="nav-link ">
                        <i class="fas fa-chart-line pink" ></i>
                        <p>
                            Events

                            <i class="right fas fa-angle-left"></i>

                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('events.index')}}" class="nav-link active">
                                <i class="fas fa-eye nav-icon teal"></i>
                                <p>All Events</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('events.create')}}" class="nav-link">
                                <i class=" nav-icon fas fa-plus-square green"></i>
                                <p>New Events</p>
                            </a>
                        </li>

                    </ul>

                </li>



            @if(auth()->user()->isAdmin()||auth()->user()->isSuperAdmin())
                <li class="nav-item ">
                    <a href="#" class="nav-link ">
                        <i class="fas fa-users green"></i>
                        <p>
                            Users

                            <i class="right fas fa-angle-left"></i>

                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('users.index')}}" class="nav-link active">
                                <i class="fas fa-eye nav-icon teal"></i>
                                <p>All Users</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('users.create')}}" class="nav-link">
                                <i class=" nav-icon fas fa-plus-square green"></i>
                                <p>New Users</p>
                            </a>
                        </li>

                    </ul>

                </li>
                @endif
                @auth()
                    <li class="nav-item ">
                        <a onclick="preventDefault()" class="nav-link ">

                            <p>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <button type="submit">
                                    <i class="fas fa-sign-out-alt dark"></i>
                                    {{ __('Log Out') }}
                                </button>
                            </form>


                            </p>
                        </a>


                    </li>
                @endauth






            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<script>
    function toggle(item){
        item.addEventListener('click',function (e){
            let $class=item.getAttribute('class');
            let $classes=$class.split(' ');
            if ($classes.includes('menu-is-opening')){
                item.removeClass('menu-is-opening');
                item.removeClass('menu-open');
            }else {
                item.removeClass('menu-is-opening');
                item.removeClass('menu-open');
            }
        })

    }
</script>
