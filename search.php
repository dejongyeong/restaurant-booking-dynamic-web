<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Assam House Restaurant</title>
    <meta charset='utf-8'>
    <meta name='description' content='Welcome to Assam House Restaurant located in Ipoh, Perak, Malaysia. Simple the best asian cuisine in town.'>
    <meta name='keywords' content='assamhouse,asian restaurant,asian cuisine,ipoh restaurant,assamhouse ipoh,assam house restaurant'>
    <meta name='author' content='De Jong Yeong'>
    <meta name='copyright' content='&copy; December 2016'>
    <meta name='robots' content='all'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    
    <link href='img/assamhouse-favicon-logo.ico' rel="icon"/> 
    <link href='img/assamhouse-favicon-logo.ico' rel="shortcut icon"/>
    
    <link rel="stylesheet" href="masterstyle.css" type="text/css">
    
    <!-- All information taken from http://assamhouse.com.my/  -->
    
    <!-- PHP Script -->
    <?php 
    if(isset($_POST['search']))
    {
      $category = $_POST['cuisine'];
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
  <!-- Result Container -->
  <div class='result'> 
  <!-- Search Container -->
  <div class='search' id='sch'>  
  <form action="search.php" method="post">
  Search <span class='mobile'>Cuisine Category</span>: <input type='text' name='cuisine' value='<?php if(isset($_POST['search'])) {echo $category;} ?>'>
  <input type='submit' name='search' value='Search'>
  <input type='submit' name='view-all' value='View All'>
  </form>
  </div> <!-- End Search Container -->
  
  <div class='display'>
  <?php 
  if(isset($_POST['search']) or isset($_POST['view-all'])) 
  {
    //selecting data
    $dbcnx = mysqli_connect("localhost","root","","RestaurantSys");
    
    if(mysqli_connect_errno($dbcnx))
    {
      echo "Failed to connect to MySQL: ".mysqli_connect_error();
      exit();
    }
    else
    {
      //no string delimiters around integers except for strings
      if(isset($_POST['search']))
      {
        $sql = "SELECT * FROM Cuisines WHERE Category = '$category'";
      }
      else if(isset($_POST['view-all']))
      {
        $sql = "SELECT * FROM Cuisines ORDER BY Category";
      }
      
      $res = mysqli_query($dbcnx, $sql);
      
      //if $res is false
      if(!$res)
      {
        echo "<p class='callout'>Query failed</p>";
        exit();
      }
      else
      {
        if(mysqli_num_rows($res) < 1)
        {
          //no cuisines
          echo "<p class='callout'>No Cuisines Found.</p>";
        }
        else
        {
          //formatting tables
          echo "<table>";
          echo "<tr><th>Category</th>";
          echo "<th>Cuisine</th><th>Description</th><th>Price</th></tr>";
          
          while($row = mysqli_fetch_array($res))
          {
            echo "<tr><td>".$row['Category']."</td><td>".stripslashes($row['Name'])."</td><td>".stripslashes($row['Description'])."</td><td id='special'>&euro; ".$row['Price']."</td></tr>";
          }
          echo "</table>";
        }                                           
      }
    }
    
    mysqli_free_result($res);
    mysqli_close($dbcnx);
  }
  ?>
  </div> <!-- End Display Container -->
  </div> <!-- End result container --> 
  </div> <!-- End Info Container -->
  
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
  <h4>Assam House Restaurant &copy; 2016 | <a href=''>Sitemap</a> | <a href=''>Terms &amp; Condition</a></h4>
  </div>  
  </div> <!-- End Footer -->
  </div> <!-- End Main Container -->
  </body>
</html>