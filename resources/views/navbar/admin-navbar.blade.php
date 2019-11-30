
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

      <!-- Master Page -->      
      <li>
        <a href="{{ route('masterIndex') }}">
          <i class="fa fa-gift fa-lg" aria-hidden="true"></i> Master
        </a>
      </li>

      <!-- Feedback -->      
     <!-- <li>
        <a href="{{ route('getFeedbacks') }}">
          <i class="fa fa-comment-o fa-lg" aria-hidden="true"></i> Feedback / Suggestion
        </a>
      </li>-->

      <!-- Report Error -->      
      <!--<li>
        <a href="{{ route('getReportErrors') }}">
          <i class="fa fa-comment-o fa-lg" aria-hidden="true"></i> Report Error
        </a>
      </li>-->

      <!-- Development Team -->      
     <!-- <li>
        <a href="{{ route('getDevelopmentTeams') }}">
          <i class="fa fa-users fa-lg" aria-hidden="true"></i> Development Team
        </a>
      </li>  -->          

      <!-- Users -->
<!--       <li>
        <a href="{{ route('userIndex') }}">
          <i class="fa fa-users fa-lg"></i> Users
        </a>
      </li>  -->     

      <!-- Master -->
<!--       <li data-toggle="collapse" data-target="#master" class="collapsed">
        <a href="#">
          <i class="fa fa-gift fa-lg"></i> Master <span class="arrow"></span>
        </a>
      </li> -->

<!--       <ul class="sub-menu collapse" id="master">
        <li><a href="{{ route('mainModuleIndex') }}">Main Module</a></li>
        <li><a href="{{ route('subModuleIndex') }}">Sub Module</a></li>
        <li><a href="{{ route('examIndex') }}">Exam</a></li>
      </ul>   -->          

      <!-- Import Questions -->
<!--       <li>
        <a href="{{ route('questionIndex') }}">
          <i class="fa fa-cloud-upload fa-lg" aria-hidden="true"></i> Upload Questions
        </a>
      </li>  -->

      <!-- Model Papers -->
<!--       <li>
        <a href="{{ route('sampleQuestionIndex') }}">
          <i class="fa fa-book fa-lg" aria-hidden="true"></i> Model Papers
        </a>
      </li>  -->  

      <!-- Subscription Plan -->
<!--       <li>
        <a href="{{ route('subscribePlanIndex') }}">
          <i class="fa fa-money fa-lg"></i> Subscription Plan 
        </a>
      </li> -->  

      <!-- Setting -->
      <li data-toggle="collapse" data-target="#setting" class="collapsed">
        <a href="#">
          <i class="fa fa-cog fa-lg"></i> Setting <span class="arrow"></span>
        </a>
      </li>

      <ul class="sub-menu collapse" id="setting">
      <!--  <li><a href="{{ route('changePassword') }}"> <i class="fa fa-key fa-lg"></i> Change Password</a></li>-->
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