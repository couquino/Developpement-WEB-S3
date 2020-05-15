<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Saint-Pavut</title>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="<?php echo base_url()?>assets/css/mdb.min.css" rel="stylesheet">
	<!-- Your custom styles (optional) -->
	<link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">
</head>
<body>
<?php $this->load->view('Navbar_view'); ?>
<!-- Jumbotron -->
<div class="card card-image" style="background-image: url(<?php echo base_url()?>assets/photos/background_accueil.jpg);">
	<div class="mask cloudy-knoxville-gradient"></div>
	<div class="text-white text-center rgba-stylish-strong py-5 px-4">
		<div class="py-5">
			<!-- Content -->
			<h2 class="card-title h2 my-4 py-2">Les Manifestations</h2>
			<p id="" class="mb-4 pb-2 px-md-5 mx-md-5">Retrouvez ici toutes nos différentes manifestations.</p>
		</div>
	</div>
</div>
<!-- Jumbotron -->

<!-- Content-manifestations -->
<div class="container pt-3 pb-3 mw-100">
	<div class="row row-cols-1 row-cols-sm-5 row-cols-md-5 row-cols-lg-5 row-cols-xl-5">
		<?php foreach ($toutes as $ligne ) { ?>
		<div class="col mb-4 mt-4">
				<!-- Card -->
				<div class="card wow h-100">
					<!-- Card image -->
					<div class="view overlay zoom">
						<img class="card-img-top" src="<?php echo base_url() ?>assets/photos/<?php echo $ligne->manif_photo ?>"
							 alt="<?php echo $ligne->manif_intitule ?>">
						<div class="mask flex-center rgba-black-strong">
							<p class="white-text"><?php echo $ligne->manif_intitule ?></p>
						</div>
						<a href="#!">
							<div class="mask rgba-white-slight"></div>
						</a>
					</div>
					<!-- Card content -->
					<div class="card-body text-center">
						<!-- Title -->
						<h4 class="card-title text-capitalize"><?php echo $ligne->manif_intitule ?></h4>
						<!-- Text -->
						<p class="lead">Type:</p>
						<p class="card-text text-capitalize"><?php echo $ligne->manif_type ?></p>
						<p class="lead">Description:</p>
						<p class="card-text"><?php echo $ligne->manif_description ?></p>
						<p class="lead">Date:</p>
						<p class="card-text"><?php echo $ligne->manif_date ?></p>
						<p class="lead">Prix:</p>
						<p class="card-text"><?php echo $ligne->manif_prix_place ?> €</p>
						<!-- Button -->
						<a href="#" class="btn btn-action mt-2 mb-2">Réserver</a>
					</div>
				</div>
				<!-- Card -->
		</div>
		<?php } ?>
		<div class="container text-center text-dark">
			<nav id="pagination" aria-label="Pagination" class="align-center text-center">
				<?php echo $pagination; ?>
			</nav>
		</div>
	</div>
</div>
<!---->

<!-- Footer -->
<footer class="page-footer sticky-bottom font-small special-color-dark pt-4">
	<!-- Footer Elements -->
	<div class="container">
		<!-- Social buttons -->
		<ul class="list-unstyled list-inline text-center">
			<li class="list-inline-item">
				<a href="https://www.linkedin.com/in/alo%C3%AFs-gaucher/" target="blank" class="btn-floating btn-li mx-1">
					<i class="fab fa-linkedin-in"> </i>
				</a>
			</li>
			<li class="list-inline-item">
				<a href="https://github.com/couquino/Developpement-WEB-S3" target="blank" class="btn-floating btn-github mx-1">
					<i class="fab fa-github"> </i>
				</a>
			</li>
		</ul>
		<!-- Social buttons -->
	</div>
	<!-- Footer Elements -->
	<!-- Copyright -->
	<div class="footer-copyright text-center pt-3 pb-3">© <?php echo date("Y"); ?> Copyright:
		<a href="https://alois-gaucher.fr/"> Aloïs GAUCHER</a>
	</div>
	<!-- Copyright -->

</footer>
<!-- Footer -->
<!-- Importing JS -->
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/mdb.min.js"></script>
<!-- Reveal when scrolling, add: wow fadeInUp classes -->
<script type="text/javascript">
	$(document).ready(function() {
		/* WOW Animations */
		new WOW().init();
		$( ".wow" ).addClass( "fadeInUp" );

		/* Logo Animations */
		function bounce() {
			$('#gilbert').addClass('animated bounce');
		}
		bounce();

		$('li').click(function() {
			$(this).addClass('active').siblings().removeClass('active');
		});
	});
</script>
</body>
