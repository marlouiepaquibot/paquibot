<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <div class="d-flex sidebar-profile">
        <div class="sidebar-profile-image">
          <img src="{{ asset('pinoylogo.jpg') }}" alt="image">
          <span class="sidebar-status-indicator"></span>
        </div>
        <div class="sidebar-profile-name">
          <p class="sidebar-name">
            {{ Auth::user()->name }}
          </p>
          <p class="sidebar-designation">
            Welcome
          </p>
        </div>
      </div>
      <div class="nav-search">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Type to search..." aria-label="search"
            aria-describedby="search">
          <div class="input-group-append">
            <span class="input-group-text" id="search">
              <i class="typcn typcn-zoom"></i>
            </span>
          </div>
        </div>
      </div>
      <p class="sidebar-menu-title">Dash menu</p>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('home') }}">
        <i class="typcn typcn-device-desktop menu-icon"></i>
        <span class="menu-title">Dashboard <span class="badge badge-primary ml-3">New</span></span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="typcn typcn-briefcase menu-icon"></i>
        <span class="menu-title">Add RECIPE</span>
        <i class="typcn typcn-chevron-right menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('Filipinodesserts.addFilipinodesserts') }}">Add Filipino Desserts</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('Lutongbahay.addLutongbahay') }}">Add Lutong Bahay</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('Streetfood.addStreetfood') }}">Add Street Foods</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#master" aria-expanded="false" aria-controls="ui-basic">
        <i class="typcn typcn-briefcase menu-icon"></i>
        <span class="menu-title">Masterlist</span>
        <i class="typcn typcn-chevron-right menu-arrow"></i>
      </a>
      <div class="collapse" id="master">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{route('Filipinodesserts.listFilipinodesserts')}}">All Filipino Dessserts</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('Lutongbahay.listLutongbahay') }}">All Lutong Bahay</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('Streetfood.listStreetfood') }}">All Street Foods</a></li>
        </ul>
      </div>
    </li>
  </ul>
</nav>