    </head>

    <body class="">
      <div class="wrapper">
        <div class="sidebar" data-color="rose" data-background-color="black" data-image="../assets/img/sidebar-1.jpg">
            <!--
                Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

                Tip 2: you can also add an image using data-image tag
              -->

              <div class="logo">
                <a href="<?php echo base_url(); ?>" class="simple-text logo-mini">
                 <img src="<?php echo base_url(); ?>master/admin/img/fav1.png"">
               </a>

               <a href="<?php echo base_url(); ?>" class="simple-text logo-normal">
                 Kopi Jamur
               </a>
             </div>

             <div class="sidebar-wrapper">
              <div class="user">
                <div class="photo">
                  <img src="<?php echo base_url(); ?>master/admin/img/faces/avatar.jpg" />
                </div>
                <div class="user-info">
                  <a  class="username">
                    <span>
                     Tania Andrew
                   </span>
                 </a>
               </div>
             </div>
             <ul class="nav">

              <li class="nav-item <?php if($this->uri->segment(2)=='Dashboard'){echo 'active';}?> ">
                <a class="nav-link" href="<?php echo base_url("/admin/Dashboard"); ?>">
                  <i class="material-icons">dashboard</i>
                  <p> Dashboard </p>
                </a>
              </li>

              <li class="nav-item <?php if($this->uri->segment(2)=='Forum'){echo 'active';}?> ">
                <a class="nav-link" href="<?php echo base_url("admin/Forum"); ?>">
                  <i class="material-icons">forum</i>
                  <p>Forum</p>
                </a>
              </li>

              <li class="nav-item <?php if($this->uri->segment(2)=='Gallery'){echo 'active';}?> ">
                <a class="nav-link" href="<?php echo base_url("admin/Gallery"); ?>">
                  <i class="material-icons">photo_library</i>
                  <p>Gallery</p>
                </a>
              </li>
                <li class="nav-item <?php if($this->uri->segment(2)=='Prestasi' or $this->uri->segment(2)
               =='Unggulan'){echo 'active';} ?> ">
                <a class="nav-link" data-toggle="collapse" href="#pagesExamples">
                  <i class="material-icons">build</i>
                  <p> Key Features
                   <b class="caret"></b>
                 </p>
               </a>
               <div class="<?php if($this->uri->segment(2)=='Prestasi' or $this->uri->segment(2)
               =='Unggulan'){echo 'show';}
               else{echo "collapse";}?>  
               ml-4 " id="pagesExamples">
               <ul class="nav">
                <li class="nav-item <?php if($this->uri->segment(2)=='Prestasi'){echo 'active';}?>">
                  <a class="nav-link" href="<?php echo base_url("admin/Prestasi"); ?>">
                    <i class="material-icons"> account_circle </i>
                    <span class="sidebar-normal"> Prestasi </span>
                  </a>
                </li>
                <li class="nav-item <?php if($this->uri->segment(2)=='Unggulan'){echo 'active';}?> ">
                  <a class="nav-link" href="<?php echo base_url("admin/Unggulan"); ?>">
                    <i class="material-icons"> account_circle </i>
                    <span class="sidebar-normal"> Unggulan </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
              <li class="nav-item <?php if($this->uri->segment(2)=='User' or $this->uri->segment(2)
               =='Admin' or $this->uri->segment(2)
               =='Produk' or $this->uri->segment(2)
               =='Testimonial'){echo 'active';} ?> ">
                <a class="nav-link" data-toggle="collapse" href="#mapsExamples">
                  <i class="material-icons">layers</i>
                  <p> Data Master
                   <b class="caret"></b>
                 </p>
               </a>
               <div class="<?php if($this->uri->segment(2)=='User' or $this->uri->segment(2)
               =='Admin' or $this->uri->segment(2)
               =='Produk' or $this->uri->segment(2)
               =='Testimonial'){echo 'show';}
               else{echo "collapse";}?>  
               ml-4 " id="mapsExamples">
               <ul class="nav">
                <li class="nav-item <?php if($this->uri->segment(2)=='User'){echo 'active';}?>">
                  <a class="nav-link" href="<?php echo base_url("admin/User"); ?>">
                    <i class="material-icons"> account_circle </i>
                    <span class="sidebar-normal"> User </span>
                  </a>
                </li>
                <li class="nav-item <?php if($this->uri->segment(2)=='Admin'){echo 'active';}?> ">
                  <a class="nav-link" href="<?php echo base_url("admin/Admin"); ?>">
                    <i class="material-icons"> account_circle </i>
                    <span class="sidebar-normal"> Admin </span>
                  </a>
                </li>
                <li class="nav-item <?php if($this->uri->segment(2)=='Produk'){echo 'active';}?> ">
                  <a class="nav-link" href="<?php echo base_url("admin/Produk"); ?>">
                    <i class="material-icons"> unarchive </i>
                    <span class="sidebar-normal"> Produk </span>
                  </a>
                </li>
                <li class="nav-item <?php if($this->uri->segment(2)=='Testimonial'){echo 'active';}?> ">
                  <a class="nav-link" href="<?php echo base_url("admin/Testimonial"); ?>">
                    <i class="material-icons"> verified_user </i>
                    <span class="sidebar-normal"> Testimonial </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item <?php if($this->uri->segment(2)=='Profile' or $this->uri->segment(2)
               =='Log-Out'){echo 'active';} ?> ">
            <a class="nav-link" data-toggle="collapse" href="#mapsExample">
              <i class="material-icons">settings</i>
              <p> Settings
               <b class="caret"></b>
             </p>
           </a>
         </li>
           <div class="<?php if($this->uri->segment(2)=='Profile' or $this->uri->segment(2)
           =='Log-Out'){echo 'show';}
           else{echo "collapse";}?> ml-4 " id="mapsExample">
           <ul class="nav">
            <li class="nav-item <?php if($this->uri->segment(2)=='Profile'){echo 'active';}?> ">
              <a class="nav-link" href="<?php echo base_url("admin/Profile"); ?>">
                <i class="material-icons"> account_circle </i>
                <span class="sidebar-normal"> Profile </span>
              </a>
            </li>
            <li class="nav-item <?php if($this->uri->segment(2)=='Log-Out'){echo 'active';}?> ">
              <a class="nav-link" href="<?php echo base_url("admin/Profile"); ?>">
                <i class="material-icons"> undo </i>
                <span class="sidebar-normal"> Log-Out </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
</div>

<div class="main-panel">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute fixed-top">
    <div class="container-fluid">
      <div class="navbar-wrapper">
        <div class="navbar-minimize">
          <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
            <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
            <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
          </button>
        </div>
        <!-- <a class="navbar-brand" href="#pablo"></a> -->
      </div>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link" href="https://creative-tim.com/" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="material-icons">notifications</i>
              <span class="notification">5</span>
              <p>
                <span class="d-lg-none d-md-block">Some Actions<b class="caret"></b></span>
              </p>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Mike John responded to your email</a>
              <a class="dropdown-item" href="#">You have 5 new tasks</a>
              <a class="dropdown-item" href="#">You're now friend with Andrew</a>
              <a class="dropdown-item" href="#">Another Notification</a>
              <a class="dropdown-item" href="#">Another One</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link" href="https://creative-tim.com/" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="material-icons">person </i>
              <p class="hidden-lg hidden-md">Profile</p>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="<?php echo base_url('Profile') ?>">Profile</a>
              <a class="dropdown-item" href="<?php echo base_url('#') ?>">Sign-Out</a>
            </div>
          </li>
        </ul>
      </div>

    </div>
  </nav>