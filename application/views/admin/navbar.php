<div class="header-content col px-md-3">
    <div class="d-flex align-items-center">
        <!-- Side Nav Toggle -->
        <a id="link" class="js-side-nav header-invoker d-flex mr-md-2" href="#" data-close-invoker="#sidebarClose" data-target="#sidebar" data-target-wrapper="body">
            <i class="gd-align-left"></i>
        </a>
        <!-- End Side Nav Toggle -->

        <!-- User Avatar -->
        <div class="dropdown ml-auto">
        <div class="dropdown mx-3 dropdown ml-2">
            <a id="link" class="header-complex-invoker" href="#" aria-controls="profileMenu" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-target="#profileMenu" data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-animation-in="fadeIn" data-unfold-animation-out="fadeOut">
                <span id="link" class="mr-md-2 avatar-placeholder">J</span>
                <span id="link" class="d-none d-md-block"><?= time_helper() . ", " . $user['name'] . "!"; ?></span>
                <i class="gd-angle-down d-none d-md-block ml-2"></i>
            </a>

            <ul id="profileMenu" class="unfold unfold-user unfold-light unfold-top unfold-centered position-absolute pt-2 pb-1 mt-4 unfold-css-animation unfold-hidden fadeOut" aria-labelledby="profileMenuInvoker" style="animation-duration: 300ms;">
                <li class="unfold-item">
                    <a id="link" class="unfold-link d-flex align-items-center text-nowrap" href="#">
                        <span class="unfold-item-icon mr-3">
                            <i class="gd-user"></i>
                        </span>
                        My Profile
                    </a>
                </li>
                <li class="unfold-item unfold-item-has-divider">
                    <a id="link" class="unfold-link d-flex align-items-center text-nowrap" href="<?= base_url(); ?>auth/logout">
                        <span class="unfold-item-icon mr-3">
                            <i class="gd-power-off"></i>
                        </span>
                        Sign Out
                    </a>
                </li>
            </ul>
        </div></div>
        <!-- End User Avatar -->
    </div>
</div>
</nav>
</header>
<!-- End Header -->