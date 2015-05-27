@include('layouts.main.includes.head')
@include('layouts.main.includes.navbar')
@include('layouts.main.includes.footer')
<!DOCTYPE html>
<html lang="en">
@yield('head')
<body>
	@yield('navbar')

	@yield('content')

    @yield('footer')

</body>
</html>
