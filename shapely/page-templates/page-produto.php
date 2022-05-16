<?php 
	// Template Name: Serviços
	
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
<style type="text/css">
	 /*OVERLAY IMAGE*/
	


  .centraliza{
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
  }

  .icone-tam{
  	width: 60%;
  	
  }

</style>
	
	<!-- 	TRANSFORMAR TEXTOS EM CAMPOS -->
	<!-- O SECCTION TEM PADDING -->
	<!-- A PAGINA JA TEM CONTAINER -->


	


	<!-- comprar -->	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-7">

					<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="width: 90%;">
					  <div class="carousel-indicators">
					    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
					    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
					  </div>
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <img src="https://images.unsplash.com/photo-1524678606370-a47ad25cb82a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80" class="d-block w-100" alt="...">
					    </div>
					    <div class="carousel-item">
					      <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDJ8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="...">
					    </div>
					    <div class="carousel-item">
					      <img src="https://images.unsplash.com/photo-1524678606370-a47ad25cb82a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80" class="d-block w-100" alt="...">
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
				<div class="col">
					
					<h6><?php echo $texto; ?></h6>
					<small>By <a href=""><?php echo $titulo; ?></a></small>
					<br>
					<br>
					<h6><b>R$ 29,99</b></h6>
					<hr>

					<div class="accordion accordion-flush" id="accordionFlushExample">
					  <div class="accordion-item">
					    <h2 class="accordion-header" id="flush-headingOne">
					      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
					       	Details
					      </button>
					    </h2>
					    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
					      <div class="accordion-body">
					      	
					      	<?php echo $paragrafo; ?>
					      </div>
					    </div>
					  </div>
					</div>
					 <br>
				    <a href="#">
				    	<button class="btn btn-success">Buy</button>
				    </a>

				</div>
			</div>
		</div>
	</section>


	<!-- informações -->
	<section>
		<div class="container">
			<div class="row">
				<div class="col">
					<img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=799&q=80">
				</div>
				<div class="col">
					<img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=799&q=80">
				</div>
				<div class="col">
					<img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=799&q=80">
				</div>
			</div>
			<div class="pt-4 row">
				<img style="width: 100%" src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80">
			</div>
			<div class="py-5">
				<h4><?php echo $titulo; ?></h4>
				<p>	<?php echo $paragrafo; ?></p>
				<br>
				<p>	<?php echo $paragrafo; ?><?php echo $paragrafo; ?></p>

			</div>
		</div>
	</section>


	<!-- mais produtos -->
	<section>
		<div class="container text-center">
			<h4>More</h4>
			*slider*
		</div>
	</section>







<?php 
	get_footer();
?>