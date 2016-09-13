<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
	<head>
		@include('layouts.header')

		@section('head')
			{{-- option to add custom header in other pages --}}
		@show

	</head>

	<body>

		@include('layouts.menu')

		@yield ('fullslider')

		@yield ('body')

		@yield ('extrabody')

		@include('layouts.homefooter')

		@section('script')
			{{-- option to add custom scripts --}}
		@show
		
	</body>

</html>
