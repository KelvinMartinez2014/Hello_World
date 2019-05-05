<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Main Page</title>

	<!-- CSS -->
	<link rel="stylesheet" href="resources/css/nav_bar.css">
	<link rel="stylesheet" type="text/css" href="resources/css/bootstrap.css">
	

	<!-- ATTENTION: The following php closes head and opens body -->
	<?php 
	include 'resources/php/lookincart_db.php';
	include 'resources/php/nav_bar.php';

	$sql = "Select vendor_id, count(*) from Historial group by vendor_id order by count(*) desc limit 3;";
	$result = mysqli_query($conn, $sql);
	echo("Error description: " . mysqli_error($conn));
	$Profile_object = array();
	while ($row = mysqli_fetch_assoc($result)) {
		array_push($Profile_object, $row);
	}
	$ListVendor=array();

	foreach($Profile_object as $listVendor){
		$sql="select * from users where UserID = ".$listVendor['vendor_id'].";";
		$result = mysqli_query($conn, $sql);
		while($row = mysqli_fetch_assoc($result)){
			array_push($ListVendor,$row);
		}
	}
	$num=1;
	foreach($ListVendor as $row)
	{
		if($num==1){
			$Name1=$row['Name'];
			$Phone1=$row['Phone'];
			$Email1=$row['Email'];
			$Image1=$row['Image'];
			
		}
		
		if($num==2){
			$Name2=$row['Name'];
			$Phone2=$row['Phone'];
			$Email2=$row['Email'];
			$Image2=$row['Image'];
		}
		
		if($num==3){
			$Name3=$row['Name'];
			$Phone3=$row['Phone'];
			$Email3=$row['Email'];
			$Image3=$row['Image'];
		}
		$num=$num+1;
	}
	?>
	
	<div class="container transparentContainer" style="margin-top: 4%;">
		<!--Section: Testimonials v.1-->
<section class="section pb-3 text-center">

  <!--Section heading-->
  <h1 class="section-heading h1 pt-4">Top Sellers</h1>
  <!--Section description-->
  <p class="section-description">In the row below display the top 3 venders of greenbooks.</p>

  <div class="row">

    <!--Grid column-->
    <div class="col-lg-4 col-md-12 mb-4">

      <!--Card-->
      <div class="card testimonial-card">

        <!--Background color-->
        <div class="card-up teal lighten-2">
        </div>

        <!--Avatar-->
        <div class="view overlay rounded z-depth-2 mb-4"><img src="<?php echo $Image1;?>"
            alt="avatar mx-auto white" height="200" width="350" align="left"></img>
        </div>

        <div class="card-body">
          <!--Name-->
           <h4 class="card-title mt-1"><?php echo $Name1; ?></h4>
          <hr>
          <!--Quotation-->
			<p> Phone:<?php echo $Phone1; echo"<br>";?> Email: <?php echo $Email1; echo"<br>";?></p>
        </div>

      </div>
      <!--Card-->

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-4 col-md-12 mb-4">

      <!--Card-->
      <div class="card testimonial-card">

        <!--Background color-->
        <div class="card-up blue lighten-2">
        </div>

       <!--Avatar-->
       <div class="view overlay rounded z-depth-2 mb-4"><img src="<?php echo $Image2;?>"
            alt="avatar mx-auto white" height="200" width="350" align="left"></img>
        </div>

        <div class="card-body">
          <!--Name-->
           <h4 class="card-title mt-1"><?php echo $Name2; ?></h4>
          <hr>
          <!--Quotation-->
			<p> Phone:<?php echo $Phone2; echo"<br>";?> Email: <?php echo $Email2; echo"<br>";?></p>
        </div>
		</div>
      <!--Card-->

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-4 col-md-12 mb-4">

      <!--Card-->
      <div class="card testimonial-card">

        <!--Background color-->
        <div class="card-up deep-purple lighten-2"></div>

        <!--Avatar-->
        <div class="view overlay rounded z-depth-2 mb-4"><img src="<?php echo $Image3;?>"
            alt="avatar mx-auto white" height="200" width="350" align="left"></img>
        </div>

        <div class="card-body">
          <!--Name-->
           <h4 class="card-title mt-1"><?php echo $Name3; ?></h4>
          <hr>
          <!--Quotation-->
			<p> Phone:<?php echo $Phone3; echo"<br>";?> Email: <?php echo $Email3; echo"<br>";?></p>
        </div>
      </div>
      <!--Card-->

    </div>
    <!--Grid column-->

  </div>

</section>
<!--Section: Testimonials v.1-->
		<!-- Section: Magazine v.3 -->
		<section class="magazine-section my-5">

			<!-- Section heading -->
			<h2 class="h1-responsive font-weight-bold text-center my-5">Popular Books</h2>
			<!-- Section description -->
			<p class="text-center w-responsive mx-auto mb-5">Duis aute irure dolor in reprehenderit in voluptate velit
				esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
			qui officia deserunt mollit id laborum.</p>

			<!-- Grid row -->
			<div class="row">

				<!-- Grid column -->
				<div class="col-lg-4 col-md-12 mb-lg-0 mb-5">

					<!-- Featured news -->
					<div class="single-news mb-3">

						<!-- Image -->
						<div class="view overlay rounded z-depth-2 mb-4">
							<img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/86.jpg" alt="Sample image">
							<a>
								<div class="mask rgba-white-slight"></div>
							</a>
						</div>

						<!-- Grid row -->
						<div class="row mb-3">

							<!-- Grid column -->
							<div class="col-12">

								<!-- Badge -->
								<a href="#!"><span class="badge pink"><i class="fas fa-camera pr-2" aria-hidden="true"></i>Ciencias</span></a>

							</div>
							<!-- Grid column -->

						</div>
						<!-- Grid row -->

						<!-- Title -->
						<div class="d-flex justify-content-between">
							<div class="col-11 text-truncate pl-0 mb-3">
								<a href="#">Matematicas</a>
							</div>
							<a><i class="fas fa-angle-double-right"></i></a>
						</div>

					</div>
					<!-- Featured news -->

					<!-- Small news -->
					<div class="single-news mb-3">

						<!-- Title -->
						<div class="d-flex justify-content-between">
							<div class="col-11 text-truncate pl-0 mb-3">
								<a>Biologia</a>
							</div>
							<a><i class="fas fa-angle-double-right"></i></a>
						</div>

					</div>
					<!-- Small news -->

					<!-- Small news -->
					<div class="single-news mb-3">

						<!-- Title -->
						<div class="d-flex justify-content-between">
							<div class="col-11 text-truncate pl-0 mb-3">
								<a>Quimica</a>
							</div>
							<a><i class="fas fa-angle-double-right"></i></a>
						</div>

					</div>
					<!-- Small news -->

					<!-- Small news -->
					<div class="single-news mb-3">

						<!-- Title -->
						<div class="d-flex justify-content-between">
							<div class="col-11 text-truncate pl-0 mb-3">
								<a>Fisica</a>
							</div>
							<a><i class="fas fa-angle-double-right"></i></a>
						</div>

					</div>
					<!-- Small news -->

					<!-- Small news -->
					<div class="single-news">

						<!-- Title -->
						<div class="d-flex justify-content-between">
							<div class="col-11 text-truncate pl-0">
								<a>Enfermeria</a>
							</div>
							<a><i class="fas fa-angle-double-right"></i></a>
						</div>

					</div>
					<!-- Small news -->

				</div>
				<!-- Grid column -->

				<!-- Grid column -->
				<div class="col-lg-4 col-md-6 mb-md-0 mb-5">

					<!-- Featured news -->
					<div class="single-news mb-3">

						<!-- Image -->
						<div class="view overlay rounded z-depth-2 mb-4">
							<img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/31.jpg" alt="Sample image">
							<a>
								<div class="mask rgba-white-slight"></div>
							</a>
						</div>

						<!-- Grid row -->
						<div class="row mb-3">

							<!-- Grid column -->
							<div class="col-12">

								<!-- Badge -->
								<a href="#!"><span class="badge deep-orange"><i class="fas fa-plane pr-2" aria-hidden="true"></i>Artes</span></a>

							</div>
							<!-- Grid column -->

						</div>
						<!-- Grid row -->

						<!-- Title -->
						<div class="d-flex justify-content-between">
							<div class="col-11 text-truncate pl-0 mb-3">
								<a>Humanidades</a>
							</div>
							<a><i class="fas fa-angle-double-right"></i></a>
						</div>

					</div>
					<!-- Featured news -->

					<!-- Small news -->
					<div class="single-news mb-3">

						<!-- Title -->
						<div class="d-flex justify-content-between">
							<div class="col-11 text-truncate pl-0 mb-3">
								<a>Cine</a>
							</div>
							<a><i class="fas fa-angle-double-right"></i></a>
						</div>

					</div>
					<!-- Small news -->

					<!-- Small news -->
					<div class="single-news mb-3">

						<!-- Title -->
						<div class="d-flex justify-content-between">
							<div class="col-11 text-truncate pl-0 mb-3">
								<a>Musica</a>
							</div>
							<a><i class="fas fa-angle-double-right"></i></a>
						</div>

					</div>
					<!-- Small news -->

					<!-- Small news -->
					<div class="single-news mb-3">

						<!-- Title -->
						<div class="d-flex justify-content-between">
							<div class="col-11 text-truncate pl-0 mb-3">
								<a>Lenguajes</a>
							</div>
							<a><i class="fas fa-angle-double-right"></i></a>
						</div>

					</div>
					<!-- Small news -->

					<!-- Small news -->
					<div class="single-news">

						<!-- Title -->
						<div class="d-flex justify-content-between">
							<div class="col-11 text-truncate pl-0">
								<a>Actuacion</a>
							</div>
							<a><i class="fas fa-angle-double-right"></i></a>
						</div>

					</div>
					<!-- Small news -->

				</div>
				<!-- Grid column -->

				<!-- Grid column -->
				<div class="col-lg-4 col-md-6 mb-0">

					<!-- Featured news -->
					<div class="single-news mb-3">

						<!-- Image -->
						<div class="view overlay rounded z-depth-2 mb-4">
							<img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/52.jpg" alt="Sample image">
							<a>
								<div class="mask rgba-white-slight"></div>
							</a>
						</div>

						<!-- Grid row -->
						<div class="row mb-3">

							<!-- Grid column -->
							<div class="col-12">

								<!-- Badge -->
								<a href="#!"><span class="badge success-color"><i class="fas fa-plane pr-2" aria-hidden="true"></i>Miscelanio</span></a>

							</div>
							<!-- Grid column -->

						</div>
						<!-- Grid row -->

						<!-- Title -->
						<div class="d-flex justify-content-between">
							<div class="col-11 text-truncate pl-0 mb-3">
								<a >Book Category</a>
								<!-- class="font-weight-bold" -->
							</div>
							<a><i class="fas fa-angle-double-right"></i></a>
						</div>

					</div>
					<!-- Featured news -->

					<!-- Small news -->
					<div class="single-news mb-3">

						<!-- Title -->
						<div class="d-flex justify-content-between">
							<div class="col-11 text-truncate pl-0 mb-3">
								<a>Book Category</a>
							</div>
							<a><i class="fas fa-angle-double-right"></i></a>
						</div>

					</div>
					<!-- Small news -->

					<!-- Small news -->
					<div class="single-news mb-3">

						<!-- Title -->
						<div class="d-flex justify-content-between">
							<div class="col-11 text-truncate pl-0 mb-3">
								<a>Book Category</a>
							</div>
							<a><i class="fas fa-angle-double-right"></i></a>
						</div>

					</div>
					<!-- Small news -->

					<!-- Small news -->
					<div class="single-news mb-3">

						<!-- Title -->
						<div class="d-flex justify-content-between">
							<div class="col-11 text-truncate pl-0 mb-3">
								<a>Book Category</a>
							</div>
							<a><i class="fas fa-angle-double-right"></i></a>
						</div>

					</div>
					<!-- Small news -->

					<!-- Small news -->
					<div class="single-news">

						<!-- Title -->
						<div class="d-flex justify-content-between">
							<div class="col-11 text-truncate pl-0">
								<a>Book Category</a>
							</div>
							<a><i class="fas fa-angle-double-right"></i></a>
						</div>

					</div>
					<!-- Small news -->

				</div>
				<!-- Grid column -->

			</div>
			<!-- Grid row -->

		</section>

		<!-- Section: Magazine v.3 -->




	</div>
	<!-- JQuery -->
	<script type="text/javascript" src="resources/vendor/mdb/js/jquery-3.3.1.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="resources/vendor/mdb/js/bootstrap.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="resources/vendor/mdb/js/popper.min.js"></script>

	<!-- MDB core JavaScript -->
	<!-- <script type="text/javascript" src="resources/vendor/mdb/js/mdb.js"></script> -->
	
	<script type="text/javascript">
		$(function () {
			$("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
		});
		$(document).ready(function() {  
			var body = document.body;
			body.classList.add("mainmenubackground");
		});
	</script>
</body>
</html>
