<?php
/**
 * The template for displaying posts in the Aside Post Format on index and archive pages
 *
 * Learn more: http://codex.wordpress.org/Post_Formats
 *
 * @package LifePointe
 * @since 0.8.4
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'lifepointe' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
  </header><!-- .entry-header -->

  <div class="entry-content">
    <?php the_content( __( 'Read more', 'lifepointe' ) ); ?>
    <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'lifepointe' ), 'after' => '</div>' ) ); ?>
  </div><!-- .entry-content -->

  <footer class="entry-meta">
    <?php lifepointe_posted_on(); ?>
    <?php if ( comments_open() || ( '0' != get_comments_number() && ! comments_open() ) ) : ?>
    <span class="sep"> | </span>
    <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'lifepointe' ), __( '1 Comment', 'lifepointe' ), __( '% Comments', 'lifepointe' ) ); ?></span>
    <?php endif; ?>
    <?php edit_post_link( __( 'Edit', 'lifepointe' ), '<span class="sep"> | </span><span class="edit-link">', '</span>' ); ?>
  </footer><!-- #entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
