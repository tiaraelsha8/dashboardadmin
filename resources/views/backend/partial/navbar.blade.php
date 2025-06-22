<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('backend.dashboard') }}" class="nav-link">Home</a>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <a href="{{ route('user.edit', Auth::user()->id) }}" class="dropdown-item">
            <i class="fas fa-user mr-2"></i> Profile
        </a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="dropdown-item">
                <i class="fas fa-sign-out-alt mr-2"></i> Logout
            </button>
        </form>
    </ul>
</nav>
