<div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

<header class="site-navbar py-1" role="banner">

    <div class="container">
        <div class="row align-items-center">

            <div class="col-6 col-xl-2">
                <div class="logo_img">
                    <?php if (has_custom_logo()) {
                        the_custom_logo();
                    } else {
                        echo "<h6><a class='text-black h2 mb-0' href='" . home_url("/") . "'>" . get_bloginfo('name') . "</a></h6>";
                    }
                    ?>

                </div>
            </div>
            <div class="col-10 col-md-8 d-none d-xl-block">


                <?php
                $unique_menu = wp_nav_menu(array(
                    'theme_location'       => 'topmenu',
                    'menu_id'              => 'topmenu',
                    'container'            => 'nav',
                    'fallback_cb'          => 'none',
                    'container_class'      => 'site-navigation position-relative text-right text-lg-center',
                    'container_aria_label' => 'navigation',
                    'menu_class'           => 'site-menu js-clone-nav mx-auto d-none d-lg-block',
                    'echo'                 => false,
                ));

                $unique_menu = str_replace("menu-item-has-children", "menu-item-has-children has-children", $unique_menu);
                $unique_menu = str_replace("sub-menu", "sub-menu dropdown", $unique_menu);
                $unique_menu = str_replace("current-menu-item", "current-menu-item active", $unique_menu);
                echo wp_kses_post($unique_menu);
                ?>
            </div>

            <div class="col-6 col-xl-2 text-right">
                <div class="d-none d-xl-inline-block">
                    <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
                        <li>
                            <a href="#" class="pl-0 pr-3 text-black"><span class="icon-user mr-2"></span>Login</a>
                        </li>
                    </ul>
                </div>

                <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

            </div>

        </div>
    </div>

</header>