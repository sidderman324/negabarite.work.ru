<?php
$my_postarr = array(
  'post_title'    => 'Новый пост',
  'post_content'  => 'Это мой новый пост.', // контент
  'post_status'   => 'publish' // опубликованный пост
);

// добавляем пост и получаем его ID 
$my_post_id = wp_insert_post( $my_postarr );

// присваиваем рубрику к посту (ссылка на документацию wp_set_object_terms() дана чуть выше)
wp_set_object_terms( $my_post_id, 5, 'category' );

// присваиваем метки
wp_set_object_terms( $my_post_id, array(7, 8), 'post_tag' );

  // if (!$my_post_id) { echo "<p>Сообщение не отправлено</p>"; }
    // else {
      // echo "<script>location.replace('https://sgholding.copterdrone.ru/sgh/?param=thanks');</script>";
      // exit();
    // }

print_r($my_post_id);
?>