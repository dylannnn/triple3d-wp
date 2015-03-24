<?php get_header(); ?>

	<main role="main" id="mainContent" class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-xs-12">
                    <div class="row articles">
                        <!-- section -->
                        <section>

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
