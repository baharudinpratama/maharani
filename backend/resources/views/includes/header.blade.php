<!-- Header-->
<header id="header" class="header">
    <div class="top-left">
        <div class="navbar-header">
            <a class="navbar-brand" href="./"><img
                    src="{{ asset('images/maharani-high-resolution-text-transparent.png') }}" alt="Logo"></a>
            <a class="navbar-brand hidden" href="./"><img
                    src="{{ asset('images/maharani-high-resolution-logo-transparent.png') }}" alt="Logo"></a>
            <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
        </div>
    </div>
    <div class="top-right">
        <div class="header-menu">

            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <img class="user-avatar rounded-circle" src="{{ url('images/admin.jpg')}}" alt="User Avatar">
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    <div class="user-menu dropdown-menu">
                        @csrf

                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); this.closest('form').submit();">
                            <i class="fa fa-power -off"></i> Logout
                        </a>
                    </div>
                </form>
            </div>

        </div>
    </div>
</header>
<!-- /#header -->
