<article <?php post_class(); ?>>
<div class="row">
<div class="col-md-8">
<?php if ( has_post_thumbnail() ) : ?>
	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
	<?php echo get_the_post_thumbnail( $id, 'blog-default', array( 'class' => 'img-responsive' ) ); ?>
	</a>
<?php endif; ?>
</div>
<div class="col-md-4">
<header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</div>
</div>
</article>