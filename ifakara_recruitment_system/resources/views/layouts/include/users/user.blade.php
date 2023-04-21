<!DOCTYPE html>
<html lang="en">
@include('layouts.include.users.head')
<body class="active">
   
    <div class="wrapper">
        <div class="section">
            <div class="top_navbar">
                <p>Ifakara Dioceses Recruitment Portal</p>
            </div>
            <div class="top_navbar_hamburger">
                <div class="hamburger">
                    <a href="#">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
                <div class="items">
                    <a href="" class="button">home</a>
                    <a href="" class="button">Notifications</a>
                    <a href="" class="button">Vacancies</a>
                    <a href="" class="button">My Applications</a>
                    <a href="" class="button">Register To Job Alerts</a>
                    <a href="" class="button">Change Password</a>
                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();" class="button">Logout</a>
                    <a href="" class="button">Feedback</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                
            </div>
            <div class="main">
                <div class="container-fluid" style="border-style:ridge; margin-right: 15px; padding: 15px">
                    @yield('content')
                </div>
            </div>
             
        </div>
        {{-- sidebar --}}
        @include('layouts.include.users.sidebar')
        {{-- end sidebar --}}  
    </div>
  <script>
       var hamburger = document.querySelector(".hamburger");
	hamburger.addEventListener("click", function(){
		document.querySelector("body").classList.toggle("active");
	})
  </script>
</body>
</html>