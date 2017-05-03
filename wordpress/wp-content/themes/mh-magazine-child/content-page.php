<?php /* Default template for displaying page content */ ?>
<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content clearfix">
		<?php the_content(); ?>
	</div>
    <header class="entry-header">
        <?php the_title('<h2 class="entry-title page-title">', '</h2>'); ?>
    </header>
</article>
