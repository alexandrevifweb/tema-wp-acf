<?php 
	// Template Name: Sobre

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

	

	<section>
		<div class="container">
			<div class=" text-center">
				<small><?php echo $small; ?></small>
				<h3><?php echo $titulo; ?></p>
			</div>
		</div>
		
	</section>


	<section class="p-5" style="background-image: url(https://images.unsplash.com/photo-1501084817091-a4f3d1d19e07?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80); background-repeat: no-repeat; background-size: 100%">
		<div class="p-5" style="background-color: white">
			<div class="row" >
				<h3 class="text-center" ><?php echo $titulo; ?></h3>
				<div class="col">
					<p>
						<?php echo $texto; ?>
					</p>
				</div>
				<div class="col">
					<p>
						<?php echo $texto; ?>
					</p>
				</div>
				<div class="col">
					<p>
						<?php echo $texto; ?>
					</p>
				</div>
				
			</div>
			<button class="">
				CONHECER
			</button>
		</div>
		
	</section>


	<section>
		<div class="container">
			<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
			  <div class="carousel-indicators">
			    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
			    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
			  </div>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img src="https://images.unsplash.com/photo-1609189184127-04652523de91?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="https://images.unsplash.com/photo-1609189183170-d7a9ed92a1e2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="https://images.unsplash.com/photo-1609189184127-04652523de91?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="d-block w-100" alt="...">
			    </div>
			  </div>
			  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="visually-hidden">Previous</span>
			  </button>
			  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="visually-hidden">Next</span>
			  </button>
			</div>
		</div>
		
	</section>




	<section style="background-color: #3c4f3c; color: white;">
		<div class="p-5 text-center">
			<small><?php echo $small; ?></small>
			<h3><?php echo $titulo; ?></h3>
			<p>
				<?php echo $paragrafo; ?>
			</p>
		</div>
		
	</section>

	
	<section >
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
	</section>










<?php 
	get_footer();
?>