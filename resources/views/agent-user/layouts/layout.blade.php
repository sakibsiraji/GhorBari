<!doctype html>
<html class="fixed dark">
	@include('agent-user.parts.head')
	<body>
    <section class="body">
      @include('agent-user.parts.header')
      <div class="inner-wrapper">
        @include('agent-user.parts.sidebar')
        <section role="main" class="content-body">
          @include('agent-user.parts.header2')
          @yield('content')
				</section>
			</div>
      @include('agent-user.parts.sidebar2')
    </section>
    @include('agent-user.parts.vendor')
  </body>
</html>
