<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="<?=base_url('home/dashboard')?>">Lelang onlen</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">

        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="<?=base_url('home/fpw')?>">Reset password?</a></li>
                    <li><a class="dropdown-item" href="<?=base_url('home/logout')?>">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <?php foreach ($mn as $menu) { ?>
                          <?php if ($menu->parent_id == 0) { ?>
                            <?php if ($menu->is_have_child > 0) { ?>
                              <!-- Menu dengan is_have_child > 0 -->
                              <li class="nav-item">
                                <a class="nav-link collapsed" data-bs-target="#x-nav" data-bs-toggle="collapse" href="<?= $menu->link?>">
                                  <i class="<?= $menu->icon?>"></i><span><?= $menu->title?></span><i class=""></i>
                              </a>
                              <ul id="x-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                                  <!-- Print submenu -->
                                  <?php foreach ($mn as $submenu) { ?>
                                    <?php if ($submenu->parent_id == $menu->id) { ?>
                                      <li>
                                        <a href="<?= $submenu->link?>">
                                          <i class="<?= $submenu->icon?>"></i><span><?= $submenu->title?></span>
                                      </a>
                                  </li>
                              <?php } ?>
                          <?php } ?>
                      </ul>
                  </li>
              <?php } else { ?>
                  <!-- Menu dengan is_have_child = 0 -->
                  <li class="nav-item">
                    <a class="nav-link " href="<?= $menu->link?>">
                      <i class="<?= $menu->icon?> ?>"></i>
                      <span><?= $menu->title?></span>
                  </a>
              </li><!-- End Dashboard Nav -->
          <?php } ?>
      <?php } ?>
  <?php } ?>

</div>
</nav>
</div>