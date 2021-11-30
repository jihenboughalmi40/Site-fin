<?php

/**
 * @link       https://codecanyon.net/user/web_trendy
 * @since      2.1.0
 * @package    Wp_custom_cursors
 * @subpackage Wp_custom_cursors/includes
 * @author     Web_Trendy <webtrendyio@gmail.com>
 */
	
	$cursor_type_value = 0;
	$cursor_shape_value = null;
	$cursor_image_value = null;

	$default_cursor_value = 'none';

	$hover_plugin_value = 'plugin';
	$hover_browser_value = null;

	$body_activation_value = 1;
	$element_activation_value = null;
	$selector_type_value = null;
	$selector_data_value = null;

	$color_value = "#000000";
	$width_value = 30;
	$blending_mode_value = null;

	
    if ($cursor_image_value) {
    	$imageAttributes = wp_get_attachment_image_src( $cursor_image_value, 'full', false );
    	$imageLink = $imageAttributes[0];
    }
    else {
    	$imageLink = null;
    }

	?>
	
	<div class="row mt-4 mb-3">
		<div class="col-sm-12">
			<div class="h5"><?php _e( 'Add New Cursor:', 'wp_custom_cursors' ) ?></div>
		</div>
	</div>
	<div class="row">
		
		<div class="col-sm-6">
			
			<!-- Form -->
			<form action="" method="post">
				<div class="bg-white rounded p-4">
					<div><?php _e( 'Select cursor type:', 'wp_custom_cursors' ) ?></div>

					<div class="row mt-2 mb-4">
						<div class="col-sm-6">
							<!-- Shape Cursor -->
							<div class="form-check w-100 pl-0" data-hide-element="select_image_group" data-show-element="select_shape_group">
								<input class="form-check-input" type="radio" name="cursor_type" id="cursor_type_shape" value="0" <?php checked( $cursor_type_value, '0' ); ?>>
								<label class="form-check-label w-100" for="cursor_type_shape">
									<div class="radio-badge">
										<div class="badge-wrapper">
											<div class="shape">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
												    <g>
												        <path fill="none" d="M0 0h24v24H0z"/>
												        <path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0-3a5 5 0 1 1 0-10 5 5 0 0 1 0 10z" fill="white"/>
												    </g>
												</svg>

											</div>
											<div class="ml-2 lead">
												<?php echo __( 'Shape Cursor', 'wp_custom_cursors' ) ?>
											</div>

											<!-- Check Mark -->
											<div class="icon-container">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
												    <g>
												        <path fill="none" d="M0 0h24v24H0z"/>
												        <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" fill="white"/>
												    </g>
												</svg>
											</div>
											<!-- End Check Mark -->
										</div>
										<div class="small text-muted">
											<?php echo __( 'Use pre-made HTML/SVG cursors.', 'wp_custom_cursors' ) ?>
										</div>
									</div>

								</label>
							</div>
							<!-- End Shape Cursor -->
						</div>
						<div class="col-sm-6 disabled">
							<!-- Image Cursor -->
							<div class="form-check w-100 pl-0">
								<input class="form-check-input disabled" type="radio" id="cursor_type_image" >
								<label class="form-check-label w-100" for="cursor_type_image">
									<div class="radio-badge">
										<div class="badge-wrapper" >
											<div class="shape">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
												    <g>
												        <path fill="none" d="M0 0h24v24H0z"/>
												        <path d="M20 5H4v14l9.292-9.294a1 1 0 0 1 1.414 0L20 15.01V5zM2 3.993A1 1 0 0 1 2.992 3h18.016c.548 0 .992.445.992.993v16.014a1 1 0 0 1-.992.993H2.992A.993.993 0 0 1 2 20.007V3.993zM8 11a2 2 0 1 1 0-4 2 2 0 0 1 0 4z" fill="white"/>
												    </g>
												</svg>
											</div>
											<div class="ml-2 lead">
												<?php echo __( 'Image Cursor', 'wp_custom_cursors' ) ?>
											</div>
										</div>
										<div class="small text-muted">
											<?php echo __( 'Upload your own image.', 'wp_custom_cursors' ) ?>
											<span class="pro"><?php echo __( 'PRO Only', 'wp_custom_cursors' ) ?></span>
										</div>
									</div>

								</label>
							</div>
							<!-- End Image Cursor -->
						</div>
					</div>

					<!-- Select Cursor Shape -->
				    <div class="form-group" id="select_shape_group">
						<label for="cursor_shape"><?php _e('Select Shape:', 'wp_custom_cursors'); ?></label>
						<select class="form-control custom-select-img" id="cursor_shape" name="cursor_shape">
							<option value="1" <?php if ($cursor_shape_value) {selected( $cursor_shape_value, '1' );}?>> <?php echo esc_html__('Shape 1', 'wp_custom_cursors'); ?></option>
							<option value="2" <?php if ($cursor_shape_value) {selected( $cursor_shape_value, '2' );}?>> <?php echo esc_html__('Shape 2', 'wp_custom_cursors'); ?></option>
							<option value="3" <?php if ($cursor_shape_value) {selected( $cursor_shape_value, '3' );}?>> <?php echo esc_html__('Shape 3', 'wp_custom_cursors'); ?></option>
							<option value="4" <?php if ($cursor_shape_value) {selected( $cursor_shape_value, '4' );}?>> <?php echo esc_html__('Shape 4', 'wp_custom_cursors'); ?></option>
							<option value="5" <?php if ($cursor_shape_value) {selected( $cursor_shape_value, '5' );}?>> <?php echo esc_html__('Shape 5', 'wp_custom_cursors'); ?></option>
							<option value="6" <?php if ($cursor_shape_value) {selected( $cursor_shape_value, '6' );}?>> <?php echo esc_html__('Shape 6', 'wp_custom_cursors'); ?></option>
							<option value="7" <?php if ($cursor_shape_value) {selected( $cursor_shape_value, '7' );}?>> <?php echo esc_html__('Shape 7', 'wp_custom_cursors'); ?></option>
							<option value="8" <?php if ($cursor_shape_value) {selected( $cursor_shape_value, '8' );}?>> <?php echo esc_html__('Shape 8', 'wp_custom_cursors'); ?></option>
							<option value="9" <?php if ($cursor_shape_value) {selected( $cursor_shape_value, '9' );}?>> <?php echo esc_html__('Shape 9', 'wp_custom_cursors'); ?></option>
							<option value="10" <?php if ($cursor_shape_value) {selected( $cursor_shape_value, '10' );}?>> <?php echo esc_html__('Shape 10', 'wp_custom_cursors'); ?></option>
							<option value="11" <?php if ($cursor_shape_value) {selected( $cursor_shape_value, '11' );}?>> <?php echo esc_html__('Shape 11', 'wp_custom_cursors'); ?></option>
							<option value="12" <?php if ($cursor_shape_value) {selected( $cursor_shape_value, '12' );}?>> <?php echo esc_html__('Shape 12', 'wp_custom_cursors'); ?></option>
							<option value="13" <?php if ($cursor_shape_value) {selected( $cursor_shape_value, '13' );}?>> <?php echo esc_html__('Shape 13', 'wp_custom_cursors'); ?></option>
							<option value="14" <?php if ($cursor_shape_value) {selected( $cursor_shape_value, '14' );}?>> <?php echo esc_html__('Shape 14', 'wp_custom_cursors'); ?></option>
							<option value="15" <?php if ($cursor_shape_value) {selected( $cursor_shape_value, '15' );}?>> <?php echo esc_html__('Shape 15', 'wp_custom_cursors'); ?></option>
							<option value="16" <?php if ($cursor_shape_value) {selected( $cursor_shape_value, '16' );}?>> <?php echo esc_html__('Shape 16', 'wp_custom_cursors'); ?></option>
							<option value="17" <?php if ($cursor_shape_value) {selected( $cursor_shape_value, '17' );}?>> <?php echo esc_html__('Shape 17', 'wp_custom_cursors'); ?></option>
							<option value="18" <?php if ($cursor_shape_value) {selected( $cursor_shape_value, '18' );}?>> <?php echo esc_html__('Shape 18', 'wp_custom_cursors'); ?></option>
						</select>
					</div>	
				    <!-- End Select Cursor Shape -->

				    <!-- Select Image -->
				    <div class="form-group mb-0 disabled d-none" id="select_image_group">
						<?php _e('Select Image:', 'wp_custom_cursors'); ?>
				    	<div class="wpcc_preview">
				    		<div class="wpcc-imageselector <?php if($imageLink) echo 'deactive'; ?>" id="wpcc-imageselector"><?php _e('Click to Select', 'wp_custom_cursors'); ?></div>
				    		<div class="image-box">
				    			<img src="<?php echo $imageLink ?>" class="wpcc_image" id="wpcc_image">

				    			<!-- Delete Button -->
					    		<div id="wpcc_delete_image" class="wpcc_delete_image <?php if($imageLink) echo 'active'; ?>">
							    	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
									    <g>
									        <path fill="none" d="M0 0h24v24H0z"/>
									        <path d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" fill="white"/>
									    </g>
									</svg>
							    </div>
					    		<!-- End Delete Button -->
				    		</div>
				    	</div>

				    	<input type="hidden" id="wpcc_url" name="cursor_image" value="<?php echo $cursor_image_value ?>">
					</div>
				    <!-- End Select Image -->
			    </div>
				
				<div class="bg-white rounded p-4 mt-4">
					<!-- Show Default Cursor -->
					<label class="toggler-wrapper mt-2 style-4"> 
						<span class="placeholder"><?php echo esc_html__( 'Show Default Cursor?', 'wp_custom_cursors' );?></span>
						<input type="checkbox" name="default_cursor" id="default_cursor" value="auto" <?php checked( $default_cursor_value, 'auto' ); ?>>
						<div class="toggler-slider">
							<div class="toggler-knob"></div>
						</div>
					</label>
					<!-- End Show Default Cursor -->

					<!-- Activate on Body -->
					<label class="toggler-wrapper mt-4 style-4" data-turnoff-element="element_activate_input"> 
						<span class="placeholder"><?php echo esc_html__( 'Activate on Body?', 'wp_custom_cursors' );?></span>
						<input type="checkbox" id="body_activate_input" name="body_activation" value="1" <?php checked( $body_activation_value, '1' ); ?>>
						<div class="toggler-slider">
							<div class="toggler-knob"></div>
						</div>
					</label>
					<!-- End Activate on Body -->

					<!-- Activate on Elements -->
					<label class="toggler-wrapper disabled my-4 style-4"> 
						<span class="placeholder"><?php echo esc_html__( 'Activate on Elements?', 'wp_custom_cursors' );?> <span class="pro"><?php echo esc_html__( 'PRO Only', 'wp_custom_cursors' );?></span></span>
						<input type="checkbox" id="element_activate_input">
						<div class="toggler-slider">
							<div class="toggler-knob"></div>
						</div>
					</label>

					<div class="input-group selector-group disabled d-none" id="select_element_group">
					    <div class="input-group-append">
							<select class="custom-select" style="width: 120px;" id="selector_type">
							    <option value="tag" <?php if ($selector_type_value) {selected( $selector_type_value, 'tag' );}?>><?php echo esc_html__( 'Tag', 'wp_custom_cursors' ); ?></option>
							    <option value="class" <?php if ($selector_type_value) {selected( $selector_type_value, 'class' );}?>><?php echo esc_html__( 'Class', 'wp_custom_cursors' ); ?></option>
							    <option value="id" <?php if ($selector_type_value) {selected( $selector_type_value, 'id' );}?>><?php echo esc_html__( 'ID', 'wp_custom_cursors' ); ?></option>
							    <option value="attribute" <?php if ($selector_type_value) {selected( $selector_type_value, 'attribute' );}?>><?php echo esc_html__( 'Attribute', 'wp_custom_cursors' ); ?></option>
							</select>
					    </div>
						
					    <input type='text' disabled placeholder="<?php echo esc_html__('Selector', 'wp_custom_cursors'); ?>" class="form-control rounded-right" id="selector_data">
					    
					    <br/>
					    <small class="text-muted"><?php echo esc_html__('All elements selected with above criteria would have the custom cursor.', 'wp_custom_cursors'); ?></small>
					</div>
					<!-- End Activate on Elements -->

					<!-- Hover Effect -->
					<hr />
					<label><?php _e('Hover Effect:', 'wp_custom_cursors'); ?></label>

						<!-- Plugin Default -->
						<label class="toggler-wrapper mt-3 style-4" data-turnoff-element="browser_hover_input"> 
							<span class="placeholder"><?php echo esc_html__( 'Plugin Default', 'wp_custom_cursors' );?></span>
							<input type="checkbox" id="plugin_hover_input" name="hover_effect" value="plugin" <?php checked( $hover_plugin_value, 'plugin' ); ?>>
							<div class="toggler-slider">
								<div class="toggler-knob"></div>
							</div>
						</label>
						<!-- End Plugin Default -->

						<!-- Browser Default -->
						<label class="toggler-wrapper mt-4 style-4" data-turnoff-element="plugin_hover_input"> 
							<span class="placeholder"><?php echo esc_html__( 'Browser Default', 'wp_custom_cursors' );?></span>
							<input type="checkbox" id="browser_hover_input" name="hover_effect" value="browser" <?php checked( $hover_browser_value, 'browser' ); ?>>
							<div class="toggler-slider">
								<div class="toggler-knob"></div>
							</div>
						</label>
						<!-- End Browser Default -->

					<!-- Hover Effect -->
				</div>
				
				<div class="bg-white rounded p-4 mt-4">
					<!-- Styles -->
					<div>
						<!-- Color Select -->
						<?php _e('Color:', 'wp_custom_cursors'); ?>
						<div class="color_select form-group mt-2">
						    <label class="w-100">
						    	<input type='color' class="form-control" id="cursor_color" name='color' value="<?php echo $color_value; ?>">
						    </label>
						</div>
						<!-- End Color Select -->

						<!-- Width Select -->
						<?php _e('Width:', 'wp_custom_cursors'); ?>
						<div class="cursor_width form-group mt-2">
						    <label class="w-100">
						    	<input type='number' class="form-control" id="cursor_width" placeholder="<?php _e('Default: 30px', 'wp_custom_cursors'); ?>" name='width' value="<?php  echo $width_value; ?>"> 
						    </label>
						</div>
						<!-- End Width Select -->

						<!-- Blending Mode Select -->
						<div class="form-group blending-selector disabled">
							<label for="blending_mode"><?php _e('Blending Mode:', 'wp_custom_cursors'); ?> <span class="pro"><?php echo esc_html__( 'PRO Only', 'wp_custom_cursors' );?></span></label>
							<select class="form-control custom-select mt-2" data-select="blending" id="blending_mode" disabled data-placeholder="Choose Blending Mode">
								<option value="normal" <?php if (isset($blending_mode_value)) {selected( $blending_mode_value, 'normal' );} ?>><?php _e('Normal', 'wp_custom_cursors'); ?></option>
								<option value="multiply" <?php if (isset($blending_mode_value)) {selected( $blending_mode_value, 'multiply' );} ?>><?php _e('Multiply', 'wp_custom_cursors'); ?></option>
								<option value="screen" <?php if (isset($blending_mode_value)) {selected( $blending_mode_value, 'screen' );} ?>><?php _e('Screen', 'wp_custom_cursors'); ?></option>
								<option value="overlay" <?php if (isset($blending_mode_value)) {selected( $blending_mode_value, 'overlay' );} ?>><?php _e('Overlay', 'wp_custom_cursors'); ?></option>
								<option value="darken" <?php if (isset($blending_mode_value)) {selected( $blending_mode_value, 'darken' );} ?>><?php _e('Darken', 'wp_custom_cursors'); ?></option>
								<option value="lighten" <?php if (isset($blending_mode_value)) {selected( $blending_mode_value, 'lighten' );} ?>><?php _e('Lighten', 'wp_custom_cursors'); ?></option>
								<option value="color-dodge" <?php if (isset($blending_mode_value)) {selected( $blending_mode_value, 'color-dodge' );} ?>><?php _e('Color Dodge', 'wp_custom_cursors'); ?></option>
								<option value="color-burn" <?php if (isset($blending_mode_value)) {selected( $blending_mode_value, 'color-burn' );} ?>><?php _e('Color Burn', 'wp_custom_cursors'); ?></option>
								<option value="hard-light" <?php if (isset($blending_mode_value)) {selected( $blending_mode_value, 'hard-light' );} ?>><?php _e('Hard Light', 'wp_custom_cursors'); ?></option>
								<option value="soft-light" <?php if (isset($blending_mode_value)) {selected( $blending_mode_value, 'soft-light' );} ?>><?php _e('Soft Light', 'wp_custom_cursors'); ?></option>
								<option value="difference" <?php if (isset($blending_mode_value)) {selected( $blending_mode_value, 'difference' );} ?>><?php _e('Difference', 'wp_custom_cursors'); ?></option>
								<option value="exclusion" <?php if (isset($blending_mode_value)) {selected( $blending_mode_value, 'exclusion' );} ?>><?php _e('Exclusion', 'wp_custom_cursors'); ?></option>
								<option value="hue" <?php if (isset($blending_mode_value)) {selected( $blending_mode_value, 'hue' );} ?>><?php _e('Hue', 'wp_custom_cursors'); ?></option>
								<option value="saturation" <?php if (isset($blending_mode_value)) {selected( $blending_mode_value, 'saturation' );} ?>><?php _e('Saturation', 'wp_custom_cursors'); ?></option>
								<option value="color" <?php if (isset($blending_mode_value)) {selected( $blending_mode_value, 'color' );} ?>><?php _e('Color', 'wp_custom_cursors'); ?></option>
								<option value="luminosity" <?php if (isset($blending_mode_value)) {selected( $blending_mode_value, 'luminosity' );} ?>><?php _e('Luminosity', 'wp_custom_cursors'); ?></option>
							</select>
						</div>
						<!-- End Blending Mode Select -->
					</div>
					<!-- End Styles -->

				</div>

				<input type="submit" name="submit" class="btn btn-info mt-4 py-3 px-4" value="<?php _e( 'Save Cursor', 'wp_custom_cursors' ) ?>" />

			</form>
			<!-- End Form -->
		</div>

		<!-- Preview -->
		<div class="col-sm-6">
			<div class="position-sticky top">
				<div id="wt-preview">
					<div class="preview-inner bg-white p-4 rounded">
						<div class="font-weight-bold mb-3"><?php _e('Preview:', 'wp_custom_cursors'); ?></div>
						<div class="d-flex align-items-center">
							<button class="btn btn-info"><?php _e('Button', 'wp_custom_cursors'); ?></button>
							<input type="text" class="form-control mx-2" placeholder="<?php _e('Input', 'wp_custom_cursors'); ?>">
							<a href="javascript:void(0);"><?php _e('Link', 'wp_custom_cursors'); ?></a>
							
						</div>
				    	
				    	<div class="position-relative">
				    		<img src="<?php echo esc_url( plugins_url( '../img/preview-image.jpg', __FILE__ ) ); ?>" alt="<?php echo esc_html__('Test blending mode option on image', 'wp_custom_cursors');?>" class="img-fluid mt-2" />
				    		<small class="credit"><?php _e('Photo Credit: Unsplash', 'wp_custom_cursors'); ?></small>
				    	</div>
				    	<div class="text-muted small mt-2">
				    		<?php _e('This cursor is shown on: ', 'wp_custom_cursors'); ?>
				    		<span class="apply-to" id="apply_to">Body</span>	
			    		</div>
			    	</div>
			    </div>
			</div>
		</div>
		<!-- End Preview -->
	</div>
	
	


<?php

	if(isset($_POST['submit'])) {
		global $wpdb;
		$tablename = $wpdb->prefix . "custom_cursors";

		$cursor_type = 0;
		$cursor_shape = $_POST['cursor_shape'];
		$cursor_image = 'none';

		if (!isset($_POST['default_cursor'])) {
			$_POST['default_cursor'] = 'none';
		}
		$default_cursor = $_POST['default_cursor'];


		if (!isset($_POST['hover_effect'])) {
			$_POST['hover_effect'] = 'plugin';
		}
		$hover_effect = $_POST['hover_effect'];
		
		
		$_POST['body_activation'] = 1;
		

		$body_activation = $_POST['body_activation'];

		
		$_POST['element_activation'] = 0;
		
		$element_activation = $_POST['element_activation'];

		$selector_type = 'tag';

		
		$_POST['selector_data'] = "body";
		
		$selector_data = $_POST['selector_data'];

		$color = $_POST['color'];

		if ($_POST['width'] == 0) {
			$_POST['width'] = 30; 
		}
		$width = $_POST['width'];
		$blending_mode = 'normal';
		
		$success = $wpdb->insert($tablename, array("cursor_type" => $cursor_type, "cursor_shape" => $cursor_shape, "cursor_image" => $cursor_image, "default_cursor" => $default_cursor, "hover_effect" => $hover_effect,  "body_activation" => $body_activation, "element_activation" => $element_activation, "selector_type" => $selector_type, "selector_data" => $selector_data, "color" => $color, "width" => $width, "blending_mode" => $blending_mode), array("%d", "%d", "%s", "%s", "%s", "%d", "%d", "%s", "%s", "%s", "%d", "%s"));
		
		if($success) {
			//echo 'Inserted successfully';
	    } 
	    else {
			//echo 'Not inserted';
		}
	}
	
?>