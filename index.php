<?php get_header(); ?>

<!-- personality -->

<section class="personality">
	<h2 class="sectionName">パーソナリティ</h2>
	<ul class="profile">
	<li>
		<img src="<?php echo get_template_directory_uri(); ?>/images/photo_asuya.png" alt="" class="photo">
		<h2 class="name">アスヤ <a class="twitter" href="https://twitter.com/asuyakono"> @asuyakono</a></h2>
		<h3>Webデザイナー/ブロガー</h3>
		<p class="discography"><br>ゼルダの伝説が人生のバイブル。<br>自転車、コーヒー、映画、つけ麺を愛す。</p>
	</li><li>
		<img src="<?php echo get_template_directory_uri(); ?>/images/photo_no-day.png" alt="" class="photo">
		<h2 class="name">のーだい<a class="twitter" href="https://twitter.com/Noday_Nolife"> @Noday_Nolife</a></h2>
		<h3>フリーランスのデザイナー<h3>
		<p class="discography"><br>主に任天堂のゲームをプレイ。<br>生き物（古生物）の話を語りだすとアツい。</p>
	</li><li>
		<img src="<?php echo get_template_directory_uri(); ?>/images/photo_jimmy.png" alt="" class="photo">
		<h2 class="name">ジミー <a class="twitter" href="https://twitter.com/YuOnishi"> @YuOnishi</a></h2>
		<h3>テレビCMのCGデザイナー</h3>
		<p class="discography"><br>洋ゲーや音ゲーが好き。<br>趣味はバイク。すごいアウトドア。</p>
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
	<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<div class="post-meta">
		<span class="post-date"><?php echo get_the_date(); ?></span>
		<span class="category">speaker - <?php the_category(', '); ?></span>
		<span class="tag"><?php the_tags('category - ',', '); ?></span>
	</div>
	<div class="post-content">
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
<div class="navigation">
	<a class="navi"><?php next_posts_link('次へ'); ?></a>
	<a class="navi"><?php previous_posts_link('前へ'); ?></a>
</div>
<?php endif; ?>

</section>

<?php get_sidebar(); ?>

</div><!-- contents -->
<?php get_footer(); ?>