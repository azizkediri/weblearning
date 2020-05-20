  <div class="app app-default">

    <aside class="app-sidebar" id="sidebar">
      <div class="sidebar-header">
        <a class="sidebar-brand" href="<?php echo site_url('Beranda') ?>">
          <img src="<?php echo base_url(); ?>template/image/book.png" style="width:70px; height:70px">
        </a>
        <center>
          <p class="control-label" style="color:#000000;"></p>
        </center>
        <button type="button" class="sidebar-toggle">

        </button>
      </div>
      <div class="sidebar-menu">
        <ul class="sidebar-nav">
          <li class="<?php if ($aktif == 1) {
                        echo "active";
                      } ?>">
            <!-- link fitur -->
            <a href="<?php echo site_url('Beranda') ?>">
              <div class="icon">
                <i class="fa fa-home" aria-hidden="true"></i>
              </div>
              <div class="title">Beranda</div>
            </a>
          </li>
          <li class="dropdown <?php if ($aktif == 2) {
                                echo "active";
                              } ?>">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <div class="icon">
                <i class="fa fa-database" aria-hidden="true"></i>
              </div>
              <div class="title">Data Soal</div>

            </a>
            <div class="dropdown-menu">
              <ul>
                <li class="section"><i class="fa fa-database" aria-hidden="true"></i>Fitur Soal</li>
                <!-- link fitur -->
                <li><a href="<?php echo site_url('Soal/index') ?>">Buat Soal</a></li>
                <li><a href="<?php echo site_url('Soal/index') ?>">List Soal</a></li>
                
              </ul>
            </div>
          </li>

          <li class="dropdown <?php if ($aktif == 3) {
                                echo "active";
                              } ?>">
            <!-- link fitur -->
            <a href="" class="dropdown-toggle" data-toggle="dropdown">
              <div class="icon">
                <i class="fa fa-users" aria-hidden="true"></i>
              </div>
              <div class="title">Data Pelajar</div>
            </a>
            <div class="dropdown-menu">
              <ul>
                <li class="section"><i class="fa fa-users" aria-hidden="true"></i> Data Pelajar</li>
                <li><a href="<?php echo site_url('Pelajar/index') ?>">Data Pelajar</a></li>
                <li><a href="<?php echo site_url('Pelajar/index') ?>"> Data Perkembangan</a></li>
                
              </ul>
            </div>
          </li>
          <li class="dropdown <?php if ($aktif == 4) {
                                echo "active";
                              } ?>">
            <!-- link fitur -->
            <a href="" class="dropdown-toggle" data-toggle="dropdown">
              <div class="icon">
                <i class="fa fa-download" aria-hidden="true"></i>
              </div>
              <div class="title">Download</div>
            </a>
            <div class="dropdown-menu">
              <ul>
                <li class="section"><i class="fa fa-download"></i>Fitur Download</li>
                <li><a href="<?php echo site_url('Download/index') ?>">Download Pelajar</a></li>
                <li><a href="<?php echo site_url('Download/index') ?>">Download Data Perkembangan</a></li>
                <li><a href="<?php echo site_url('Download/index') ?>">Download Data Soal</a></li>
              </ul>
            </div>
          </li>

        </ul>
      </div>




      <div class="sidebar-footer">
        <ul class="menu">
          <!--      <li>
        <a href="/" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-cogs" aria-hidden="true"></i>
        </a>
      </li>
      <li><a href="#"><span class="flag-icon flag-icon-th flag-icon-squared"></span></a></li>
    -->
        </ul>
      </div>
    </aside>

    <script type="text/ng-template" id="sidebar-dropdown.tpl.html">
    </script>
    <div class="app-container">

      <nav class="navbar navbar-default" id="navbar">
        <div class="container-fluid">
          <div class="navbar-collapse collapse in">
            <ul class="nav navbar-nav navbar-right">
              <h4>
                
              </h4>
              <li class="dropdown profile">
                <a href="/html/pages/profile.html" class="dropdown-toggle" data-toggle="dropdown">
                  
                  <div class="title">Profile</div>
                </a>
                <div class="dropdown-menu">
                  <div class="profile-info">
                    <h4 class="username">Web Nahwu</h4>
                  </div>
                  <ul class="action">
                    <li>
                    <!-- link fitur -->
                    <a href="" >
                      <img src="" alt="">
                       Profil
                     </a>
              </li>
                    <li>
                      <!-- link fitur -->
                      <a href="<?php echo site_url('Login/logout'); ?>">
                        Logout
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>