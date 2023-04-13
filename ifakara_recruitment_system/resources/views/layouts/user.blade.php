@include("layouts.include.users.head")
<body>
    <div id="app">
        @include("layouts.include.users.navbar")

        <main class="py-4">
            @yield('content')
        </main>
    </div>
     <!-- Scripts -->
     <script src="{{ asset('style/admin/js/bootstrap.bundle.min.js') }}" defer></script>
</body>
</html>
