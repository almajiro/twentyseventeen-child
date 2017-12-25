<?php
class Almajiro_SB_Profile_Widget extends WP_Widget {

	function __construct()
	{
		parent::__construct(
			'almajiro_sb_widget',
			'プロフィールの表示',
			array('description' => 'サイドバーへ管理者情報を表示する。')
		);
	}

	function form($instance)
	{
		echo "el psy congroo.";
	}

	function update($new_instance, $old_instance)
	{
		return $new_instance;
	}

	function widget($args, $instance)
	{
		
		$object = get_queried_object();
		if($object){
			echo '<section id="almajiro_sb_widget" class="widget"><h2 class="widget-title">Administrator, Author</h2>';
			echo '<div class="profile"><div class="profile-avatar">';
			echo get_avatar(get_the_author_meta('user_email'), 80, '');
			echo '</div><div class="profile-box">';
			echo '<p class="profile nickname">' . the_author_meta('nickname') . '</p>';
			echo the_author_meta('description');
			echo '<div>';
			echo '</section>';
		}

	}

}

add_action('widgets_init', function()
{
	register_widget('Almajiro_SB_Profile_Widget');
});

?>
