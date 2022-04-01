<?php 

//WP標準jQueryの削除
function load_from_cdn() {
  if ( !is_admin() ) {
      wp_deregister_script( 'jquery' );
  }
}
add_action('wp_enqueue_scripts', 'load_from_cdn');

//独自リソースの管理(CDNからの導入)
function my_enqueue_scripts(){
  wp_enqueue_style('ress_css', get_template_directory_uri().'/css/ress.css', array());
  wp_enqueue_style('style_css', get_template_directory_uri().'/css/styles.css', array());
  wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.js', array(), '3.3.1', true);
  wp_enqueue_script('main_js', get_template_directory_uri().'/js/main.js', array(), NULL, true);
  if(is_page('price')){
    wp_enqueue_style('scroll_hint_css', 'https://unpkg.com/scroll-hint@1.1.10/css/scroll-hint.css', array(), NULL);
    wp_enqueue_script('scroll_hint_js', 'https://unpkg.com/scroll-hint@1.1.10/js/scroll-hint.js', array('main_js'), NULL,true);
  };
}
add_action('wp_enqueue_scripts','my_enqueue_scripts');


//ページIDの取得
function get_the_pageId(){
  if(is_page('price')){
    return 'price';
  } elseif(is_page('contact')){
    return 'contact';
  } elseif(is_post_type_archive('post')){
    return 'blog-post-archive';
  } elseif(is_archive('news')){
    return 'news-post-archive';
  }
};

//カテゴリーを１つだけ表示
function print_one_catname(){
  $category = get_the_category();
  echo $category[0] -> cat_name;
}

//アイキャッチ画像の設定
add_theme_support( 'post-thumbnails' );
add_image_size('blog-thumbnail', 150, 110, true);
add_image_size('list-thumbnail', 240, 179, true);
add_image_size('single-thumbnail', 210, 128, true);


//サムネイル画像の取得
function get_thumbnail(){
  if(has_post_thumbnail()){
    if(is_post_type_archive('post') || is_category()){
      echo get_the_post_thumbnail_url(get_the_ID(),'list-thumbnail');
    } elseif(is_single()) {
      echo get_the_post_thumbnail_url(get_the_ID(),'list-thumbnail');
    } elseif($recommend_query) {
      echo get_the_post_thumbnail_url(get_the_ID(),'single-thumbnail');
    }
  } else {
    echo get_template_directory_uri().'/img/thumbnail-dummy@2x.png';
  }
}

//wp_social_bookmarking_light 任意の位置に表示
function wpSns() {
  if (function_exists("wp_social_bookmarking_light_output_e")) {
    wp_social_bookmarking_light_output_e();
  }
}
add_shortcode('socialBtns', 'wpSns');

//ナビゲーションメニュー(外観→メニューの表示)
register_nav_menus (
  array(
    'place_global' => 'グローバル',
    'place_footer' => 'フッターナビ'
  )
);

//アーカイブページの表示を有効にする
function post_has_archive($args, $post_type){
  if('post' == $post_type){
    $args['rewrite'] = true;
    $args['has_archive'] = 'blog';
  }
  return $args;
}

add_filter('register_post_type_args', 'post_has_archive', 10, 2); 

//ヘッダービジュアル　タイトルの出しわけ
function get_main_title(){
  if(is_post_type_archive('post')){
    echo 'ブログ';
  } elseif(is_post_type_archive('news')){
    echo 'お知らせ';
  } elseif(is_page('price')){
    echo 'コース・料金';
  } elseif(is_page('contact')){
    echo 'お問い合わせ・資料請求';
  } elseif(is_category()){
    echo 'ブログ'; 
  }
}

//「〇〇一覧」の出し分け
function get_list_title(){
  if(is_post_type_archive('post')){   
    echo '新着';
  } elseif(is_category()) {
    $category = get_queried_object();
    $cat_name = $category->cat_name;
    echo $cat_name;
  }
}

//WP PageNavi　クラス名変更
add_filter('wp_pagenavi_class_page', 'custom_wp_pagenavi_class');
add_filter('wp_pagenavi_class_current', 'custom_wp_pagenavi_class');
add_filter('wp_pagenavi_class_last', 'custom_wp_pagenavi_class');

function custom_wp_pagenavi_class($class_name){
  switch ($class_name){
    case 'page':
      $class_name = 'pagenation__item';
      break;
    case 'current':
      $class_name = 'pagenation__item pagenation__item--current';
      break;
    case 'last':
      $class_name = 'pagenation__item';
      break;
  }
  return $class_name;
}


//抜粋文の文字数を調整する
function change_excerpt_length( $length ) {
  return $length; 
}

add_filter( 'excerpt_length', 'change_excerpt_length', 999 );

//関連記事の抽出
function get_connected_issues(){
  $category = get_the_category();

}


// // WP Mail SMTPでメール送信元が効かなかったので設定。（証明書エラーとは関係ない）
// add_filter( 'wp_mail_from', function() {
//   return 'kusumi.y.mint@gmail.com'; // 送信元メールアドレス
// } );

// // これ以降が証明書エラーのための設定。
// function my_wp_mail_smtp_custom_options ( $phpmailer ) {
//   if ( isset( $phpmailer->SMTPAuth ) ) {
//       if ( $phpmailer->SMTPAuth == true ) {
//           $phpmailer->SMTPOptions = array('ssl' => 
// array(
// 'verify_peer' => false,
// 'verify_peer_name' => false,
// 'allow_self_signed' => true));
//       }
//   }
//   return $phpmailer;
// }
// add_filter("wp_mail_smtp_custom_options", "my_wp_mail_smtp_custom_options");