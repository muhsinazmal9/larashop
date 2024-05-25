<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="{{ route('dashboard') }}"
                class="b-brand text-primary"><!-- ========   Change your logo from here   ============ -->
                <img src="{{ asset('assets') }}/images/logo-dark.svg" class="img-fluid logo-lg" alt="logo" />
                <span class="badge bg-light-success rounded-pill ms-2 theme-version">v9.0</span></a>
        </div>
        <div class="navbar-content">
            <div class="card pc-user-card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <img src="{{ asset('assets') }}/images/user/avatar-1.jpg" alt="user-image"
                                class="user-avtar wid-45 rounded-circle" />
                        </div>
                        <div class="flex-grow-1 ms-3 me-2">
                            <h6 class="mb-0">{{ auth()->user()->name }}</h6>
                            <small>Role: not yet</small>
                        </div>
                        <a class="btn btn-icon btn-link-secondary avtar" data-bs-toggle="collapse"
                            href="#pc_sidebar_userlink"><svg class="pc-icon">
                                <use xlink:href="#custom-sort-outline"></use>
                            </svg></a>
                    </div>
                    <div class="collapse pc-user-links" id="pc_sidebar_userlink">
                        <div class="pt-3">
                            <a href="#!"><i class="ti ti-user"></i> <span>My Account</span> </a>
                            <a href="#!"><i class="ti ti-settings"></i> <span>Settings</span></a>
                            <a href="#!"><i class="ti ti-lock"></i> <span>Lock Screen</span></a>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit()"><i
                                    class="ti ti-power"></i> <span>Logout</span></a>
                            <form action="{{ route('logout') }}" id="logout-form" method="post" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="pc-navbar">
                <x-nav-components.grouped-nav-item :caption="__('Dashboard')" />
            </ul>
        </div>
    </div>
</nav>
