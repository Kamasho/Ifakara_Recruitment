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
        <div id="content" class="">
            {{-- topbar --}}
            {{-- <div class="container-fluid p-2 bg-secondary ">
                <div class="row justify-content-center">
                    <div class="col-10 shadow m-2 bg-secondary">

                    </div>
                </div>
            </div> --}}
            {{-- end topbar --}}
            <div class="container-fluid">
                @include('user.include.topbar')
                @yield('content')
            </div>
        </div>
    </div>

    <script src="style/admin/js/jquery.min.js"></script>
    <script src="style/admin/js/popper.js"></script>
    <script src="style/admin/js/bootstrap.min.js"></script>
    <script src="style/admin/js/main.js"></script>
    <script src="{{asset('style/admin/js/bootstrap-editable.min.js')}}"></script>
</body>

</html>
