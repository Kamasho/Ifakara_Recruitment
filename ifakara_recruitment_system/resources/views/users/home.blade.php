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
                    <a href="" class="button">Logout</a>
                    <a href="" class="button">Feedback</a>
                </div>
                
            </div>
            <div class="main">
                @include('layouts.include.users.main')
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