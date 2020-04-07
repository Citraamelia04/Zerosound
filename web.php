<?php 
  session_start();

  if (!isset($_SESSION['LOGIN'])) {
    header("location: login.php");
    exit();
  }
?>


<!DOCTYPE html>
<html>
<title>ZERO SOUND</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
<style>
body, html {height: 100%}
body,h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC", sans-serif}
.menu {display: none}
.bgimg {
  background-repeat: no-repeat;
  background-size: cover;
  background-image: url("img/abcdefgh.jpeg");
  min-height: 90%;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top w3-hide-small">
  <div class="w3-bar w3-xlarge w3-black w3-opacity w3-hover-opacity-off" id="myNavbar">
    <a href="#" class="w3-bar-item w3-button">HOME</a>
    <a href="#menu" class="w3-bar-item w3-button">MENU</a>
    <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
    <a href="#myMap" class="w3-bar-item w3-button">CONTACT</a>
    <a href="logout.php" style="float:right" class="w3-bar-item w3-button">LOGOUT</a>
    <h3 style="float:right"><?php echo $_SESSION['nama']; ?></h3>
  </div>
</div>
  
<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-padding">
    <span class="w3-tag w3-xlarge">Open from 10am to 12pm</span>
  </div>
  <div class="w3-display-middle w3-center">
    <span class="w3-text-white w3-hide-small" style="font-size:100px"><br>ZERO SOUND</span>
    <span class="w3-text-white w3-hide-large w3-hide-medium" style="font-size:60px"><br>ZERO SOUND</b></span>
    <p><a href="#menu" class="w3-button w3-xxlarge w3-black">Let me see the menu</a></p>
  </div>
</header>

<!-- Menu Container -->
<div class="w3-container w3-black w3-padding-64 w3-xxlarge" id="menu">
  <div class="w3-content">
  
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">THE MENU</h1>
    <div class="w3-row w3-center w3-border w3-border-dark-grey">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Sound System');" id="myLink">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Sound System</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Mic');">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Mic</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Karaoke');">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Karaoke</div>
      </a>
    </div>

    <div id="Sound System" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>TOA/Sound System Portable 100 watt</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Rp. 200.000/hari</span></h1>
      <p class="w3-text-grey">Mic Wireless Amplifer (1 mic wireless+1 mic cable)</p>
      <hr>
   
      <h1><b>Sound System Portable 350 watt</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Rp. 250.000/hari</span></h1>
      <p class="w3-text-grey">1 Mic Wireless, 1 Mic Cable</p>
      <hr>
      
      <h1><b>Paket Sound System 1000 watt</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Rp. 650.000/hari</span></h1>
      <p class="w3-text-grey">2 Speaker dengan total daya 1000 watt, 1 Mic Wireless, 1 Mic Cable, 1 Mixer 4 Channel, 1 Equalizer, 1 Orang Operator </p>
      <hr>

      <h1><b>Paket Sound System 2000 watt</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Rp. 1.200.000/hari</span></h1>
      <p class="w3-text-grey">4 Speaker dengan total daya 2000 watt, 2 Mic Wireless, 2 Mic Cable, 1 Mixer 16 Channel, 1 Equalizer, 1 Orang Operator</p>
      <hr>

      <h1><b>Paket Sound System 3000 watt</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Rp. 1.800.000/hari</span></h1>
      <p class="w3-text-grey">6 Speaker dengan total daya 3000 watt, 3 Mic Wireless, 3 Mic Cable, 1 Mixer 20 Channel, 1 Equalizer, 1 Orang Operator</p>
      <hr>

      <h1><b>Paket Sound System 5000 watt</b> <span class="w3-tag w3-grey w3-round">New</span><span class="w3-right w3-tag w3-dark-grey w3-round">Rp. 3.000.000/hari</span></h1>
      <p class="w3-text-grey">10 Speaker dengan total daya 5000 watt, 5 Mic Wireless, 5 Mic Cable, 1 Mixer 20 Channel, 1 Equalizer, 1 Orang Operator dan Helper</p>
    </div>

    <div id="Mic" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>Mic Cable</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Rp. 50.000/hari</span></h1>
      <p class="w3-text-grey">Termasuk kabel 10 Meter</p>
      <hr>
   
      <h1><b>Mic Cable Kondensor</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Rp. 75.000/hari</span></h1>
      <p class="w3-text-grey">Termasuk kabel 10 Meter</p>
      <hr>
      
      <h1><b>Mic Wireless (Isi 1)</b> <span class="w3-tag w3-grey w3-round">Popular</span><span class="w3-right w3-tag w3-dark-grey w3-round">Rp. 200.000/hari</span></h1>
      <p class="w3-text-grey">Termasuk Baterai</p>
      <hr>

      <h1><b>Mic Wireless (Isi 2)</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Rp. 280.000/hari</span></h1>
      <p class="w3-text-grey">Termasuk Baterai</p>
      <hr>

      <h1><b>Mic Wireless Clip On</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Rp. 200.000/hari</span></h1>
      <p class="w3-text-grey">Termasuk Baterai</p>
      <hr>

      <h1><b>Mic Wireless Head Set</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Rp. 200.000/hari</span></h1>
      <p class="w3-text-grey">Termasuk Baterai</p>
    </div>


    <div id="Karaoke" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>Paket Karaoke Basic</b> <span class="w3-tag w3-grey w3-round">Seasonal</span><span class="w3-right w3-tag w3-dark-grey w3-round">Rp. 350.000/hari</span></h1>
      <p class="w3-text-grey">Komputer Karaoke (+/- 35.000 Lagu) Monitor 14"</p>
      <hr>
   
      <h1><b>Paket Karaoke Standar</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Rp. 850.000/hari</span></h1>
      <p class="w3-text-grey">Komputer Karaoke + Monitor, Mixer 4 channel, 2 Mic Cable, 1 Set Speaker 1000 watt, Operator Sound System</p>
      <hr>
      
      <h1><b>Paket Karaoke Deluxe</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Rp. 1.000.000/hari</span></h1>
      <p class="w3-text-grey">Komputer Karaoke + Monitor, Mixer 16 channel, 2 Mic Cable, 1 Set Speaker 1000 watt, Soundman</p>
      <hr>
      
      <h1><b>Paket Karaoke Proyektor</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Rp. 1.250.000/hari</span></h1>
      <p class="w3-text-grey">Proyektor 2000 ansi, Layar 70"</p>
    </div><br>

  </div>
</div>

<!-- About Container -->
<div class="w3-container w3-padding-64 w3-red w3-grayscale w3-xlarge" id="about">
  <div class="w3-content">
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">About</h1>
    <p>Zero Sound adalah tempat jasa penyewaan sound system per hari terbaik dan terpecaya di Bandung. Kami memiliki jenis – jenis aneka Mic, Mic Wireless dan paket – paket Sound system serta karaoke yang kami sewa / rentalkan dengan kualitas terbaik dan harga bersaing.</p>
    <p>We are proud if our customers are satisfied.</p>
    <img src="img/DSCF4225-1024x577.jpg" style="width:100%" class="w3-margin-top w3-margin-bottom" alt="Toko">
    <h1><b>Opening Hours</b></h1>
    
    <div class="w3-row">
      <div class="w3-col s6">
        <p>Mon & Tue CLOSED</p>
        <p>Wednesday 10.00 - 24.00</p>
        <p>Thursday 10:00 - 24:00</p>
      </div>
      <div class="w3-col s6">
        <p>Friday 10:00 - 12:00</p>
        <p>Saturday 10:00 - 23:00</p>
        <p>Sunday Closed</p>
      </div>
    </div>
    
  </div>
</div>

<!-- Image of location/map -->
<img src="map.jpg" class="w3-image w3-greyscale" style="width:100%;" id="myMap">

<!-- Contact -->
<div class="w3-container w3-padding-64 w3-blue-grey w3-grayscale-min w3-xlarge">
  <div class="w3-content">
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">Contact</h1>
    <p>Find us at some address at Jl. Pertiwi No.71A, Sukajadi, Kota Bandung, Jawa Barat</p>
    <p>Call us at 0822-6091-6633</p>
    <p><span class="w3-tag">FYI!</span> We offer complete services for any event, large or small. We understand your needs and will serve according to the criteria you ask for both in quality and user satisfaction</p>
    <p class="w3-xxlarge"><strong>Order</strong> the tools you need, request a special offer today or send us a message :</p>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name Menu" required name="Name Menu"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="number" placeholder="How Many" required name="How Many"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="datetime-local" placeholder="Date and time" required name="date" value="2017-11-16T20:00"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Notes" required name="Notes"></p>
      <p><button class="w3-button w3-light-grey w3-block" type="submit">SEND MESSAGE!</button></p>
    </form>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-48 w3-xxlarge">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">Zero Sound</a></p>
</footer>

<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-red";
}
document.getElementById("myLink").click();
</script>

</body>
</html>