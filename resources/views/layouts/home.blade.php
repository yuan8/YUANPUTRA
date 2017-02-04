<!DOCTYPE html>
<html>
<head>

@include('headers.default')
</head>
<body>
<div class="preloader">
		<img src="{{asset('ycomponent/img/loader.gif')}}" alt="Preloader image">
 </div>
@yield('nav')


@yield('header')

@yield('content')

@yield('footer')

</body>

@yield('script')

</html>