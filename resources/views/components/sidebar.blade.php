<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html"> <img alt="image" src="/assets/img/logo.png" class="header-logo" /> <span
            class="logo-name">ADMIN</span>
        </a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Main</li>
        <li class="dropdown active">
          <a href="index.html" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
        </li>
        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i
              data-feather="briefcase"></i><span>Master Setup</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{ route('company.index') }}">Company</a></li>
            <li><a class="nav-link" href="{{ route('category.index') }}">Category</a></li>
            <li><a class="nav-link" href="{{ route('product.index') }}">Product</a></li>
          </ul>
        </li>

      </ul>
    </aside>
  </div>
