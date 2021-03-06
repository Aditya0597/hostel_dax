<?php 
session_start();
?>
<html>
<head>
  <title>Hostel Accommodation</title>
    <link rel="stylesheet" href="accommodation2.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <?php
    if (!isset($_SESSION['email'])) {
       header("Location: ../../index.php"); 
    }
    else{
      echo '<div id="page-wrapper">

      <!-- Header -->
        <header id="header" opacity="0.3">
          <h1 color="white">HOSTEL</h1>
          <nav id="nav">
            <ul>
              <li><a href="accommodation2.php">Hostel Accommodation </a></li>
              <li>
                <a href="status.php">Status</a>
              </li>
              <li><a href="contact2.html">Contact Us</a></li>
             <!-- <li><a class="button special">Log Out</a></li>!-->
             <li><form action="logout.php" method="POST">
               <button class="button special" name="submit" type="submit">Log Out</button>
             </form></li>
            </ul>
          </nav>
        </header>
    </div>
<div class="bgimg-1">
  <div class="caption">
    <span class="border">HOSTEL ACCOMMODATION</span>
  </div>
</div>

<div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
  <h3 style="text-align:center;">RULES AND REGULATION</h3>
  <p><ul>
        <li>Every student must remember that the hostel is the home of the student on the campus and therefore, he/she should behave himself/herself on the campus as well as outside in such a manner as to bring credit to him/her and to the Institution.</li>
        <li>Ragging is strictly prohibited in any form; if someone found guilty, severe action will be taken.</li>
        <li>Students are responsible for the safekeeping of their valuables. Students should provide their own locks and should take proper care of their belongings.
  <li>Students are advised not to keep valuables in the hostel rooms. They are advised to deposit extra cash in the bank or in the post office or at any other safe place.<br><br><center>
  <a href="rules2.html" class="button">Learn More</a></p></center>
</div>

<div class="bgimg-2">
  <div class="caption">
    <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;"></span>
  </div>
</div>

<div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
  <h3 style="text-align:center;">ROOMS</h3>
  <p>Our hostels have dorms, which are basically large rooms that sleep between 8 students.Triple rooms, which are basically shared between 3 students.Private, which have no sharing.<br><center>
  <a href="room2.html" class="button">Learn More</a></p></center>
</div>

<div class="bgimg-3">
  <div class="caption">
    <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;"></span>
  </div>
</div>

<div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
  <h3 style="text-align:center;">MESS</h3>
  <p><ul>
      <li>Hostel Messes are run in two groups. One group is run by private contractor and another is cooperative venture which is run on a "No Profit No Loss" basis.
      <li>The residents are expected to maintain proper decorum in the Dinning Hall. Shouting and sitting on the mess table is strictly prohibited, if any one is found doing so he/she shall be fined Rs. 100 to Rs. 1000 depending on the severity of offence.
      <li>The Mess Secretary from the hostel will normally be elected / nominated and he/ she and his /her team will look after the quality of the food provided and ensure hygiene in the mess.</ul><br><center>
  <a href="mess2.html" class="button">Learn More</a></p></center>
</div>

<div class="bgimg-2">
  <div class="caption">
    <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;"></span>
  </div>
</div>

<div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
  <h3 style="text-align:center;">FACILITIES</h3>
  <p>All the facilities of the city - in one campus. The university is committed to zero tolerance to ragging, alcohol, smoking, drugs and disciplinary misconduct. Automated turnstile gates with biometric machines regulate entry and exit to residential facility. Our Hostel is one of the greenest campuses in the country. The greenery makes for a great learning environment and promotes creativity!The residential faculty and staff provide after-hours guidance and support to the students, in case they need any academic or life advice.<center>
  <a href="facilities2.html" class="button">Learn More</a></p></center>
</div>

<div class="bgimg-1">
  <div class="caption">
  </div>
</div>

<div class="footer">
  <a href="#"><i class="fa fa-facebook-official " style="font-size:30px;color:#3b5998"></i></a>&nbsp;&nbsp;
  <a href="#"><i class="fa fa-twitter " style="font-size:30px;color:#1da1f2"></i></a>&nbsp;&nbsp;
  <a href="#"><i class="fa fa-instagram " style="font-size:30px;color:#c13584"></i></a>&nbsp;&nbsp;
  <a href="#"><i class="fa fa-google-plus " style="font-size:30px;color:#dd4b39"></i></a>&nbsp;&nbsp;
  <a href="#"><i class="fa fa-skype " style="font-size:30px;color:#00aff0"></i></a>
</div>';
    }

  ?>
</body>
</html>