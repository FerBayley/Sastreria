<section class="Contenido">		
		<div class="Col1">
			<div class="Emboltorio">
				<?php query_posts("category_name=sacos-col1"); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h2><?php the_title();?></h2>
					
					<div class="Thumb">
						<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs' ); } ?>
					</div><!-- End of Thumb -->

					<p><?php the_content();?></p>
				<?php endwhile; else: ?>
				<?php endif; ?>
			</div> <!-- End of Emboltorio -->
		</div> <!-- End of Col2 -->

		<div class="Col2">
			<div class="Emboltorio">
				<?php query_posts("category_name=sacos-col2"); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h2><?php the_title();?></h2>
					
					<div class="Thumb">
						<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs' ); } ?>
					</div><!-- End of Thumb -->

					<p><?php the_content();?></p>
				<?php endwhile; else: ?>
				<?php endif; ?>
			</div> <!-- End of Emboltorio -->
		</div> <!-- End of Col3 -->

		<div class="Col3">
			<div class="Emboltorio">
				<?php query_posts("category_name=sacos-col3"); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h2><?php the_title();?></h2>
					
					<div class="Thumb">
						<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs' ); } ?>
					</div><!-- End of Thumb -->

					<p><?php the_content();?></p>
				<?php endwhile; else: ?>
				<?php endif; ?>
			</div> <!-- End of Emboltorio -->
		</div> <!-- End of Col4 -->

		<div class="Col4">
			<div class="Emboltorio">
				<?php query_posts("category_name=sacos-col4"); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h2><?php the_title();?></h2>
					
					<div class="Thumb">
						<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs' ); } ?>
					</div><!-- End of Thumb -->

					<p><?php the_content();?></p>
				<?php endwhile; else: ?>
				<?php endif; ?>
			</div> <!-- End of Emboltorio -->
		</div> <!-- End of Col4 -->
	</section> <!-- End of Contenido -->