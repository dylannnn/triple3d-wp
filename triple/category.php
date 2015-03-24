<?php get_header(); ?>

	<main id="categories" role="main" class="categoriesWrapper">
		<div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-xs-12">
                    <div class="row articles">
                        <!-- section -->
						<section class="categories">
							<div class="categoriesTitleWrapper">
								<div class="col-lg-3 col-md-3 col-xs-3">
								
								</div>
								<div class="col-lg-9 col-md-9 col-xs-9">
									<h1 class="categoriesTitle"><?php _e( 'Categories for ', 'triple3d' ); single_cat_title(); ?></h1>
								</div>
							</div>

							<?php get_template_part('loop'); ?>

							<?php get_template_part('pagination'); ?>

						</section>
						<!-- /section -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
	</main>

<?php get_footer(); ?>
