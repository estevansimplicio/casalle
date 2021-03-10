<?php get_header(); ?>
<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />	
	<div class="content-area">
		<main>
			<section class="middle-area">
				<div class="container">
					<div class="row">
					<aside class="sidebar col-md-4">Barra lateral</aside>
					<div class="news col-md-8">
					<?php
						if(have_posts()):
							while(have_posts()): the_post();
					?>
						<?php get_template_part('template-parts/content'); ?>
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
		</main>
	</div>
<?php get_footer(); ?>		