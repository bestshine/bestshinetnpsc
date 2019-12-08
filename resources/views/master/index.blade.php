@extends('layouts.app')

@section('title','Master')

@section('content')
<div class="container">
	<div class="page-content-wrap">
	  <div class="row">
	    <div class="col-md-12">
		    <h4 class="custom-heading">Master Page</h4>
		    <!-- breadcrumb -->
  			<ol class="breadcrumb mx-border-top-bottom">
     			<li>
     				<a itemprop="item" href="{{ route('dashboard') }}">
     					<span itemprop="name">Dashboard</span>
     				</a>
     				<meta itemprop="position" content="1">
     			</li>
      		<li>
      			<a itemprop="item" href="">
      				<span itemprop="name">Master</span>
      			</a>
      			<meta itemprop="position" content="2">
      		</li>
        </ol>
        <div class="row">
          <div class="col-md-4">
            <div class="custom-box">
              <a href="{{ route('userCreate') }}">
                <i class="fa fa-users fa-lg fa-3x"></i>
                <p>New Admission</p>
              </a>
            </div>
          </div>
          <!-- Users -->
          <div class="col-md-4">
            <div class="custom-box">
              <a href="{{ route('userIndex') }}">
                <i class="fa fa-users fa-lg fa-3x"></i>
      				  <p>Users</p>
              </a>
            </div>
          </div>


          <!-- Main Module -->
          <div class="col-md-4">
            <div class="custom-box">
              <a href="{{ route('mainModuleIndex') }}">
                <i class="fa fa-cube fa-lg fa-3x"></i>
                <p>Standard</p>
              </a>
            </div>
          </div>

          <!-- Sub Module -->
          <div class="col-md-4">
            <div class="custom-box">
              <a href="{{ route('subModuleIndex') }}">
                <i class="fa fa-cubes fa-lg fa-3x"></i>
                <p>Subject</p>
              </a>
            </div>
          </div>
        </div>

        <br>
        <div class="row">
          <!-- Exams -->
          <div class="col-md-4">
            <div class="custom-box">
              <a href="{{ route('examIndex') }}">
                <i class="fa fa-pencil-square-o fa-lg fa-3x"></i>
                <p>Exam</p>
              </a>
            </div>
          </div>

          <!-- Upload Questions -->
          <div class="col-md-4">
            <div class="custom-box">
              <a href="{{ route('questionIndex') }}">
                <i class="fa fa-cloud-upload fa-lg fa-3x"></i>
                <p>Upload Questions</p>
              </a> 
            </div>
          </div>

          <!-- Model Papers -->
          <div class="col-md-4">
            <div class="custom-box">
              <a href="{{ route('sampleQuestionIndex') }}">
                <i class="fa fa-book fa-lg fa-3x"></i>
                <p>Model Papers</p>
              </a>                     
            </div>
          </div>
        </div>

        <br>
        <div class="row">
          <!-- Subscription Plan-->
          <div class="col-md-4">
            <div class="custom-box">
              <a href="{{ route('subscribePlanIndex') }}">
                <i class="fa fa-money fa-lg fa-3x"></i>
                <p>Subscription Plan</p>
              </a>            
            </div>
          </div>
        </div>
	    </div>
	  </div>
  </div>
</div>
@endsection
