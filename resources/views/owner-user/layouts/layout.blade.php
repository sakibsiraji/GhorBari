<!doctype html>
<html class="fixed dark">
	@include('owner-user.parts.head')
	<body>
    <section class="body">
      @include('owner-user.parts.header')
      <div class="inner-wrapper">
        @include('owner-user.parts.sidebar')
        <section role="main" class="content-body">
          @include('owner-user.parts.header2')
          @yield('content')
				</section>
			</div>
      @include('owner-user.parts.sidebar2')
    </section>
    @include('owner-user.parts.vendor')
  </body>
</html>
