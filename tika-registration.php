<?php
    session_start();
    if (!isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: index.php");
        die();
    }

    include 'config.php';


?>
<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/form.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>




<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">    
        <?php 
            $query = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");

            if (mysqli_num_rows($query) > 0) {
                $row = mysqli_fetch_assoc($query);
        
                echo $row['name'];
            }
      ?>
      </span>
   
    </div>
      <ul class="nav-links">
        <li>
          <a href="welcome.php">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="tika.php" class="active">
            <i class='bx bx-box' ></i>
            <span class="links_name">টিকা কার্ড</span>
          </a>
        </li>

        <li>
          <a href="corona-bd.php" >
            <i class='bx bx-box' ></i>
            <span class="links_name">বর্তমান পরিস্থিতি</span>
          </a>
        </li>

        <li>
          <a href="corona-world.php" >
            <i class='bx bx-box' ></i>
            <span class="links_name">বর্তমান পরিস্থিতি(বিশ্ব)</span>
          </a>
        </li>
        
        <li class="log_out">
          <a href="logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>



  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name">
        <?php 
            $query = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");

            if (mysqli_num_rows($query) > 0) {
                $row = mysqli_fetch_assoc($query);
        
                echo $row['name'];
            }
      ?>
        </span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <!-- Tika Form -->
    <div class="home-content">
      
    <div class="overview-boxes">

    <form method="post" action="insert.php">
    Mobile<input type="text" name="mobile"><br><br/>
        NID: <input type="text" name="nid"><br><br/>
        Date Of Birth: <input type="text" name="birth"><br><br/>

        Dicease: <select name="dicease" value="">
          <option value="Covid19">Covid 19</option>
          <option value="Others">Others</option>
          </select><br/><br/>

          Center: <select name="center" value="">
          <option value="Dhaka Medical Collage">Dhaka Medical Collage</option>
          <option value="Khulna Medical Collage">Khulna Medical Collage</option>
          </select>

          Dose No: <select name="does" value="">
          <option value="First does">First dose</option>
          <option value="Second does">Second dose</option>
          </select>


        <br/><br>
        <input type="submit" name="save" value="submit" >
    </form>



       </div>
        
    
    </div>

    
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6243f85a2abe5b455fc25406/1fvco48m6';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>

