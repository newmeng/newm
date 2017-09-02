<?php
add_action('admin_menu', 't_guide');
function t_guide() {
	add_theme_page('HotNewsPro主题使用说明', '使用说明', 8, 'user_guide', 't_guide_options');
}
function t_guide_options() {
?>
<div class="wrap">
	<div class="opwrap" style="line-height: 90%; margin:10px auto; width:95%; padding:20px; border:1px solid #ddd;" >
		<div id="wrapr">
			<div class="headsection">
				<h3 style="clear:both; padding:10px; color:#444; font-size:20px; background:#eee;border:1px solid #ddd;">HotNewsPro主题使用说明</h3>
			</div>
			<div class="gblock" style="padding:0 10px;" >
				<p style="color:#ff0000; font-size:16px;">版权声明：您可以免费使用、传播和修改本主题，但请保留页脚主题设计者链接，不得将本作品用于商业目的，包括所有页面元素！</p>
				<p style="clear:both; padding:10px; color:#444; font-size:16px;">设计者：<a href="http://zmingcx.com" target="_blank"> 知更鸟 </a></p>
				<a href='http://me.alipay.com/zmingcx' target="_blank"><img src="<?php bloginfo('template_directory')?>/includes/options/alipay.png" /></a>
			</div>
			<div class="gblock">
				<p><iframe src="http://zmingcx.com/wordpress-theme-hotnewspro.html" width="100%" height="800" frameborder="0"></iframe></p>
			</div>
		</div>
	</div>
</div>
<?php }; ?>