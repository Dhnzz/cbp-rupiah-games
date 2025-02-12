    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link {{(Route::is('dashboard.index')?'':'collapsed')}}" href="{{route('dashboard.index')}}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-heading">Pages</li>

            <li class="nav-item">
                <a class="nav-link {{(Route::is('pemain.*')?'':'collapsed')}}" href="{{route('pemain.index')}}">
                    <i class="bi bi-person"></i>
                    <span>Pemain</span>
                </a>
            </li><!-- End Profile Page Nav -->


        </ul>

    </aside><!-- End Sidebar-->
