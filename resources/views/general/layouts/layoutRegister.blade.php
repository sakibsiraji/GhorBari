<!DOCTYPE html>
<html>
	@include('general.parts.headRegister')
	<body class="loading-overlay-showing" data-loading-overlay data-plugin-options="{'hideDelay': 500}">
		<div class="loading-overlay">
			<div class="bounce-loader">
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
		</div>

		<div class="body">
      <div role="main" class="main">
			     @include('general.parts.header')
           @yield('content')
           @include('general.parts.footer')
			</div>
		</div>
    @include('general.parts.vendor')
	</body>
</html>
