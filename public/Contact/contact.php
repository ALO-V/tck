<?php
//configs
$email_to ='turkeycreekboardingkennels@gmail.com'; //put your email address here
$email_subject_prefix =''; //put the email subject line prefix here
$email_from ='contact@turkeycreekboardingkennels.com'; //put the email address that this form will be sent from
$email_from_nice ='Contact Form'; //put in the 'nice' name for the email sender

//If the form is submitted
if(isset($_POST['submit'])) {

        //Check to make sure that the name field is not empty
        if(trim($_POST['contactname']) == '') {
                $hasError = true;
        } else {
                $name = trim($_POST['contactname']);
        }

        //Check to make sure that the subject field is not empty
        if(trim($_POST['subject']) == '') {
                $hasError = true;
        } else {
                $subject = $email_subject_prefix;
                $subject .= trim($_POST['subject']);
        }

        //Check to make sure sure that a valid email address is submitted
        if(trim($_POST['email']) == '')  {
                $hasError = true;
        } else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $hasError = true;
        } else {
                $email = trim($_POST['email']);
        }

        //Check to make sure sure that a valid Phone Number is submitted
        if(trim($_POST['phoneNumber']) == '')  {
                $hasError = true;
        } else if (preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $_POST['phoneNumber'])) {
                $hasError = true;
        } else {
                $phoneNumber = trim($_POST['phoneNumber']);
        }

        //Check to make sure comments were entered
        if(trim($_POST['message']) == '') {
                $hasError = true;
        } else {
                if(function_exists('stripslashes')) {
                        $comments = stripslashes(trim($_POST['message']));
                } else {
                        $comments = trim($_POST['message']);
                }
        }

        //Check to make sure comments were entered
        if($_POST['spam_prevention_test']) {
            $isSpam = true;
        }

        //If there is no error, send the email
        if(!isset($hasError) AND !isset($isSpam)) {
                $emailTo = 'turkeycreekboardingkennels@gmail.com'; //Put your own email address here
                $body = "Name: $name \n\nPhone: $phoneNumber \n\nSubject: $subject \n\nComments:\n $comments";
                $headers = 'From: '.$email_from_nice.' <'.$email_from.'>' . "\r\n" . 'Reply-To: ' . $email;

                mail($emailTo, $subject, $body, $headers);
                $emailSent = true;
        }
}
?>

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
<script src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.pack.js" type="text/javascript"></script>
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
        <h1>We Are Here For You</h1>
        <p>
        Contact us with any questions or concerns you may have. Turkey Creek Boarding Kennels wants you to feel as though you can reach out to us no matter the inquiry, even if just for a simple hello to your visiting dog pal.
        </p>
        </section>
        </div>
<div class="underHeadingContainer">
    <div class="heroBlock">
        <section>
        <div id="contactFormModule">
                <?php if(isset($isSpam)) { //If errors are found ?>
                <p class="error">Your message was considered spam, Please check that you did not fill in the 'If you're human leave this blank' field. Thank you.</p>
        <?php } ?>
        <?php if(isset($hasError)) { //If errors are found ?>
                <p class="error">Please check if you've filled all the fields with valid information. Thank you.</p>
        <?php } ?>

        <?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
               <div class="sent">
               <div class="sentWrap">
               <div class="sentIntCont">
                <p class="emailSent"><strong>Email Successfully Sent!</strong></p></div>
                <div class="sentIntCont">
                <p class="emailp">Thank you, <strong><?php echo $name;?></strong> for using our contact form! Your email was successfully sent, and we will be in touch with you soon.</p></div></div>
        <?php } ?>
        <form action="" method="post" class="contactForm" id="contactform">
            <div class="formRow">
            <label for="firstName">Contact Name:</label><br>
            <input class="formInput" type="text" name="contactname" required="required" placeholder="Your Name Goes Here">
            </div>
            <div class="formRow">
            <label for="lastName">Subject:</label><br>
            <input class="formInput" type="text" name="subject" required="required" placeholder="Write your Subject Here">
            </div>
            <div class="formRow">
            <label for="phone">Phone Number:</label><br>
            <input class="formInput" type="text" name="phoneNumber" placeholder="Phone Number Here">
            </div>
            <div class="formRow">
            <label for="mail">Email:</label><br>
            <input class="formInput" type="text" name="email" required="required" placeholder="Write your Email Here">
            </div>
            <div id="content" class="formRow">
            <label for="message">Message:</label><br>
            <textarea name="message"  required="required" placeholder="Write Your Message Here"></textarea>
            </div>
        <!-- The following field is for robots only, invisible to humans: -->
                <div class="spam_prevention" id="pot">
                <label for="message"><strong>Spam prevention test:</strong><br/>If you're human leave this blank:</label>
                <input name="spam_prevention_test" type="text" id="spam_prevention_test" class="spam_prevention_test"?>"/>
                    </div>
            <div class="formRow">
            <input class="formButton" type="submit" name="submit" value="Send">
            </div>
            </form></div>
            </div>
            </section>
        </div>
    <div class="mainBlockLeft">
        <article>
        <section class="interiorContainer">
        <table id="hoursTable">
        <thead class="hoursHeaderRow">
          <th class="homeHeaderText" colspan="2">Book today! <span style="font-size:10px;">515-344-4286<span></th>
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
    $(function () {
        $('#content').on( 'change keyup keydown paste cut', 'textarea', function (){
    $(this).height(0).height(this.scrollHeight);
}).find( 'textarea' ).change();
    });
    $(function () {
        $("#contactform").validate();
    });
    });
</script>

</html>
