<!DOCTYPE html>
<html>
	<head>
		<title>The World According to Jane</title>
		<style>
		img {
			width:100%;
		}
		</style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="script.js"></script>
		<link href="style.css" type="text.css" rel="stylesheet">
		<!DOCTYPE html>
	</head>
	<body>
		<?php date_default_timezone_set("America/New_York");
				echo "The time in my current timezone is " . date("h:i:sa");
		?>
		<a href="http://www.freepik.com/free-photos-vectors/travel"><img src="World Map_Color 2.png" alt="the world">Travel vector created by Freepik</a>
		<h1>Travel Blog</h1>
			<p>Hey everyone! I'm Jane. Nice to vertually meet you all! Welcome to my travel blog. I will be documenting my explorations around the world as a responsible traveler.</p>
		<h2>What Is Responsible Travel?</h2>
			<p>2017 is the United Nation's "Year of Sustainable Travel." The <a href="http://www.responsibletravel.org" target="_blank">Center for Responsible Travel</a>, based here in Washington, D.C., describes responsible travel as "..."
			</p>
			<!-- Need to fill in graph. How do I add a link to certain text and not entire sentence? -->
		<h2>Where Have I Been Lately?</h2>
				<ul>
					<li>Paris, France - 2015</li>
					<li>Nosara, Costa Rica - 2016</li>
					<li>Melbourne, Australia - 2016</li>
					<li>Sydney, Australia - 2016</li>
					<li>Queenstown, New Zealand - 2017</li>
					<li>Dunedin, New Zealand - 2017</li>
				</ul>
		<div class="slideshow-container">
  			<div class="mySlides fade">
    			<div class="numbertext">1 / 4</div>
    			<img src="img1.jpg" style="width:100%">
    			<div class="text">Paris Love Locks</div>
  			</div>

  			<div class="mySlides fade">
    			<div class="numbertext">2 / 4</div>
    			<img src="img2.jpg" style="width:100%">
    			<div class="text">Sunsets in Nosara</div>
  			</div>

  			<div class="mySlides fade">
    			<div class="numbertext">3 / 4</div>
    			<img src="img3.jpg" style="width:100%">
    			<div class="text">Bondi Icebergs</div>
  			</div>

  			<div class="mySlides fade">
    			<div class="numbertext">4 / 4</div>
    			<img src="img4.jpg" style="width:100%">
    			<div class="text">Milford Sound Ferry</div>
  			</div>

  			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  			<a class="next" onclick="plusSlides(1)">&#10095;</a>
		</div>
		<br>

		<div style="text-align:center">
  			<span class="dot" onclick="currentSlide(1)"></span> 
  			<span class="dot" onclick="currentSlide(2)"></span> 
  			<span class="dot" onclick="currentSlide(3)"></span> 
  			<span class="dot" onclick="currentSlide(4)"></span>
		</div>		
	</body>
</html>