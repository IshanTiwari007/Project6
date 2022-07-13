@extends('frontend.layouts.master')

@section('title','Imphi || About Us')

@section('main-content')

	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="blog-single.html">About Us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->

	<!-- About Us -->
	<section class="about-us section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-12">
						<div class="about-content">
							@php
								$settings=DB::table('settings')->get();
							@endphp
							<h3>Welcome To <span>Imphi</span></h3>
							<p>@foreach($settings as $data) {{$data->description}} @endforeach</p>
							<div class="button">
								<a href="{{route('blog')}}" class="btn">Our Blog</a>
								<a href="{{route('contact')}}" class="btn primary">Contact Us</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="about-img overlay">
							{{-- <div class="button">
								<a href="https://www.youtube.com/watch?v=nh2aYrGMrIE" class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a>
							</div> --}}
							<img src="@foreach($settings as $data) {{$data->photo}} @endforeach" alt="@foreach($settings as $data) {{$data->photo}} @endforeach">
						</div>
					</div>
				</div>
			</div>
	</section>
	<!-- End About Us -->

	<!-- Header for Services  -->
	<div class="about-us section" style="padding: 10px 0;margin-top: 25px;">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-12">
					<div class="about-content">
						<h3>Our <span> Products and Services</span></h3>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End of header for services -->

	<!--  Services  -->
	<section class="shop-services section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service custom" style="padding: 20px;">
						<a href="https://imphi.net/">
						<h4>&nbsp IMPHI Infotech</h4><br>
						<img src="{{asset('backend/img/imphi_net.png')}}" alt="imphi_net">
						</a>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service custom" style="padding: 20px;">
						<a href="https://imphi.co/">
						<h4>&nbsp IMPHI E-mobility</h4><br>
						<img src="{{asset('backend/img/imphi_co.png')}}" alt="imphi_emobility">
						</a>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service custom" style="padding: 20px;">
						<a href="#">
						<h4>&nbsp IMPHI Studios</h4><br>
						<img src="{{asset('backend/img/imphi_net.png')}}" alt="imphi_Studios">
						</a>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service custom" style="padding: 20px;">
						<a href="#">
						<h4>&nbsp IMPHI Academy</h4><br>
						<img src="{{asset('backend/img/imphi_net.png')}}" alt="imphi_Academy">
						</a>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</div>
	</section>
	<!-- End of Services Area -->

	@include('frontend.layouts.newsletter')

	<!-- Start Shop Services Area -->
	<section class="shop-services section" style="padding: 10px 0;margin-bottom: 10px;">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service" >
						<i class="ti-rocket"></i>
						<h4>Free shiping</h4>
						<p>Orders over $100</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-reload"></i>
						<h4>Free Return</h4>
						<p>Within 30 days returns</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-lock"></i>
						<h4>Sucure Payment</h4>
						<p>100% secure payment</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-tag"></i>
						<h4>Best Peice</h4>
						<p>Guaranteed price</p>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Services Area -->
@endsection
@push('styles')
    <style>
        .custom:hover {
			border:4px solid #448aff;
			border-radius: 5px;
			height: 250px;
			width: 300px;
		}
    </style>

@endpush


