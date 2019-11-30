
<nav class="navbar navbar-default custom-nav">
  <div class="container-fluid custom-cnt">
    <ul class="nav navbar-nav">
     <!-- <li @if(Route::currentRouteName() == "getSubModuleOverview") class="active" @endif>
        <a href="{{ route('getSubModuleOverview',[$main_module_slug,$sub_module_slug]) }}">Overview</a>
      </li>

      <li @if(Route::currentRouteName() == "getSubModuleEligibility") class="active" @endif>
        <a href="{{ route('getSubModuleEligibility',[$main_module_slug,$sub_module_slug]) }}">Eligibility</a>
      </li>

      <li @if(Route::currentRouteName() == "getSubModuleSyllabus") class="active" @endif>
        <a href="{{ route('getSubModuleSyllabus',[$main_module_slug,$sub_module_slug]) }}">Syllabus</a>
      </li>

      <li @if(Route::currentRouteName() == "getSubModuleExamPattern") class="active" @endif>
        <a href="{{ route('getSubModuleExamPattern',[$main_module_slug,$sub_module_slug]) }}">Exam Pattern</a>
      </li>

      <li @if(Route::currentRouteName() == "getSubModuleHowToApply") class="active" @endif>
        <a href="{{ route('getSubModuleHowToApply',[$main_module_slug,$sub_module_slug]) }}">How to Apply</a>
      </li>

      <li @if(Route::currentRouteName() == "getSubModuleDiscussion") class="active" @endif>
        <a href="{{ route('getSubModuleDiscussion',[$main_module_slug,$sub_module_slug]) }}">Discussion</a>
      </li>

      <li @if(Route::currentRouteName() == "getSubModuleStudyMaterial") class="active" @endif>
        <a href="{{ route('getSubModuleStudyMaterial',[$main_module_slug,$sub_module_slug]) }}">Study Material</a>
      </li>-->

      <li @if((Route::currentRouteName() == "getSubModuleModelPaper") || (Route::currentRouteName() == "getSubModuleOnlineTest") || (Route::currentRouteName() == "getSubModuleResult")) class="dropdown active" @else class="dropdown" @endif>
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Test
        <span class="caret"></span></a>
        <ul class="dropdown-menu submodule-details">
          <li @if(Route::currentRouteName() == "getSubModuleModelPaper") class="active" @endif>
            <a href="{{ route('getSubModuleModelPaper',[$main_module_slug,$sub_module_slug]) }}">Model Papers</a>
          </li>

          <li @if(Route::currentRouteName() == "getSubModuleOnlineTest") class="active" @endif>
            <a href="{{ route('getSubModuleOnlineTest',[$main_module_slug,$sub_module_slug]) }}">Online Test</a>
          </li>

          <li @if(Route::currentRouteName() == "getSubModuleResult") class="active" @endif>
            <a href="{{ route('getSubModuleResult',[$main_module_slug,$sub_module_slug]) }}">Results</a>
          </li>
        </ul>
      </li>      
    </ul>
  </div>
</nav>
