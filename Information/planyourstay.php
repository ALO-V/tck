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
        <h1>Plan Your Stay</h1>
        <p>
        Forgetting an item or two happens all too often. Making sure your dog has a pleasant stay with us means bringing everything your dog may need while visiting. To alleviate the stress of packing, Turkey Creek Boarding Kennels has outlined a list of items we suggest not leaving behind!
        </p>
        </section>
        </div>
  <div class="underHeadingContainer">
    <div class="mainBlockLeftPYS">
        <article>
        <div class="interiorContainer">
        <section id="dontForgetModule">
        <h2>Don't Forget to Bring</h2>
        <ul>
        <li>Food with feeding instructions. House provides food for those that don't bring their own or that have no particular food preference. Treats are always welcome!</li>
        <li>Your dog's leash, collar, and harness.</li>
        <li>Pillows, blankets, bedding and any other comfort items used regularly at home.</li>
        <li>Bring all pharmaceuticals, pills, shots, and other medical needs, with instructions, regarding timing, dosage, and name of each medication and/or prescription.</li>
        <li>Please leave us with your contact information where we can reach you while away, and contact information of someone you trust in town in case we were not able to reach you.</li>
        <li><strong>*And please remember to bring a copy of your pet's vaccination records!</strong></li>
        </ul>
        </section></div>
        </article>
       </div>
    <div class="mainBlockRightPYS">
      <aside class="interiorContainer">
        <div class="interiorContainer">
        <div class="imgContainer">
        <img src="../_Images/TCK_06.jpg" alt="image"></img>
        </div></div>
        <div class="interiorContainer">
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
</div>
      </aside>
    </div>
    <div class="interiorContainer">
       <section>
         <h3><a href="../../Gallery/index.php">Check Out Our Location</a>
         </h3>
   <div id="smGalWrap">
    <div class="smGalContainer">
    <div class="smGalImage">
        <img src="../_thumbs/TCK_17.jpg" alt="thumb"></img></div></div>
    <div class="smGalContainer">
    <div class="smGalImage">
    <img src="../_thumbs/TCK_23.jpg" alt="thumb"></img></div></div>
    <div class="smGalContainer">
    <div class="smGalImage">
    <img src="../_thumbs/TCK_25.jpg" alt="thumb"></img></div></div>
    </div>
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
    $(function () {
    $(".imgContainer").imgLiquid({
        fill: true,
        horizontalAlign: "center",
        verticalAlign: "60%"
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

<script> // GOOGLE MAP CALC ROUTE
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