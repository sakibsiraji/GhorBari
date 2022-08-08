<!doctype html>
<html class="fixed dark">
	@include('admin.parts.head')
	<body>
    <section class="body">
      @include('admin.parts.header')
      <div class="inner-wrapper">
        @include('admin.parts.sidebar')
        <section role="main" class="content-body">
          @include('admin.parts.header2')
          @yield('content')
				</section>
			</div>
      @include('admin.parts.sidebar2')
    </section>
    @include('admin.parts.vendor')
  </body>
</html>
