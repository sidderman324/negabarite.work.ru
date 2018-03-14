<?php 

function styleConnect(){
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css');
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css');

	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.1.1.js');
	wp_enqueue_script( 'migrate', get_template_directory_uri() . '/js/jquery-migrate-1.4.1.min.js');
	wp_enqueue_script( 'maskedinput', get_template_directory_uri() . '/js/jquery.maskedinput.min.js');
	wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/js/script.js');
}
add_action( 'wp_enqueue_scripts', 'styleConnect' );

add_action( 'init', 'catalog_tech' ); // Использовать функцию только внутри хука init

grant_super_admin(1);


function catalog_tech() {
	$labels = array(
		'name' => 'Каталог техники',
		'singular_name' => 'Каталог техники', 
		'add_new' => 'Добавить технику',
		'add_new_item' => 'Добавить новую технику', 
		'edit_item' => 'Редактировать технику',
		'new_item' => 'Новая техника',
		'all_items' => 'Вся техника',
		'view_item' => 'Просмотр техники на сайте',
		'search_items' => 'Искать технику',
		'not_found' => 'Техники не найдено.',
		'not_found_in_trash' => 'В корзине нет техники.',
		'menu_name' => 'Каталог техники' 
	);
	$args = array(
		'labels' => $labels,
		'public' => true, 
		'menu_icon' => 'dashicons-carrot', 
		'menu_position' => 5,
		'has_archive' => true,
		'taxonomies' => array(
			'category',
		),

		'supports' => array( 'title', 'editor', 'thumbnail')
	);
	register_post_type( 'catalog_technics', $args); 
}

add_theme_support( 'post-thumbnails' );


function add_new_taxonomies() {	
	register_taxonomy('tech_type',
		array('catalog_technics'),
		array(
			'hierarchical' => false,
			'labels' => array(
				'name' => 'Типы техники',
				'singular_name' => 'Тип техники',
				'search_items' =>  'Найти тип',
				'popular_items' => 'Популярные типы',
				'all_items' => 'Все типы техники',
				'parent_item' => null,
				'parent_item_colon' => null,
				'edit_item' => 'Редактировать тип техники', 
				'update_item' => 'Обновить тип техники',
				'add_new_item' => 'Добавить новый тип техники',
				'new_item_name' => 'Название нового типа техники',
				'add_or_remove_items' => 'Добавить или удалить тип',
				'menu_name' => 'Типы техники'
			),
			'public' => true, 
			'show_in_nav_menus' => true,
			'show_ui' => true,
			'show_tagcloud' => true,
			'update_count_callback' => '_update_post_term_count',
			'query_var' => true,
			'rewrite' => array(
				'slug' => 'tech_type', // ярлык
				'hierarchical' => false // разрешить вложенность
			),
		)
	);
}
add_action( 'init', 'add_new_taxonomies', 0 );

/* Редактирование админки */
function true_alert() {
	echo '<script>';
	echo 'var srcImgArr = [];';
	echo 'jQuery(".attachment-name").each(function(indx, element){';
	echo 'srcImgArr.push(jQuery(element).find("img").attr("src"));';
	echo '});';
	echo '</script>';
}
add_action('admin_footer', 'true_alert');

function login_customize() {
	?>
	<style>
	body{
		background-image: url('/wp-content/themes/dst.negabarite/images/404.jpg');
		background-position: center;
	}
	.login h1 a {
		/*display: none;*/
	}
</style>
<?php	
}
add_action('login_head','login_customize');


$meta_page = array(
	'id' =>	'meta_page',
	'capability' => 'edit_posts', 
	'name' => 'Мета информация',
	'post_type' => array('page'),
	'priority' => 'high',
	'args' => array(
		array(
			'id'	=> 'title',
			'label' => 'Title',
			'type'	=> 'text',
			'placeholder' 	=> 'Введите title'
		),
		array(
			'id'	=> 'description',
			'label' => 'Description',
			'type'	=> 'text',
			'placeholder' 	=> 'Введите description'
		),
		array(
			'id'	=> 'keywords',
			'label' => 'Keywords',
			'type'	=> 'text',
			'placeholder' 	=> 'Введите ключевые слова'
		),
		array(
			'id'	=> 'h1',
			'label' => 'Заголовок H1',
			'type'	=> 'text',
			'placeholder' 	=> 'Введите заголовок H1'
		),
		array(
			'id'	=> 'rent_sale',
			'label' => 'Аренда / Продажа',
			'type'	=> 'text',
			'placeholder' 	=> 'Не заполнять'
		),
		array(
			'id'	=> 'type',
			'label' => 'Тип техники',
			'type'	=> 'select',
			'args'  => array(
				'Бульдозеры' => 'buldozer',
				'Экскаваторы' => 'excavator',
				'Погрузчики' => 'pogruzchik',
				'Самосвалы' => 'samosval',
				'Автокраны' => 'autokran',
				'Катки дорожные' => 'road_ratok',
				'Асфальтоукладчики' => 'asphaltoukladchik',
				'Буровые установки' => 'burovaya_ustanovka',
			),
			'default' => ''
		),
		array(
			'id'	=> 'city',
			'label' => 'Город',
			'type'	=> 'select',
			'args'  => array(
				'По всей России' => 'all',
				'Волгоград' => 'volgograd',
				'Воронеж' => 'voronezh',
				'Екатеринбург' => 'ekaterinburg',
				'Казань' => 'kazan',
				'Краснодар' => 'krasnodar',
				'Красноярск' => 'krasnojarsk',
				'Москва' => 'moscow',
				'Новосибирск' => 'novosibirsk',
				'Новгород' => 'novgorod',
				'Омск' => 'omsk',
				'Пермь' => 'perm',
				'Ростов-на-Дону' => 'rostov-na-donu',
				'Санкт-Петербург' => 'sankt-peterburg',
				'Уфа' => 'ufa',
				'Челябинск' => 'cheljabinsk',
			),
			'default' => 'all'
		),
	)
);

new trueMetaBox( $meta_page );

/* Добавление рубрик для страниц */

function add_cities_page() {	
/* создаем функцию с произвольным именем и вставляем 
в неё register_taxonomy() */	
register_taxonomy('cities',
	array('page'),
	array(
		'hierarchical' => false,
			/* true - по типу рубрик, false - по типу меток, 
			по умолчанию - false */
			'labels' => array(
				/* ярлыки, нужные при создании UI, можете
				не писать ничего, тогда будут использованы
				ярлыки по умолчанию */
				'name' => 'Города',
				'singular_name' => 'Город',
				'search_items' =>  'Найти город',
				'popular_items' => 'Популярные города',
				'all_items' => 'Все города',
				'edit_item' => 'Редактировать город', 
				'update_item' => 'Обновить город',
				'add_new_item' => 'Добавить новый город',
				'new_item_name' => 'Название нового города',
				'add_or_remove_items' => 'Добавить или удалить город',
				'choose_from_most_used' => 'Выбрать из наиболее часто используемых городов',
				'menu_name' => 'Города'
			),
			'public' => true, 
			/* каждый может использовать таксономию, либо
			только администраторы, по умолчанию - true */
			'show_in_nav_menus' => true,
			/* добавить на страницу создания меню */
			'show_ui' => true,
			/* добавить интерфейс создания и редактирования */
			'show_tagcloud' => true,
			/* нужно ли разрешить облако тегов для этой таксономии */
			'update_count_callback' => '_update_post_term_count',
			/* callback-функция для обновления счетчика $object_type */
			'query_var' => true,
			/* разрешено ли использование query_var, также можно 
			указать строку, которая будет использоваться в качестве 
			него, по умолчанию - имя таксономии */
			'rewrite' => array(
				/* настройки URL пермалинков */
				'slug' => 'cities', // ярлык
				'hierarchical' => false // разрешить вложенность

			),
		)
);
}
add_action( 'init', 'add_cities_page', 0 );


add_shortcode('city', 'replace_cityname');
function replace_cityname($content){
	return $_GET['city'];
}


// Добавление поля с информацией об авторе

$author_about = array(
	'id' =>	'tech_info',
	'capability' => 'edit_posts', 
	'name' => 'Информация о технике',
	'post_type' => array('catalog_technics'),
	'priority' => 'high',
	'args' => array( 
		array(
			'id'	=> 'price',
			'label' => 'Стоимость',
			'type'	=> 'text',
			'placeholder' 	=> 'Введите стоимость'
		),
		array(
			'id'	=> 'rent_sale',
			'type'	=> 'hidden',
		),
		array(
			'id'	=> 'working_time',
			'label' => 'Наработка',
			'type'	=> 'text',
			'placeholder' 	=> 'Введите наработку'
		),
		array(
			'id'	=> 'location',
			'label' => 'Местонахождение',
			'type'	=> 'text',
			'placeholder' 	=> 'Введите местонахождения'
		),
		array(
			'id'	=> 'brand',
			'label' => 'Марка',
			'type'	=> 'text',
			'placeholder' 	=> 'Введите производителя техники'
		),
		array(
			'id'	=> 'model',
			'label' => 'Модель',
			'type'	=> 'text',
			'placeholder' 	=> 'Введите модель'
		),
		array(
			'id'	=> 'phone',
			'label' => 'Телефон',
			'type'	=> 'text',
			'placeholder' 	=> 'Введите телефон продавца'
		),
		array(
			'id'	=> 'year',
			'label' => 'Год выпуска',
			'type'	=> 'text',
			'placeholder' 	=> 'Введите год выпуска'
		),
		array(
			'id'	=> 'comment',
			'label' => 'Комментарий продавца',
			'type'	=> 'textarea',
			'placeholder' 	=> 'Введите подробное описание техники'
		),
		array(
			'id'	=> 'add_equip',
			'label' => 'Дополнительно оборудование',
			'type'	=> 'textarea',
			'placeholder' 	=> 'Введите список дополнительного оборудования'
		),
		array(
			'id'	=> 'photo_list',
			'label' => 'Дополнительно оборудование',
			'type'	=> 'hidden',
			'placeholder' 	=> 'Введите список дополнительного оборудования'
		),

	)

);

new trueMetaBox( $author_about );


function kv_handle_attachment($file_handler,$post_id,$set_thu=false) {
	// check to make sure its a successful upload
	if ($_FILES[$file_handler]['error'] !== UPLOAD_ERR_OK) __return_false();

	require_once(ABSPATH . "wp-admin" . '/includes/image.php');
	require_once(ABSPATH . "wp-admin" . '/includes/file.php');
	require_once(ABSPATH . "wp-admin" . '/includes/media.php');

	$attach_id = media_handle_upload( $file_handler, $post_id );

	return $attach_id;
}


function send_form() {

	include_once ABSPATH . 'wp-admin/includes/media.php';
	include_once ABSPATH . 'wp-admin/includes/file.php';
	include_once ABSPATH . 'wp-admin/includes/image.php';

	/* Забираем отправленные данные */
	$category_id = $_POST['category'];
	$price = $_POST['price'];
	$brand = $_POST['brand'];

	$model = $_POST['model'];
	$year = $_POST['year'];
	$working_time = $_POST['working_time'];
	$location = $_POST['location'];
	$phone = $_POST['phone'];
	$comment = $_POST['comment'];
	$add_equip = $_POST['add_equip'];
	$rent_sale = $_POST['rent_sale'];

	$post_data = array(
		'post_title'    => $brand .' '. $model,
		'post_status'   => 'publish',
		'post_author'   => 1,
		'post_type' => 'catalog_technics',
		'meta_input'    => array( 
			'category_id' => $category_id,
			'tech_info_price' => $price,
			'tech_info_working_time' => $working_time,
			'tech_info_location' => $location,
			'tech_info_brand' => $brand,
			'tech_info_phone' => $phone,
			'tech_info_comment' => $comment,
			'tech_info_add_equip' => $add_equip,
			'tech_info_model' => $model,
			'tech_info_year' => $year,
			'tech_info_rent_sale' => $rent_sale,
		),
	);

	/* Добавляем пост */
	$post = wp_insert_post( $post_data );

	$url = get_permalink($post, false);

	/* Присваиваем посту категорию */
	wp_set_object_terms( $post, $category_id, 'category' );

	if ( $_FILES ) {
		$files = $_FILES["photo"];
		foreach ($files['name'] as $key => $value) {
			if ($files['name'][$key]) {
				$file = array(
					'name' => $files['name'][$key],
					'type' => $files['type'][$key], 
					'tmp_name' => $files['tmp_name'][$key], 
					'error' => $files['error'][$key],
					'size' => $files['size'][$key]
				);
				$_FILES = array ("photo" => $file); 
				foreach ($_FILES as $file => $array) {
					$newupload = kv_handle_attachment($file,$post); 
				}
			} 
		} 
	}
<<<<<<< HEAD
	wp_redirect($url); 
=======



	echo '<pre>';
	print_r($post_data);
	echo '</pre>';
	echo '<br>';
	echo '<br>';
	echo '<br>';
	echo '<br>';
	print_r($newupload);
	print_r($file);
	print_r($_FILES);
	print_r();

// wp_redirect('/'); // Перенаправление после успешной отправки из формы на статическую системную страницу
>>>>>>> 2578c1bea50f40548a2771b29211480d1d6417cf

	/* Завершаем выполнение ajax */
	die();
}

add_action("wp_ajax_send_form", "send_form");
add_action("wp_ajax_nopriv_send_form", "send_form");


<<<<<<< HEAD
// function ajax_avatar() {
// 	require_once( ABSPATH . 'wp-admin/includes/image.php' );
// 	require_once( ABSPATH . 'wp-admin/includes/file.php' );
// 	require_once( ABSPATH . 'wp-admin/includes/media.php' );
// 	$attach_id = media_handle_upload('image_upload', $post );
// 	if ( is_wp_error( $attach_id ) ) {
// 		echo json_encode(array('uploaded'=>false));
// 	} else {
// 		echo json_encode(array('uploaded'=>true));
// 	}
// 	die();
// };
=======
function my_handle_attachment($file_handler, $post)
{
	if ($_FILES[$file_handler]['error'] !== UPLOAD_ERR_OK) __return_false();
	require_once(ABSPATH . "wp-admin" . '/includes/image.php');
	require_once(ABSPATH . "wp-admin" . '/includes/file.php');
	require_once(ABSPATH . "wp-admin" . '/includes/media.php');

	$attach_id = media_handle_upload( $file_handler, $post );
	if (is_numeric($attach_id )) 
	{
		update_post_meta( $post, '_product_image_gallery', $attach_id );
		array_push($post, '_product_image_gallery', $attach_id);
	}
	return $attach_id;  
} 

/*
/* Функция получения названия города по поддомену
*/

function get_cityname($sub) {
	$subs = array(
		'novosibirsk' => 'Новосибирск', 
		'ufa' => 'Уфа',
		'ekaterinburg' => 'Екатеринбург', 
		'krasnoyarsk' => 'Красноярск',
		'novgorod' => 'Новгород',
		'perm' => 'Пермь',
		'kazan' => 'Казань',
		'voronezh' => 'Воронеж',
		'chelyabinsk' => 'Челябинск',
		'volgograd' => 'Волгоград',
		'omsk' => 'Омск',
        'rostovnadonu' => 'Ростов-на-Дону',
        'moscow' => 'Москва',
        'saintpetersburg' => 'Санкт-Петербург',
        'krasnodar' => 'Краснодар'
	);
    return $subs[$sub];   
}

/*
/* Функция получения субдомена
*/
function get_sub() {
    $sub = explode('.',$_SERVER['SERVER_NAME']); //разбиваем юрл для определения субдомена 
    return $sub[0];
}
>>>>>>> 2578c1bea50f40548a2771b29211480d1d6417cf
