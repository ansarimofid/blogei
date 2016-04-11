<div <?php post_class(); ?>>
	<?php do_action( 'archive_post_before' ); ?>
	<!-- <article>
	<h1>Hello world</h1>
		<div class='post-header'>
			<?php do_action( 'sticky_post_status' ); ?>
			<h2 class='post-title'>
				<a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a>
			</h2>
			<?php get_template_part( 'content/post-meta' ); ?>
		</div>
		<?php ct_founder_featured_image(); ?>
		<div class="post-content">
			<?php ct_founder_excerpt(); ?>
			<?php get_template_part( 'content/comments-link' ); ?>
		</div>
	</article> -->
	<div class="card">
        <div class="card-content ">
            <div class="post-header card-title ">
                <a href="<?php echo esc_url( get_permalink() );?>" class="primary-color">
                	<h2><?php the_title(); ?></h2>
                </a>
            </div>
            <p><?php the_content(); ?></p>

            <h5 class="more primary-color"><a href="article.html">more</a></h5>
        </div>
        <div class="card-action">
            <div class="author">
                <?php echo get_avatar( get_the_author_email(), '50px' ); ?>
                <?php get_template_part( 'content/post-meta' ); ?>
                <!-- <span class="credit">&nbsp;by <strong class="primary-color author-name">Jenny</strong>on 5th Sep,'15</span> -->
            </div>
            <?php get_template_part( 'content/post-tags' ); ?>
            <!-- <div class="article-tag">
                <ul>
                    <li><a href="">iiitv</a></li>
                    <li><a href="">Entertaintment</a></li>
                    <li><a href="">art</a></li>
                    <li><a href="">masti</a></li>
                </ul>
            </div> -->
        </div>
    </div>
	<?php do_action( 'archive_post_after' ); ?>
</div>