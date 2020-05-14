<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          
        </form>
          <ul class="nav navbar-nav navbar-right">
            
          </ul>
          <ul class="nav navbar-nav mx-2">
            
          </ul>
          
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?= base_url('dashboard') ?>"><i class="fas fa-university"></i> Academic</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?= base_url('dashboard') ?>"><i class="fas fa-university"></i></a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main Menu</li>
            <li><a class="nav-link" href="<?= base_url('students') ?>"><i class="fas fa-user-graduate"></i> <span>Students</span></a></li>
            <li><a class="nav-link" href="<?= base_url('majors') ?>"><i class="fas fa-journal-whills"></i> <span>Majors</span></a></li>
          </ul>
        </aside>
      </div>
