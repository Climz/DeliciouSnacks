<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>DeliciouSnacks</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
		<link rel="icon" href="images/logo.png" sizes="16x16">
	</head>
	<body style="margin-bottom:200px">
		<!--Header-->
		<?php
		include 'includes/header_menu.php';
		include 'includes/check-if-added.php';
	
		?>
		<!--Header ends-->
	
		<!--menu highlights start-->
		<div class="container pt-3" style="margin-top:65px">
			<div class="row text-center ">
				<div class="col-6 col-md-3 py-3">
					<a href="products.php#crisps"> <img src="images/с.jpg" class="img-fluid " alt="" style="border-radius:0.5rem">
						<div class="h5 pt-3 font-weight-bolder">
							Чипсы
						</div>
					</a>
				</div>
				<div class="col-6 col-md-3 py-3 " >
					<a href="products.php#soda"  >
						<img src="images/s.jpg" class="img-fluid zoom" alt="" style="border-radius:0.5rem" >
						<div class="h5 pt-3 font-weight-bolder">
							Газировка
						</div>
					</a>
				</div>
				<div class="col-6 col-md-3 py-3">
					<a href="products.php#beer">
						<img src="images/b.jpg" class="img-fluid   " alt="" style="border-radius:0.5rem">
						<div class="h5 pt-3 font-weight-bolder">
							Пиво
						</div>
					</a>
				</div>
				<div class="col-6 col-md-3 py-3">
					<a href="products.php#beer's_snacks">
						<img src="images/ff.jpg" class="img-fluid  " alt="" style="border-radius:0.5rem">
						<div class="h5 pt-3 font-weight-bolder">
							К пиву
						</div>
					</a>
				</div>
			</div>
		</div>
    <!--menu highlights end-->
    <!--footer -->
    <?php 
	include 'includes/footer.php';
	?>
    <!--footer end-->
	</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});
$(document).ready(function() {

if(window.location.href.indexOf('#login') != -1) {
  $('#login').modal('show');
}

});
</script>
<?php if (isset($_GET['error'])) {$z = $_GET['error'];
    echo "<script type='text/javascript'> $(document).ready(function(){ $('#signup').modal('show');});</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
    
<?php if (isset($_GET['errorl'])) {$z = $_GET['errorl'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
</html>