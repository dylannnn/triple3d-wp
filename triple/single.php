<?php get_header(); ?>

	<main role="main" id="singlePost" class="singlePost">
		<div class="row">
			<!-- section -->
			<section class="articleWrapper">

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class("articleContainer"); ?>>

					<!-- post thumbnail -->
					<div class="singlePost-thumbnail">
						<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
							<a class="singlePost" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_post_thumbnail(); // Fullsize image for the single post ?>
							</a>
						<?php endif; ?>
					</div>
					<!-- /post thumbnail -->

					<!-- post title -->
					<h1 class="articleTitle">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</h1>
					<!-- /post title -->

					<!-- post details -->
					<div class="postInfo">
						<div class="postBy">
							<span>Post by: <span class="postUser"><?php the_author_posts_link(); ?></span><?php echo get_avatar( get_the_author_meta('ID'),32 ); ?> on <span class="postTime"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span></span>
						</div>
					</div>

					<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'triple_3D' ), __( '1 Comment', 'triple_3D' ), __( '% Comments', 'triple_3D' )); ?></span>
					<!-- /post details -->

					<?php the_content(); // Dynamic Content ?>

					<div class="postTags">
						<?php the_tags( __( 'Tags: ', 'triple_3D' ), ' '); // Separated by commas ?>
					</div>

					<div class="postCategories"><?php _e( 'Categorised in: ', 'triple_3D' ); the_category(' '); // Separated by commas ?></div>

					<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

					<?php comments_template(); ?>

				</article>
				<!-- /article -->

			<?php endwhile; ?>

			<?php else: ?>

				<!-- article -->
				<article>

					<h3><?php _e( 'Sorry, nothing to display.', 'triple_3D' ); ?></h3>

				</article>
				<!-- /article -->

			<?php endif; ?>

			</section>
			<!-- /section -->
		</div>
	
	</main>

<?php get_footer(); ?>
