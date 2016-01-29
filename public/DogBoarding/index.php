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
        <h1>Our Dog Boarding Philosophy</h1>
        <p>Kennels aren't what they used to be, and precisely why we refer to our facility as a dog boarding service instead!</p>
        <p>Dog boarding is meant to feel as though your furry friend never left home. Our deeply rooted values stem from one core belief: comfort above all else. </p>
        </section>
        </div>
  <div class="underHeadingContainer">
        <div class="mainBlockLeftPYS">
        <article>
        <div id="dbDescription">
        <h2>Visualize Your Stay</h2>
        <p>We aim to keep your dog happy and healthy while you're gone. In doing so, we know each dog has differing preferences and needs.</p>
        <p>Individual, personal attention is served daily to each doggie guest generating continuous smiles all around!</p>
        </div>
        </article>
        </div>
        <div class="mainBlockRightPYS">
            <aside class="interiorContainer">
                <div class="interiorContainer">
        <section>
        <div class="imgContainer">
        <img src="../_thumbs/TCK_09.jpg" alt="testPhoto"></div>
    </section>
  </div>
                <div class="interiorContainer">
<section id="pricingTableModule">
<h2 id="pricingTable">Pricing</h2>
    <table>
    <tr>
    <td>1 Dog per kennel</td>
    <td>-</td>
    <td>$15/day</td>
    </tr>
    <tr>
    <td>2 Dogs per kennel</td>
    <td>-</td>
    <td>$25/day</td>
    </tr>
    <tr>
    <td>3 Dogs per kennel</td>
    <td>-</td>
    <td>$35/day</td>
    </tr>
    <tr>
    <td>Up charge if pick up is past noon.</td>
    </tr>
    </table>
</section>
</div>
            </aside>
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
        verticalAlign: "80%"
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