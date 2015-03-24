<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class('articleItem'); ?>>
        <div class="col-lg-3 col-md-3 col-xs-3">
            <div class="profileImg">
                <!-- post thumbnail -->
                <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="blog-img">
                        <?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
                    </a>
                <?php endif; ?>
                <!-- /post thumbnail -->
            </div>    
        </div>
        <div class="col-lg-9 col-md-9 col-xs-9">
            <!-- content -->
            <div class="blogContentArea">
              <h3 class="blogTitle"><a class="titleLink" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
              <p class="blogContent"><?php triple3d_excerpt('triple3d_index'); // Build your custom callback length in functions.php ?></p>
            </div>
            <div class="postInfo">
                <div class="postBy">
                    <p>Post by: <span class="postUser"><?php the_author_posts_link(); ?></span><?php echo get_avatar( get_the_author_meta('ID'),32 ); ?> on <span class="postTime"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span></p>
                </div>
            </div>
        </div>
	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<div class="col-lg-3 col-md-3 col-xs-3">
        </div>
        <div class="col-lg-9 col-md-9 col-xs-9">
            <h2><?php _e( 'Sorry, nothing to display.', 'triple_3D' ); ?></h2>
        </div>
	</article>
	<!-- /article -->

<?php endif; ?>
