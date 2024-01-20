<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
          <div class="nav-profile-image">
            <img src="../../assets/images/faces/face28.jpg" alt="profile">
            <span class="login-status online"></span>
            <!--change to offline or busy as needed-->
          </div>
          <div class="nav-profile-text d-flex flex-column">
            <span class="font-weight-bold mb-2">Onuh Sani</span>
            <span class="text-secondary text-small">Administrator</span>
          </div>
          <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../../index.html">
          <span class="menu-title">Dashboard</span>
          <i class="mdi mdi-home menu-icon"></i>
        </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
          <span class="menu-title">User management</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-account-multiple-plus menu-icon"></i>
        </a>
        <div class="collapse" id="general-pages">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('agents.index')}}"> Agents </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('corpers.index')}}"> Corpers </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('admins.index')}}"> Admin </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('admins.create') }}"> Add admin </a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-title">Content management</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-account-box menu-icon"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('houses.index')}}"> House listings </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('items.index')}}"> Marketplace listings </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('items.newItems')}}"> New listings </a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#blog" aria-expanded="false" aria-controls="blog">
          <span class="menu-title">Blog</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-blogger menu-icon"></i>
        </a>
        <div class="collapse" id="blog">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="../../pages/samples/blank-page.html"> Posts </a></li>
            <li class="nav-item"> <a class="nav-link" href="../../pages/samples/blank-page.html"> Categories </a></li>
            <li class="nav-item"> <a class="nav-link" href="../../pages/samples/blank-page.html"> New posts </a></li>
            <li class="nav-item"> <a class="nav-link" href="../../pages/samples/blank-page.html"> Comments </a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="pages/icons/mdi.html">
          <span class="menu-title">Notifications</span>
          <i class="mdi mdi-bell-ring menu-icon"></i>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ad-messages" aria-expanded="false" aria-controls="ad-messages">
          <span class="menu-title">Messages</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-message-processing menu-icon"></i>
        </a>
        <div class="collapse" id="ad-messages">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="../../pages/samples/blank-page.html"> Notify Admin </a></li>
            <li class="nav-item"> <a class="nav-link" href="../../pages/samples/blank-page.html"> Notify Users </a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ad-images" aria-expanded="false" aria-controls="ad-images">
          <span class="menu-title">Images</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-image menu-icon"></i>
        </a>
        <div class="collapse" id="ad-images">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="../../pages/samples/blank-page.html"> Houses </a></li>
            <li class="nav-item"> <a class="nav-link" href="../../pages/samples/blank-page.html"> Items </a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="pages/icons/mdi.html">
          <span class="menu-title">Logout</span>
          <i class="mdi mdi-logout menu-icon"></i>
        </a>
      </li>

    </ul>
  </nav>