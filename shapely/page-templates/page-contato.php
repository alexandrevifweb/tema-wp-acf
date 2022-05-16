<?php 
	// Template Name: Contato
	
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
			<div>
				<h3>ABOUT US</h3>
				<p><b><?php echo $texto; ?></b></p>
				<p><?php echo $paragrafo; ?><?php echo $paragrafo; ?></p>
			</div>
		</div>
		
	</section>


	<section>
		<div class="container">
			<div class="row">
				
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