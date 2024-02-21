<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
  <a class="navbar-brand brand-logo" href="{{ url('/') }}"><img src="{{ asset('pinoy  logo.jpg') }}" alt="logo"></a>
    <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo" /></a>
    <button class="navbar-toggler navbar-toggler align-self-center d-none d-lg-flex" type="button"
      data-toggle="minimize">
      <span class="typcn typcn-th-menu"></span>
    </button>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <ul class="navbar-nav mr-lg-2">
      <li class="nav-item  d-none d-lg-flex">
        <a class="nav-link " href="{{ route('Filipinodesserts.goToFilipinodesserts') }}">
          <h4> Filipino Desserts </h4>
        </a>
      </li>
      <li class="nav-item  d-none d-lg-flex">
        <a class="nav-link" href="{{ route('Lutongbahay.goToLutongbahay') }}">
          <h4>Lutong Bahay</h4>
        </a>
      </li>
      <li class="nav-item  d-none d-lg-flex">
        <a class="nav-link" href="{{ route('Streetfood.goToStreetfood') }}">
          <h4>Street Food</h4>
        </a>
      </li>
    </ul>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle  pl-0 pr-0" href="#" data-toggle="dropdown" id="profileDropdown">
          <i class="typcn typcn-user-outline mr-0"></i>
          <span class="nav-profile-name"> {{ Auth::user()->name }}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
          <a class="dropdown-item">
            <i class="typcn typcn-cog text-primary"></i>
            Settings
          </a>
          <a class="dropdown-item ai-icon" href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="typcn typcn-power text-primary"></i>
            <span class="ml-2">Logout </span>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </a>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
      data-toggle="offcanvas">
      <span class="typcn typcn-th-menu"></span>
    </button>
  </div>
</nav>