<?php get_header(); ?>		
	<div class="content-area">
		<main>
			<section class="slide">Slide</section>
			<section class="services">Categorias de produtos</section>
			<section class="middle-area">
				<div class="container">
					<div class="row">
						<div class="news col-md-8">
							<?php
								if(have_posts()):
									while(have_posts()): the_post();
							?>
								<p>Conteúdo da homepage</p>
							<?php
								endwhile;
							else:
							?>
								<p>There's nothing yet to be displayed...</p>

							<?php endif; ?>
							
						</div>
					</div>
				</div>
			</section>
			<section class="map">Mapa</section>
		</main>
	</div>
<?php get_footer(); ?>		