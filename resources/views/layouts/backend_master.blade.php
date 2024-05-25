<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home | {{ config('app.name', 'Laravel') }}</title>
    <!-- [Meta] -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Able Pro is trending dashboard template made using Bootstrap 5 design framework. Able Pro is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies." />
    <meta name="keywords"
        content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard" />
    <meta name="author" content="Phoenixcoded" />
    <!-- [Favicon] icon -->
    <link rel="icon" href="{{ asset('assets') }}/images/favicon.svg" type="image/x-icon" />
    <!-- [Font] Family -->
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/inter/inter.css" id="main-font-link" />
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/tabler-icons.min.css" />
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/feather.css" />
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/fontawesome.css" />
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/material.css" />
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css" id="main-style-link" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style-preset.css" />
</head><!-- [Head] end --><!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-layout="vertical" data-pc-direction="ltr"
    data-pc-theme_contrast="" data-pc-theme="light">
    <!-- [ Pre-loader ] start -->
    {{-- <div class="page-loader"><div class="bar"></div></div> --}}
    <!-- [ Pre-loader ] End --><!-- [ Sidebar Menu ] start -->
    @include('partials.navigation-sidebar')
    <!-- [ Sidebar Menu ] end --><!-- [ Header Topbar ] start -->
    <header class="pc-header">
        <div class="header-wrapper">
            <!-- [Mobile Media Block] start -->
            <div class="me-auto pc-mob-drp">
                <ul class="list-unstyled">
                    <!-- ======= Menu collapse Icon ===== -->
                    <li class="pc-h-item pc-sidebar-collapse">
                        <a href="#" class="pc-head-link ms-0" id="sidebar-hide"><i class="ti ti-menu-2"></i></a>
                    </li>
                    <li class="pc-h-item pc-sidebar-popup">
                        <a href="#" class="pc-head-link ms-0" id="mobile-collapse"><i
                                class="ti ti-menu-2"></i></a>
                    </li>
                    <li class="pc-h-item d-none d-md-inline-flex">
                        <form class="form-search">
                            <i class="search-icon"><svg class="pc-icon">
                                    <use xlink:href="#custom-search-normal-1"></use>
                                </svg> </i><input type="search" class="form-control" placeholder="Ctrl + K" />
                        </form>
                    </li>
                </ul>
            </div>
            <!-- [Mobile Media Block end] -->
            <div class="ms-auto">
                <ul class="list-unstyled">
                    <li class="dropdown pc-h-item">
                        <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false"><svg class="pc-icon">
                                <use xlink:href="#custom-sun-1"></use>
                            </svg></a>
                        <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
                            <a href="#!" class="dropdown-item" onclick="layout_change('dark')"><svg
                                    class="pc-icon">
                                    <use xlink:href="#custom-moon"></use>
                                </svg> <span>Dark</span> </a><a href="#!" class="dropdown-item"
                                onclick="layout_change('light')"><svg class="pc-icon">
                                    <use xlink:href="#custom-sun-1"></use>
                                </svg> <span>Light</span> </a><a href="#!" class="dropdown-item"
                                onclick="layout_change_default()"><svg class="pc-icon">
                                    <use xlink:href="#custom-setting-2"></use>
                                </svg> <span>Default</span></a>
                        </div>
                    </li>
                    <li class="dropdown pc-h-item">
                        <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false"><svg class="pc-icon">
                                <use xlink:href="#custom-setting-2"></use>
                            </svg></a>
                        <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
                            <a href="#!" class="dropdown-item"><i class="ti ti-user"></i> <span>My Account</span>
                            </a><a href="#!" class="dropdown-item"><i class="ti ti-settings"></i>
                                <span>Settings</span> </a><a href="#!" class="dropdown-item"><i
                                    class="ti ti-headset"></i> <span>Support</span> </a><a href="#!"
                                class="dropdown-item"><i class="ti ti-lock"></i> <span>Lock Screen</span> </a><a
                                href="#!" class="dropdown-item"><i class="ti ti-power"></i>
                                <span>Logout</span></a>
                        </div>
                    </li>
                    <li class="pc-h-item">
                        <a href="#" class="pc-head-link me-0" data-bs-toggle="offcanvas"
                            data-bs-target="#announcement" aria-controls="announcement"><svg class="pc-icon">
                                <use xlink:href="#custom-flash"></use>
                            </svg></a>
                    </li>
                    <li class="dropdown pc-h-item">
                        <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false"><svg
                                class="pc-icon">
                                <use xlink:href="#custom-notification"></use>
                            </svg>
                            <span class="badge bg-success pc-h-badge">3</span></a>
                        <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">
                            <div class="dropdown-header d-flex align-items-center justify-content-between">
                                <h5 class="m-0">Notifications</h5>
                                <a href="#!" class="btn btn-link btn-sm">Mark all read</a>
                            </div>
                            <div class="dropdown-body text-wrap header-notification-scroll position-relative"
                                style="max-height: calc(100vh - 215px)">
                                <p class="text-span">Today</p>
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <svg class="pc-icon text-primary">
                                                    <use xlink:href="#custom-layer"></use>
                                                </svg>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <span class="float-end text-sm text-muted">2 min ago</span>
                                                <h5 class="text-body mb-2">UI/UX Design</h5>
                                                <p class="mb-0">
                                                    Lorem Ipsum has been the industry's standard dummy text ever since
                                                    the 1500s, when an
                                                    unknown printer took a galley of type and scrambled it to make a
                                                    type
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <svg class="pc-icon text-primary">
                                                    <use xlink:href="#custom-sms"></use>
                                                </svg>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <span class="float-end text-sm text-muted">1 hour ago</span>
                                                <h5 class="text-body mb-2">Message</h5>
                                                <p class="mb-0">
                                                    Lorem Ipsum has been the industry's standard dummy text ever since
                                                    the 1500.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-span">Yesterday</p>
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <svg class="pc-icon text-primary">
                                                    <use xlink:href="#custom-document-text"></use>
                                                </svg>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <span class="float-end text-sm text-muted">2 hour ago</span>
                                                <h5 class="text-body mb-2">Forms</h5>
                                                <p class="mb-0">
                                                    Lorem Ipsum has been the industry's standard dummy text ever since
                                                    the 1500s, when an
                                                    unknown printer took a galley of type and scrambled it to make a
                                                    type
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <svg class="pc-icon text-primary">
                                                    <use xlink:href="#custom-user-bold"></use>
                                                </svg>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <span class="float-end text-sm text-muted">12 hour ago</span>
                                                <h5 class="text-body mb-2">Challenge invitation</h5>
                                                <p class="mb-2"><span class="text-dark">Jonny aber</span> invites to
                                                    join the challenge</p>
                                                <button class="btn btn-sm btn-outline-secondary me-2">Decline</button>
                                                <button class="btn btn-sm btn-primary">Accept</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <svg class="pc-icon text-primary">
                                                    <use xlink:href="#custom-security-safe"></use>
                                                </svg>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <span class="float-end text-sm text-muted">5 hour ago</span>
                                                <h5 class="text-body mb-2">Security</h5>
                                                <p class="mb-0">
                                                    Lorem Ipsum has been the industry's standard dummy text ever since
                                                    the 1500s, when an
                                                    unknown printer took a galley of type and scrambled it to make a
                                                    type
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center py-2"><a href="#!" class="link-danger">Clear all
                                    Notifications</a></div>
                        </div>
                    </li>
                    <li class="dropdown pc-h-item header-user-profile">
                        <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" data-bs-auto-close="outside"
                            aria-expanded="false"><img src="{{ asset('assets') }}/images/user/avatar-2.jpg"
                                alt="user-image" class="user-avtar" /></a>
                        <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
                            <div class="dropdown-header d-flex align-items-center justify-content-between">
                                <h5 class="m-0">Profile</h5>
                            </div>
                            <div class="dropdown-body">
                                <div class="profile-notification-scroll position-relative"
                                    style="max-height: calc(100vh - 225px)">
                                    <div class="d-flex mb-1">
                                        <div class="flex-shrink-0">
                                            <img src="{{ asset('assets') }}/images/user/avatar-2.jpg"
                                                alt="user-image" class="user-avtar wid-35" />
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1">Carson Darrin 🖖</h6>
                                            <span><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="15767467667a7b3b717467677c7b55767a7865747b6c3b7c7a">[email&#160;protected]</a></span>
                                        </div>
                                    </div>
                                    <hr class="border-secondary border-opacity-50" />
                                    <div class="card">
                                        <div class="card-body py-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h5 class="mb-0 d-inline-flex align-items-center">
                                                    <svg class="pc-icon text-muted me-2">
                                                        <use xlink:href="#custom-notification-outline"></use>
                                                    </svg>Notification
                                                </h5>
                                                <div class="form-check form-switch form-check-reverse m-0">
                                                    <input class="form-check-input f-18" type="checkbox"
                                                        role="switch" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-span">Manage</p>
                                    <a href="#" class="dropdown-item"><span><svg
                                                class="pc-icon text-muted me-2">
                                                <use xlink:href="#custom-setting-outline"></use>
                                            </svg>
                                            <span>Settings</span>
                                        </span></a><a href="#" class="dropdown-item"><span><svg
                                                class="pc-icon text-muted me-2">
                                                <use xlink:href="#custom-share-bold"></use>
                                            </svg>
                                            <span>Share</span>
                                        </span></a><a href="#" class="dropdown-item"><span><svg
                                                class="pc-icon text-muted me-2">
                                                <use xlink:href="#custom-lock-outline"></use>
                                            </svg>
                                            <span>Change Password</span></span></a>
                                    <hr class="border-secondary border-opacity-50" />
                                    <p class="text-span">Team</p>
                                    <a href="#" class="dropdown-item"><span><svg
                                                class="pc-icon text-muted me-2">
                                                <use xlink:href="#custom-profile-2user-outline"></use>
                                            </svg>
                                            <span>UI Design team</span></span>
                                        <div class="user-group">
                                            <img src="{{ asset('assets') }}/images/user/avatar-1.jpg"
                                                alt="user-image" class="avtar" />
                                            <span class="avtar bg-danger text-white">K</span>
                                            <span class="avtar bg-success text-white"><svg class="pc-icon m-0">
                                                    <use xlink:href="#custom-user"></use>
                                                </svg> </span><span
                                                class="avtar bg-light-primary text-primary">+2</span>
                                        </div>
                                    </a><a href="#" class="dropdown-item"><span><svg
                                                class="pc-icon text-muted me-2">
                                                <use xlink:href="#custom-profile-2user-outline"></use>
                                            </svg>
                                            <span>Friends Groups</span></span>
                                        <div class="user-group">
                                            <img src="{{ asset('assets') }}/images/user/avatar-1.jpg"
                                                alt="user-image" class="avtar" />
                                            <span class="avtar bg-danger text-white">K</span>
                                            <span class="avtar bg-success text-white"><svg class="pc-icon m-0">
                                                    <use xlink:href="#custom-user"></use>
                                                </svg></span>
                                        </div>
                                    </a><a href="#" class="dropdown-item"><span><svg
                                                class="pc-icon text-muted me-2">
                                                <use xlink:href="#custom-add-outline"></use>
                                            </svg>
                                            <span>Add new</span></span>
                                        <div class="user-group">
                                            <span class="avtar bg-primary text-white"><svg class="pc-icon m-0">
                                                    <use xlink:href="#custom-add-outline"></use>
                                                </svg></span>
                                        </div>
                                    </a>
                                    <hr class="border-secondary border-opacity-50" />
                                    <div class="d-grid mb-3">
                                        <button class="btn btn-primary">
                                            <svg class="pc-icon me-2">
                                                <use xlink:href="#custom-logout-1-outline"></use>
                                            </svg>Logout
                                        </button>
                                    </div>
                                    <div class="card border-0 shadow-none drp-upgrade-card mb-0"
                                        style="background-image: url({{ asset('assets') }}/images/layout/img-profile-card.jpg)">
                                        <div class="card-body">
                                            <div class="user-group">
                                                <img src="{{ asset('assets') }}/images/user/avatar-1.jpg"
                                                    alt="user-image" class="avtar" />
                                                <img src="{{ asset('assets') }}/images/user/avatar-2.jpg"
                                                    alt="user-image" class="avtar" />
                                                <img src="{{ asset('assets') }}/images/user/avatar-3.jpg"
                                                    alt="user-image" class="avtar" />
                                                <img src="{{ asset('assets') }}/images/user/avatar-4.jpg"
                                                    alt="user-image" class="avtar" />
                                                <img src="{{ asset('assets') }}/images/user/avatar-5.jpg"
                                                    alt="user-image" class="avtar" />
                                                <span class="avtar bg-light-primary text-primary">+20</span>
                                            </div>
                                            <h3 class="my-3 text-dark">245.3k <small
                                                    class="text-muted">Followers</small></h3>
                                            <div class="btn btn btn-warning">
                                                <svg class="pc-icon me-2">
                                                    <use xlink:href="#custom-logout-1-outline"></use>
                                                </svg> Upgrade to
                                                Business
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <div class="offcanvas pc-announcement-offcanvas offcanvas-end" tabindex="-1" id="announcement"
        aria-labelledby="announcementLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="announcementLabel">What's new announcement?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <p class="text-span">Today</p>
            <div class="card mb-3">
                <div class="card-body">
                    <div class="align-items-center d-flex flex-wrap gap-2 mb-3">
                        <div class="badge bg-light-success f-12">Big News</div>
                        <p class="mb-0 text-muted">2 min ago</p>
                        <span class="badge dot bg-warning"></span>
                    </div>
                    <h5 class="mb-3">Able Pro is Redesigned</h5>
                    <p class="text-muted">Able Pro is completely renowed with high aesthetics User Interface.</p>
                    <img src="{{ asset('assets') }}/images/layout/img-announcement-1.png" alt="img"
                        class="img-fluid mb-3" />
                    <div class="row">
                        <div class="col-12">
                            <div class="d-grid">
                                <a class="btn btn-outline-secondary" href="https://1.envato.market/zNkqj6"
                                    target="_blank">Check Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <div class="align-items-center d-flex flex-wrap gap-2 mb-3">
                        <div class="badge bg-light-warning f-12">Offer</div>
                        <p class="mb-0 text-muted">2 hour ago</p>
                        <span class="badge dot bg-warning"></span>
                    </div>
                    <h5 class="mb-3">Able Pro is in best offer price</h5>
                    <p class="text-muted">Download Able Pro exclusive on themeforest with best price.</p>
                    <a href="https://1.envato.market/zNkqj6" target="_blank"><img
                            src="{{ asset('assets') }}/images/layout/img-announcement-2.png" alt="img"
                            class="img-fluid" /></a>
                </div>
            </div>
            <p class="text-span mt-4">Yesterday</p>
            <div class="card mb-3">
                <div class="card-body">
                    <div class="align-items-center d-flex flex-wrap gap-2 mb-3">
                        <div class="badge bg-light-primary f-12">Blog</div>
                        <p class="mb-0 text-muted">12 hour ago</p>
                        <span class="badge dot bg-warning"></span>
                    </div>
                    <h5 class="mb-3">Featured Dashboard Template</h5>
                    <p class="text-muted">
                        Do you know Able Pro is one of the featured dashboard template selected by Themeforest team.?
                    </p>
                    <img src="{{ asset('assets') }}/images/layout/img-announcement-3.png" alt="img"
                        class="img-fluid" />
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <div class="align-items-center d-flex flex-wrap gap-2 mb-3">
                        <div class="badge bg-light-primary f-12">Announcement</div>
                        <p class="mb-0 text-muted">12 hour ago</p>
                        <span class="badge dot bg-warning"></span>
                    </div>
                    <h5 class="mb-3">Buy Once - Get Free Updated lifetime</h5>
                    <p class="text-muted">Get the lifetime free updates once you purchase the Able Pro.</p>
                    <img src="{{ asset('assets') }}/images/layout/img-announcement-4.png" alt="img"
                        class="img-fluid" />
                </div>
            </div>
        </div>
    </div>
    <!-- [ Header ] end --><!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pc-content">
            <!-- [ Main Content ] start -->
            <div class="row">
                @yield('content')
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
    <!-- [ Main Content ] end -->
    <footer class="pc-footer">
        <div class="footer-wrapper container-fluid">
            <div class="row">
                <div class="col my-1">
                    <p class="m-0">
                        {{ config('app.name') }} &#9829; developed by team
                        <a href="https://devpenguin.org" target="_blank">Devpenguin</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <div class="pct-c-btn">
        <a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_pc_layout"><i
                class="ph-duotone ph-gear-six"></i></a>
    </div>
    <div class="offcanvas border-0 pct-offcanvas offcanvas-end" tabindex="-1" id="offcanvas_pc_layout">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Settings</h5>
            <button type="button" class="btn btn-icon btn-link-danger ms-auto" data-bs-dismiss="offcanvas"
                aria-label="Close">
                <i class="ti ti-x"></i>
            </button>
        </div>
        <div class="pct-body customizer-body">
            <div class="offcanvas-body py-0">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="pc-dark">
                            <h6 class="mb-1">Theme Mode</h6>
                            <p class="text-muted text-sm">Choose light or dark mode or Auto</p>
                            <div class="row theme-color theme-layout">
                                <div class="col-4">
                                    <div class="d-grid">
                                        <button class="preset-btn btn active" data-value="true"
                                            onclick="layout_change('light');" data-bs-toggle="tooltip"
                                            title="Light">
                                            <svg class="pc-icon text-warning">
                                                <use xlink:href="#custom-sun-1"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="d-grid">
                                        <button class="preset-btn btn" data-value="false"
                                            onclick="layout_change('dark');" data-bs-toggle="tooltip" title="Dark">
                                            <svg class="pc-icon">
                                                <use xlink:href="#custom-moon"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="d-grid">
                                        <button class="preset-btn btn" data-value="default"
                                            onclick="layout_change_default();" data-bs-toggle="tooltip"
                                            title="Automatically sets the theme based on user's operating system's color scheme.">
                                            <span
                                                class="pc-lay-icon d-flex align-items-center justify-content-center"><i
                                                    class="ph-duotone ph-cpu"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h6 class="mb-1">Theme Contrast</h6>
                        <p class="text-muted text-sm">Choose theme contrast</p>
                        <div class="row theme-contrast">
                            <div class="col-6">
                                <div class="d-grid">
                                    <button class="preset-btn btn" data-value="true"
                                        onclick="layout_theme_contrast_change('true');" data-bs-toggle="tooltip"
                                        title="True">
                                        <svg class="pc-icon">
                                            <use xlink:href="#custom-mask"></use>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-grid">
                                    <button class="preset-btn btn active" data-value="false"
                                        onclick="layout_theme_contrast_change('false');" data-bs-toggle="tooltip"
                                        title="False">
                                        <svg class="pc-icon">
                                            <use xlink:href="#custom-mask-1-outline"></use>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h6 class="mb-1">Custom Theme</h6>
                        <p class="text-muted text-sm">Choose your primary theme color</p>
                        <div class="theme-color preset-color">
                            <a href="#!" data-bs-toggle="tooltip" title="Blue" class="active"
                                data-value="preset-1"><i class="ti ti-checks"></i></a>
                            <a href="#!" data-bs-toggle="tooltip" title="Indigo" data-value="preset-2"><i
                                    class="ti ti-checks"></i></a>
                            <a href="#!" data-bs-toggle="tooltip" title="Purple" data-value="preset-3"><i
                                    class="ti ti-checks"></i></a>
                            <a href="#!" data-bs-toggle="tooltip" title="Pink" data-value="preset-4"><i
                                    class="ti ti-checks"></i></a>
                            <a href="#!" data-bs-toggle="tooltip" title="Red" data-value="preset-5"><i
                                    class="ti ti-checks"></i></a>
                            <a href="#!" data-bs-toggle="tooltip" title="Orange" data-value="preset-6"><i
                                    class="ti ti-checks"></i></a>
                            <a href="#!" data-bs-toggle="tooltip" title="Yellow" data-value="preset-7"><i
                                    class="ti ti-checks"></i></a>
                            <a href="#!" data-bs-toggle="tooltip" title="Green" data-value="preset-8"><i
                                    class="ti ti-checks"></i></a>
                            <a href="#!" data-bs-toggle="tooltip" title="Teal" data-value="preset-9"><i
                                    class="ti ti-checks"></i></a>
                            <a href="#!" data-bs-toggle="tooltip" title="Cyan" data-value="preset-10"><i
                                    class="ti ti-checks"></i></a>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h6 class="mb-1">Theme layout</h6>
                        <p class="text-muted text-sm">Choose your layout</p>
                        <div class="theme-main-layout d-flex align-center gap-1 w-100">
                            <a href="#!" data-bs-toggle="tooltip" title="Vertical" class="active"
                                data-value="vertical"><img
                                    src="{{ asset('assets') }}/images/customizer/caption-on.svg" alt="img"
                                    class="img-fluid" /> </a><a href="#!" data-bs-toggle="tooltip"
                                title="Horizontal" data-value="horizontal"><img
                                    src="{{ asset('assets') }}/images/customizer/horizontal.svg" alt="img"
                                    class="img-fluid" /> </a><a href="#!" data-bs-toggle="tooltip"
                                title="Color Header" data-value="color-header"><img
                                    src="{{ asset('assets') }}/images/customizer/color-header.svg" alt="img"
                                    class="img-fluid" /> </a><a href="#!" data-bs-toggle="tooltip"
                                title="Compact" data-value="compact"><img
                                    src="{{ asset('assets') }}/images/customizer/compact.svg" alt="img"
                                    class="img-fluid" /> </a><a href="#!" data-bs-toggle="tooltip"
                                title="Tab" data-value="tab"><img
                                    src="{{ asset('assets') }}/images/customizer/tab.svg" alt="img"
                                    class="img-fluid" /></a>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h6 class="mb-1">Sidebar Caption</h6>
                        <p class="text-muted text-sm">Sidebar Caption Hide/Show</p>
                        <div class="row theme-color theme-nav-caption">
                            <div class="col-6">
                                <div class="d-grid">
                                    <button class="preset-btn btn-img btn active" data-value="true"
                                        onclick="layout_caption_change('true');" data-bs-toggle="tooltip"
                                        title="Caption Show">
                                        <img src="{{ asset('assets') }}/images/customizer/caption-on.svg"
                                            alt="img" class="img-fluid" />
                                    </button>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-grid">
                                    <button class="preset-btn btn-img btn" data-value="false"
                                        onclick="layout_caption_change('false');" data-bs-toggle="tooltip"
                                        title="Caption Hide">
                                        <img src="{{ asset('assets') }}/images/customizer/caption-off.svg"
                                            alt="img" class="img-fluid" />
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="pc-rtl">
                            <h6 class="mb-1">Theme Layout</h6>
                            <p class="text-muted text-sm">LTR/RTL</p>
                            <div class="row theme-color theme-direction">
                                <div class="col-6">
                                    <div class="d-grid">
                                        <button class="preset-btn btn-img btn active" data-value="false"
                                            onclick="layout_rtl_change('false');" data-bs-toggle="tooltip"
                                            title="LTR">
                                            <img src="{{ asset('assets') }}/images/customizer/ltr.svg" alt="img"
                                                class="img-fluid" />
                                        </button>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-grid">
                                        <button class="preset-btn btn-img btn" data-value="true"
                                            onclick="layout_rtl_change('true');" data-bs-toggle="tooltip"
                                            title="RTL">
                                            <img src="{{ asset('assets') }}/images/customizer/rtl.svg" alt="img"
                                                class="img-fluid" />
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item pc-box-width">
                        <div class="pc-container-width">
                            <h6 class="mb-1">Layout Width</h6>
                            <p class="text-muted text-sm">Choose Full or Container Layout</p>
                            <div class="row theme-color theme-container">
                                <div class="col-6">
                                    <div class="d-grid">
                                        <button class="preset-btn btn-img btn active" data-value="false"
                                            onclick="change_box_container('false')" data-bs-toggle="tooltip"
                                            title="Full Width">
                                            <img src="{{ asset('assets') }}/images/customizer/full.svg"
                                                alt="img" class="img-fluid" />
                                        </button>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-grid">
                                        <button class="preset-btn btn-img btn" data-value="true"
                                            onclick="change_box_container('true')" data-bs-toggle="tooltip"
                                            title="Fixed Width">
                                            <img src="{{ asset('assets') }}/images/customizer/fixed.svg"
                                                alt="img" class="img-fluid" />
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="d-grid"><button class="btn btn-light-danger" id="layoutreset">Reset
                                Layout</button></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- [Page Specific JS] start -->
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/apexcharts.min.js"></script>
    <script src="{{ asset('assets') }}/js/pages/dashboard-default.js"></script>
    <!-- [Page Specific JS] end --><!-- Required Js -->
    <script src="{{ asset('assets') }}/js/plugins/popper.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/simplebar.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/bootstrap.min.js"></script>
    <script src="{{ asset('assets') }}/js/fonts/custom-font.js"></script>
    <script src="{{ asset('assets') }}/js/pcoded.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/feather.min.js"></script>
    <script>
        layout_change("false");
    </script>
    <script>
        layout_theme_contrast_change("false");
    </script>
    <script>
        change_box_container("false");
    </script>
    <script>
        layout_caption_change("true");
    </script>
    <script>
        layout_rtl_change("false");
    </script>
    <script>
        preset_change("preset-1");
    </script>
    <script>
        main_layout_change("vertical");
    </script>
</body>
<!-- [Body] end -->

</html>
