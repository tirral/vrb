<?php


// подключаем функцию активации мета блока (my_extra_fields)
add_action('add_meta_boxes', 'services_my_extra_fields', 1);

function services_my_extra_fields() {
	add_meta_box( 'extra_fields', 'Дополнительные поля', 'services_extra_fields_box_func', 'services', 'normal', 'high'  );
}

// код блока
function services_extra_fields_box_func( $post ){
	?>
	<br><br>

	<h5>Данные фактов</h5>
	<br>

	<p>
		Выберете значение для фактов
	</p>
	<p>
		<label>
			<input type="text" name="extra[facts_meaning]" value="<?php echo get_post_meta($post->ID, 'facts_meaning', 1); ?>" style="width:100%" />
		</label>
	</p>
	<p>
		Выберете название для фактов
	</p>
	<p>
		<label>
			<input type="text" name="extra[facts_name]" value="<?php echo get_post_meta($post->ID, 'facts_name', 1); ?>" style="width:100%" />
		</label>
	</p>


<br><br><br>

	<h5>Данные Прогресса</h5>
	<br>

	<p>
		Название первого этапа
	</p>
	<p>
		<label>
			<input type="text" name="extra[facts_progress_first]" value="<?php echo get_post_meta($post->ID, 'facts_progress_first', 1); ?>" style="width:100%" />
		</label>
	</p>

	<p>
		Название вторго этапа
	</p>
	<p>
		<label>
			<input type="text" name="extra[facts_progress_second]" value="<?php echo get_post_meta($post->ID, 'facts_progress_second', 1); ?>" style="width:100%" />
		</label>
	</p>

	<p>
		Название третьего этапа
	</p>
	<p>
		<label>
			<input type="text" name="extra[facts_progress_third]" value="<?php echo get_post_meta($post->ID, 'facts_progress_third', 1); ?>" style="width:100%" />
		</label>
	</p>











	<input type="hidden" name="services_extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />
	<?php
}

// включаем обновление полей при сохранении
add_action('save_post', 'services_my_extra_fields_update', 0);

/* Сохраняем данные, при сохранении поста */
function services_my_extra_fields_update( $post_id ){
	if ( !isset($_POST['services_extra_fields_nonce']) || !wp_verify_nonce($_POST['services_extra_fields_nonce'], __FILE__) ) return false; // проверка
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
