<?php




// подключаем функцию активации мета блока (my_extra_fields)
add_action('add_meta_boxes', 'testimonials_my_extra_fields', 1);

function testimonials_my_extra_fields() {
	add_meta_box( 'extra_fields', 'Дополнительные поля', 'testimonials_extra_fields_box_func', 'testimonials', 'normal', 'high'  );
}

// код блока
function testimonials_extra_fields_box_func( $post ){
	?>


	<p>
		Укажите должность вашего клиента
	</p>

	<p>
		<label>
			<input type="text" name="extra[testimonials_position]" value="<?php echo get_post_meta($post->ID, 'testimonials_position', 1); ?>" style="width:50%" />
		</label>
	</p>





	<input type="hidden" name="testimonials_extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />
	<?php
}

// включаем обновление полей при сохранении
add_action('save_post', 'testimonials_my_extra_fields_update', 0);

/* Сохраняем данные, при сохранении поста */
function testimonials_my_extra_fields_update( $post_id ){
	if ( !isset($_POST['testimonials_extra_fields_nonce']) || !wp_verify_nonce($_POST['testimonials_extra_fields_nonce'], __FILE__) ) return false; // проверка
	if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE  ) return false; // если это автосохранение
	if ( !current_user_can('edit_post', $post_id) ) return false; // если юзер не имеет право редактировать запись

	if( !isset($_POST['extra']) ) return false;

	// Все ОК! Теперь, нужно сохранить/удалить данные
	$_POST['extra'] = array_map('trim', $_POST['extra']);
	foreach( $_POST['extra'] as $key=>$value ){
		if( empty($value) ){
			delete_post_meta($post_id, $key); // удаляем поле если значение пустое
			continue;
		}

		update_post_meta($post_id, $key, $value); // add_post_meta() работает автоматически
	}
	return $post_id;
}
