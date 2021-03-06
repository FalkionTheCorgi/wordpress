<?php get_header(); ?>
	<div class="content-area">
		<main>
			<section class="slide">
				<div class="container">
					<div class="row">Slide</div>
				</div>
			</section>
			<section class="services">
				<div class="container">
					<div class="row">Serviços</div>
				</div>				
			</section>
			<section class="middle-area">
				<div class="container">
					<div class="row">
						<div class="news col-md-8">
							<?php 
							// Se houver algum post
							if( have_posts() ):
								// Enquanto houver posts, mostre-os pra gente
								while( have_posts() ): the_post();

							?>

							<p>Conteúdo vindo do arquivo home.php</p>

							<?php 
								endwhile;
							else:
							?>

							 <p>There's nothing yet to be displayed...</p>

							<?php endif; ?>

						</div>
						<aside class="sidebar col-md-4 h-100"><?php get_sidebar('home'); ?></aside>						
					</div>
				</div>				
			</section>
			<section class="map">
				<div class="container">
					<div class="row">Mapa</div>
				</div>				
			</section>
		</main>
	</div>
<?php get_footer(); ?>