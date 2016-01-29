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

<!-- Fonts---------------------------------------->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,600,700,400,300italic' rel='stylesheet' type='text/css'>

<!-- CSS---------------------------------------->
<link rel="stylesheet" href="../_js/magnific-popup/magnific-popup.css" type="text/css" />
<link href="../_css/tcbk_m.css" rel="stylesheet" type="text/css" />

<!-- JQuery---------------------------------------->
<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="../_js/magnific-popup/jquery.magnific-popup.js"></script>
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
        <h1>Picture the Experience</h1>
        <p>Resting just outside Elk Horn, Iowa, Turkey Creek Boarding Kennels offers a resort-like experience for your dog.</p>
        <p> Overlooking the rolling hills of Iowa we ensure a comfortable environment with 20 climate controlled kennels and some of the largest indoor/outdoor runs available.</p>
            </section>
            </div>
        <div class="underHeadingContainer">
    <section id="phGalWrapper">
        <div class="parent-container">
        <div class="phCont">
        <a class="gallery" href="../_Images/TCK_02.jpg" title="Welcome to our Kennels!"><img src="../_thumbs/TCK_02.jpg"></a>
        <span>&#43;</span>
        </div>
        <div class="phCont">
        <a class="gallery" href="../_Images/TCK_22.jpg" title="Our 3ft by 7ft Outdoor Runs"><img src="../_thumbs/TCK_22.jpg"></a>
        <span>&#43;</span>
        </div>
        <div class="phCont">
        <a class="gallery" href="../_Images/TCK_25.jpg" title="Our 4ft by 20ft Outdoor Runs"><img src="../_thumbs/TCK_25.jpg"></a>
        <span>&#43;</span>
        </div>
        <div class="phCont">
        <a class="gallery" href="../_Images/TCK_05.jpg" title="Owner, Shane Nelson looking after a dog."><img src="../_thumbs/TCK_05.jpg"></a>
        <span>&#43;</span>
        </div>
        <div class="phCont">
        <a class="gallery" href="../_Images/TCK_16.jpg" title="A view just outside of our kennels."><img src="../_thumbs/TCK_16.jpg"></a>
        <span>&#43;</span>
        </div>
        <div class="phCont">
        <a class="gallery" href="../_Images/TCK_17.jpg" title="Our hiking trail overlooking Elkhorn Iowa's countryside."><img src="../_thumbs/TCK_17.jpg"></a>
        <span>&#43;</span>
        </div>
        <div class="phCont">
        <a class="gallery" href="../_Images/TCK_19.jpg" title="One of the views from our outdoor runs."><img src="../_thumbs/TCK_19.jpg"></a>
        <span>&#43;</span>
        </div>
        <div class="phCont">
        <a class="gallery" href="../_Images/TCK_26.jpg" title="Our huge fenced-in play area!"><img src="../_thumbs/TCK_26.jpg"></a>
        <span>&#43;</span>
        </div>
        </div>
        </section>
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
});
</script>

<script> // JQUERY GALLERY
    $(document).ready(function() {
    $('.parent-container').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            titleSrc: function(item) {
                return item.el.attr('title') + '<small>Turkey Creek Boarding Kennels</small>';
            }
        }
    });
});
</script>

</html>