<section class="filter">
            <p>Фильтр по категориям:</p>
            <nav>
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
        <ul>
        <?php 
    if( $categories ){
                foreach( $categories as $cat ){ ?>
                    <li>
                    <?php
                    $category_link = get_category_link($cat->cat_ID);
                    echo '<a href="' . esc_url($category_link) . '" title="' . esc_attr($cat->name) . '">' . esc_html($cat->name) . '</a>';
                    ?>

                    </li>
                    <?php }
    }
    ?>
        </ul>
            </nav>
        </section>
