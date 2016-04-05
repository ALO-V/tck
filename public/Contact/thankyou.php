<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <meta charset="utf-8" />
        <meta name="author" content="Script Tutorials"/>
        <title>Turkey Creek Boarding Kennels</title>

<!-- Fonts____________________________________-->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,600,700,400,300italic' rel='stylesheet' type='text/css'>
<!-- CSS____________________________________-->
        <link href="../_css/tcbk.css" rel="stylesheet" type="text/css" />

<!-- JQuery____________________________________-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js">      </script>
    <script>
    $( document ).ready(function() {
        console.log( "document loaded" );

    $(function () {
        $('nav li ul').hide().removeClass('fallback');
        $('nav li').hover(function () {
            $('ul', this).stop().slideToggle(200);
        });
    });
    $(function () {
        $('.open').click(function(){
     $('.menuWrapper').toggleClass('menuWrapperShow');
        });
    });
    $(function () {
        $('#content').on( 'change keyup keydown paste cut', 'textarea', function (){
    $(this).height(0).height(this.scrollHeight);
}).find( 'textarea' ).change();
    });
});
    </script>
</head>
<!-- Header Start -->
<body>
<header>
    <div class="navWrapper">
    <div class="buttonWrapper">
    <button class="open"><span class="equals">&equiv;</span></button>
    </div>
    <div class="menuWrapper">
    <div id="menu"><nav><ul>
        <div class="menuLinkWrapper">
              <li><a class="menuLink" href="../index.html">Home</a></li></div>
        <div class="menuLinkWrapper">
              <li><a class="menuLink" href="../DogBoarding/index.html">Services</a>
                    </li></div>
    <div class="menuLinkWrapper">
        <li><a class="menuLink" href="../Information/index.html">Information</a>
                    <ul class="fallback">
              <li><a class="menuLink" href="../Information/planYourStay.html">Plan Your Stay</a></li>
              <li><a class="menuLink" href="../Information/faqs.html">F.A.Q.'s</a></li>
              <li><a class="menuLink" href="../Information/hoursDirections.html">Hours &amp; Directions</a></li>
              </ul></li></div>
    <div class="menuLinkWrapper">
        <li><a class="menuLink" href="../AboutUs/index.html">About Us</a></li></div>
    <div class="menuLinkWrapper">
            <li><a class="menuLink" href="../Gallery/index.html">Galleries</a></li></div>
    <div class="menuLinkWrapper">
            <li><a class="menuLink" href="../Contact/index.html">Contact</a></li></div>
    </ul></nav></div></div></div>
</header>
<main role="main">
<div class="headerSection">
        <section>
        <h1>We Are Here For You</h1>
        <p>
        Contact us with any questions or concerns you may have. Turkey Creek Boarding Kennels wants you to feel as though you can reach out to us no matter the inquiry, even if just for a simple hello to your visiting dog pal.
        </p>
        </section>
        </div>
  <div class="underHeadingContainer">
    <div class="heroBlock">
        <section>
<p>THANKS!</p>
            </section>
        </div>
    <div class="mainBlockLeft">
        <article>
        <section class="interiorContainer">
        <table id="hoursTable">
        <thead class="hoursHeaderRow">
        <th class="homeHeaderText" colspan="2">Our Hours</th>
        </thead>
        <tbody>
        <tr class="homeTableRow">
        <td class="homeDay"><strong>Monday - Friday</strong></td>
        <td class="homeTime">9am - 6pm</td>
        </tr>
        <tr>
        <td class="homeDay"><strong>Sunday</strong></td>
        <td id="sunday" class="homeTime">Pick-ups by Apointment</td>
        </tr>
        </tbody>
        </table>
        </section>
    </article>
    </div>
    <div class="mainBlockRight">
      <aside class="interiorContainer">
        <section class="pickupTimeModule">
        <h2>Pick Up &amp; Drop Off Times</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </section>
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
 <div class="navHoursWrap">
  <section id="secondaryNavModule">
    <nav class="secondaryNav">
      <table class="secondaryNavTable">
           <tr>
            <th><a href="../DogBoarding/index.html">Dog Boarding</a></th>
            <th><a href="../Contact/index.html">Contact</a></th>
            <th><a href="../Information/index.html">Information</a></th>
           </tr>
           <tr>
            <td><a href="../Information/planYourStay.html">Plan Your Stay</a></td>
            <td><a href="../Information/pricing.html">Pricing</a></td>
            <td><a href="../Information/hoursDirections.html">Hours &amp; Directions</a></td>
            </tr>
            <tr>
            <td><a href="../Information/faqs.html">F.A.Q.'s</a></td>
            <td><a href="../Gallery/index.html">Gallery</a></td>
            <td><a href="../AboutUs/index.html">About Us</a></td>
            </tr>
            </table>
    </nav>
  </section>
  <section id="footerHoursTableModule">
    <table id="footerHoursTable">
        <thead class="footerHoursHeaderRow">
        <th class="homeHeaderText" colspan="2">Our Hours</th><span class="longLine"></span>
        </thead>
        <tbody>
        <tr class="footerHoursTableRow">
        <td class="homeDay"><strong>Monday - Saturday</strong></td>
        <td class="homeTime">9am - 6pm</td>
        </tr>
        <tr id="sunday" class="footerHoursTableRow">
        <td class="homeDay"><strong>Sunday</strong></td>
        <td class="homeTime">Pick-ups by Apointment</td>
        </tr>
        </tbody>
    </table>
  </section></div>
  <section id="footerContactModule">
      <div class="footerContactInfo">
       <div class="footerContactWrap">
        <h4>How to reach us :</h4>
            <ul class="footerPhoneAddress">
            <li><strong>Address:</strong><br>2726 Crane Ave,<br> Elk Horn, IA 51531</li>
            <li><strong>Phone:</strong><br>712-764-2253</li></ul>
          </div>
          </div>
        <div class="footerLinksModule">
        <ul class="footerContactHours">
            <li class="footerLinks"><a href="../Contact/index.html">Contact<br>Page</a></li>
            <li class="footerLinks"><a href="../Information/hoursDirections.html">Hours and<br> Directions</a></li></ul></div>
  </section>
  <section id="copyRightModule">
      <div class="copyRight">
        <ul>
        <li>copyright 2015</li>
        <li>metiis.</li>
        </ul>
      </div>
  </section>
</footer>
</body>
</html>
