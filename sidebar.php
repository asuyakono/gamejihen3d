<!-- sidebar -->
<section class="sidebar">

<?php if ( is_active_sidebar( 'sidebar-widget' ) ) :
dynamic_sidebar( 'sidebar-widget' );
else: ?>

<!-- <div class="widget">
<h2>No Widget</h2>
<p>ウィジットは設定されていません。</p>
</div> -->

<?php endif; ?>

<ul class="sideMenu">
	<li class="title"><h2>いろんなゲーム事変</h2></li>
	<li class="listContents"><a href="https://twitter.com/gamejihen"><img class="listImage" src="<?php echo get_template_directory_uri(); ?>/images/listImage_twitter.png" alt=""><div class="listDetail"><h3>Twitter</h3><p>更新情報や生放送の告知をツイート</p></div></a></li>
	<li class="listContents"><a href="http://www.ustream.tv/channel/live-from-gamejihen"><img class="listImage" src="<?php echo get_template_directory_uri(); ?>/images/listImage_ust.png" alt=""><div class="listDetail"><h3>Live from 東京ゲーム事変3D</h3><p>Ustreamでプレイ動画や生実況を配信</p></div></a></li>
	<li class="listContents"><a href="https://www.youtube.com/channel/UCXGw2EmKcPYWijwSav4TvZQ"><img class="listImage" src="<?php echo get_template_directory_uri(); ?>/images/listImage_youtube.png" alt=""><div class="listDetail"><h3>東京ゲーム事変チャンネル</h3><p>Youtubeでもプレイ動画を配信</p></div></a></li>
	<li class="listContents"><a href="http://gamejihen.net/"><img class="listImage" src="<?php echo get_template_directory_uri(); ?>/images/listImage_gamejihen.png" alt="" align="middle"><div class="listDetail"><h3>東京ゲーム事変</h3><p>僕たちが美大生だった頃のお話</p></div></a></li>
</ul>

</section>







