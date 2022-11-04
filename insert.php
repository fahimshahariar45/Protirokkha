<?php 
    $servername = "localhost";
    $username = "root"; # MySQL user
    $password = ""; # MySQL Server root password
    $dbname='login'; # Database name
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        # Display an error mesage if the connection fails
        die("Connection failed: " . $conn->connect_error);
    }


    if(empty($_POST['nid']) && empty($_POST['dicease']) && empty($_POST['mobile']) && empty($_POST['center']) && empty($_POST['does']) && empty($_POST['birth'])){
        // If the fields are empty, display a message to the user
        echo "Please fill in the fields";
    // Process the form data if the input fields are not empty
    }else{
        $nid= $_POST['nid'];
        $dicease= $_POST['dicease'];
        $mobile=$_POST['mobile'];
        $center=$_POST['center'];
        $does=$_POST['does'];
        $birth=$_POST['birth'];

        $query = "UPDATE users SET nid='$nid',dicease='$dicease',center='$center',does='$does',birth='$birth' WHERE mobile='$mobile' ";
        if (mysqli_query($conn, $query)) {
           
        } else {
             echo "Error inserting record: " . $conn->error;
        }
    }
?>


<!DOCTYPE html>
<html>
<head>
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}

.button1 {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>
</head>
<body>



<a href="tikacard.php"><button class="button button1">ডাউনলোড টিকাকার্ড</button></a>

</body>
</html>