<?php get_header(); ?>
<div class="mh-wrapper clearfix">
    <div id="main-content" class="mh-loop mh-content" role="main">
        <article class="">
            <img src="http://lorempixel.com/600/300" />
        </article>
    </div>
    <?php get_sidebar(); ?>
    <h2>Actualités</h2>
    <div id="main-content1" class="mh-content" role="main" itemprop="mainContentOfPage"><?php
    	while (have_posts()) : the_post();
			mh_before_page_content();
			get_template_part('content', 'page');
			comments_template();
		endwhile; ?>
	</div>
</div>
<?php get_footer(); ?>
