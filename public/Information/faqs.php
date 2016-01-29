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

<!-- Scripts____________________________________-->
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
        <h1>Have some Questions?</h1>
        <p>Receiving the right answers to your questions safeguards you from forgetting key items to make your pet’s stay perfect.</p>
        <p>Don't hesitate to get in touch with us on our <a href="../Contact/contact.php">Contact Page.</a></p>
        </section>
        </div>
  <div class="underHeadingContainer">
        <div class="mainBlockLeft">
        <div class="interiorContainer">
        <div id="faqsImg" class="imgContainer">
        <img src="../_thumbs/TCK_12.jpg" alt="image"></img>
        </div>
        </div>
</div>
        <div class="mainBlockRight">
        <article>
        <div class="interiorContainer">
        <section class="faqsModule">
        <h2>FAQs</h2>
        <ul>
            <li><strong>Can I take a Tour?</strong><p>Sure! We would love to give you a tour. Just give us a call to schedule a time!</p></li>
            <li><strong>What if my dog has a particular eating schedule and/or diet?</strong><p>We will feed each dog accordingly if you have a particular feeding regimen. Please provide instructions including time(s), feeding amounts, and type for us to follow in your absence.</p></li>
            <li><strong>What if I don't bring my dog's bedding?</strong><p>We certainly can provide clean, comfortable bedding if you've left your pet's behind!</li>
            <li><strong>Is there a breed restriction?</strong><p> Absolutely not! We board all dogs! We love all dogs!</p></li>
            <li><strong>Will my dog have access to the outdoor runs??</strong><p>  Yes! Each dog has 24-hour availability to his or her own outdoor run!</p></li>
        </ul>
            </section>
        </article>
            </div>
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

</html>