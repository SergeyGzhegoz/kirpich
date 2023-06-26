<?php get_header(); ?>
<div class="wrapper--cityes">
	<div class="product">
		<?php the_post(); // Получаем данные о записи ?>
		<article class="single__article">
			<?php
			// Изображения записи
			if(has_post_thumbnail()) { the_post_thumbnail(); } ?>
			<h1 class="single__title"><?php the_title(); // Заголовок записи ?></h1>
			<?php the_content(); // Выводим содержимое записи ?>
		</article>
	</div> <!-- .post  single -->
</div> <!-- .content -->
<?php get_footer(); ?>
            