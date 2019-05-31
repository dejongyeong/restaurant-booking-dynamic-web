<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Join Assam House Restaurant</title>
    <meta charset='utf-8'>
    <meta name='description' content='Welcome to Assam House Restaurant located in Ipoh, Perak, Malaysia. Simple the best asian cuisine in town.'>
    <meta name='keywords' content='assamhouse,asian restaurant,asian cuisine,ipoh restaurant,assamhouse ipoh,assam house restaurant,join us, join'>
    <meta name='author' content='De Jong Yeong'>
    <meta name='copyright' content='&copy; December 2016'>
    <meta name='robots' content='all'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    
    <link href='img/assamhouse-favicon-logo.ico' rel="icon"/> 
    <link href='img/assamhouse-favicon-logo.ico' rel="shortcut icon"/>
    
    <link rel="stylesheet" href="masterstyle.css" type="text/css">
    
    <!-- All information taken from http://assamhouse.com.my/  -->
    
    <!-- PHP -->
    <?php   
       
    if(isset($_POST['joinus']))
    {
      $surname = $_POST['surname'];
      $forename = $_POST['forename'];
      $email = $_POST['email'];
      $telno = $_POST['telno']; 
      $subtitle = $_POST['subtitle'];
    }
    
    if(isset($_POST['searchEmail']))
    {
      $updEmail = $_POST['searchEmail'];
    }
    
    if(isset($_POST['unsubscribe']))
    {
      $delemail = $_POST['delemail'];
    }
    ?>
    
  </head>
  <body> 
  <!-- Main Container -->
  <div class='main'>
  <!-- Logo Container -->
  <!-- Image from: https://www.google.ie/search?q=facebook+logo&biw=1280&bih=732&source=lnms&tbm=isch&sa=X&ved=0ahUKEwiQoMfDq4bQAhVCC8AKHWm-AxQQ_AUIBigB#tbm=isch&q=assam+house+restaurant+ipoh+logo&imgrc=3hleY6lEVoZ-uM%3A -->
  <!-- Image from: http://www.hdcglobal.com/publisher/cdh_malaysia_halal_logo -->
  <div class='logoCon'>
  
  <div class='open-hour mobile'>
  
  <h3>Business Hours:</h3>
  <p>Open Daily<br>Monday - Sunday: 11.30am-3.00pm &amp; 6.00pm-10.00pm</p>
  <img src='img/halal.png' alt='Halal Logo' width='30' height='30'>
  </div>
  
  <div class='logo'>
  <a href='index.html'><img src="img/assamhouse-logo.png" alt="Assam House Restaurant Logo" width='300' height='143'></a>
  </div>
  </div> <!-- End Logo Container -->
  
  <!-- Top Navigation -->
  <div id='menu_bar'>
    <div class='topnav'>
    <a href='#menu_bar' class='menu_button icon'>&#9776;</a>
    <a href='#menu_bar' class='menu_button'>Menu</a>
      <div class='menu_bar'>
      <a href='index.html'>Home</a>
      <a href='restaurant.html'>Restaurant</a>
      <a href='cuisine.html'>Cuisines</a>
      <a href='reservation.php'>Reservations</a>
      <a href='contact.html'>Contact</a>
      <a href='joinus.php'>Join Us</a>
      </div>
    </div>
  </div> <!-- Top Navigation -->   

  <!-- Info Container -->
  <div class='info'>
  
  <!-- Search Container -->
  <div class='search'>
  <form action="search.php" method="post">
  Search <span class='mobile'>Cuisine Category</span>: <input type='text' name='cuisine'>
  <input type='submit' name='search' value='Search'>
  <input type='submit' name='view-all' value='View All'>
  </form>
  </div> <!-- End of Search Container -->
  
  <div class='clearfix'></div>
  
  <div class='side mobile'>
  <a href='cuisine.html#malaysia'>Malaysia</a>
  <a href='cuisine.html#nyonya'>Nyonya</a>
  <a href='cuisine.html#korea'>Korea</a>
  <a href='cuisine.html#nostalgia'>Nostalgia</a>
  </div>
  
  <!-- Join-Details Container -->
  <div class='item'>
  <div class='join-details'>
  <div class='join-us'>
  <h1>Join Us</h1>
  <p>Fill in the form below to receive our newsletter. Join Now!!</p>
  
  <form action='joinus.php' method='post' name='joinform'>
  <!-- Register Customer -->
  <fieldset>
  <h2>Personal Information</h2>
  <p>
  <span class='require'>* Require Field</span><br>
  <!-- Cust Title -->
  Title: 
  <select name="subtitle"><option value="Mr">Mr.</option><option value='Mrs'>Mrs.</option>
  <option value="Miss">Miss.</option><option value="Ms">Ms.</option></select> <span class='require'>*</span>
  
  <!-- Cust Surname and Forename -->
  <br>Surname: <br><input type='text' name='surname'>  <span class='require'>*</span><br>
  Forename: <br><input type='text' name='forename'>  <span class='require'>*</span><br>
  
  <!-- Cust Tel -->
  Email: <br><input type='text' name='email'>  <span class='require'>*</span><br>
  Phone: <br><input type='text' name='telno'>  <span class='require'>*</span>
  
  <br><input type='submit' name='joinus' value='Join Us'>

  <!-- connecting to database --> 
  <?php 
  if(isset($_POST['joinus']))
  { 
    //validate data
    if($surname == '' or $forename == '' or $email == '' or $telno == '') 
    {
      echo "<span class='require'>You did not complete the form correctly</span>"; 
    }
    else 
    {
      $dbcnx = mysqli_connect("localhost","root","","RestaurantSys");
      
      //check connection
      if(mysqli_connect_errno($dbcnx))
      {
        echo "<span class='require'>Failed to connect to MySQL: ".mysqli_connect_error()."</span>";
        exit();
      }
      
      if($_POST['joinus'] == "Join Us")
      {
        $surname = mysqli_real_escape_string($dbcnx, $surname);
        $forename = mysqli_real_escape_string($dbcnx, $forename);
        $email = mysqli_real_escape_string($dbcnx, $email);
        
        $sql = "INSERT INTO Subscribers(SubTitle,Surname,Forename,Email,TelNo)
                VALUES('$subtitle','$surname','$forename','$email','$telno')";
                
        $res = mysqli_query($dbcnx, $sql); 
        
        if($res == 0)
        {
          echo "<span class='require'>Error Subscribing: ".mysqli_error()."<span>";
          exit();
        }
        else
        {
          echo "<span class='thanks'>Thanks for Joining</span>";
        }
      }
      mysqli_close($dbcnx);
    }
  }
  ?>
  </p> <!-- End of insert -->
  </fieldset>
  </form>  <!-- End of insert form -->
  
  <!-- ******************************************************************************************************************* -->
  <!-- ******************************************************************************************************************* -->
  
  <?php
  if(isset($_POST['searchEmail']))
  {
    // Connect to the database server
    $dbcnx = mysqli_connect("localhost", "root", "", "RestaurantSys");
    if (mysqli_connect_errno($dbcnx))
    {
      echo "<p class='require'>Failed to connect to MySQL: ".mysqli_connect_error()."</p>";
      exit();
    }
     
    $sql = "SELECT * FROM Subscribers WHERE Email = '$updEmail'";
    
    $res = mysqli_query($dbcnx, $sql);
    
    if (!$res) 
    {
      echo "<p class='require'>Query failed ".$sql .' Error: '.mysqli_error($dbcnx)."</p>";
      exit();
    }

    //free results
    mysqli_free_result($res);
        
    //close connection
    mysqli_close($dbcnx);
  }  
  ?>
  
  <form action="joinus.php" method="post" name="updateDetails">
  <!-- Update Customer -->
  <fieldset>
  <h2>Update Personal Information</h2>
  <p>
  
  <?php
  if(isset($_POST['searchEmail']))
  {
    // Connect to the database server
    $dbcnx = mysqli_connect("localhost", "root", "", "RestaurantSys");
    
    if (mysqli_connect_errno($dbcnx ))
    {
      echo "<span class = 'require'>Failed to connect to MySQL: ".mysqli_connect_error()."<br></span>";
      exit();
    }
  
    $updEmail = $_POST['emailRecord'];
      
    $sql = "SELECT * FROM Subscribers WHERE Email = '$updEmail'";
  
    $res = mysqli_query($dbcnx, $sql);
    
    if (!$res) 
    {
        echo "<span class='require'>Query failed ".$sql. "Error: ".mysqli_error($dbcnx)."<br></span>";
        exit();
    }
    else 
    {
      $row = mysqli_fetch_array($res); 
      
      if($row == null)
      {
        echo "<span class='require'>No such record found<br></span>";
      }
      else
      {
        $updSubID = $row['SubID'];
        $updSubSurname = $row['Surname'];
        $updSubForename = $row['Forename'];
        $updSubEmail = $row['Email'];
        $updSubTel = $row['TelNo'];
      }
    }
    //free results
    mysqli_free_result($res);
    
    //close connection
    mysqli_close($dbcnx);  
  }
  ?>
  
  Email: <input type="text" name="emailRecord" value="<?php if(isset($_POST['searchEmail'])) {echo $updEmail;} ?>">
  <input type='submit' name='searchEmail' value="Search">
  
  <!-- ********************************************************************************************************************** -->
  <!-- ********************************************************************************************************************** -->
    
  <input type="hidden" name="upd_SubID" value="<?php if(isset($_POST['searchEmail']) and $row != null) {echo $updSubID;} ?>">
  <br><br>Surname: <br><input type="text" name="upd_Surname" value="<?php if(isset($_POST['searchEmail']) and $row != null) {echo $updSubSurname;} ?>"><br>
  Forename: <br><input type="text" name="upd_Forename" value="<?php if(isset($_POST['searchEmail']) and $row != null) {echo $updSubForename;} ?>"><br>
  Email: <br><input type="text" name="upd_Email" value="<?php if(isset($_POST['searchEmail']) and $row != null) {echo $updSubEmail;} ?>"><br>
  Phone: <br><input type="text" name="upd_Phone" value="<?php if(isset($_POST['searchEmail']) and $row != null) {echo $updSubTel;} ?>"><br> 
  <input type="submit" value="Update" name="updateDetails"> 
  
  <!-- ********************************************************************************************************************** -->
  <!-- ********************************************************************************************************************** --> 
  
  <?php 
  if(isset($_POST['updateDetails']))
  {
    // Connect to the database server
    $dbcnx = mysqli_connect("localhost", "root", "", "RestaurantSys");
    
    if (mysqli_connect_errno($dbcnx ))
    {
      echo "<p class='require'>Failed to connect to MySQL: ".mysqli_connect_error()."</p>";
      exit();
    }
        
    $upd_SubID = (int)$_POST['upd_SubID'];
    $upd_Surname = $_POST['upd_Surname'];
    $upd_Forename = $_POST['upd_Forename'];
    $upd_Email = $_POST['upd_Email'];
    $upd_Phone = $_POST['upd_Phone'];
    
    $upd_Surname = mysqli_real_escape_string($dbcnx, $upd_Surname);
    $upd_Forename = mysqli_real_escape_string($dbcnx, $upd_Forename);
    $upd_Email = mysqli_real_escape_string($dbcnx, $upd_Email);
    $upd_Phone = mysqli_real_escape_string($dbcnx, $upd_Phone);
    
    $sql = "UPDATE Subscribers SET Surname = '$upd_Surname', Forename = '$upd_Forename', Email = '$upd_Email', TelNo = '$upd_Phone'
            WHERE SubID = $upd_SubID";
    
    $res = mysqli_query($dbcnx, $sql);
    
    if (!$res)
    {
      echo "<span class='require'>Query failed</span>";
      exit();
    }
    else
    {
      if(mysqli_affected_rows($dbcnx)< 1)
      {
        echo "<span class='require'>No updates</span>";
      }
      else
      {
        echo "<span class='thanks'>Record Updated</span>";
      }
      
      mysqli_close($dbcnx);
      
    }    
  }
  ?>
  </p> 
  </fieldset> 
  </form> <!-- end of update form --> 
  
  <!-- ********************************************************************************************************************** -->
  <!-- ********************************************************************************************************************** --> 
  
  <form action="joinus.php" method="post" name="deleteDetails">
  <!-- Unsubscribe -->
  <fieldset>
  <h2>Unsubscribe</h2>
  <p>
  
  Email: <br><input type="text" name="del-Sub"><br>
  <input type="submit" value="Unsubscribe" name="delete">
  
  <?php
  if(isset($_POST['delete']))
  {
     $delSub = $_POST['del-Sub'];
  
    if($delSub == '')
    {
      echo "<span class='require'>You did not complete the delete form correctly</span>";
    }
    else
    {
      $dbcnx = mysqli_connect("localhost", "root", "", "RestaurantSys");
      
      if(mysqli_connect_errno($dbcnx))
      {
        echo "Failed to connect to MySQL: ".mysql_connect_error();
        exit();
      }
      
      $sql = "DELETE FROM Subscribers WHERE Email = '$delSub'";
      
      $res = mysqli_query($dbcnx, $sql);
      
      if($res)
      {
        $count = mysqli_affected_rows($dbcnx);
      }
      
      if($count > 0) 
      {
        echo " <span class='thanks'>".$delSub." unsubscribe successfully";
      }
      else
      {
        echo "<span class='require'>No such record deleted</span>";
      }
      
      mysqli_close($dbcnx);
    }
  }
  ?>
  </p>
  </fieldset>
  </form>
  </div> <!-- End of join-us container -->
  </div> <!-- End of join-details containet -->
  </div> <!-- End of item container -->
  </div> <!-- End Info Container -->
  
  <div class='clearfix'></div>
  
  <!-- Footer --> 
  <div class='foot'>
  <!-- Social -->
  <!-- Image from: https://www.google.ie/search?q=facebook+logo&biw=1280&bih=732&source=lnms&tbm=isch&sa=X&ved=0ahUKEwiQoMfDq4bQAhVCC8AKHWm-AxQQ_AUIBigB -->
  <!-- Image from: https://www.google.ie/search?q=facebook+logo&biw=1280&bih=732&source=lnms&tbm=isch&sa=X&ved=0ahUKEwiQoMfDq4bQAhVCC8AKHWm-AxQQ_AUIBigB#tbm=isch&q=twitter+logo -->
  <!-- Image from: https://www.google.ie/search?q=facebook+logo&biw=1280&bih=732&source=lnms&tbm=isch&sa=X&ved=0ahUKEwiQoMfDq4bQAhVCC8AKHWm-AxQQ_AUIBigB#tbm=isch&q=instagram+circle+logo -->
  <div class='social'>
  <div class='social-icon'>
  <a href='https://www.facebook.com/assamhouseadmin?fref=ts' target='_blank'><img src="img/facebook-icon.png" alt="Assam House Restaurant Facebook Page" width='25' height='25'></a>
  <a href='https://www.instagram.com/assamhouse/' target='_blank'><img src="img/instagram-icon.png" alt="Assam House Restaurant Instagram Page" width='25' height='25'></a>
  <a href='https://www.tripadvisor.com/Restaurant_Review-g298298-d1161447-Reviews-Restoran_Assam_House-Ipoh_Kinta_District_Perak.html' target='_blank'><img src="img/tripadvisor-icon.png" alt="Assam House Restaurant Trip Advisor Page" width='25' height='25'></a>
  </div>
  </div> <!-- End Social Media -->
   
  <!-- Copyright -->
  <div class='copyright'>
  <h4>Assam House Restaurant &copy; 2016 | <a href='#'>Sitemap</a> | <a href='#'>Terms &amp; Condition</a></h4>
  </div>  
  </div> <!-- End Footer -->
  </div> <!-- End Main Container -->
  </body>
</html>