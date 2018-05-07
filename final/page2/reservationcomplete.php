<?php
session_start();

 include_once ("./basic.php");
$link = mysqli_connect("localhost", "root", "", "hotel");

include './auth.php';
$re = mysqli_query($dbConnect,"SELECT * from users where User_id = '".$_SESSION['userID']."'  AND Password = '".$_SESSION['password']."' " );
echo mysqli_error($dbConnect);

if(mysqli_num_rows($re) > 0)
{
$name=$_SESSION['userID'];
}
echo $_SESSION['userID'];
echo $_SESSION['booking_id'];
?>
<!DOCTYPE html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Reservation</title>
<meta name="reservation hotel for malaysia" >
<meta name="zulkarnain" content="gambohnetwork.com.my">
<meta name="copyright" content="Hotel Malaysia, inc. Copyright (c) 2014">
<link rel="stylesheet" href="../scss/foundation.css">
<link rel="stylesheet" href="../scss/style.css">
<link href='http://fonts.googleapis.com/css?family=Slabo+13px' rel='stylesheet' type='text/css'>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="icon/css/fontello.css">
<link rel="stylesheet" href="icon/css/animation.css"><!--[if IE 7]><link rel="stylesheet" href="css/fontello-ie7.css"><![endif]-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<script src="jquery.backstretch.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
<meta class="foundation-data-attribute-namespace"><meta class="foundation-mq-xxlarge"><meta class="foundation-mq-xlarge"><meta class="foundation-mq-large"><meta class="foundation-mq-medium"><meta class="foundation-mq-small"><style></style><meta class="foundation-mq-topbar"></head>
<body class="fontbody" >
<div class="row foo" style="margin:30px auto 30px auto;" >
<div class="large-12 columns">
		<div class="large-3 columns centerdiv">
			<a href="sessiondestroy.php" class="button round blackblur fontslabo" >1</a>
			<p class="fontgrey">Please select Date</p>
		</div>
		<div class="large-3 columns centerdiv">
			<a href="unsetroomchosen.php" class="button round blackblur fontslabo" >2</a>
			<p class="fontgrey">Select Room</p>
		</div>
		<div class="large-3 columns centerdiv">
			<a href="guestform.php" class="button round  blackblur fontslabo" >3</a>
			<p class="fontgrey">Guest Details</p>
		</div>
		<div class="large-3 columns centerdiv">
			<a href="#" class="button round fontslabo" style="background-color:#00136b;">4</a>
			<p class="fontgrey">Reservation Complete</p>
		</div>
</div>

</div>
</div>

<div class="row">
	<div class="large-4 columns blackblur fontcolor" style="margin-left:-10px; padding:10px;">

		<div class="large-12 columns " >
		<p><b>Your Reservation</b></p><hr class="line">
				<form name="guestdetails" action="unsetroomchosen.php" method="post" >
				<div class="row">
					<div class="large-12 columns">
						<div class="row">

							<div class="large-5 columns" style="max-width:100%;">
								<span class="fontgreysmall">Check In
								</span>
							</div>

							<div class="large-5 columns" style="max-width:100%;">
								<span class="">: <?php echo $_SESSION['checkin_date'];?>
								</span>

							</div>
						</div>
						<div class="row">
							<div class="large-5 columns" style="max-width:100%;">
								<span class="fontgreysmall">Check Out
								</span>
							</div>

							<div class="large-5 columns" style="max-width:100%;">
								<span class="">: <?php echo $_SESSION['checkout_date'];?>
								</span>

							</div>
						</div>
						<div class="row">
							<div class="large-5 columns" style="max-width:100%;">
								<span class="fontgreysmall">Adults
								</span>
							</div>

							<div class="large-5 columns" style="max-width:100%;">
								<span class="">: <?php echo $_SESSION['adults'];?>
								</span>

							</div>
						</div>
						<div class="row">
							<div class="large-5 columns" style="max-width:100%;">
								<span class="fontgreysmall">Childrens
								</span>
							</div>

							<div class="large-5 columns" style="max-width:100%;">
								<span class="">: <?php echo $_SESSION['childrens'];?>
								</span>

							</div>
						</div>
						<div class="row">
							<div class="large-5 columns" style="max-width:100%;">
								<span class="fontgreysmall" >Night Stay(s)
								</span>
							</div>

							<div class="large-5 columns" style="max-width:100%;">
								<span class="">: <?php echo $_SESSION['total_night'];?>
								</span>

							</div>
						</div>
						<div class="row"><hr>
							<div class="large-6 columns" style="max-width:100%;">
								<span class="fontgreysmall" >Room Selected
								</span>
							</div>

							<div class="large-4 columns" style="max-width:100%;">
								<span class="fontgreysmall">Qty
								</span>

							</div>
						</div>
						<div class="row">
							<div class="large-6 columns" style="max-width:100%;">
								<span class="" ><?php

													foreach ($_SESSION['roomname'] as &$value0 ) {
													echo $value0;
													print "<br>";
													} ;

												?>

								</span>
							</div>

							<div class="large-4 columns" style="max-width:100%;">
								<span class="">
								<?php foreach ($_SESSION['roomqty'] as &$value1 ) {
													echo $value1;
													print "<br>";
													} ;

												?>
								</span>

							</div>
						</div>

					</div>
				</div><br>
				<div class="row">
						<div class="large-12 columns" style="max-width:100%;">
							<p class="fontgrey borderstyle" style="text-align:center;">15% Deposit Due Now<br>
							<span class="fontslabo " style="font-size:32px; text-align:center;"> <?php echo $_SESSION['deposit'];?> EUR</span>
							<br><span class="fontgrey" style="text-align:center;">Total</span><br>
							<span class="fontslabo" style="font-size:32px; text-align:center;"> <?php echo $_SESSION['total_amount'];?> EUR</span></p>

						</div>

						<div class="large-12 columns" style="max-width:100%;">


						</div>
				</div>



				  <div class="row">
					<div class="large-12 columns" >
						<button name="submit" href="#" class="button small fontslabo" style="background-color:#00136b; width:100%;">Edit Reservation</button>
					</div>
				  </div>
				</form>
		</div>



	</div>
	<div class="large-8 columns blackblur fontcolor" style="padding:10px">

		<div class="large-12 columns" >
		<p><b>Reservation Complete</b></p><hr class="line">
		<p>Details of your reservation have just been sent to you
		in a confirmation email. Please check your spam folder if you didn't received any email. We look forward to see you soon. In the
		meantime, if you have any questions, feel free to contact us.</p>
		<p>
		<i class="icon-phone" style="font-size:24px"></i> <span class="i-name fontgrey">Phone</span><span class="i-code">&emsp;+353834113315</span><br>
        <i class="icon-fax" style="font-size:24px"></i> <span class="i-name fontgrey">Fax</span><span class="i-code"> &emsp;&emsp;0834113315</span><br>
        <i class="icon-mail-alt"style="font-size:24px"> </i> <span class="i-name fontgrey">Email</span><span class="i-code">&emsp; khkim1738@naver.com</span>
		</p><hr>
		<div class="row">
			<div class="large-12 columns" >
					<!--form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" >
					<input type="hidden" name="cmd" value="_xclick">
					<input type="hidden" name="business" value="mrzulkarnine@gmail.com">
					<input type="hidden" name="lc" value="MY">
					<input type="hidden" name="item_name" value="15% Hotel Deposit Payment">
					<input type="hidden" name="amount" value="<?php $amount = $_SESSION['deposit']; print $amount; ?>">
					<input type="hidden" name="currency_code" value="MYR">
					<input type="hidden" name="button_subtype" value="services">
					<input type="hidden" name="no_note" value="0">
					<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
					<img type="image" src="img/paypal.jpg" style="background-color:white; width:32%; height:14%; padding:2px; " ></img>
					<br><button class="button small " border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" style="width:32%;background-color:#2ecc71; ">Pay Room Deposit Now</button>
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form-->


					</form>



					<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">

					<input type="hidden" name="cmd" value="_xclick">
					<input type="hidden" name="business" value="khkim1738-facilitator@naver.com">
					<input type="hidden" name="return" value="http://localhost/hotel/page2/successmessage.php">
          	<input type="hidden" name="custom" value="<?php $_SESSION['booking_id'];?>">
            <input type="hidden" name="c_name" value="<?php $_SESSION['firstname'];?>">
          		<input type="hidden" name="item_name" value="15% Hotel Deposit Payment">
				  <input type="hidden" name="amount" value="<?php $amount = $_SESSION['deposit']; print $amount; ?>"><br />
					<input type="image" style="width: 150px;height: auto;"vname="submit" border="0" src="http://www.goodtimesguitar.com/uploads/paypal-button-300x171.png" alt="PayPal - The safer, easier way to pay online">

					</form>
			</div>
		</div>
		</div>



	</div>


</div>

<script>
</script>
</body></html>
