<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header sticky">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <span class="mdl-layout-title">GAS</span>
            <div class="mdl-layout-spacer"></div>

            <nav class="mdl-navigation">
                <a id="demo-menu-lower-right" class="mdl-navigation__link" href="">
                    {{Auth::user()->firstname}} <i class="zmdi zmdi-account-circle zmdi-hc-lg"></i>
                </a>

                <ul class="mdl-menu  mdl-js-menu mdl-js-ripple-effect"
                    for="demo-menu-lower-right">
                    <li class="mdl-menu__item">
                        <i class="zmdi zmdi-account mdl-list__item-icon zmdi-hc-lg"></i> Account
                    </li>
                    <li class="mdl-menu__item">
                        <i class="zmdi zmdi-settings mdl-list__item-icon zmdi-hc-lg"></i> Settings
                    </li>
                    <li class="mdl-menu__item">
                        <i class="zmdi zmdi-notifications mdl-list__item-icon zmdi-hc-lg"></i> Notifications
                    </li>
                    <li class="mdl-menu__item">
                        <i class="zmdi zmdi-arrow-out mdl-list__item-icon zmdi-hc-lg"></i>Logout
                    </li>
                </ul>
            </nav>


        </div>
    </header>

    <div class="mdl-layout__drawer mdl-layout--small-screen-only">
        <span class="mdl-layout-title">Title</span>
        <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="">Link</a>
            <a class="mdl-navigation__link" href="">Link</a>
            <a class="mdl-navigation__link" href="">Link</a>
            <a class="mdl-navigation__link" href="">Link</a>
        </nav>
    </div>
</div>