<?php

/**
 *
 * @link       https://codecanyon.net/user/web_trendy
 * @since      1.0.0
 *
 * @package    Wp_custom_cursors
 * @subpackage Wp_custom_cursors/admin
 */

/**
 *
 * @package    Wp_custom_cursors
 * @subpackage Wp_custom_cursors/admin
 * @author     Web_Trendy <webtrendyio@gmail.com>
 */
class Wp_custom_cursors_Admin {

	/**
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		$screen = get_current_screen();
		$base = $screen->base;

		$pages = ['wp_custom_cursors', 'wpcc_add_new'];

		foreach ($pages as $page) {
			$pos = strripos($base, $page);
			if (!($pos === false)) {
			    wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wp-custom-cursors-admin.css', array(), $this->version, 'all' );
	            wp_enqueue_style( 'bootstrapmin', plugin_dir_url( __FILE__ ) . 'css/bootstrap.min.css', array(), $this->version, 'all' );

	            wp_enqueue_style( 'select2', plugin_dir_url( __FILE__ ) . 'css/select2.min.css', array(), $this->version, 'all' );
			} 
		}

	}

	/**
	 *
	 * @since    1.1.0
	 */
	public function enqueue_scripts() {
		$image_path = plugins_url( 'img', __FILE__ );

		$screen = get_current_screen();
		$base = $screen->base;

		$pages = ['wpcc_add_new'];

		foreach ($pages as $page) {
			$pos = strripos($base, $page);
			if (!($pos === false)) {
			    wp_enqueue_script( 'select2', plugin_dir_url( __FILE__ ) . 'js/select2.min.js', array(), $this->version, 'all' );

	            wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wp-custom-cursors-admin.js', array(), $this->version, 'all' );
	            wp_localize_script( $this->plugin_name, 'wpcc_image_path', $image_path );
	            wp_enqueue_media();
			} 
		}

	}

	/**
	 *
	 * @since    1.0.0
	 */
	public function wp_custom_cursors_add_admin_menu(  ) {
	    add_menu_page( esc_html__('WP Custom Cursors', 'wp_custom_cursors'), esc_html__('WP Custom Cursors', 'wp_custom_cursors'), 'manage_options', 'wp_custom_cursors', 'wp_custom_cursors_render_options_page', 'dashicons-marker' );

	    add_submenu_page( 'wp_custom_cursors', esc_html__( 'Add New', 'wp_custom_cursors' ), esc_html__( 'Add New', 'wp_custom_cursors' ), 'manage_options', 'wpcc_add_new', 'add_new_display_func' );


	    function wp_custom_cursors_render_options_page(  ) {
	    	if (isset($_POST['submit'])) {
	    		global $wpdb;
				$tablename = $wpdb->prefix . "custom_cursors";

				$delete_row = $_POST['delete_row'];

				$deleted = $wpdb->query("DELETE from $tablename WHERE cursor_id = $delete_row");
				
				if($deleted) {
					//echo 'Deleted successfully';
			    } 
			    else {
					//echo 'Not deleted';
				}
	    	}
		    ?>
		    <div class="wt-page mt-3 mr-4">
				
				<?php include_once( 'partials/wp-custom-cursors-header.php' ); ?>

				<!-- Body -->
				<div class="wt-body">
					<a href="<?php menu_page_url('wpcc_add_new', true) ?>" class="btn btn-primary my-3 px-4 py-3"><?php echo esc_html__( 'Add new cursor', 'wp_custom_cursors' ); ?> <img src="<?php echo esc_url( plugins_url( 'img/icons/cursor.svg', __FILE__ ) );?>" class="wt-icon" alt="add new" /></a>
					
					<table class="table cursors-table text-center">
						<thead class="thead-dark">
							<tr>
								<th scope="col">#</th>
								<th scope="col"><?php echo esc_html__( 'Type', 'wp_custom_cursors' ); ?></th>
								<th scope="col"><?php echo esc_html__( 'Cursor', 'wp_custom_cursors' ); ?></th>
								<th scope="col"><?php echo esc_html__( 'Apply To', 'wp_custom_cursors' ); ?></th>
								<th scope="col"><?php echo esc_html__( 'Color', 'wp_custom_cursors' ); ?></th>
								<th scope="col"><?php echo esc_html__( 'Width', 'wp_custom_cursors' ); ?></th>
								<th scope="col"><?php echo esc_html__( 'Blending Mode', 'wp_custom_cursors' ); ?></th>
								<th scope="col"><?php echo esc_html__( 'Action', 'wp_custom_cursors' ); ?></th>
							</tr>
						</thead>
						<tbody>
							<?php
								global $wpdb;
								$tablename = $wpdb->prefix . "custom_cursors";
							    $cursors = $wpdb->get_results("SELECT cursor_id, cursor_type, cursor_shape, cursor_image, body_activation, element_activation, selector_type, selector_data, color, width, blending_mode FROM $tablename");

							    $no = 1;
							    foreach ($cursors as $cursor) { ?>
							    	<tr>
										<th scope="row"><?php echo $no; ?></th>
										<td>
											<?php if ($cursor->cursor_type == 0) {
												echo esc_html__( 'Shape', 'wp_custom_cursors' );
											} else echo esc_html__( 'Image', 'wp_custom_cursors' ); ?>
										</td>
										<td><?php if ($cursor->cursor_type == 0) {
											?><img src="<?php echo esc_url( plugins_url( 'img/cursor-'.$cursor->cursor_shape.'.svg', __FILE__ ) ); ?>" alt="<?php echo esc_html__('Cursor Shape '.$cursor->cursor_shape, 'wp_custom_cursors');?>" class="list-shape-image" /><?php
										} else {
									    	?>
											<img src="<?php echo $cursor->cursor_image; ?>" alt="<?php echo esc_html__('Cursor Image', 'wp_custom_cursors');?>" class="list-cursor-image" />
									    	<?php
										} ?></td>
										<td>
											<?php if ($cursor->body_activation == 1) {
											echo esc_html__( 'Body', 'wp_custom_cursors' );
											} 
											else {
												switch ($cursor->selector_type) {
													case 'tag':
														echo "&lt;".$cursor->selector_data."&gt;";
														break;
													case 'class':
														echo ".".$cursor->selector_data;
														break;
													case 'id':
														echo "#".$cursor->selector_data;
														break;
													case 'attribute':
														echo "[".$cursor->selector_data."]";
														break;
													default:
														echo esc_html__( 'No data!', 'wp_custom_cursors' );
														break;
												}
											} ?>
										</td>
										<td>
											<?php echo $cursor->color; ?>
										</td>
										<td>
											<?php echo $cursor->width; ?>
										</td>
										<td>
											<?php echo $cursor->blending_mode; ?>
										</td>
										<td>
											<form action="" method="post">
												<input type="hidden" name="delete_row" value="<?php echo $cursor->cursor_id; ?>">
												<input type="submit" name="submit" class="btn btn-warning btn-sm" value="<?php _e( 'Remove', 'wp_custom_cursors' ) ?>" />
											</form>
										</td>
									</tr>
							    <?php $no++; }
							?>
						</tbody>
					</table>

				</div>
				<!-- End Body -->
			</div>
		    
		    
		    <?php
		}

		function add_new_display_func() {
			?>
			<div class="wt-page mt-3 mr-4">
				<?php include_once( 'partials/wp-custom-cursors-header.php' ); ?>

				<!-- Body -->
				<div class="wt-body">
					<?php include_once( 'partials/wp-custom-cursors-add-new.php' ); ?>
				</div>
				<!-- End Body -->
			</div>
			<?php
		}
	}

}
