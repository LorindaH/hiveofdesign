<?php
/* Home page */
get_header(); ?>


<div id="container">
<div align="center">
<?php require_once('menu.php'); ?>
<!-- carousel -->
<div id="carousel-padding"></div>
<!-- The bottom layer, holds the image. -->
<div style="position:relative; width:100%; height:auto;">
<img id="image" style="opacity:1.0; filter:alpha(opacity=100);border:0;" src="http://www.hiveofdesign.co.uk/hive/wp-content/uploads/2016/04/audi-email-candy-slider.jpg" alt="slide show"  width="100%">
<!-- Top layer, publishes content on top of image. -->
<div style="position:absolute; top:0px; left:0px; background-color:transparent; width:100%;">
<div class="wrapper" id="carousel" ></div><!-- /wrapper -->
<!-- the rest of the carousel code is at the end of this page -->

<!-- intro -->
<div style="background-color:#00acc8; width:100%;">
<div class="wrapper" id="intro">
<div class="col1" >
<p>Welcome to Hive of Design, a graphic design agency based in Leicester. Our clients choose us because we&rsquo;re reliable, straight-talking and reasonably-priced. We believe in working hard and delivering what you want, on time, every time.</p>
<p>Communicating with us is easy &ndash; we pick up the phone when it rings and we reply to email when it pings, so <a href="#home-contact" style="color:#FFF">contact us today</a>.</p> 
</div><!-- /col1 -->
<div class="col2" id="quote">
<p>You&rsquo;re all so welcoming whenever we call with a new job or we visit your studio to work more closely on a project, no matter how busy you all are. You also always make sure we have time for a good giggle too. How refreshing.</p>
<p>Divisional Database &amp; Marketing Manager at the Sytner Group</p>
</div><!-- /col2 -->
<div style="clear:both;"></div> 
</div><!-- /intro -->
</div><!-- /colour -->

<!-- services -->
<div style="background-color:#ffffff; width:100%">
<div class="wrapper" id="services">
<a class="home-next"><img src="<?php bloginfo('template_directory'); ?>/images/next-cyan.png" alt="next" width="41" height="24" /></a>
<div class="anchor-padding"></div>
<div class="title"><img src="<?php bloginfo('template_directory'); ?>/images/title-service.jpg" alt="What we are good at" width="367" height="65" /></div>
<div class="col1">
<h2><a href="/category/services/graphic-design/">GRAPHIC DESIGN</a></h2>
<a href="/category/services/graphic-design/"><img src="<?php bloginfo('template_directory'); ?>/images/graphic-design.jpg" alt="graphic design" /></a>
<p><a href="/category/services/graphic-design/">logo design</a></p>
<p><a href="/category/services/graphic-design/">brand identity</a></p>
<p><a href="/category/services/graphic-design/">illustration</a></p>
<p><a href="/category/services/graphic-design/">photography</a></p>
</div>
<div class="col2">
<h2><a href="/category/services/digital-design/">DIGITAL DESIGN</a></h2>
<a href="/category/services/digital-design/"><img src="<?php bloginfo('template_directory'); ?>/images/digital.jpg" alt="digital design"/></a>
<p><a href="/category/services/digital-design/">web design</a></p>
<p><a href="/category/services/digital-design/">email design</a></p>
<p><a href="/category/services/digital-design/">interactive brochures</a></p>
<p><a href="/category/services/digital-design/">online graphics</a></p>
</div>
<div class="col3">
<h2><a href="/category/services/print-design/">PRINT</a></h2>
<a href="/category/services/print-design/"><img src="<?php bloginfo('template_directory'); ?>/images/print.jpg" alt="print design"/></a>
<p><a href="/category/services/print-design/">leaflets &amp; flyers</a></p>
<p><a href="/category/services/print-design/">brochures &amp; magazines</a></p>
<p><a href="/category/services/print-design/">large format</a></p>
<p><a href="/category/services/print-design/">stationery</a></p>
</div>
<div class="col4">
<h2><a href="/category/services/advertising/">ADVERTISING</a></h2>
<a href="/category/services/advertising/"><img src="<?php bloginfo('template_directory'); ?>/images/advertising.jpg" alt="advertising"/></a>
<p><a href="/category/services/advertising/">newspaper adverts</a></p>
<p><a href="/category/services/advertising/">magazine adverts</a></p>
<p><a href="/category/services/advertising/">outdoor media</a></p>
<p><a href="/category/services/advertising/">events</a></p>
</div>
<div style="clear:both;"></div>
</div><!-- /services -->
</div><!-- /colour -->

<!-- work -->
<div style="background-color:#b5be00; width:100%">
<div class="wrapper" id="work">
<a class="home-next"><img src="<?php bloginfo('template_directory'); ?>/images/next-white.png" alt="next" width="41" height="24" /></a>
<div class="anchor-padding"></div>
<div class="title"><img src="<?php bloginfo('template_directory'); ?>/images/title-work.png" alt="Who we do it for" width="367" height="65" /></div>
<div id="honeycomb">
<a href="/category/industries/media" id="hex1"><div style="height:65px; width:100%;"></div>Media &amp; Entertainment</a><a href="/category/industries/automotive" id="hex2"><div style="height:75px; width:100%;"></div>Automotive</a>
<a href="/category/industries/retail" id="hex3"><div style="height:65px; width:100%;"></div>Retail &amp;<br />Wholesale Trade</a>
<a href="/category/industries/financial" id="hex4"><div style="height:65px; width:100%;"></div>Financial<br />Sevices</a>
<a href="/category/industries/care" id="hex5"><div style="height:65px; width:100%;"></div>Health &amp;<br />Social Care</a>
<a href="/category/industries/charity" id="hex6"><div style="height:65px; width:100%;"></div>Non-profit<br />&amp; Charity</a>
<a href="/category/industries/public-sector" id="hex7"><div style="height:65px; width:100%;"></div>Public<br />Sector</a>
<a href="/category/industries/leisure" id="hex8"><div style="height:65px; width:100%;"></div>Leisure &amp;<br />Tourism</a>
<a href="/category/industries/property" id="hex9"><div style="height:65px; width:100%;"></div>Property &amp;<br />Construction</a>
<a href="/category/industries/b2b" id="hex10"><div style="height:65px; width:100%;"></div>B2B &amp;<br />Corporate</a>
<a href="/category/industries/biomedical" id="hex11"><div style="height:65px; width:100%;"></div>Pharmaceutical<br />&amp; Biomedical</a>
<a href="/category/industries/education" id="hex12"><div style="height:75px; width:100%;"></div>Education</a>
</div><!-- /honeycomb -->
</div><!-- /work -->
</div><!-- /colour -->

<!-- team -->
<div style="background-color:#ffffff; width:100%">
<div class="wrapper" id="team">
<a class="home-next"><img src="<?php bloginfo('template_directory'); ?>/images/next-green.png" alt="next" width="41" height="24" /></a>
<div class="anchor-padding"></div>
<div class="title"><img src="<?php bloginfo('template_directory'); ?>/images/title-team.jpg" alt="Meet our team" width="310" height="65" /></div>
<div class="col1">
	<a href="/sharon" id="sharon"><img src="<?php bloginfo('template_directory'); ?>/images/orange-frame.png" alt="Sharon" width="134" height="153" /></a>
	<h2>SHARON</h2> 
	<p>Creative Director<br />&nbsp;</p>
	<p><a href="/sharon">View profile &rsaquo;</a></p>
</div>
<div class="col2">
	<a href="/lorinda" id="lorinda"><img src="<?php bloginfo('template_directory'); ?>/images/orange-frame.png" alt="Lorinda" width="134" height="153" /></a>
	<h2>LORINDA</h2>
	<p>Graphic &amp; Web Designer<br />&nbsp;</p>
	<p><a href="/lorinda">View profile &rsaquo;</a></p>
</div>
<div class="col3">
	<a href="/katie" id="katie"><img src="<?php bloginfo('template_directory'); ?>/images/orange-frame.png" alt="Katie" width="134" height="153" /></a>
	<h2>KATIE</h2>
	<p>Account Coordinator &amp; Trainee Designer</p>
	<p><a href="/katie">View profile &rsaquo;</a></p>
</div>
<div class="col4">
	<a href="/category/vacancies" id="vacancies"><img src="<?php bloginfo('template_directory'); ?>/images/orange-frame.png" alt="Vacancies" width="134" height="153" /></a>
	<h2 style="text-transform: uppercase;">Join our team</h2>
	<p><a href="category/vacancies">Vacancies &rsaquo;</a></p>
</div>
<div style="clear:both;"></div>
</div><!-- /team -->
</div><!-- /colour -->

<!-- contact -->
<div style="background-color:#9e1d97; width:100%">
<div class="wrapper" id="home-contact" >
<a id="contact" class="home-next"><img src="<?php bloginfo('template_directory'); ?>/images/next-white.png" alt="next" width="41" height="24" /></a>
<div class="anchor-padding"></div>
<div class="col1">
<h2>Free one hour consultation</h2>
<p>We&rsquo;ll review your marketing activities and provide independent recommendations on how to promote your product or service. If you&rsquo;re in the Leicestershire area, let&rsquo;s meet at yours. You provide the tea (your only commitment, apart from your time) and we&rsquo;ll bring the biscuits.</p>
<p>If you&rsquo;re located further afield, the offer is still open, but based at our offices near the Curve Theatre in Leicester. </p>
<p>We&rsquo;ll spend an hour reviewing your marketing, then within five working days we&rsquo;ll email you a report of recommendations on how to target new customers and improve your marketing material.</p> 
</div><!-- /col1 -->
<div class="col2">
<img src="<?php bloginfo('template_directory'); ?>/images/title-contact.png" alt="Get in touch" width="161" height="31" style="margin-bottom:20px;" />
<?php
if ( isset($si_contact_form) )  {
 echo $si_contact_form->si_contact_form_short_code( array( 'form' => '1' ) );
}
?>
</div><!-- /col2 -->
<div style="clear:both;"></div>
</div><!-- /contact -->
</div><!-- /colour -->

<!-- footer -->
<div style="background-color: #5b6770; height:120px" >
<?php get_footer(); ?>
</div><!-- /footer background -->
<!-- footer ends -->

<script type="text/javascript">
/*
   Background Image Transition Slide Show
   Version 1.0
   October 25, 2010

   Will Bontrager
   http://www.willmaster.com/
   Copyright 2010 Bontrager Connection, LLC

   Bontrager Connection, LLC grants you 
   a royalty free license to use or modify 
   this software provided this notice appears 
   on all copies. This software is provided 
   "AS IS," without a warranty of any kind.
*/

var Images = new Array(); 

var ImageIDvalue = "image";

var TransitionIncrement = 1;

var IncrementInterval = 25;

var PauseBeforeNextImage = 3000;

/* other slides */
Images.push("http://www.hiveofdesign.co.uk/hive/wp-content/uploads/2016/04/audi_questionaire_slider.jpg");
Images.push("http://www.hiveofdesign.co.uk/hive/wp-content/uploads/2016/04/making-it-special-slider.jpg");
Images.push("http://www.hiveofdesign.co.uk/hive/wp-content/uploads/2016/04/key-west-slider.jpg");
Images.push("http://www.hiveofdesign.co.uk/hive/wp-content/uploads/2016/04/audi-email-candy-slider.jpg");

var opacity = 100;
var currentImage = 0;
var topImage = Images.length - 1;
var image = document.getElementById(ImageIDvalue);
var IE = (image.filters) ? true : false;
var timerthing;

function FadeIn() {
opacity += TransitionIncrement;
if( opacity >= 100 ) { opacity = 100; }
if( IE ) { image.filters.alpha.opacity = opacity; }
else { image.style.opacity = opacity/100; }
if( opacity == 100 ) {
   clearInterval(timerthing);
   setTimeout("StartFadeOut()",PauseBeforeNextImage);
   }
}

function FadeOut() {
opacity -= TransitionIncrement;
if( opacity <= 0 ) { opacity = 0; }
if( IE ) { image.filters.alpha.opacity = opacity; }
else { image.style.opacity = (opacity==0) ? 0 : opacity/100; }
if( opacity == 0 ) {
   clearInterval(timerthing);
   currentImage++;
   if( currentImage > topImage ) { currentImage = 0; }
   image.src = Images[currentImage];
   timerthing = setInterval("FadeIn()",IncrementInterval);
   }
}

function StartFadeOut() { timerthing = setInterval("FadeOut()",IncrementInterval); }

function StartSlideShowTransition() {
setTimeout("StartFadeOut()",PauseBeforeNextImage);
}

StartSlideShowTransition();
</script>

</div><!-- /align center -->
</div><!-- /container -->
</div> <!-- /top layer div. -->
</div> <!-- /bottom layer div. -->
<?php wp_footer(); ?>
</body>
</html>

