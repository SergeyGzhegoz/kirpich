<?php
/*
Template Name: Города
*/
?>
<?php get_header(); ?>
<div class="wrapper--cityes">
        
        <!--sidebar-->
        <?php get_sidebar()?>
        <section class="object">

        <?php 
$arg_category = array(
'orderby'      => 'name',
'order'        => 'ASC',
'hide_empty'   => '',
'exclude'      => '',
'include'      => '',
'taxonomy'     => 'category',
);
$categories = get_categories( $arg_category );
?>

<?php
// Start the Loop.
while ( have_posts() ) :
the_post();
get_template_part( 'template-parts/content/content', 'page' );
// If comments are open or we have at least one comment, load up the comment template.
if ( comments_open() || get_comments_number() ) {
comments_template();
}
endwhile; // End the loop.

?>
            
        </section>
</div>
<?php get_footer(); ?>

