<!doctype html>
<html class="fixed dark">
	@include('user.parts.head')
	<body>
    <section class="body">
      @include('user.parts.header')
      <div class="inner-wrapper">
        @include('user.parts.sidebar')
        <section role="main" class="content-body">
          @include('user.parts.header2')
          @yield('content')
				</section>
			</div>
      @include('user.parts.sidebar2')
    </section>
    @include('user.parts.vendor')
  </body>
</html>
