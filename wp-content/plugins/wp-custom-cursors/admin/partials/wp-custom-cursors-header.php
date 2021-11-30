<?php

/**
 * @link       https://codecanyon.net/user/web_trendy
 * @since      2.1.0
 * @package    Wp_custom_cursors
 * @subpackage Wp_custom_cursors/includes
 * @author     Web_Trendy <webtrendyio@gmail.com>
 */
?>

<!-- Header -->
<div class="wt-header bg-white rounded d-flex align-items-center p-2">
	<div class="wt-logo mr-3">
		<img src="<?php echo esc_url( plugins_url( '../img/thumbnail.svg', __FILE__ ) ); ?>" alt="<?php echo esc_html__('WP Custom Cursors', 'wp_custom_cursors');?>" title="<?php echo esc_html__('WP Custom Cursors', 'wp_custom_cursors');?>" />
	</div>
	<div class="wt-header-title">
		<h2 class="h4 d-inline-block"><?php echo esc_html__( 'WP Custom Cursors ', 'wp_custom_cursors' ); ?> </h2> - <span class="text-muted"><?php echo esc_html__( 'Version ', 'wp_custom_cursors' ).WP_CUSTOM_CURSORS_VERSION; ?></span>
		<p class="mb-0">
			<a href="<?php echo esc_url('https://codecanyon.net/user/web_trendy/portfolio')?>" class="wt-links" target="_blank" title="<?php echo esc_html__('Web_Trendy Portfolio', 'wp_custom_cursors'); ?>"><?php echo esc_html__( 'More items by ', 'wp_custom_cursors' );?>
				Web_Trendy
				<img src="<?php echo esc_url( plugins_url( '../img/icons/link.svg', __FILE__ ) );?>" class="wt-icon" alt="" />
			</a>
		</p>
	</div>
</div>
<!-- End Header -->