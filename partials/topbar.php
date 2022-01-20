<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">

               <!-- LOGO -->
         <div class="navbar-brand-box">
            <a href="index.php" class="logo logo-dark">
                <span class="logo-sm">
                    <img src="assets/images/logo-sm.png" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="assets/images/logo-dark.png" alt="" height="20">
                </span>
            </a>

            <a href="index.php" class="logo logo-light">
                <span class="logo-sm">
                    <img src="assets/images/logo-sm.png" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="assets/images/logo-light.png" alt="" height="20">
                </span>
            </a>
        </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="mdi mdi-menu"></i>
            </button>


            <div class="topbar-social-icon me-3 d-none d-md-block">
                <ul class="list-inline title-tooltip m-0">
                    <li class="list-inline-item">
                        <a href="email-inbox.html" data-bs-toggle="tooltip" data-placement="top" title="Email">
                         <i class="mdi mdi-email-outline"></i>
                        </a>
                    </li>
                        
                    <li class="list-inline-item">
                        <a href="chat.html" data-bs-toggle="tooltip" data-placement="top" title="Chat">
                         <i class="mdi mdi-tooltip-outline"></i>
                        </a>
                    </li>

                    <li class="list-inline-item">
                        <a href="calendar.html" data-bs-toggle="tooltip" data-placement="top" title="Calendar">
                         <i class="mdi mdi-calendar"></i>
                        </a>
                    </li>

                    <li class="list-inline-item">
                        <a href="pages-invoice.html" data-bs-toggle="tooltip" data-placement="top" title="Printer">
                         <i class="mdi mdi-printer"></i>
                        </a>
                    </li>
                </ul>
            </div>
            
        </div>

        <!-- Search input -->
        <div class="search-wrap" id="search-wrap">
            <div class="search-bar">
                <input class="search-input form-control" placeholder="Search" />
                <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                    <i class="mdi mdi-close-circle"></i>
                </a>
            </div>
        </div>

        <div class="d-flex">
            <div class="dropdown d-none d-lg-inline-block">
                <button type="button" class="btn header-item toggle-search noti-icon waves-effect" data-target="#search-wrap">
                    <i class="mdi mdi-magnify"></i>
                </button>
            </div>

            <!-- People Avatar select -->
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="assets/images/users/vit.jpg"
                        alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1">Vitaly</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>

                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle-outline font-size-16 align-middle me-1"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i class="mdi mdi-wallet-outline font-size-16 align-middle me-1"></i> My Wallet</a>
                    <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-end">11</span><i class="mdi mdi-cog-outline font-size-16 align-middle me-1"></i> Settings</a>
                    <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline font-size-16 align-middle me-1"></i> Lock screen</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="index.php"><i class="mdi mdi-power font-size-16 align-middle me-1 text-danger"></i> Logout</a>
                </div>
            </div>

            
        </div>
    </div>
</header>