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
					
					<li>
						<div class="btn-group" role="group" aria-label="...">
						<a  href ="{{asset('')}}" class="btn btn-blue">Home</a>
						<a  href="" class="btn btn-blue">Project</a>
						<a  href="" class="btn btn-blue">Portfolio </a>	
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
					<h2 class="white typed">{{$project->title}}</h2>
					<span class="typed-cursor">|</span>
				</div>
			</div>
		</div>
	</header>

@endsection


@section('content')
<section id="project" class="section ">
		<div class="container">
		<div class=" col-md-8 col-md-offset-2">
			<div class="row text-center ">

			
				
			</div>
			<div class="row">
				
				<img  class="img-responsive" src="{{ asset('ycomponent/img/project/background.png')}}">
				
				</div>	
			
			<div class="row services">
				{{$project->description}}


			</div>
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



@endsection

@section('footer')
@endsection
@section('script')
<script src="{{asset('ycomponent/js/jquery-1.11.1.min.js')}}"></script>
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

		$(function(){
			setTimeout(function(){
				$('#intro').css('height',250+'px');
			console.log('uu');
		},500);
			
		})
		
	</script>
@endsection