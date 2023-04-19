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
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <h1>Content Here</h1>
                        </div>
                    </div>
                </div>
            </div>
             
        </div>
        <div class="sidebar">
            <div class="profile">
                <img src="https://1.bp.blogspot.com/-vhmWFWO2r8U/YLjr2A57toI/AAAAAAAACO4/0GBonlEZPmAiQW4uvkCTm5LvlJVd_-l_wCNcBGAsYHQ/s16000/team-1-2.jpg" alt="profile_picture">
                <h3>{{ Auth::user()->name }}</h3>
            </div>
            <ul>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">Personal Details</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-desktop"></i></span>
                        <span class="item">Academic Qualifications</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-user-friends"></i></span>
                        <span class="item">Professional Qualifications</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                        <span class="item">Working Experience</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-database"></i></span>
                        <span class="item">Traning And Workshop</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-chart-line"></i></span>
                        <span class="item">Online Course Attatended</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-user-shield"></i></span>
                        <span class="item">Computer Literancy</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-cog"></i></span>
                        <span class="item">Referees</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-cog"></i></span>
                        <span class="item">Other Attachiment</span>
                    </a>
                </li>
            </ul>
        </div>   
    </div>
  <script>
       var hamburger = document.querySelector(".hamburger");
	hamburger.addEventListener("click", function(){
		document.querySelector("body").classList.toggle("active");
	})
  </script>
</body>
</html>