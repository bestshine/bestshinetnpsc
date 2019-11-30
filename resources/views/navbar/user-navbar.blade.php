
@php $exams = getExams(); @endphp

<div class="nav-side-menu">
  <div class="brand">Online Test</div>
  <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>  
  <div class="menu-list">
    <ul id="menu-content" class="menu-content collapse out">
      <!-- Dashboard -->
      <li>
        <a href="/dashboard">
          <i class="fa fa-dashboard fa-lg"></i> Dashboard
        </a>
      </li>   

      <!-- Progress -->
      <li>
        <a href="{{ route('chart') }}">
          <i class="fa fa-bar-chart fa-lg" aria-hidden="true"></i> Progress
        </a>
      </li> 

      <!-- Subscribe Plan -->
<!--       <li>
        <a href="{{ route('showPaymentOptions') }}">
          <i class="fa fa-money fa-lg" aria-hidden="true"></i> Subscribe Plan
        </a>
      </li>  -->

      <!-- Setting -->
      <li data-toggle="collapse" data-target="#setting" class="collapsed">
        <a href="#">
          <i class="fa fa-cog fa-lg"></i> Setting <span class="arrow"></span>
        </a>
      </li>

      <ul class="sub-menu collapse" id="setting">
        <li><a href="{{ route('changePassword') }}"> <i class="fa fa-key fa-lg"></i> Change Password</a></li>
        <li>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                <i class="fa fa-sign-out fa-lg"></i> Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>        
      </ul>            
    </ul>
  </div>
</div>  