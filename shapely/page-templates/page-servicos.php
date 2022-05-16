<?php 
	// Template Name: Serviços
	


	$titulo = get_field("titulo");
	$small = get_field("small");
	$texto = get_field("texto");
	$paragrafo = get_field("paragrafo");


	

	get_header();
	
	

?>
<style type="text/css">
	 /*OVERLAY IMAGE*/

	.overlay{
	    position: absolute;
	    top: 0;
	    bottom: 0;
	    left: 0;
	    right: 0;
	    opacity: 0;
	    transition: 0.5s;
	    background-color: #24493899;
	    color: white;

	    height: 100%;
	    display: flex;
	    justify-content: center;
	    align-items: center;
    
   }
   .limite:hover .overlay {
      opacity: 0.8;
      transition: 0.5s;
   }
   .overlay h2 {
      color: #ffffff;
      font-size: 2rem;
   }
	.limite{
		position: relative;
		width: auto;
		height: auto;
		background-color: #000;
		border: 6px solid #3e563e;
	}




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


	<section class="" style="background-image: url(https://images.unsplash.com/photo-1477554193778-9562c28588c0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80); color: black; opacity: 0.9; background-repeat: no-repeat; background-size: cover;">
		<div class="container">
			<h4><?php echo $titulo; ?></h4>
			<p><?php echo $paragrafo; ?></p>
			<button type="button" class="btn btn-success">Success</button>
		</div>
	</section>

	<br>
	
<!-- 	<section style="padding: 0px;">
		<div class="" style=";">
			<div id="carouselExampleDark" style="width: 100%;" class="carousel carousel-dark slide" data-bs-ride="carousel">
			  <div class="carousel-indicators">
			    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
			    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
			  </div>
			  <div class="carousel-inner">
			    <div class="carousel-item active" data-bs-interval="10000" style="height: 400px">
			      <img src="https://images.pexels.com/photos/1158682/pexels-photo-1158682.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="...">
			      <div class="carousel-caption d-none d-md-block">
			        <h5>First slide label</h5>
			        <p>Some representative placeholder content for the first slide.</p>
			      </div>
			    </div>
			    <div class="carousel-item" data-bs-interval="2000" style="height: 400px" >
			      <img src="https://images.pexels.com/photos/532231/pexels-photo-532231.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="...">
			      <div class="carousel-caption d-none d-md-block">
			        <h5>Second slide label</h5>
			        <p>Some representative placeholder content for the second slide.</p>
			      </div>
			    </div>
			    <div class="carousel-item" style="height: 400px">
			      <img src="https://images.pexels.com/photos/2748756/pexels-photo-2748756.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="...">
			      <div class="carousel-caption d-none d-md-block">
			        <h5>Third slide label</h5>
			        <p>Some representative placeholder content for the third slide.</p>
			      </div>
			    </div>
			  </div>
			  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="visually-hidden">Previous</span>
			  </button>
			  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="visually-hidden">Next</span>
			  </button>
			</div>
		</div>
	</section>
 -->




	<section>
		<div class="container">
			<div class="row">
				<div class="col">
					<a href="">
						<div class="card" style="color: black">
						  <img src="https://images.pexels.com/photos/509922/pexels-photo-509922.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img" alt="...">
						  <div class="centraliza card-img-overlay" style="">
						  	<small><?php echo $titulo; ?></small>
						    <h5 class="card-title"><?php echo $titulo; ?></h5>
						    
						    <button class="btn btn-success"><?php echo $titulo; ?></button>
						  </div>
						</div>
					</a>
				</div>
				<div class="col">
					<a href="">
						<div class="card" style="color: black">
						  <img src="https://images.pexels.com/photos/817783/pexels-photo-817783.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img" alt="...">
						  <div class="centraliza card-img-overlay" style="">
						  	<small><?php echo $titulo; ?></small>
						    <h5 class="card-title"><?php echo $titulo; ?></h5>
						    
						    <button class="btn btn-success"><?php echo $titulo; ?></button>
						  </div>
						</div>
					</a>
				</div>
				
			</div>
		</div>
	</section>




<!-- categorias -->
	<section class="py-4">
		<div class="container">
			<div class="row text-center">
				
				<div class="col" style="margin: 20px">
					<img style="width: 40%" src="<?php echo get_template_directory_uri(); ?>/assets/images/pintura.png">
					
					<h6><?php echo $pintura_titulo; ?></h6>
					
				</div>
				<div class="col" style="margin: 20px">
					<img style="width: 50%" src="<?php echo get_template_directory_uri(); ?>/assets/images/draw.png">
					
					<p><?php echo $parede_titulo; ?></p>
				</div>
				<div class="col" style="margin: 20px">
					<img style="width: 50%" src="<?php echo get_template_directory_uri(); ?>/assets/images/tinta.png">
					
					<p><?php echo $telha_titulo; ?></p>
				</div>
				<div class="col" style="margin: 20px">
					<img style="width: 50%" src="<?php echo get_template_directory_uri(); ?>/assets/images/madeira.png">
					
					<p><?php echo $madeira_titulo; ?></p>
				</div>

			</div>
		</div>
	</section>


	<!-- PRODUTOS -->
	<section class="pt-2">
		<div class="container text-center">
			<small><?php echo $titulo; ?></small>
			<h3><b><?php echo $titulo; ?></b> </h3>
			<hr>

			<div class="row text-center">
				<div>
					*filtro*
				</div>
				<br>
				<div class="col">
					<a href="http://localhost/PRATICANDO/produto/">
						<div class=" p-4" style="width: 18rem;">
						  <img src="https://images.unsplash.com/photo-1602143407151-7111542de6e8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" class="card-img-top" alt="...">
						  <div class="card-body"> 
						  	<small><?php echo $titulo; ?></small>
						  	<br>
						    <span class="card-text"><strong>R$ 39,99</strong></span>
						    <br>
						    <a href="http://localhost/PRATICANDO/produto/"><small>até 6x sem juros</small></a> 
						  </div>
						</div>
					</a>
					
				</div>
				<div class="col">
					<a href="http://localhost/PRATICANDO/produto/">
						<div class=" p-4" style="width: 18rem;">
						  <img src="https://images.unsplash.com/photo-1602143407151-7111542de6e8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" class="card-img-top" alt="...">
							 <div class="card-body"> 
							  	<small><?php echo $titulo; ?></small>
							  	<br>
							    <span class="card-text"><strong>R$ 39,99</strong></span>
							    <br>
							    <a href="http://localhost/PRATICANDO/produto/"><small>até 6x sem juros</small></a> 
							  </div>
						</div>
					</a>
				</div>
				<div class="col">
					<a href="http://localhost/PRATICANDO/produto/">
						<div class=" p-4" style="width: 18rem;">
						  <img src="https://images.unsplash.com/photo-1602143407151-7111542de6e8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" class="card-img-top" alt="...">
						  <div class="card-body"> 
						  	<small><?php echo $titulo; ?></small>
						  	<br>
						    <span class="card-text"><strong>R$ 39,99</strong></span>
						    <br>
						    <a href="http://localhost/PRATICANDO/produto/"><small>até 6x sem juros</small></a> 
						  </div>
						</div>
					</a>
				</div>
				<div class="col">
					<a href="http://localhost/PRATICANDO/produto/">
						<div class=" p-4" style="width: 18rem;">
						  <img src="https://images.unsplash.com/photo-1602143407151-7111542de6e8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" class="card-img-top" alt="...">
						  <div class="card-body"> 
						  	<small><?php echo $titulo; ?></small>
						    <span class="card-text"><strong>R$ 39,99</strong></span>
						    <br>
						    <a href="http://localhost/PRATICANDO/produto/"><small>até 6x sem juros</small></a> 
						  </div>
						</div>
					</a>
				</div>
			</div>


			<div class="row text-center">
				
				<div class="col">
					<a href="http://localhost/PRATICANDO/produto/">
						<div class=" p-4" style="width: 18rem;">
						  <img src="https://images.unsplash.com/photo-1602143407151-7111542de6e8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" class="card-img-top" alt="...">
						  <div class="card-body"> 
						  	<small><?php echo $titulo; ?></small>
						  	<br>
						    <span class="card-text"><strong>R$ 39,99</strong></span>
						    <br>
						    <a href="http://localhost/PRATICANDO/produto/"><small>até 6x sem juros</small></a> 
						  </div>
						</div>
					</a>
					
				</div>
				<div class="col">
					<a href="http://localhost/PRATICANDO/produto/">
						<div class=" p-4" style="width: 18rem;">
						  <img src="https://images.unsplash.com/photo-1602143407151-7111542de6e8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" class="card-img-top" alt="...">
						  <div class="card-body"> 
						  	<small><?php echo $titulo; ?></small>
						  	<br>
						    <span class="card-text"><strong>R$ 39,99</strong></span>
						    <br>
						    <a href="http://localhost/PRATICANDO/produto/"><small>até 6x sem juros</small></a> 
						  </div>
						</div>
					</a>
				</div>
				<div class="col">
					<a href="http://localhost/PRATICANDO/produto/">
						<div class=" p-4" style="width: 18rem;">
						  <img src="https://images.unsplash.com/photo-1602143407151-7111542de6e8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" class="card-img-top" alt="...">
						  <div class="card-body"> 
						  	<small><?php echo $titulo; ?></small>
						  	<br>
						    <span class="card-text"><strong>R$ 39,99</strong></span>
						    <br>
						    <a href="http://localhost/PRATICANDO/produto/"><small>até 6x sem juros</small></a> 
						  </div>
						</div>
					</a>
				</div>
				<div class="col">
					<a href="http://localhost/PRATICANDO/produto/">
						<div class=" p-4" style="width: 18rem;">
						  <img src="https://images.unsplash.com/photo-1602143407151-7111542de6e8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" class="card-img-top" alt="...">
						  <div class="card-body"> 
						  	<small><?php echo $titulo; ?></small>
						  	<br>
						    <span class="card-text"><strong>R$ 39,99</strong></span>
						    <br>
						    <a href="http://localhost/PRATICANDO/produto/"><small>até 6x sem juros</small></a> 
						  </div>
						</div>
					</a>
				</div>
			</div>

			<nav aria-label="Page navigation example">
			  <ul class="pagination justify-content-center">
			    <li class="page-item disabled">
			      <a class="page-link"><</a>
			    </li>
			    <li class="page-item"><a class="page-link" href="#">1</a></li>
			    <li class="page-item"><a class="page-link" href="#">2</a></li>
			    <li class="page-item"><a class="page-link" href="#">3</a></li>
			    <li class="page-item">
			      <a class="page-link" href="#">></a>
			    </li>
			  </ul>
			</nav>
		</div>
	</section>



<?php 
	get_footer();
?>