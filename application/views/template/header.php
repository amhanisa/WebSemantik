<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Staff FILKOM UB</title>

  <!-- Bootstrap -->
  <link href="<?php echo base_url("assets/bootstrap/dist/css/bootstrap.min.css"); ?>" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="<?php echo base_url("assets/font-awesome/css/font-awesome.min.css"); ?>" rel="stylesheet">
  <!-- NProgress -->
  <link href="<?php echo base_url("assets/nprogress/nprogress.css"); ?>" rel="stylesheet">
  <!-- iCheck -->
  <link href="<?php echo base_url("assets/iCheck/skins/flat/green.css"); ?>" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="<?php echo base_url("build/css/custom.min.css"); ?>" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Staff FILKOM</span></a>
          </div>
          <!-- <div class="clearfix"></div>
            <br /> -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a href="<?php echo site_url('page'); ?>"><i class="fa fa"></i> All Staff <span class="fa fa-chevron"></span></a>
                </li>
                <li><a><i class="fa fa"></i> Staff Laboratorium <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="<?php echo site_url('page/riset'); ?>">Riset</a></li>
                    <li><a href="<?php echo site_url('page/pembelajaran'); ?>">Pembelajaran</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa"></i> Staff Jurusan <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="<?php echo site_url('page/akademikprodi'); ?>">Staff Akademik Prodi</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa"></i> Staff Tata Usaha <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="<?php echo site_url('page/keuangan'); ?>">Keuangan</a></li>
                    <li><a href="<?php echo site_url('page/umumperlengkapan'); ?>">Umum dan Perlengkapan</a></li>
                    <li><a href="<?php echo site_url('page/kemahasiswaan'); ?>">Kemahasiswaan</a></li>
                    <li><a href="<?php echo site_url('page/kerjasamakehumasan'); ?>">Kerjasama dan Kehumasan</a></li>
                    <li><a href="<?php echo site_url('page/kepegawaian'); ?>">Kepegawaian</a></li>
                    <li><a href="<?php echo site_url('page/persuratan'); ?>">Persuratan</a></li>
                    <li><a href="<?php echo site_url('page/sekretaris'); ?>">Sekretaris</a></li>
                  </ul>
                </li>
                <li><a href="<?php echo site_url('page/bppm'); ?>"><i class="fa fa"></i> BPPM <span class="fa fa-chevron"></span></a>
                </li>
                <li><a href="<?php echo site_url('page/psik'); ?>"><i class="fa fa"></i> PSIK <span class="fa fa-chevron"></span></a>
                </li>
                <li><a href="<?php echo site_url('page/gjm'); ?>"><i class="fa fa"></i> GJM <span class="fa fa-chevron"></span></a>
                </li>
                <li><a href="<?php echo site_url('page/ruangbaca'); ?>"><i class="fa fa"></i> Ruang Baca <span class="fa fa-chevron"></span></a>
                </li>
                <li><a href="<?php echo site_url('page/kasubag'); ?>"><i class="fa fa"></i> Kepala Unit <span class="fa fa-chevron"></span></a>
                </li>
              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
          </div>
          <nav class="nav navbar-nav">
            <ul class=" navbar-right">
              <!--  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      <img src="images/img.jpg" alt="">John Doe
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="javascript:;"> Profile</a>
                      <a class="dropdown-item"  href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                      <a class="dropdown-item"  href="javascript:;">Help</a>
                      <a class="dropdown-item"  href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                  </li> -->

              <li role="presentation" class="nav-item dropdown open">
                <!-- <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-envelope-o"></i>
                      <span class="badge bg-green">6</span>
                    </a> -->
                <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                  <li class="nav-item">
                    <!-- <a class="dropdown-item">
                          <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a> -->
                  </li>
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <div class="text-center">
                      <a class="dropdown-item">
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->