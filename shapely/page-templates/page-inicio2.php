<?php 
	// Template Name: Início
	
	$titulo_pintura = get_field("titulo-card-pintura");
	$titulo_parede = get_field("titulo-card-parede");
	$titulo_telha = get_field("titulo-card-telha");
	$titulo_aula = get_field("titulo-card-aula");


	$titulo = get_field("titulo");
	$small = get_field("small");
	$texto = get_field("texto");
	$paragrafo = get_field("paragrafo");

	

	

	get_header();
	
	

?>
	
	<!-- 	TRANSFORMAR TEXTOS EM CAMPOS -->
	<!-- O SECCTION TEM PADDING -->
	<!-- A PAGINA JA TEM CONTAINER -->





	<!-- <section>
		<div class="slider">
			<button class="prev-arrow"><i class="fa-solid fa-chevron-left"></i></button>
			<div class="slides">
				<div>
					
					<img src="https://images.unsplash.com/photo-1543852786-1cf6624b9987?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDN8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" width=300 alt="">
				</div>
				<div>
					<img src="https://images.unsplash.com/photo-1548366086-7f1b76106622?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=376&q=80" width=300 alt="">
				</div>
				<div>
					<img src="https://images.unsplash.com/photo-1536589961747-e239b2abbec2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" width=300 alt="">
				</div>
				<div>
					<img src="https://images.unsplash.com/photo-1596921825946-d738194fac80?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1372&q=80" width=300 alt="">
				</div>
			</div>
			<button class="next-arrow"><i class="fa-solid fa-chevron-right"></i></button>
		</div>
	</section> -->

	<style type="text/css">
		
		.cont-maior{
			position: relative;
			width: 900px;
			padding-right: 15px;
		    padding-left: 15px;
		    margin-right: auto;
		    margin-left: auto;

		}

	</style>


	<section style="padding: 0px">
		
		<div class="container">
			
			<div class="row">
				<div class="col text-start">
					<img style="width: 90%" class="text-end" src="https://images.unsplash.com/photo-1551180452-aea351b23949?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80">
				</div>
				<div class="col px-5 pt-5" style="/*background-color: #6a926a;*/align-content: start; display: flex; flex-direction: column; justify-content: space-between;">
					<div>
						<h2 class=""><?php echo $titulo; ?></h2>
						<p class="pt-2"><?php echo $paragrafo; ?></p>
						<button type="button" class="btn btn-success"><?php echo $titulo; ?></button>
					</div>
					

					<div class="row">
						<hr>
						<div class="col">
							<img style="width: 90%" src="https://images.unsplash.com/photo-1549887552-cb1071d3e5ca?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=465&q=80">
						</div>
						<div class="col">
							<img style="width: 96%" src="https://images.unsplash.com/photo-1576158130334-6b92e79390a5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80">
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
	</section>


	<br>

	<!-- <section style="padding: 0px">
		<div class="container">
			<div class="row">
				<div class="col text-start">
					<img style="width: 100%" class="text-end" src="https://images.unsplash.com/photo-1551180452-aea351b23949?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80">
				</div>
				<div class="col p-5" style="background-color: #6a926a; display: flex;align-content: start; flex-direction: column;justify-content: center;">
					<h2 class="text-white">BELALU</h2>
					<p class="pt-2 text-white"><?php echo $paragrafo; ?></p>
					<button type="button" class="btn btn-success"><?php echo $titulo; ?></button>
				</div>
			</div>
		</div>
	</section> -->



	<section style="background-color: #3c4f3c; color: white;">
		<div class="container text-center">
			<small><?php echo $small; ?></small>
			<h3><?php echo $titulo; ?></h3>
			<p><?php echo $paragrafo; ?></p>
		</div>
		
	</section>



	<section style="padding-bottom: 30px">
		<div class="container">
			<h2 class="text-center"><?php echo $titulo; ?></h2>
			<hr>
			<div class="row">
				<div class="col">
					<a href="">
						<div class="limite">
							<img src="https://images.unsplash.com/photo-1582561424760-0321d75e81fa?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=489&q=80" alt="css" class="img">
							<div class="overlay" style="flex-direction: column;">
								<img style="width: 50%" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-pintura.png">
								
								<br>
								<h2><?php echo $titulo; ?></h2>
							</div>
						</div>
						<br>
						<p><?php echo $texto; ?></p>
					</a>
				</div>
				<div class="col">
					<a href="">
						<div class="limite">
							<img src="https://images.unsplash.com/photo-1582561424760-0321d75e81fa?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=489&q=80" alt="css" class="img">
							<div class="overlay" style="flex-direction: column;">
								<img style="width: 50%" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-draw.png">
								<br>
								<h2><?php echo $titulo; ?></h2>
							</div>
						</div>
						<br>
						<p><?php echo $texto; ?></p>
					</a>
				</div>
				<div class="col">
					<a href="">
						<div class="limite">
							<img src="https://images.unsplash.com/photo-1582561424760-0321d75e81fa?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=489&q=80" alt="css" class="img">
							<div class="overlay" style="flex-direction: column;">
								<img style="width: 50%" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-tinta.png">
								<br>
								<h2><?php echo $titulo; ?></h2>
							</div>
						</div>
						<br>
						<p><?php echo $texto;?></p>
					</a>
				</div>
				<div class="col">
					<a href="">
						<div class="limite">
							<img src="https://images.unsplash.com/photo-1582561424760-0321d75e81fa?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=489&q=80" alt="css" class="img">
							<div class="overlay" style="flex-direction: column;">
								<img style="width: 50%" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-madeira.png">
								<br>
								<h2><?php echo $titulo; ?></h2>
							</div>
						</div>
						<br>
						<p><?php echo $texto;?></p>
					</a>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-4">
					<small>Lorem ipsum dolor sit amet,</small>
					<h3><?php echo $titulo; ?></h3>
				</div>
				<div class="col">
					<p><?php echo $paragrafo; ?></p>
				</div>
			</div>
			
		</div>
	</section>


<!-- 	<section>
		<div class="container text-center">
			<p>*slider fotos produtos e obras*</p>
		</div>
	</section> -->





	<section class="p-5" style="background-image: url(https://images.unsplash.com/photo-1501084817091-a4f3d1d19e07?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80); background-repeat: no-repeat; background-size: 100%">
		<div class="p-5" style="background-color: white">
			<div class="row" >
				<h3 class="text-center" ><?php echo $titulo; ?></h3>
				<div class="col">
					<p class="p-3">
						<?php echo $paragrafo; ?>
					</p>
				</div>
				<div class="col">
					<p class="p-3">
						<?php echo $paragrafo; ?>
					</p>
				</div>
				<div class="col">
					<p class="p-3">
						<?php echo $paragrafo; ?>
					</p>
				</div>
				
			</div>
			<div class="d-flex" style="justify-content: center">
				<button type="button" class="btn btn-success"><?php echo $titulo;?></button>
			</div>
			
		</div>
		
	</section>




	<!-- <section>
		<div class="container">
			<div class="d-flex" style="justify-content: center">
				<h2>Serviços</h2>
			</div>
			<hr>
			<div class="row">
				
				<div class="col">
					<a href="">
						<div class="limite">
							<img src="https://images.unsplash.com/photo-1596793999621-cbbbc1cf0048?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="css" class="img">
							<div class="overlay">
								<h2>Paredes</h2>
							</div>
						</div>
					</a>
					
				</div>
				<div class="col">
					<a href="">
						<div class="limite">
							<img src="https://images.unsplash.com/photo-1648737963059-59ec8e2d50c5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDN8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="css" class="img">
							<div class="overlay">
								<h2>Paredes</h2>
							</div>
						</div>
					</a>
					
				</div>
				<div class="col">
					<div class="limite">
						<img src="https://images.unsplash.com/photo-1581268753161-385a8bf08c8c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8YXJ0ZXxlbnwwfDB8MHx8&auto=format&fit=crop&w=500&q=60" alt="css" class="img">
						<div class="overlay">
							<h2>Aulas</h2>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</section> -->

	
	<!-- <section >
		<div class="container py-5">
			<div class="row">
				<h3>SERVIÇOS</h3>
				<hr>
				<div class="col">
					
					<img src="https://images.unsplash.com/photo-1547891654-e66ed7ebb968?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8YXJ0fGVufDB8MHwwfHw%3D&auto=format&fit=crop&w=500&q=60"  >
					<h4> <?php echo $titulo_pintura; ?> </h4>
				</div>
				<div class="col">
					
					<img src="https://images.unsplash.com/photo-1482160549825-59d1b23cb208?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80"  >
					<h4> <?php echo $titulo_parede; ?> </h4>
					
				</div>
				<div class="col">
					
					<img src="https://images.unsplash.com/photo-1569172122301-bc5008bc09c5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8YXJ0fGVufDB8MHwwfHw%3D&auto=format&fit=crop&w=500&q=60"  >
					<h4> <?php echo $titulo_telha; ?> </h4>
					
				</div>
				<div class="col">
					
					<img src="https://images.unsplash.com/photo-1513364776144-60967b0f800f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80"  >
					<h4> <?php echo $titulo_aula; ?> </h4>
					
				</div>
				
			</div>
			
		</div>
	</section> -->



<?php 
	get_footer();
?>