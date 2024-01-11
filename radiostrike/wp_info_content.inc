<?php
require('wp-blog-header.php');

//--------------------------------------------------
//オブジェクト配列の分解
//--------------------------------------------------
function object_to_array($obj) {
  $_arr = is_object($obj) ? get_object_vars($obj) : $obj;
  foreach ($_arr as $key => $val) {
    $val = (is_array($val) || is_object($val)) ? object_to_array($val) : $val;
    $arr[$key] = $val;
  }
  return $arr;
}

//--------------------------------------------------
//記事取得
//--------------------------------------------------
$p = $_GET['p']; //記事ID
if ($p) {
  $args['post__in'] = array($p);
}
$posts = get_posts($args);

//--------------------------------------------------
//メインループ
//--------------------------------------------------
foreach ($posts as $post) : start_wp();

  $date = get_the_date();
  $title = get_the_title();

  echo '<h1>';
  echo $title;
  echo '</h1>';

  echo '<div class="thumbnail">';
  the_post_thumbnail('thumbnail');
  echo '</div>';

  echo '<div class="post-cont">';
  echo the_content();
  echo '</div>';

endforeach;