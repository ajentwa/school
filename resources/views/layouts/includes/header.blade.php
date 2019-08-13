    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo font-weight-normal text-left text-uppercase" href="{{\Illuminate\Support\Facades\URL::to('/dashboard')}}">Our School</a>
        <!-- Navbar Right Menu-->
        <ul class="app-nav ">
          <!-- User Menu-->
        <li class="app-search mr-auto text-white px-3">
            <h4 class="font-weight-normal font-italic"><strong>Logged in as : </strong> {{ Auth::user()->occupation}}</h4>
        </li>
        <li class="dropdown">
          <a style="text-decoration:none;" class="app-nav__item dropdown-toggle" href="#" data-toggle="dropdown" aria-label="Open Profile Menu">
            <i class="fa fa-user fa-lg"></i>  {{Auth::user()->name }} 
          </a>
            <ul class="dropdown-menu settings-menu dropdown-menu-right">
              @if(!Auth::guest())
              @if(Auth::user()->role_id == 1)
              <li><a class="dropdown-item h6" href="{{\Illuminate\Support\Facades\URL::to('/setting')}}"><i class="fa fa-cog fa-lg text-success"></i> Settings</a></li>
              @endif
              @endif
              @if(!Auth::guest())
              @if(Auth::user()->role_id == 2)
              <li><a class="dropdown-item h6" href="{{\Illuminate\Support\Facades\URL::to('/profile/show/'.Auth::user()->id)}}"><i class="fa fa-user fa-lg text-success"></i> Profile</a></li>
              @endif
              @endif
              <li><a class="dropdown-item h6" href="{{\Illuminate\Support\Facades\URL::to('logout') }}"><i class="fa fa-sign-out fa-lg text-success"></i> Logout</a></li>
            </ul>
          </li>
        </ul>
    </header>