<!-- test-->
<!-- nn-->
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>

<head>
<meta charset="UTF-8">
<title>CSTICKET</title>

<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="fontawesome/css/fontawesome.css"
	type="text/css" />

<link rel="stylesheet" href="css/bootstrap.min.css" />
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>


<style>
/* Make the image fully responsive */
.carousel-inner img {
	width: 100%;
	height: 100%;
}
</style>

<script type="text/javascript">
	function BuyTicket(thiz)
	{
		$('#loginForm').modal('show');
	}
	
</script>



</head>

<body>
	<div id="header">
		<div>
			<div id="logo">
				<a href="index.html"><img src="images/logo.png" alt="LOGO"></a>
			</div>
			<ul id="navigation">
				<li class="selected"><a href="Home.php">Home</a></li>
				<li><a href="Buy.php">Buy Ticket</a></li>
				<li><a href="Register.php">Register</a></li>
				<li><a href="Card.php">CardInformation</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</div>
	</div>
	<div id="contents">
		<div id="adbox">
			<div id="carouselExampleControls" class="carousel slide"
				data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="images/1.jpg" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="images/2.jpg" alt="Second slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="images/3.jpg" alt="Third slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="images/4.jpg" alt="Four slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="images/5.jpg" alt="Five slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="images/6.jpg" alt="Six slide">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls"
					role="button" data-slide="prev"> <span
					class="carousel-control-prev-icon" aria-hidden="true"></span> <span
					class="sr-only">Previous</span>
				</a> <a class="carousel-control-next"
					href="#carouselExampleControls" role="button" data-slide="next"> <span
					class="carousel-control-next-icon" aria-hidden="true"></span> <span
					class="sr-only">Next</span>
				</a>
			</div>
		</div>

		<div id="featured">
			<div class="container">
				<ul>
					<li><a href="Buy.php"><img src="images/1_1.jpg" alt="Img"></a> <B>Khalid
							Free Spirit World Tour Live in Bangkok 2020</B>
						<p>24 มี.ค. 2563</p>
						<p>อิมแพ็ค อารีน่า เมืองทองธานี</p>
						<button type="button" class="btn btn-outline-danger"
							onclick="BuyTicket(this);">รายละเอียด</button>
						<button type="button" class="btn btn-info">ซื้อบัตร</button></li>

					<li><a href="Home.php"><img src="images/2_2.jpg" alt="Img"></a> <B>GOT7
							2020 WORLD TOUR ‘KEEP SPINNING’ IN BANGKOK</B>
						<p>15 ก.พ. 2563 - 16 ก.พ. 2563</p>
						<p>สนามราชมังคลากีฬาสถาน</p>
						<button type="button" class="btn btn-outline-danger">เร็วๆนี้</button>
					</li>

					<li><a href="Home.php"><img src="images/3_3.jpg" alt="Img"></a> <B>2020
							BAEKHO MINI CONCERT “BAEKHO-liday” IN BANGKOK</B>
						<p>16 ก.พ. 2563</p>
						<p>เอ็มซีซี ฮอลล์ เดอะมอลล์ บางกะปิ</p>
						<button type="button" class="btn btn-outline-danger">เร็วๆนี้</button>
					</li>

					<li><a href="Home.php"><img src="images/4_2.jpg" alt="Img"></a> <B>COOLfahrenheit
							Presents D2B Infinity Fun 2020</B>
						<p>16 ก.พ. 2563</p>
						<p>อิมแพ็ค อารีน่า เมืองทองธานี</p>
						<button type="button" class="btn btn-outline-danger">เร็วๆนี้</button>
					</li>

					<li><a href="Home.php"><img src="images/5_1.jpg" alt="Img"></a> <B>RUEL
							Free Time World Tour Live in Bangkok 2020</B>
						<p>14 มี.ค. 2563</p>
						<p>GMM Live House @ Central World Fl.8</p>
						<button type="button" class="btn btn-outline-danger">เร็วๆนี้</button>
					</li>

					<li><a href="Home.php"><img src="images/6_1.jpg" alt="Img"></a> <B>Chang
							Music Connection Presents เทศกาลดนตรี GENIE</B>
						<p>9 ก.พ. 2563</p>
						<p>Jolly Land เขาค้อ จ.เพชรบูรณ์</p>
						<button type="button" class="btn btn-outline-danger">เร็วๆนี้</button>
					</li>

				</ul>
			</div>
		</div>
	</div>

	<div id="footer">
		<div id="connect">
			<a href="http://freewebsitetemplates.com/go/facebook/"
				target="_blank" class="facebook"></a><a
				href="http://www.freewebsitetemplates.com/misc/contact/"
				target="_blank" class="email"></a><a
				href="http://freewebsitetemplates.com/go/twitter/" target="_blank"
				class="twitter"></a><a
				href="http://freewebsitetemplates.com/go/googleplus/"
				target="_blank" class="googleplus"></a>
		</div>
		<p>© 2023 Vistida. All Rights Reserved.</p>
	</div>

	<!-- Modal -->

	<div class="modal fade" id="loginForm" tabindex="-1" role="dialog"
		aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">รายละเอียด</h5>
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group">
							<label for="recipient-name" class="col-form-label">วันที่แสดง :
								อังคารที่ 24 มีนาคม 2563</label><br> <label for="message-text"
								class="col-form-label">สถานที่ : อิมแพ็คอรีน่า</label><br> <label
								for="message-text" class="col-form-label">เวลาแสดง : 19.30 น.</label><br>
							<label for="message-text" class="col-form-label">ราคาบัตร :
								1,800/2,300/2,800/3,500 THB</label>
							<p>
						
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary"
						data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
</body>



</html>