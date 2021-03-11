<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
        <img src="/public/images/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/public/images/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="/admin" class="d-block"><?= $_SESSION['auth']['name']  ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <?php foreach($GLOBALS['config']['menus'] as $key => $menu): ?>
                    <li class="nav-item <?= $menu['submenu'] ? 'has-submenu' : '' ?>">
                        <a href="<?= $menu['url'] ?>" class="nav-link <?= $menu['submenu'] ? 'a-has-submenu' : '' ?>  <?= ($_SERVER['REQUEST_URI'] == $menu['url']) ? 'active' : '' ?>">
                            <i class="nav-icon <?= $menu['icon'] ?>"></i>
                            <p>
                                <?= $menu['name'] ?>
                                <?php if($menu['submenu']): ?>
                                    <i class="right fas fa-angle-left"></i>
                                <?php endif; ?>
                            </p>
                        </a>
                        <?php if($menu['submenu']): ?>
                            <ul class="nav nav-treeview">
                                <?php foreach ($menu['submenu'] as $item): ?>
                                <li class="nav-item">
                                    <a href="<?= $item['url'] ?>"
                                        class="nav-link <?= ($_SERVER['REQUEST_URI'] == $item['url']) ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p><?= $item['name'] ?></p>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

