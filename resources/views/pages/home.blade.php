@extends('layouts.home')


@section('nav')
<nav class="navbar">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><img src="{{asset('ycomponent/img/logo.png')}}" data-active-url="{{asset('ycomponent/img/logo-active.png')}}" alt=""></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right main-nav">
					<li><a href="#intro">Home</a></li>
					<li><a href="#contact">Contact</a></li>
					<li><a href="#services">Services</a></li>

					<li><a href="#team">Team</a></li>
					<li><a href="#pricing">Pricing</a></li>
					<li>
						<div class="btn-group" role="group" aria-label="...">
						<a  hrfe="" class="btn btn-blue">Project</a>
						<a  hrfe="" class="btn btn-blue">Portfolio </a>
						
						</div>

					</li>

				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>

@endsection

@section('header')

		<header id="intro">
		<div class="container">
			<div class="table">
				<div class="header-text">
					<div class="row">
						
						<div class="col-md-6 text-center">
						<div class="form-chat">
							<div class="col-md-12 body-chat" scrolle>
								
							</div>
							<div class="form-group">
								<div class="input-group">
								
								<div class="input-group-btn">
								   <button type="button" id="button-striker" class="btn btn-clear">
								   		<span class="glyphicon 	glyphicon-ice-lolly-tasted"></span>
								   </button>

								 </div>

								  <input type="text" class="form-control" placeholder="Type something" aria-label="...">
								 
								  <div class="input-group-btn"> 
								 	<button type="submit" class="btn btn-blue">
								 	 	<span class="glyphicon glyphicon-send"></span>
								 	</button>
								    
								  </div>
								</div>
							</div>
						
							<div id="login-chat" class="col-md-12">
								<div class="col-md-12 login-box" >
									<div class="form-group">
										<h3 class=" light text-center">
											Cobain Kinan Messager !
										</h3>
										<input type="text" class="form-control" placeholder="Typed you name" name="">

									</div>
									<button class="btn btn-blue" id="send-name">Send</button>

								</div>
							</div>
						</div>
						</div>
						<div class="col-md-6 text-center">
							<h3 class="light white ">Saya Lagi Bikin</h3>
							<h2 class="white typed">Kinan Messager Project</h2>
							<span class="typed-cursor">|</span>
							<div class="row kinan-mes-ket">
							<h4 class="light">Fitur</h4>
							<hr>
							<div class="col-md-4">
								<p class="light">Kirim Pesan</p>
								<span class="glyphicon glyphicon-envelope"></span>
							</div>

							<div class="col-md-4">
								<p class="light">Attachment File</p>
								<span class="glyphicon glyphicon-paperclip"></span>
							</div>

							<div class="col-md-4">
								<p class="light">Pangilan Gratis</p>
								<span class="glyphicon glyphicon-earphone"></span>
							</div>
							<div class="col-md-12 light text-capitalize" style="margin-top: 15px; margin-bottom: 15px; ">
								Dan fitur fitur rahasia yang akan membantu perkerjaan anda sehari hari 
							</div>
							<div class="form-group ">
							<button class="btn btn-sm btn-blue">Detail</button>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

@endsection


@section('content')
<section id="project-else" class="section ">
		<div class="container">
			<div class="row text-center ">
				<h2 class="light">Project Lain</h2>
				
			</div>
			<div class="row services">
				@foreach($projects as $project)

				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="{{asset('ycomponent/img/project/background.png')}}" alt="" class="thumnail">
						</div>
						<h4 class="heading">{{ $project->title}}</h4>
						
						<p class="description"><a href="./project/{{$project->id}}" class="btn btn-clear"> Detile</a></p>
					</div>
				</div>

				@endforeach

			</div>
		</div>
		<!-- <div class="cut cut-bottom"></div> -->
	</section>

<section id="contact" class="section section-padded blue-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<img src="" class="img-circle">
					<h5 class="light text-center"> Nama saya Yuan, saya berdomisili di Jakarta Selatan Indonesia, berkerja sebagai programer khususnya di bidang Website. </h5>
				

					<div class="col-md-4 light input-group contact-button">
						<div class="col-md-12">
						<div class="col-md-12 bg-grey">
						<div class="input-group-btn">
							<button class="btn btn-clear"><span class="glyphicon glyphicon-send"></span></button>
						</div>
						<div class="input-group-btn">
							<a  class="btn " href="mailto:yuanputra9@gmail.com">
							Email : yuanputra9@gmail.com
							</a>
						</div>
						</div>
						</div>
					</div>

						<div class="col-md-4 light input-group contact-button">
						<div class="col-md-12">
						<div class="col-md-12 bg-grey">
						<div class="input-group-btn">
							<button class="btn btn-clear"><span class="glyphicon glyphicon-send"></span></button>
						</div>
						<div class="input-group-btn">
							<a  class="btn " href="mailto:yuanputra9@gmail.com">
							Whatapps : 082257120183 
							</a>
						</div>
						</div>
						</div>
					</div>

						<div class="col-md-4 light input-group contact-button">
						<div class="col-md-12">
						<div class="col-md-12 bg-grey">
						<div class="input-group-btn">
							<button class="btn btn-clear"><span class="glyphicon glyphicon-send"></span></button>
						</div>
						<div class="input-group-btn">
							<a  class="btn " href="mailto:yuanputra9@gmail.com">
							Line : @yuan.putra
							</a>
						</div>
						</div>
						</div>
					</div>



				</div>
			</div>
		</div>
</section>



<section id="services" class="section section-padded">
		<div class="container">
			<div class="row text-center title">
				<h2>Services</h2>
				<h4 class="light muted">Achieve the best results with our wide variety of training options!</h4>
			</div>
			<div class="row services">
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="{{asset('ycomponent/img/icons/heart-blue.png')}}" alt="" class="icon">
						</div>
						<h4 class="heading">Cardio Training</h4>
						<p class="description">A elementum ligula lacus ac quam ultrices a scelerisque praesent vel suspendisse scelerisque a aenean hac montes.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="{{asset('ycomponent/img/icons/guru-blue.png')}}" alt="" class="icon">
						</div>
						<h4 class="heading">Yoga Pilates</h4>
						<p class="description">A elementum ligula lacus ac quam ultrices a scelerisque praesent vel suspendisse scelerisque a aenean hac montes.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="{{asset('ycomponent/img/icons/weight-blue.png')}}" alt="" class="icon">
						</div>
						<h4 class="heading">Power Training</h4>
						<p class="description">A elementum ligula lacus ac quam ultrices a scelerisque praesent vel suspendisse scelerisque a aenean hac montes.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="cut cut-bottom"></div>
	</section>

@endsection

@section('footer')
<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-6 text-center-mobile">
					<h3 class="white">Reserve a Free Trial Class!</h3>
					<h5 class="light regular light-white">Shape your body and improve your health.</h5>
					<a href="#" class="btn btn-blue ripple trial-button">Start Free Trial</a>
				</div>
				<div class="col-sm-6 text-center-mobile">
					<h3 class="white">Opening Hours <span class="open-blink"></span></h3>
					<div class="row opening-hours">
						<div class="col-sm-6 text-center-mobile">
							<h5 class="light-white light">Mon - Fri</h5>
							<h3 class="regular white">9:00 - 22:00</h3>
						</div>
						<div class="col-sm-6 text-center-mobile">
							<h5 class="light-white light">Sat - Sun</h5>
							<h3 class="regular white">10:00 - 18:00</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row bottom-footer text-center-mobile">
				<div class="col-sm-8">
					<p>&copy; 2015 All Rights Reserved. Powered by <a href="http://www.phir.co/">PHIr</a> exclusively for <a href="http://tympanus.net/codrops/">Codrops</a></p>
				</div>
				<div class="col-sm-4 text-right text-center-mobile">
					<ul class="social-footer">
						<li><a href="http://www.facebook.com/pages/Codrops/159107397912"><i class="fa fa-facebook"></i></a></li>
						<li><a href="http://www.twitter.com/codrops"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://plus.google.com/101095823814290637419"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- Holder for mobile navigation -->
	<div class="mobile-nav">
		<ul>
		</ul>
		<a href="#" class="close-link"><i class="arrow_up"></i></a>
	</div>
@endsection
@section('script')
<script src="{{asset('ycomponent/js/jquery-1.11.1.min.js')}}"></script>
<script src="//{{ Request::getHost() }}:6001/socket.io/socket.io.js"></script>
	<script src="{{asset('ycomponent/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('ycomponent/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('ycomponent/js/wow.min.js')}}"></script>
	<script src="{{asset('ycomponent/js/typewriter.js')}}"></script>
	<script src="{{asset('ycomponent/js/jquery.onepagenav.js')}}"></script>
	<script src="{{asset('ycomponent/js/main.js')}}"></script>

	<script type="text/javascript">
		
		$('#button-striker').click(function(){



		});
		$('#send-name').click(function(){

			$('#login-chat').css('display','none');


		});

		import Echo from "laravel-echo"

window.Echo = new Echo({
    broadcaster: 'socket.io',
    host: window.location.hostname + ':6001'
});

	</script>
@endsection