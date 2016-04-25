<!DOCTYPE html>
<html lang="en">
	<head>
	    @include('header.head')
	</head>
	<body>
		<header id="header" class="">
		    @include('header.header')
		</header>
		<section>
		    @include('errors.errmsg')
		    @yield('body')
		</section>
		@include('footer.footer')
		@include('footer.foot_script')
	</body>
</html>
