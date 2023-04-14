@include("layouts.include.users.head")
<body>
    <div id="app">
        <div class="wrapper">
            @include("layouts.include.users.navbar")

            <div class="section">
                <div class="top_navbar">
                    <div class="hamburger">
                        <a href="#">
                            <i class="fas fa-bars"></i>
                        </a>
                    </div>
                </div>
    
            </div>
            <div class="sidebar">
                <!--profile image & text-->
                <div class="profile">
                    <img src="https://1.bp.blogspot.com/-vhmWFWO2r8U/YLjr2A57toI/AAAAAAAACO4/0GBonlEZPmAiQW4uvkCTm5LvlJVd_-l_wCNcBGAsYHQ/s16000/team-1-2.jpg" alt="profile_picture">
                </div>
                 <!--menu item-->
             </div>
        <main class="py-4">
            @yield('content')
        </main>
        </div>
        
    </div>
     <!-- Scripts -->
     <script src="{{ asset('style/admin/js/bootstrap.bundle.min.js') }}" defer></script>
     <script src="{{ asset('style/admin/js/custom.js') }}" defer></script>
</body>
</html>
