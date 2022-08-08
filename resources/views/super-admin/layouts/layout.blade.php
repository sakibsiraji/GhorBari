<!doctype html>
<html class="fixed dark">
	@include('super-admin.parts.head')
	<body>
    <section class="body">
      @include('super-admin.parts.header')
      <div class="inner-wrapper">
        @include('super-admin.parts.sidebar')
        <section role="main" class="content-body">
          @include('super-admin.parts.header2')
          @yield('content')
				</section>
			</div>
      @include('super-admin.parts.sidebar2')
    </section>
    @include('super-admin.parts.vendor')
  </body>
</html>
