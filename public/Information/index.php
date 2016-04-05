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
        <h1>Information</h1>
        <p>
        We like to make sure each and every guest is well prepared before visiting our kennels. Here you can find some resources to help you plan upcoming stay.</p>
        </section>
        </div>
  <div class="underHeadingContainer">
    <article id="infoHeroBlock" class="heroBlock">
        <div class="interiorContainer">
        <div class="imgContainer">
        <img src="../_Images/TCK_04.jpg" alt="image"></img>
        </div></div>
        <section id="infoModules">
          <div id="faqsSmModule">
        <h1 class="mainLinks"><a href="../Information/faqs.php">FAQs</a></h1>
        <p>Review our Frequently Asked Questions page for details before you even start planning your trip!</p><p class="sub">Feel free to email any questions on our <a href="../Contact/contact.php">Contact Page!</a></p>
        </div>
          <div id="hoursDirectionsModule">
        <h1 class="mainLinks"><a href="../Information/hoursdirections.php">Hours &amp; Directions</a></h1>
        <p>
        Check out our Hours &amp; Directions page for details on how to get to our dog boarding facility, as well as pertinent information for dropping off and picking up your beloved dog pal after their relaxing stay.
        </p>
        </div>
          <div id="planYourStayModule">
        <h1 class="mainLinks"><a href="../Information/planyourstay.php">Plan Your Stay</a></h1>
        <p>
        To lessen the work on your end, we have laid out any and all items your doggie pal will need on our Plan Your Stay page!
        </p>
        </div>
        </section>
      </article>
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
        verticalAlign: "40%"
    });
    $(".imgLiquidNoFill").imgLiquid({
        fill: false,
        horizontalAlign: "center",
        verticalAlign: "50%"
    });
    });
});
 </script>

</html>
