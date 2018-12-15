<?php

// подключаем функцию активации мета блока (my_extra_fields)
add_action('add_meta_boxes', 'project_my_extra_fields', 1);

function project_my_extra_fields() {
	add_meta_box( 'extra_fields', 'Дополнительные поля', 'project_extra_fields_box_func', 'project', 'normal', 'high'  );
}

// код блока
function project_extra_fields_box_func( $post ){
	?>


<br><br>

<h5>Выберете картинки для галереи</h5>
<br>
<p>
	Выберете первую картинку для галереи
</p>
<p>
	<label>
		<input class="widefat image1" type="text" name="extra[project_link_first]" value="<?php echo get_post_meta($post->ID, 'project_link_first', 1); ?>" style="width:100%;" />
	</label>
		<a class="siteorigin-widget-preview-button button-secondary image_upload1 widefat" style="width: auto; margin-left: 14px;">Select First Image</a>
</p>

<p>
	Выберете вторую картинку для галереи
</p>
<p>
	<label>
		<input class="widefat image2" type="text" name="extra[project_link_second]" value="<?php echo get_post_meta($post->ID, 'project_link_second', 1); ?>" style="width:100%" />
	</label>
		<a class="siteorigin-widget-preview-button button-secondary image_upload2 widefat" style="width: auto; margin-left: 14px;">Select Second Image</a>
</p>

<p>
	Выберете третью картинку для галереи
</p>
<p>
	<label>
		<input class="widefat image3" type="text" name="extra[project_link_third]" value="<?php echo get_post_meta($post->ID, 'project_link_third', 1); ?>" style="width:100%" />
	</label>
		<a class="siteorigin-widget-preview-button button-secondary image_upload3 widefat" style="width: auto; margin-left: 14px;">Select Third Image</a>
</p>

<p>
	Выберете четвертую картинку для галереи
</p>
<p>
	<label>
		<input class="widefat image4" type="text" name="extra[project_link_fourth]" value="<?php echo get_post_meta($post->ID, 'project_link_fourth', 1); ?>" style="width:100%" />
	</label>
		<a class="siteorigin-widget-preview-button button-secondary image_upload4 widefat" style="width: auto; margin-left: 14px;">Select Fourth Image</a>
</p>

<p>
	Выберете пятую картинку для галереи
</p>
<p>
	<label>
		<input class="widefat image5" type="text" name="extra[project_link_fifth]" value="<?php echo get_post_meta($post->ID, 'project_link_fifth', 1); ?>" style="width:100%" />
	</label>
		<a class="siteorigin-widget-preview-button button-secondary image_upload5 widefat" style="width: auto; margin-left: 14px;">Select Fifth Image</a>
</p>


<br><br>

<h5>Выберете данные по проекту</h5>
<br>
<p>
	Название клиента
</p>
<p>
	<label>
		<input type="text" name="extra[project_client_name]" value="<?php echo get_post_meta($post->ID, 'project_client_name', 1); ?>" style="width:100%;" />
	</label>
</p>
<p>
	Местоположение клиента
</p>
<p>
	<label>
		<input type="text" name="extra[project_client_location]" value="<?php echo get_post_meta($post->ID, 'project_client_location', 1); ?>" style="width:100%" />
	</label>
</p>
<p>
	Год завершения проекта
</p>
<p>
	<label>
		<input type="text" name="extra[project_year]" value="<?php echo get_post_meta($post->ID, 'project_year', 1); ?>" style="width:100%" />
	</label>
</p>
<p>
	Ответственный исполнитель проекта
</p>
<p>
	<label>
		<input type="text" name="extra[project_responsible_executor]" value="<?php echo get_post_meta($post->ID, 'project_responsible_executor', 1); ?>" style="width:100%" />
	</label>
</p>



<input type="hidden" name="project_extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />

	<?php
}


function my_add_upload_scripts() {
    wp_enqueue_script('media-upload');
    wp_enqueue_script('thickbox');
    wp_register_script(
                'my-upload-script'
                /* Подключаем JS-код задающий поведение
                 * загрузчика и указывающий, куда вставлять
                 * ссылку после загрузки изображения
                 * Его код будет приведен ниже.
                 */
                ,get_bloginfo('template_url').'/lib/upload/upload.js'
                /* Указываем скрипты, от которых
                 * зависит наш JS-код
                 */
                ,array('jquery','media-upload','thickbox')
    );
    wp_enqueue_script('my-upload-script');
}

// Запускаем функцию подключения загрузчика
if( is_admin() )
add_action('admin_print_scripts', 'my_add_upload_scripts');


// включаем обновление полей при сохранении
add_action('save_post', 'project_my_extra_fields_update', 0);

/* Сохраняем данные, при сохранении поста */
function project_my_extra_fields_update( $post_id ){
	if ( !isset($_POST['project_extra_fields_nonce']) || !wp_verify_nonce($_POST['project_extra_fields_nonce'], __FILE__) ) return false; // проверка
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
