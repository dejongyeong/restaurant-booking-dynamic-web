<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Reservations</title>
    <meta charset='utf-8'>
    <meta name='description' content='Welcome to Assam House Restaurant located in Ipoh, Perak, Malaysia. Simple the best asian cuisine in town.'>
    <meta name='keywords' content='assamhouse,asian restaurant,asian cuisine,ipoh restaurant,assamhouse ipoh,assam house restaurant,reservation,korea,nostalgia,malaysia,nyonya'>
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
       
    if(isset($_POST['reserve']))
    {
      $rctitle = $_POST['rctitle'];
      $rsurname = $_POST['rsurname'];
      $rforename = $_POST['rforename'];
      $rtelno = $_POST['rtelno'];
      $rsession = $_POST['rsession'];
      $rdate = $_POST['rdate']; 
      $rtime = $_POST['rtime'];
      $rctotal = (int)$_POST['rctotal'];
      $rsmoking = $_POST['rsmoking'];
      $rseating = $_POST['rseating'];
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
  
  <!-- Item Container -->
  <div class='item'>
  <div class='reserve'>
  <h1><span class='big'>Booking</span></h1>
  <p>Please fill in your details below to make a reservation request for Assam Restaurant. For online reservations, please place
  your reservation request at least 24 hours prior to your visit. We will get back to you by telephone 
  as soon as possible to confirm your booking and enquiries. Please call us if the number of people for the reservation is more than 20 people 
  to make special arrangement. <span class='note'>Please note that your booking is not confirmed at this stage.</span></p>
  <p>Thank you.</p>  
  
  <form action='reservation.php' method='post' name='reserveform'>
  <fieldset>
  <h2>Make a Reservation</h2>
  <p>
  
  <?php 
  if(isset($_POST['reserve']))
  {
    if($rctitle == 'none' or $rsurname == '' or $rforename == '' or $rtelno == '' or $rdate == '' or $rtime == 'none' or $rsession == 'none' or $rctotal == 0 or $rsmoking == 'none' or $rseating == 'none')
    {
      echo "<span class='require'>You did not complete the form correctly<br></span>"; 
    }
    else
    {
      //Source from: http://www.php-dev-zone.com/2013/06/date-validation-in-php.html
      if(preg_match("/^(\d{4})-(\d{2})-(\d{2})$/",$rdate,$matches))
      {
        if(checkdate($matches[2],$matches[3],$matches[1]))
        {
          //source from: http://ie2.php.net/manual/en/datetime.createfromformat.php
          //$vrdate = DateTime::createFromFormat("d/m/Y","$rdate");
          
          //Source from: http://ie2.php.net/manual/en/datetime.createfromformat.php
          $vrtime = DateTime::createFromFormat("H:i","$rtime");
            
          if($rsession == 'lunch')
          {
            //Source from: http://ie2.php.net/manual/en/datetime.createfromformat.php
            $startTime = DateTime::createFromFormat("H:i",'11:30');
            $endTime = DateTime::createFromFormat("H:i",'15:00');
              
            if($vrtime >= $startTime and $vrtime <= $endTime)
            {
              $rsession = 1;
            }
            else
            {
              echo "<span class='require'>Invalid time range!!<br></span>";
              $rsession = 0;
            } 
          } 
          else if($rsession == 'dinner')
          {
            //Source from: http://ie2.php.net/manual/en/datetime.createfromformat.php
            $startTime = DateTime::createFromFormat("H:i",'18:00');
            $endTime = DateTime::createFromFormat("H:i",'22:00');
              
            if($vrtime >= $startTime and $vrtime <= $endTime)
            {
              $rsession = 2;
            }
            else
            {
              echo "<span class='require'>Invalid time range!!<br></span>";
              $ression = 0;
            } 
          } //end of session and time validation
            
          //checks table infos
          if(($rctotal >= 1 and $rctotal <= 3) and $rsmoking == 'No' and $rseating == 'Normal') {
              $tables = 1;
          } else if(($rctotal >= 1 and $rctotal <= 3) and $rsmoking == 'No' and $rseating == 'Window') {
              $tables = 2;
          } else if(($rctotal >= 1 and $rctotal <= 3) and $rsmoking == 'Yes' and $rseating == 'Outdoor') {
              $tables = 3;
          } else if(($rctotal >= 3 and $rctotal <= 6) and $rsmoking == 'Yes' and $rseating == 'Outdoor') {
              $tables = 4;
          } else if(($rctotal >= 3 and $rctotal <= 6) and $rsmoking == 'No' and $rseating == 'Window') {
              $tables = 5;
          } else if(($rctotal >= 3 and $rctotal <= 6) and $rsmoking == 'No' and $rseating == 'Normal') {
              $tables = 6;
          } else if(($rctotal >= 6 and $rctotal <= 9) and $rsmoking == 'No' and $rseating == 'Normal') {
              $tables = 7;
          } else if(($rctotal >= 6 and $rctotal <= 9) and $rsmoking == 'No' and $rseating == 'Window') {
              $tables = 8;
          } else if(($rctotal >= 9 and $rctotal <= 12) and $rsmoking == 'No' and $rseating == 'Normal') {
              $tables = 9;
          } else if(($rctotal >= 9 and $rctotal <= 12) and $rsmoking == 'No' and $rseating == 'Window') {
              $tables = 10;
          } else if(($rctotal >= 12 and $rctotal <= 15) and $rsmoking == 'No' and $rseating == 'Window') {
              $tables = 11;                                                             
          } else if(($rctotal >= 12 and $rctotal <= 15) and  $rsmoking == 'No' and $rseating == 'Normal') {
              $tables = 12;
          } else if(($rctotal >= 15 and $rctotal <= 18) and $rsmoking == 'No' and $rseating == 'Normal') {
              $tables = 13;
          } else if(($rctotal >= 18 and $rctotal <= 20) and $rsmoking == 'No' and $rseating == 'Normal') {
              $tables = 14;
          } else {
              $tables = 0;
              echo "<span class='require'>Can't fullfill your requirement!!<br>1. Window Seat, No Smoking: Below 15 people.<br>2. Outdoor Seat, Smoking: Below 6 people.<br></span>";
              echo "<span class='require'>3. Normal Seat, No Smoking: Maximum 20 people.<br></span>";
          } //end of table info checking
            
          if($tables != 0 and $rsession != 0)
          {
            //connect to database
            $dbcnx = mysqli_connect("localhost","root","","RestaurantSys");
        
            //check connection
            if(mysqli_connect_errno($dbcnx))
            {
              echo "<span class='require'>Failed to connect to MySQL: ".mysqli_connect_error()."</span>";
              exit();
            }
                
            if($_POST['reserve'] == "Reserve")
            {
              $rsurname = mysqli_real_escape_string($dbcnx, $rsurname);
              $rforename = mysqli_real_escape_string($dbcnx, $rforename);
              $rtelno = mysqli_real_escape_string($dbcnx,$rtelno);
                
              //$vrdate, $reserveTime, $vrtime, $rctotal, $tables, $rctitle 
              $sql = "SELECT * 
                      FROM Reservations 
                      WHERE ReserveDate = '$rdate' AND ReserveTime = '$rtime' AND
                            ((Status = 'EN' OR Status = 'en') OR (Status = 'CF' OR Status = 'cf'))";
                              
              $res = mysqli_query($dbcnx,$sql);
                
              if(!$res)
              {
                echo "<p class='callout'>Query failed</p>";
                exit();
              }
              else
              {
                if(mysqli_num_rows($res) > 0)
                {   
                  echo "<span class='require'>Reservation time has been booked. Sorry for any inconvinience.</span>";
                }
                else
                {
                  $sqlquery = "INSERT INTO Customers(CustTitle,Surname,Forename,Telno)
                               VALUES('$rctitle','$rsurname','$rforename','$rtelno')";
                
                  $ress = mysqli_query($dbcnx, $sqlquery);
                    
                  if($ress == 0)
                  {
                    echo "<span class='require'>Error: ".mysqli_error()."<span>";
                    exit();
                  }
                  else
                  {
                    //Source from: http://www.w3schools.com/php/php_mysql_insert_lastid.asp
                    $last_id = mysqli_insert_id($dbcnx);
                      
                    $msql = "INSERT INTO Reservations(ReserveDate,ReserveTime,TotalPerson,CustID,TableID,SittingID)
                             VALUES('$rdate','$rtime',$rctotal,$last_id,$tables,$rsession)";
                      
                    $mres = mysqli_query($dbcnx,$msql);
                      
                    if(!$mres)
                    {
                      echo "<span class='require'>Error: ".mysqli_error($dbcnx)."<span>";
                      exit();
                    }
                    else
                    {
                      echo "<span class='thanks'>Reservation has been made. Thanks</span>";
                    }    
                  } //end of else statement
                } //end of mysqli_num_rows($res) > 1
                  
                mysqli_free_result($res);
                  
              } //end if(!$res)                            
            } //end of reserve button click   
              
            mysqli_close($dbcnx); 
                    
          } //end of tables validation    
        } //end of check date
        else
        {
          echo "<span class='require'>Date entered is invalid!</span>";
        }
      } //end of date validation
      else
      {
        echo "<span class='require'>Date entered is invalid!</span>";
      } //end of date validation
    } //end of else
  } //end of isset  
  ?>
  
  <!-- ******************************************************************************************************************* -->
  <!-- ******************************************************************************************************************* -->
  
  <table>
  <tr>
    <td>Title:</td>
    <td>
      <select name="rctitle">
      <option value = 'none'>Title</option>
      <option value = "Mr">Mr.</option>
      <option value = 'Mrs'>Mrs.</option>
      <option value = "Miss">Miss.</option>
      <option value = "Ms">Ms.</option>
      </select><span class='require'> *</span>
    </td>
  </tr>
  <tr>
    <td>Surname:</td>
    <td><input type='text' name='rsurname' value="<?php if(isset($_POST['reserve'])) {echo $rsurname;}?>"><span class='require'> *</span></td>
  </tr>
  <tr>
    <td>Forename:</td>
    <td><input type='text' name='rforename' value="<?php if(isset($_POST['reserve'])) {echo $rforename;}?>"><span class='require'> *</span></td>
  </tr>
  <tr>
    <td>Phone:</td>
    <td><input type='text' name='rtelno' value="<?php if(isset($_POST['reserve'])) {echo $rtelno;}?>"><span class='require'> *</span></td>
  </tr>
  <tr>
    <td>Date: <span class='special'>(Example: 2016-12-31)</span></td>
    <td><input type='text' name='rdate' value="<?php if(isset($_POST['reserve'])) {echo $rdate;}?>"><span class='require'> *</span></td>
  </tr>
  <tr>
    <td>Session: </td>
    <td>
      <select name='rsession'>
      <option value='none'>Session</option>
      <option value='lunch'>11:30 - 15:00</option>
      <option value='dinner'>18:00 - 22:00</option>
      </select><span class='require'> *</span>  
    </td>
  </tr>
  <tr>
    <td>Time: </td>
    <td>
      <select name='rtime'>   
      <option value="none">Time</option>
      <option value="11:30">11:30</option>
      <option value="12:00">12:00</option><option value="12:30">12:30</option>
      <option value="13:00">13:00</option><option value="13:30">13:30</option>
      <option value="14:00">14:00</option><option value="14:30">14:30</option>
      <option value="18:00">18:00</option><option value="18:30">18:30</option>
      <option value="19:00">19:00</option><option value="19:30">19:30</option>
      <option value="20:00">20:00</option><option value="20:30">20:30</option>
      <option value="21:00">21:00</option><option value="21:30">21:30</option>
      </select><span class='require'> *</span>
    </td>
  </tr>
  <tr>
    <td>Number of People: </td>
    <td>
      <select name="rctotal"><option value="0">None</option>
      <option value="1">1</option><option value='2'>2</option><option value="3">3</option><option value="4">4</option>
      <option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option>
      <option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option>
      <option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option>
      <option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option>
      </select><span class='require'> *</span>
    </td>
  </tr>
  <tr>
    <td>Smoking Area:</td>
    <td>
      <select name='rsmoking'>
      <option value="none">Smoking?</option>
      <option value="No">No</option>
      <option value="Yes">Yes</option>
      </select><span class='require'> *</span>
    </td>
  </tr>
  <tr>
    <td>Seating Area:</td>
    <td>
      <select name='rseating'>
      <option value="none">Seating?</option>
      <option value='Normal'>Normal</option>
      <option value='Window'>Window</option>
      <option value='Outdoor'>Outdoor</option>
      </select><span class='require'> *</span> 
    </td>
  </tr>
  <tr>
    <td class="reduce" colspan="2"><input type='submit' value='Reserve' name='reserve'></td>
  </tr>
  <tr>
    <td colspan="2"><span class='require'>* Require Field</span></td>
  </tr>
  </table>
  </p>
  </fieldset>
  </form>
  </div> <!-- End of reserve container -->
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