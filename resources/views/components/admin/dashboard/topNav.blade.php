<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-green">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"
            ><i class="fas fa-bars" style="color: white"></i
                ></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- logout Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-user" style="color: white"></i>
                <!-- <span class="badge badge-danger navbar-badge">3</span> -->
            </a>
            <div
                class="dropdown-menu dropdown-menu-sm dropdown-menu-center"
                style="text-align: center"
            >
                <form
                    action="{{route('admin.logout')}}"
                    method="post"
                    style="display: none"
                    id="logout_form"
                >
                    @csrf
                    @method('POST')
                </form>
                <a
                    href="#"
                    onclick="document.getElementById('logout_form').submit()"
                    class="dropdown-item"
                >
                    <!-- Message Start -->
                    <h4 class="text-danger">logout</h4>
                    <!-- Message End -->
                </a>
                <!-- <div class="dropdown-divider"></div> -->
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt" style="color: white"></i>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
