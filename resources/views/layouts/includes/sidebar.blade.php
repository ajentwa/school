    <!-- Sidebar menu-->
    <aside class="app-sidebar">
        <div class="app-sidebar__user"><img style="height:50px;width:50px" class="app-sidebar__user-avatar" src="/storage/cover_image/{{Auth::user()->cover_image}}" alt="User Image">
          <div>
            <p class="app-sidebar__user-designation">Welcome,</p>
            <p class="app-sidebar__user-name">{{Auth::user()->name }}</p>
          </div>
        </div>
        {{-- @if (\Illuminate\Support\Facades\Auth::user()->hasRole('Administrator')) --}}
        <ul class="app-menu">
          <li><a class="app-menu__item" href="{{\Illuminate\Support\Facades\URL::to('/dashboard')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
          @if(!Auth::guest())
          @if(Auth::user()->role_id == 1)
          <li><a class="app-menu__item" href="{{\Illuminate\Support\Facades\URL::to('/administrator')}}"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Administrators</span></a></li>
          <li><a class="app-menu__item" href="{{\Illuminate\Support\Facades\URL::to('/officer')}}"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Top Officers</span></a></li>
          @endif
          @endif
          <li><a class="app-menu__item" href="{{\Illuminate\Support\Facades\URL::to('/teacher')}}"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Teachers</span></a></li>
          <li><a class="app-menu__item" href="{{\Illuminate\Support\Facades\URL::to('/student')}}"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Students</span></a></li>
          <li><a class="app-menu__item" href="{{\Illuminate\Support\Facades\URL::to('/parent')}}"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Parents</span></a></li>
          <li><a class="app-menu__item" href="{{\Illuminate\Support\Facades\URL::to('/worker')}}"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">School Workers</span></a></li>
          <li><a class="app-menu__item" href="{{\Illuminate\Support\Facades\URL::to('/feepayment')}}"><i class="app-menu__icon fa fa-money"></i><span class="app-menu__label">Fees Payment</span></a></li>
          <li><a class="app-menu__item" href="{{\Illuminate\Support\Facades\URL::to('/subject')}}"><i class="app-menu__icon fa fa-book"></i><span class="app-menu__label">Subjects</span></a></li>
          <li><a class="app-menu__item" href="{{\Illuminate\Support\Facades\URL::to('/class')}}"><i class="app-menu__icon fa fa-university"></i><span class="app-menu__label">Classes</span></a></li>
        </ul>
        {{-- @endif --}}
  {{-- 
       @if(\Illuminate\Support\Facades\Auth::user()->hasRole('Officer') || \Illuminate\Support\Facades\Auth::user()->hasRole('Administrator'))
        <ul class="app-menu">
          <li><a class="app-menu__item" href="{{\Illuminate\Support\Facades\URL::to('/dashboard')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
          <li><a class="app-menu__item" href="{{\Illuminate\Support\Facades\URL::to('/administrator')}}"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Administrators</span></a></li>
          <li><a class="app-menu__item" href="{{\Illuminate\Support\Facades\URL::to('/officer')}}"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Officers</span></a></li>
          <li><a class="app-menu__item" href="{{\Illuminate\Support\Facades\URL::to('/student')}}"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Students</span></a></li>
          <li><a class="app-menu__item" href="{{\Illuminate\Support\Facades\URL::to('/teacher')}}"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Teachers</span></a></li>
          <li><a class="app-menu__item" href="{{\Illuminate\Support\Facades\URL::to('/parent')}}"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Parents</span></a></li>
          <li><a class="app-menu__item" href="{{\Illuminate\Support\Facades\URL::to('/worker')}}"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Employees</span></a></li>
          <li><a class="app-menu__item" href="{{\Illuminate\Support\Facades\URL::to('/subject')}}"><i class="app-menu__icon fa fa-book"></i><span class="app-menu__label">Subjects</span></a></li>
          <li><a class="app-menu__item" href="{{\Illuminate\Support\Facades\URL::to('/class')}}"><i class="app-menu__icon fa fa-database"></i><span class="app-menu__label">Classes</span></a></li>
          <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-money"></i><span class="app-menu__label">Fees Payment</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
              <li><a class="treeview-item" href="{{\Illuminate\Support\Facades\URL::to('/tuitionfee')}}"><i class="icon fa fa-circle-o"></i> Tuition Fee</a></li>
              <li><a class="treeview-item" href="{{\Illuminate\Support\Facades\URL::to('/tuitionfee')}}"><i class="icon fa fa-circle-o"></i> Remedial Fee</a></li>
              <li><a class="treeview-item" href="{{\Illuminate\Support\Facades\URL::to('/tuitionfee')}}"><i class="icon fa fa-circle-o"></i> Tea and lunch Fee</a></li>
              <li><a class="treeview-item" href="{{\Illuminate\Support\Facades\URL::to('/tuitionfee')}}"><i class="icon fa fa-circle-o"></i> Uniform Fee</a></li>
              <li><a class="treeview-item" href="{{\Illuminate\Support\Facades\URL::to('/tuitionfee')}}"><i class="icon fa fa-circle-o"></i> Malamba Fee</a></li>
            </ul>
          </li>
        </ul>
        @endif  --}}
  
        {{-- @if(\Illuminate\Support\Facades\Auth::user()->hasRole('Teacher') || \Illuminate\Support\Facades\Auth::user()->hasRole('Administrator'))
        <ul class="app-menu">
          <li><a class="app-menu__item" href="{{\Illuminate\Support\Facades\URL::to('/dashboard')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
          <li><a class="app-menu__item" href="{{\Illuminate\Support\Facades\URL::to('/student')}}"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Students</span></a></li>
          <li><a class="app-menu__item" href="{{\Illuminate\Support\Facades\URL::to('/teacher')}}"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Teachers</span></a></li>
          <li><a class="app-menu__item" href="{{\Illuminate\Support\Facades\URL::to('/parent')}}"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Parents</span></a></li>
          <li><a class="app-menu__item" href="{{\Illuminate\Support\Facades\URL::to('/worker')}}"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Employees</span></a></li>
          <li><a class="app-menu__item" href="{{\Illuminate\Support\Facades\URL::to('/subject')}}"><i class="app-menu__icon fa fa-book"></i><span class="app-menu__label">Subjects</span></a></li>
          <li><a class="app-menu__item" href="{{\Illuminate\Support\Facades\URL::to('/class')}}"><i class="app-menu__icon fa fa-database"></i><span class="app-menu__label">Classes</span></a></li>
          <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-money"></i><span class="app-menu__label">Fees Payment</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
              <li><a class="treeview-item" href="{{\Illuminate\Support\Facades\URL::to('/tuitionfee')}}"><i class="icon fa fa-circle-o"></i> Tuition Fee</a></li>
              <li><a class="treeview-item" href="{{\Illuminate\Support\Facades\URL::to('/tuitionfee')}}"><i class="icon fa fa-circle-o"></i> Remedial Fee</a></li>
              <li><a class="treeview-item" href="{{\Illuminate\Support\Facades\URL::to('/tuitionfee')}}"><i class="icon fa fa-circle-o"></i> Tea and lunch Fee</a></li>
              <li><a class="treeview-item" href="{{\Illuminate\Support\Facades\URL::to('/tuitionfee')}}"><i class="icon fa fa-circle-o"></i> Uniform Fee</a></li>
              <li><a class="treeview-item" href="{{\Illuminate\Support\Facades\URL::to('/tuitionfee')}}"><i class="icon fa fa-circle-o"></i> Malamba Fee</a></li>
            </ul>
          </li>
        </ul>
        @endif --}}
  
      </aside>