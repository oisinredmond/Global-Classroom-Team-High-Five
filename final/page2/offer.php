<?
 	
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Hilton Hotel || Dublin</title>
		<link rel="stylesheet" href="../css/normalize.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="../css/main.css">
		<link rel="stylesheet" href="../css/responsive.css">
        <link href="../css/ninja-slider.css" rel="stylesheet" type="text/css" />
        <script src="../js/ninjaVideoPlugin.js" type="text/javascript"></script>
        <script src="ninja-slider.js" type="text/javascript"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

	</head>

	<body>
  <header>
        <a href="main.html" id="logo">
          <a href="index.php" title="juhee"><img class="site-logo"style="margin-left : 90px;max-height: 100px" src="//juuheeeee950625.xyz/wp-content/uploads/2018/04/hilton-logo-1.png" alt="juhee" /></a>

        </a>

        <div style=" float: right;margin-top : 20px;margin-right: 20px;"class="navbar">
          <div class="dropdown">
             <button class="dropbtn" onclick="location.href='about.html'">ABOUT
             <i class="fa fa-caret-down"></i>
             </button>
         <div class="dropdown-content">
              <a href = "about2.php">Dublin Hilton</a>
             <a href = "qna.html">Q&A</a>
         </div>
      </div>
          <div class="dropdown">
             <button class="dropbtn" onclick="location.href='offer.php'">OFFERS
             <i class="fa fa-caret-down"></i>
             </button>
         <div class="dropdown-content">
              <a href = "roomInfo.php">Rooms</a>
             <a href = "facility.php">Facility</a>
         </div>
      </div>
      <div class="dropdown">
         <button class="dropbtn">ATTRACTIONS
         <i class="fa fa-caret-down"></i>
         </button>
      <div class="dropdown-content">
          <a href = "travel.php">Travel Site</a>
         <a href = "offer.php">Links</a>
      </div>
      </div>
        <div class="dropdown">
           <button class="dropbtn" onclick="location.href='login.php'">LOGINN
</button>
</div>

</div>

<style>

            /* --- override the ninja-slider.css settings --- */
    #ninja-slider {
                padding: 0 0;
            }

            /* --- Show pause/play button --- */
            #ninja-slider-pause-play {
                display: block;
                position: absolute;
                top: auto;
                bottom: 0;
                width: 64px;
                height: 64px;
                display: inline-block;
                background-image: url(img/navs.png);
                left: 0;
                background-position: 0 -128px;
            }

                #ninja-slider-pause-play.paused {
                    background-position: -64px -128px;
                }
        </style>
        <script>
            nsOptions.aspectRatio = "auto";
            nsOptions.effect = "fade";
            nslider.reload();
        </script>
    </header>
<table>
<td>
	<h1 style = "color: #1e4979; " align = "middle" > Things to do </h1>
	<br>
<div class="container">
  <img src="../img/kells.jpg" alt="kells" class="offer_image" style="width:100%">
  <div class="middle">
  	<div class="offer_text">Book of Kells Early Access Tour with Dublin Castle. <br><br> From €44 </div><br>
   <form align  = "middle">
        <input class="button button1" type="button" value="For more details" onclick="window.location.href='https://www.tripadvisor.com/AttractionProductReview-g186605-d11457001-Book_of_Kells_Early_Access_Tour_with_Dublin_Castle-Dublin_County_Dublin.html'" />
    </form>
  </div>
</div>
</td>
</table>

<table>
<td>
<div class="container">
  <img src="../img/guinness.jpeg" alt="guinness" class="offer_image" style="width:100%">
  <div class="middle">
  	<div class="offer_text">Skip the Line: Guinness Storehouse Entrance Ticket <br><br> From €25 </div><br>
   <form align  = "middle">
        <input class="button button1" type="button" value="For more details" onclick="window.location.href='https://www.tripadvisor.com/AttractionProductDetail-g186605-d11447892-Skip_the_Line_Guinness_Storehouse_Entrance_Ticket-Dublin_County_Dublin.html'" />
    </form>
</div>
</td>
</table>

<table>
<td>
<div class="container">
  <img src="../img/bus.jpg" alt="bus" class="offer_image" style="width:100%">
  <div class="middle">
  	<div class="offer_text">Dublin Pass with Hop-On Hop-Off Tour and Entry to Over 30 Attraction <br><br> From €58 </div><br>
   <form align  = "middle">
        <input class="button button1" type="button" value="For more details" onclick="window.location.href='https://www.tripadvisor.com/AttractionProductDetail-g186605-d11447892-Skip_the_Line_Guinness_Storehouse_Entrance_Ticket-Dublin_County_Dublin.html'" />
    </form>
  </div>
</div>
</td>
</table>

<h3 style = "color: #1e4979;" align = "middle"> For more amazing offers and tours please visit: </h3>

 <form align  = "middle">
        <input class="button button1" type="button" value="Trip Advisor" onclick="window.location.href='https://www.tripadvisor.com/Attractions-g186605-Activities-Dublin_County_Dublin.html#ATTRACTION_SORT_WRAPPER'" />

		<img src = "../img/trip.png" alt = "trip" align = "middle" style = "width: 100px; height: 100px;" >

			<footer>
				<img src = "../img/hilton2.png" alt = "trip" align = "middle" style = "width: 200px; height: 100px;" ><br>
				<p>&copy; 2018 High Five</p>
				<a href="http://twitter.com"><img src="../img/twitter-wrap.png" alt="Twitter Logo" class="social-icon"></a>
				<a href="http://facebook.com"><img src="../img/facebook-wrap.png" alt="Facebook Logo" class="social-icon"></a>

			</footer>
		</form>
	</body>
</html>
