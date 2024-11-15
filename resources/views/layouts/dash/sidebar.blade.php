<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('dash.index') }}">
          <i class="mdi mdi-grid-large menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item nav-category">Events & Tickets</li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="menu-icon mdi mdi-floor-plan"></i>
          <span class="menu-title">Events</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('event.create') }}">Create</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('event.index') }}">View</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2">
            <i class="menu-icon mdi mdi-floor-plan"></i>
            <span class="menu-title">Tickets</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic2">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{ route('ticket.create') }}">Create</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ route('ticket.index') }}">View</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('payments.index') }}">
            <i class="mdi mdi-grid-large menu-icon"></i>
            <span class="menu-title">Payments</span>
          </a>
        </li>
      <li class="nav-item nav-category">Porfolio & Artist Data</li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false"
          aria-controls="form-elements">
          <i class="menu-icon mdi mdi-card-text-outline"></i>
          <span class="menu-title">Portfolio</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="form-elements">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="{{ route('portfolio.create') }}">Create</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('portfolio.index') }}">View</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
          <i class="menu-icon mdi mdi-account-multiple"></i>
          <span class="menu-title">Artists</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="charts">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('artist.index') }}">Onboarded</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('artist.booked') }}">Booked</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item nav-category">FAQ</li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#form-elements2" aria-expanded="false"
          aria-controls="form-elements2">
          <i class="menu-icon mdi mdi-card-text-outline"></i>
          <span class="menu-title">FAQ</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="form-elements2">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="{{ route('faq.create') }}">Create</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('portfolio.index') }}">View</a></li>
          </ul>
        </div>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
          <i class="menu-icon mdi mdi-table"></i>
          <span class="menu-title">Tables</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="tables">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="../pages/tables/basic-table.html">Basic table</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
          <i class="menu-icon mdi mdi-layers-outline"></i>
          <span class="menu-title">Icons</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="icons">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="../pages/icons/mdi.html">Mdi icons</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item nav-category">pages</li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <i class="menu-icon mdi mdi-account-circle-outline"></i>
          <span class="menu-title">User Pages</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="../pages/samples/login.html"> Login </a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item nav-category">help</li>
      <li class="nav-item">
        <a class="nav-link" href="http://bootstrapdash.com/demo/star-admin2-free/docs/documentation.html">
          <i class="menu-icon mdi mdi-file-document"></i>
          <span class="menu-title">Documentation</span>
        </a>
      </li> --}}
    </ul>
  </nav>

  <style>
    .invalid-feedback {
        display: inline !important;
        font-size: 12px
    }

    .nav-item .nav-link {
      color: black !important;
    }
  </style>