<button type="button" name="<?php echo esc_attr( $name ); ?>" value="<?php echo esc_attr( $value ); ?>" <?php echo $attributes; ?>><?php echo wp_kses_post( $element_content ); ?></button>
