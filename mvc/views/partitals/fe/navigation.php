 <!-- Navigation -->
 <header class="nav">

     <div class="nav__holder nav--sticky">
         <div class="container relative">
             <div class="flex-parent">

                 <form method="get" class="nav__search-wrap">
                     <input type="search" class="nav__search-input" placeholder="Type &amp; Hit Enter">
                     <i class="fa fa-close nav__search-close" id="nav__search-close"></i>
                 </form>

                 <div class="nav__header clearfix">
                     <!-- Logo -->
                     <div class="logo-wrap">
                         <a href="index.html" class="logo__link">
                             <img class="logo logo--dark" src="<?= isset($data['general']['logo']) ? $data['general']['logo'] : '/public/uploads/logo.png' ?>" alt="logo">
                         </a>
                     </div>

                     <button type="button" class="nav__icon-toggle" id="nav__icon-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                         <span class="sr-only">Toggle navigation</span>
                         <span class="nav__icon-toggle-bar"></span>
                         <span class="nav__icon-toggle-bar"></span>
                         <span class="nav__icon-toggle-bar"></span>
                     </button>
                 </div> <!-- end nav-header -->

                 <nav id="navbar-collapse" class="nav__wrap collapse navbar-collapse">
                     <ul class="nav__menu">
                        <?php foreach($GLOBALS['config']['menu_fe'] as $key => $menu):?>
                         <li class="nav__dropdown <?= ($_SERVER['REQUEST_URI'] == $menu['url']) ? 'active' : '' ?>">
                             <a href="<?= $menu['url']?>"><?= $menu['name']?></a>
                         </li>
                        <?php endforeach; ?>
                         <!-- <li class="nav__dropdown">
                             <a href="#">Pages</a>
                             <i class="fa fa-angle-down nav__dropdown-trigger"></i>
                             <ul class="nav__dropdown-menu">
                                 <li><a href="services.html">Services</a></li>
                                 <li><a href="about-us.html">About Us</a></li>
                                 <li><a href="contact.html">Contact</a></li>
                                 <li><a href="404.html">404</a></li>
                             </ul>
                         </li> -->

                         


                         <!-- Search -->
                         <li class="hidden-sm hidden-xs">
                             <div class="nav__search hidden-sm hidden-xs">
                                 <span class="nav__search-trigger" id="nav__search-trigger">
                                     <i class="fa fa-search"></i>
                                 </span>
                             </div>
                         </li>

                         <!-- Mobile Search -->
                         <li class="hidden-lg hidden-md">
                             <form method="get" class="nav__search-mobile">
                                 <input type="search" placeholder="Search..." class="nav__search-mobile-input">
                                 <button type="submit" class="nav__search-mobile-button">
                                     <i class="fa fa-search"></i>
                                 </button>
                             </form>
                         </li>

                     </ul> <!-- end menu -->

                 </nav> <!-- end nav-wrap -->

             </div> <!-- end flex-parent -->
         </div> <!-- end container -->

     </div>
 </header> <!-- end navigation -->