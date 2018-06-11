<html>

<head>
<title>Swati Music School</title>
<link rel="stylesheet" type="text/css" href="css/contactus.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="js/contactus.js"></script>
</head>

<body onload="maps()" style="background-color: #f4f3ee; margin: 0px;">

<div class="header">

<ul>

<div class="close" onclick="closemenu()">
<i class="fa fa-close"></i>
</div>

<li>
<a href="home.php" class="linker">HOME</a>
</li>

<li>
<a href="aboutus.php" class="linker">ABOUT US</a>
</li>

<li>
<a href="#" class="linker">PROGRAMMES</a>
</li>

<li>
<a href="#" class="linker">BLOG</a>
</li>

<li>
<a href="contactus.php" class="linker">CONTACT US</a>
</li>

<div class="menu" onclick="showmenu()">

<div></div>
<div></div>
<div></div>

</div>

</ul>
</div>

<div class="logo" style="width: 100%; background: linear-gradient(#cc9966,#4d3319); overflow: hidden;">
<img src="imgs/musiclogo.png" style="height: 5vw; margin: auto; float: left;">
<p style="width: 80%; float: left; bottom: 0px; color: white; font-size: 1.5vw;">SWATI MUSIC SCHOOL</p>
</div>

<div style="width: 100%; text-align: center; font-size: 1vw;">
<h1>CONTACT US</h1>
</div>

<div class="forms_location" style="width: 100%; font-size: 1.5vw;">

<div class="forms" style="width: 45%; display: inline-block; margin-left: 5%;">
NAME<br />
<input type="text" style="width: 80%; height: 2vw; border-radius: 5px; margin: 2% auto;"><br />
EMAIL<br />
<input type="text" style="width: 80%; height: 2vw; border-radius: 5px; margin: 2% auto;"><br />
SUBJECT<br />
<input type="text" style="width: 80%; height: 2vw; border-radius: 5px; margin: 2% auto;"><br />
MESSAGE<br />
<textarea style="width: 80%; height: 10vw; border-radius: 5px; margin: 2% auto;"></textarea><br />
<input type="submit" style="width: 80%; height: 4vw; border-radius: 5px; margin: 2% auto; background-color: orange;" value="SEND MESSAGE">
</div>

<div class="location" style="width: 45%; display: inline-block;">
<div style="width: 100%; text-align: center; font-size: 1.5vw;">
<h1>LOCATION</h1>
<p>19 Parramatta Walk Craigieburn,</p>
<p>Victoria - 3064</p>
<p>Australia</p>
</div>

<div style="width: 100%; text-align: center; font-size: 1.5vw;">
<h1>OPEN HOURS</h1>
<p>MON-FRI</p>
<p>10:00AM-8:00PM</p>
<p>10 hours</p>
</div>
</div>

</div>

<div id="gmaps" style="width: 100%; height: 400px; background-color: yellow;">
<script>
function maps() {
 var Craigieburn = {lat: -37.580366, lng: 144.937619};
  var map = new google.maps.Map(
      document.getElementById('gmaps'), {zoom: 16, center: Craigieburn});
  var marker = new google.maps.Marker({position: Craigieburn, map: map});
}
</script>
    <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJzooDQvliSeKG5ehyXWo3Ev9Fj4GCJIM&callback=maps">
    </script>
</div>

<div class="footer">

<div class="elements">

<div class="element">
<img src="imgs/musiclogo.png" style="height: 3vw; margin: auto; float: left;">
<p style="float: left; top: 10px; color: white; font-size: 1vw;">SWATI MUSIC SCHOOL</p>
<br /><br /><br />
<p style="clear: left;">Location:<br />
19 Parramatta Walk Craigieburn,<br />
Victoria - 3064<br />
Australia
</p>
</div>

<div class="element">
<h4>QUICK LINKS</h4>
<ul>
<li><a href="#">HOME</a></li>
<li><a href="#">ABOUT US</a></li>
<li><a href="#">PROGRAMMES</a></li>
<li><a href="#">BLOG</a></li>
<li><a href="#">CONTACT</a></li>
</ul>
</div>

<div class="element">
<h4>POPULAR CLASSES</h4>
<ul>
<li><a href="#">VOCAL</a></li>
<li><a href="#">TABLA</a></li>
<li><a href="#">HARMONIUM</a></li>
<br /><br />
</ul>
</div>

<div class="icons">
<p>FOLLOW US ON</p>
<i class="fa  fa-facebook"></i>
<i class="fa  fa-twitter"></i>
<i class="fa  fa-instagram"></i>
<i class="fa  fa-linkedin"></i>
</div>
</div>
</div>

</body>
</html>