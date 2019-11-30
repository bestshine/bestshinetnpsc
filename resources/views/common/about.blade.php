@extends('layouts.app')

@section('title', 'About')

@section('content')

<section class="text-center about-wr">
	
		
	
	<div class="container">
		


		<h2 class="heading">About</h2>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five </p>
		<div class="pad-t-3 mission-vis-wr" id="loading">
				<div class="col-md-6 text-center">
					<img src="{{ asset('images/home/vision.png') }}" class="wow animated fadeInLeft">
					<h2 class="heading" style="font-size: 18px;">Vision</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text </p>
				</div>
				<div class="col-md-6 text-center">
					<img src="{{ asset('images/home/mission.png') }}" class="wow animated fadeInRight">
					<h2 class="heading" style="font-size: 18px;">Mission</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text </p>
				</div>
	    </div>
	</div>
</section>
<section class="value-sec-wr">
	<div class="container">
		<div class="pad-t-3 values-wr">
			<div class="row text-center">
				
				<div class="col-md-6">
					<img src="{{ asset('images/home/about-values.png') }}" class="wow animated rotateIn">
				</div>
				<div class="col-md-6 about-values-cont text-left">
					<h3>Values</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text </p>

					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text </p>
				</div>
			</div>
	    </div>
	</div>
</section>
<div class="pad-t-3"></div>
<div class="pad-t-3"></div>

@endsection