<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="/admin/"> <img alt="image" src="assets/img/logo.png" class="header-logo" /> <span
                class="logo-name">AZNews</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown">
              <a href="/" class="nav-link"><i data-feather="monitor"></i><span>AZNews</span></a>
            </li>
            <li class="dropdown  <?= (!isset($_SESSION['reg_admin'])) ? 'd-none' : 'd-block' ?>">
              <a href="/admin/register.php" class="nav-link"><i data-feather="user"></i><span>Register Admin</span></a>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="briefcase"></i><span>Tables</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="/admin/news.php">News | Category</a></li>
              
              </ul>
            </li>
            
          </ul>
        </aside>
      </div>