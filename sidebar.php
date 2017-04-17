<!-- sidebar -->
<section class="side">

<?php if ( is_active_sidebar( 'sidebar-widget' ) ) :
dynamic_sidebar( 'sidebar-widget' );
else: ?>

<!-- <div class="widget">
<h2>No Widget</h2>
<p>ウィジットは設定されていません。</p>
</div> -->

<?php endif; ?>

<ul class="sideMenu">
	<li class="sideMenu__title"><h2>いろんなゲーム事変</h2></li>
	<li class="sideMenu__item"><a href="https://twitter.com/gamejihen"><img class="sideMenu__thumbnail" src="<?php echo get_template_directory_uri(); ?>/images/listImage_twitter.png" alt=""><div class="sideMenu__itemText"><h3 class="sideMenu__itemTitle">Twitter</h3><p class="sideMenu__itemDescription">更新情報や生放送の告知をツイート</p></div></a></li>
	<li class="sideMenu__item"><a href="http://www.ustream.tv/channel/live-from-gamejihen"><img class="sideMenu__thumbnail" src="<?php echo get_template_directory_uri(); ?>/images/listImage_ust.png" alt=""><div class="sideMenu__itemText"><h3 class="sideMenu__itemTitle">Live from 東京ゲーム事変3D</h3><p class="sideMenu__itemDescription">Ustreamでプレイ動画や生実況を配信</p></div></a></li>
	<li class="sideMenu__item"><a href="https://www.youtube.com/channel/UCXGw2EmKcPYWijwSav4TvZQ"><img class="sideMenu__thumbnail" src="<?php echo get_template_directory_uri(); ?>/images/listImage_youtube.png" alt=""><div class="sideMenu__itemText"><h3 class="sideMenu__itemTitle">東京ゲーム事変チャンネル</h3><p class="sideMenu__itemDescription">Youtubeでもプレイ動画を配信</p></div></a></li>
	<li class="sideMenu__item"><a href="http://gamejihen.net/"><img class="sideMenu__thumbnail" src="<?php echo get_template_directory_uri(); ?>/images/listImage_gamejihen.png" alt="" align="middle"><div class="sideMenu__itemText"><h3 class="sideMenu__itemTitle">東京ゲーム事変</h3><p class="sideMenu__itemDescription">僕たちが美大生だった頃のお話</p></div></a></li>
</ul>

</section>
