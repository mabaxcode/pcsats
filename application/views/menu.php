<header id="header" class="header d-flex align-items-center sticky-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center">

    <a href="<?= base_url(); ?>" class="logo d-flex align-items-center me-auto">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <!-- <img src="<?= base_url(); ?>assets/img/logo.png" alt=""> -->
      <h1 class="sitename">PCSATS</h1>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="<?= base_url(); ?>" <? if($this->uri->segment(1) == ''){ echo 'class="active";'; } else {} ?> >Home<br></a></li>
        <li><a href="<?= base_url('main'); ?>" <? if($this->uri->segment(1) == 'main' && $this->uri->segment(2) == ''){ echo 'class="active";'; } else {}?> >About</a></li>
        <li><a href="<?= base_url('main/courses'); ?>" <? if($this->uri->segment(2) == 'courses'){ echo 'class="active";'; } else{} ?>>Courses</a></li>
        <li><a href="<?= base_url('main/trainers'); ?>" <? if($this->uri->segment(2) == 'trainers'){ echo 'class="active";'; } else {} ?>>Trainers</a></li>
        <li><a href="<?= base_url('main/events'); ?>" <? if($this->uri->segment(2) == 'events'){ echo 'class="active";'; } else {} ?>>Events</a></li>
        <!-- <li><a href="pricing.html">Pricing</a></li> -->
        <li><a href="<?= base_url('main/contact'); ?>" <? if($this->uri->segment(2) == 'contact'){ echo 'class="active";'; } else {} ?>>Contact</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    <a class="btn-getstarted" href="courses.html">Get Started</a>

  </div>
</header>