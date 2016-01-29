<!DOCTYPE html>
<html lang="en">
<head>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-67828772-1', 'auto');
  ga('send', 'pageview');

</script>
<!--[if lt IE 9]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta charset="utf-8" />
<meta name="metiis.advert" content="Turkey_Creek_Boarding_Kennels"/>
<title>Turkey Creek Boarding Kennels</title>

<!-- Fonts_____________________________________-->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,600,700,400,300italic' rel='stylesheet' type='text/css'>

<!-- CSS_______________________________________-->
<link href="../_css/tcbk_m.css" rel="stylesheet" type="text/css" />

<!-- JQuery____________________________________-->
<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="../_js/imgLiquid-min.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBj4ygylSsnkWZSiT-cuetsi0EpyTLwBIQ"></script>
</head>

<!-- Header Start -->

<body>
<header>
<?php
    include_once("../incl/menu.php");
?>
</header>
<main role="main">
  <div class="headerSection">
  <section>
        <h1>Hours &amp; Directions</h1>
        <p>
        Located only 10 minutes north of Interstate 80 just outside of Elk Horn, Iowa, so our kennel serves as the perfect location to conveniently drop off your pet for a comfortable and relaxing stay in the country! </p>
        <p>We live on site, so appointments can be arranged outside of regular boarding hours, if necessary.</p>
        <p>We have dog boarding options during the holiday season too! </p>
        </section>
        </div>
  <div class="underHeadingContainer">
    <div class="mainBlockLeftPYS">
        <article class="hoursdirectionsModule">
        <section id="hdIT" class="interiorContainer">
        <table id="hoursTable">
        <thead class="hoursHeaderRow">
        <th colspan="2">Our Hours</th>
        </thead>
        <tbody>
        <tr class="homeTableRow">
        <td class="homeDay"><strong>Monday - Friday</strong></td>
        <td class="homeTime">8am - 6pm</td>
        </tr>
        <tr class="homeTableRow">
        <td class="homeDay"><strong>Saturday</strong></td>
        <td class="homeTime">8am - Noon</td>
        </tr>
        <tr>
        <td class="homeDay"><strong>Sunday</strong></td>
        <td id="sunday" class="homeTime">By Appointment</td>
        </tr>
        </tbody>
        </table>
        </section>
        </article>
    </div>
    <div class="mainBlockRightPYS">
        <div class="interiorContainer">
        <div class="imgContainer">
        <img src="../_thumbs/TCK_24.jpg" alt="image"></img>
        </div></div>
        <aside class="interiorContainer">
<h3 id="mapHeader">Where We're Located</h3>
<div id="googleMapContainer">
    <div id="googleMap"></div>
    <form id="calculate-route" name="calculate-route" action="#" method="get">
      <label>Directions:</label>
      <label class="hidden" for="from">From:</label>
      <input type="text" id="from" name="from" required="required" placeholder="Starting Address Here" size="35" />
      <a id="from-link" href="#" class="formText">Get my Location</a>
      <br />
      <label class="hidden" for="to">To:</label>
      <input class="to" type="text" id="to" name="to" required="required" placeholder="Ending Address Here" value="2726 Crane Ave, Elk Horn, IA 51531" size="35" />
      <a id="to-link" href="#" class="formText">Get My Location</a>
      <br />
      <input type="submit" />
      <input type="reset" />
    </form>
    <p id="error"></p>
</div>
</aside>
    </div>
    <div class="shortBottomBlock">
    <section class="interiorContainer">
        <h2>Address</h2>
    <p><strong>Address:</strong> 2726 Crane Ave, Elk Horn, IA 51531</p>
            </section></div>
</div>
</main>
<footer>
<?php
    include_once("../incl/footer.php");
?>
</footer>
</body>

<!-- SCRIPTS -->

<script> // JQUERY MENU / IMAGE CONTAINER / DROPDOWN MENU
    $( document ).ready(function() {
        console.log( "document loaded" );
    $(function () {
        $('nav li ul').hide().removeClass('fallback');
        $('nav li').hover(function () {
            $('ul', this).stop().slideToggle(200);
        });
    });
    $(function () {
        $('.menuWrapper').hide().addClass('menuWrapperShow')
        $('.open').on('click mouseenter', function(){
            $('.menuWrapper').stop().fadeToggle(100);
        });
    });
    $(function() {
    $(".imgContainer").imgLiquid({
        fill: true,
        horizontalAlign: "center",
        verticalAlign: "10%"
    });
    $(".imgLiquidNoFill").imgLiquid({
        fill: false,
        horizontalAlign: "center",
        verticalAlign: "50%"
    });
    });
});
</script>

<script> // GOOGLE MAP API
    function initialize() {
  var myLatlng = new google.maps.LatLng(41.611710,-95.053167);
  var mapProp = {
    center:myLatlng,
    scrollwheel: false,
    zoom:10,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Turkey Creek Boarding Kennels'
          });
}
    google.maps.event.addDomListener(window, 'load', initialize);
</script>

<script> // GOOGLE MAP CALC. ROUTE
    function calculateRoute(from, to) {
        // Center initialized to Naples, Italy
        var myOptions = {
          zoom: 10,
          center: new google.maps.LatLng(40.84, 14.25),
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        // Draw the map
        var mapObject = new google.maps.Map(document.getElementById("googleMap"), myOptions);

        var directionsService = new google.maps.DirectionsService();
        var directionsRequest = {
          origin: from,
          destination: to,
          travelMode: google.maps.DirectionsTravelMode.DRIVING,
          unitSystem: google.maps.UnitSystem.METRIC
        };
        directionsService.route(
          directionsRequest,
          function(response, status)
          {
            if (status == google.maps.DirectionsStatus.OK)
            {
              new google.maps.DirectionsRenderer({
                map: mapObject,
                directions: response
              });
            }
            else
              $("#error").append("Unable to retrieve your route<br />");
          }
        );
      }
    $(document).ready(function() {
        // If the browser supports the Geolocation API
        if (typeof navigator.geolocation == "undefined") {
          $("#error").text("Your browser doesn't support the Geolocation API");
          return;
        }

        $("#from-link, #to-link").click(function(event) {
          event.preventDefault();
          var addressId = this.id.substring(0, this.id.indexOf("-"));

          navigator.geolocation.getCurrentPosition(function(position) {
            var geocoder = new google.maps.Geocoder();
            geocoder.geocode({
              "location": new google.maps.LatLng(position.coords.latitude, position.coords.longitude)
            },
            function(results, status) {
              if (status == google.maps.GeocoderStatus.OK)
                $("#" + addressId).val(results[0].formatted_address);
              else
                $("#error").append("Unable to retrieve your address<br />");
            });
          },
          function(positionError){
            $("#error").append("Error: " + positionError.message + "<br />");
          },
          {
            enableHighAccuracy: true,
            timeout: 10 * 1000 // 10 seconds
          });
        });

        $("#calculate-route").submit(function(event) {
          event.preventDefault();
          calculateRoute($("#from").val(), $("#to").val());
        });
        $(".to").click(function() {
        this.value = '';
        });
      });
</script>
</html>