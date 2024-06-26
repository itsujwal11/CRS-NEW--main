<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="view_status.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Admin Dashboard Panel</title>
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
               <img src="images/logo.png" alt="">
            </div>

            <span class="logo_name">CRS</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="dashboard.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dashboard</span>
                </a></li>
                <li><a href="report_form.php">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Report Crime</span>
                </a></li>
                <li><a href="view_status.php">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">View Status</span>
                </a></li>
              
                <li><a href="contact.php">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Contact us</span>
                </a></li>
       
            </ul>
            
            <ul class="logout-mode">
                <li><a href="logout.php">
                    <i class="uil uil-signout"></i>
                    <span class="logout">Logout</span>
                </a></li>

             

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

      
            
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Status </span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class="fa-sharp fa-light fa-user"></i>
                        <span class="text">Total Case Reported</span>
                        <span class="number">570</span>
                    </div>
                    <div class="box box2">
                      
                        <span class="text">Total Cases Solved</span>
                        <span class="number">209</span>
                    </div>
                    <div class="box box3">
                       
                        <span class="text">Total Pending Cases</span>
                        <span class="number">358</span>
                    </div>
                </div>
            </div>

            <div class="view-status">
    <h2>View Status</h2>
    <div class="case-details">
        <p><strong>Case ID:</strong> ABC123456</p>
        <p><strong>Status:</strong> Under Investigation</p>
        <p><strong>Last Updated:</strong> March 21, 2024, 10:30 AM</p>
        <p><strong>Assigned Officer:</strong> Officer Smith</p>
    </div>
    <div class="status-updates">
        <h3>Status Updates</h3>
        <ul>
            <li>
                <p><strong>March 21, 2024, 10:30 AM:</strong> Case reported.</p>
            </li>
            <li>
                <p><strong>March 22, 2024, 2:00 PM:</strong> Case assigned to Officer Smith for investigation.</p>
            </li>
            <li>
                <p><strong>March 24, 2024, 11:45 AM:</strong> Initial evidence collected.</p>
            </li>
            <!-- Additional status updates -->
        </ul>
    </div>
    <div class="additional-details">
        <h3>Additional Details</h3>
        <p>Additional information or notes related to the case...</p>
    </div>
    <div class="action-options">
        <h3>Action Options</h3>
        <button>Contact Support</button>
        <button>Submit Additional Information</button>
        <!-- Additional actionable options -->
    </div>
</div>


              
               
               
             
            </div>
        </div>
    </section>

    <script>
        const body = document.querySelector("body"),
      modeToggle = body.querySelector(".mode-toggle");
      sidebar = body.querySelector("nav");
      sidebarToggle = body.querySelector(".sidebar-toggle");



sidebarToggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
    if(sidebar.classList.contains("close")){
        localStorage.setItem("status", "close");
    }else{
        localStorage.setItem("status", "open");
    }
})

    </script>
   
</body>
</html>