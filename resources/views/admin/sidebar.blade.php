      <!-- Sidebar -->
      <!-- Sidebar -->
      <div id="sidebar-wrapper">

          <img class="sidebar-nav" src="{{ config('app.asset_url') }}/img/logo.png">
          <ul id="sidebar_menu" class="sidebar-nav">
              <li class="sidebar-brand"><a id="menu-toggle" href="#">Menu<span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a></li>
          </ul>
          <ul class="sidebar-nav" id="sidebar">
              <li><a href="{{url('/admin/home')}}" target="_self">Home</span></a></li>
              <li><a href="{{url('view/users')}}" target="_self">Users</span></a></li>
              <li><a href="{{url('products')}}" target="_self">Products</span></a></li>
              <li><a href="{{url('/all_messages')}}" target="_self">User Messages</span></a></li>
          </ul>
          <ul class="sidebar-nav logoutAdmin" id="sidebar">
              <li>
                  <a class="logOut" href="{{ url('admin/logout') }}">
                      {{ __('Logout') }}
                  </a>

              </li>
          </ul>
      </div>
