<?php get_header(); ?>
<div class="wrapper--cityes">
        
<!--sidebar-->
<?php get_sidebar()?>

<section class="object">

<!-- Этот цикл тут костыль -->
<?php foreach((get_the_category()) as $category) { 
  $category->cat_ID; 
} ?>
<?php if ( have_posts() ) : query_posts(array('posts_per_page' => 3, 'cat' => $category->cat_ID)); ?>

    <?php while (have_posts()) : the_post(); ?>
    <div>
        <h2>
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h2>
        <!-- <?php the_content(); ?> -->
    </div>
    <?php endwhile; ?>
<?php endif; wp_reset_query(); ?>
    
</section>
</div>
<?php get_footer(); ?>
            