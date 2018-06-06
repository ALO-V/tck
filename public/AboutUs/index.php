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

<!-- Fonts____________________________________-->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,600,700,400,300italic' rel='stylesheet' type='text/css'>

<!-- CSS____________________________________-->
<link href="../_css/tcbk_m.css" rel="stylesheet" type="text/css" />

<!-- JQuery____________________________________-->
<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBj4ygylSsnkWZSiT-cuetsi0EpyTLwBIQ"></script>
<script src="../_js/imgLiquid-min.js"></script>
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
        <h1>A Little About Us</h1>
        <p>Located just minutes from Elk Horn, Iowa, Turkey Creek Boarding Kennels is a resort-like hideaway for your furry friend. At Turkey Creek Kennels we've created the best environment for boarding dogs, as well as, a place large enough to cater to each dog's individual needs.</p>
        <p>Cleanliness is always a concern when boarding animals, that's why maintaining a spotless environment is a top priority at our kennels. With experience and a true love for dogs, Turkey Creek Kennels is equipped to accommodate your dog.</p>
        <p></p>
        <section id="meetTheOwnerModule">
        <h2>Meet The Owner</h2>
        <div id="ownerPhoto" class="heroContainer">
        <div class="ownerPhotoCont">
        <img src="../_Images/TCK_15.jpg" alt="image"></img></div></div>
        <div id="ownerWriteUp">
        <p>After 30 years managing industrial cleaning crews around the nation for the meat and food industry, Shane Nelson moved on to his passion for dogs.</p>
        <p>Aside from his own dogs, Shane developed hands on experience while dedicating volunteer hours to the Dodge County Humane Society in Fremont Nebraska, where he also served on the Board of Directors.
        </p>
        <p>Shane's achievements in the sanitation industry, along side his personal experience with a variety of dogs, makes Turkey Creek Boarding Kennels the premier destination for your dog boarding needs.
         </p>
         </div>
        </section>
        </section>
        </div>
  <div class="underHeadingContainer">
    <div class="mainBlockLeft">
      <article>
        <div class="interiorContainer">
        <div class="imgContainer">
        <img src="../_thumbs/TCK_10.jpg" alt="image"></img>
        </div></div>
        <section class="interiorContainer">
        <table id="hoursTable">
        <thead class="hoursHeaderRow">
          <th class="homeHeaderText" colspan="2" style="border-top: none;">Book today! <span style="font-size:.8em;"><i>515-344-4286</i><span></th>
        </thead>
        <tbody>
        <tr>
          <td class="homeTime">Pick-ups and Drop-offs by Apointment Only</td>
        </tr>
        </tbody>
        </table>
        </section>
      </article>
    </div>
    <div class="mainBlockRight">
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
      <section>
        <h2>Address</h2>
        <p><strong>Address:</strong> 2726 Crane Ave, Elk Horn, IA 51531</p>
      </section>
    </div>
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
        verticalAlign: "center"
    });
    $(".imgLiquidNoFill").imgLiquid({
        fill: false,
        horizontalAlign: "center",
        verticalAlign: "50%"
    });
    });
});
</script>

<script> // GOOGLE MAP
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

<script> // GOOGLE MAP ROUTE
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
