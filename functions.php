<?php
register_sidebar( array(
'name' => 'サイドバー',
'id' => 'sidebar-widget',
'description' => 'サイドバーのウィジットエリア',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
) );

if ( ! isset( $content_width ) ) $content_width = 700;

add_theme_support( 'automatic-feed-links' );

?>