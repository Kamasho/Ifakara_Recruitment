<!doctype html>
<html lang="en">
  <head>
  	@include('user.include.head')
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			{{-- sidebar --}}
      @include('user.include.sidebar')
      {{-- end sidebar --}}

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">
        {{-- topbar --}}
        @include('user.include.topbar')
        {{-- end topbar --}}
        <div class="container-fluid">
          @yield('content')
      </div>
      </div>
		</div>

    <script src="style/admin/js/jquery.min.js"></script>
    <script src="style/admin/js/popper.js"></script>
    <script src="style/admin/js/bootstrap.min.js"></script>
    <script src="style/admin/js/main.js"></script>
  </body>
</html>