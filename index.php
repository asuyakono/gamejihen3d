<?php get_header(); ?>

<!-- personality -->

<section class="personality">
	<h2 class="personality__title">パーソナリティ</h2>
	<ul class="personality__profile">
	<li class="personality__profileItem">
		<img src="<?php echo get_template_directory_uri(); ?>/images/photo_asuya.png" alt="" class="personality__profilePhoto">
		<h2 class="personality__profileName">アスヤ <a href="https://twitter.com/asuyakono"> @asuyakono</a></h2>
		<h3>Webデザイナー/ブロガー</h3>
		<p class="personality__profileDescription"><br>ゼルダの伝説が人生のバイブル。<br>自転車、コーヒー、映画、つけ麺を愛す。</p>
	</li><li class="personality__profileItem">
		<img src="<?php echo get_template_directory_uri(); ?>/images/photo_no-day.png" alt="" class="personality__profilePhoto">
		<h2 class="personality__profileName">のーだい<a href="https://twitter.com/Noday_Nolife"> @Noday_Nolife</a></h2>
		<h3>フリーランスのデザイナー<h3>
		<p class="personality__profileDescription"><br>主に任天堂のゲームをプレイ。<br>生き物（古生物）の話を語りだすとアツい。</p>
	</li><li class="personality__profileItem">
		<img src="<?php echo get_template_directory_uri(); ?>/images/photo_jimmy.png" alt="" class="personality__profilePhoto">
		<h2 class="personality__profileName">ジミー <a href="https://twitter.com/YuOnishi"> @YuOnishi</a></h2>
		<h3>テレビCMのCGデザイナー</h3>
		<p class="personality__profileDescription"><br>洋ゲーや音ゲーが好き。<br>趣味はバイク。すごいアウトドア。</p>
	</ul>
</section>

<!-- contents -->
<div class="contents">

<!-- main -->
<section class="main">

<!-- post -->
<?php if (have_posts()) :

while (have_posts()) : the_post(); ?>
<article class="post post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h2><a href="<?php the_permalink(); ?>"  class="post__title"><?php the_title(); ?></a></h2>
	<div class="post__meta">
		<span class="post-date"><?php echo get_the_date(); ?></span>
	</div>
	<div class="post__content">
		<?php the_content('続きを読む &raquo;'); ?>
	</div>
</article>

<?php
endwhile ;

else : ?>

<article class="post">
<h2>記事は見つからなかった。</h2>
<p>君が探している記事は見つからなかったようだ。</p>
</article>

<?php endif; ?>

<!-- pager -->
<?php if ( $wp_query -> max_num_pages > 1 ) : ?>
<ul class="pager">
	<li class="pager__item">
		<?php previous_posts_link('前へ'); ?>
	</li>
	<li class="pager__item">
		<?php next_posts_link('次へ'); ?>
	</li>
</ul>
<?php endif; ?>

</section>

<?php get_sidebar(); ?>

</div><!-- contents -->
<?php get_footer(); ?>
