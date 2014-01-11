<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
/*
________              /\ __    ___________    .___.__  __      __  .__    .__         ___________.__.__              
\______ \   ____   ___)//  |_  \_   _____/  __| _/|__|/  |_  _/  |_|  |__ |__| ______ \_   _____/|__|  |   ____      
 |    |  \ /  _ \ /    \   __\  |    __)_  / __ | |  \   __\ \   __\  |  \|  |/  ___/  |    __)  |  |  | _/ __ \     
 |    `   (  <_> )   |  \  |    |        \/ /_/ | |  ||  |    |  | |   Y  \  |\___ \   |     \   |  |  |_\  ___/     
/_______  /\____/|___|  /__|   /_______  /\____ | |__||__|    |__| |___|  /__/____  >  \___  /   |__|____/\___  > /\ 
        \/            \/               \/      \/                       \/        \/       \/                 \/  \/
*/

// this is for Set featured image
add_theme_support( 'post-thumbnails' ); 

//Adds borwser class so we can style according to browser
function organizedthemes_browser_body_class($classes) {
    global $is_gecko, $is_IE, $is_opera, $is_safari, $is_chrome;
 
    if($is_gecko)      $classes[] = 'firefox';
    elseif($is_opera)  $classes[] = 'opera';
    elseif($is_safari) $classes[] = 'safari';
    elseif($is_chrome) $classes[] = 'chrome';
    elseif($is_IE)     $classes[] = 'ie';
    else               $classes[] = 'unknown';
 
    return $classes;
}
add_filter('body_class','organizedthemes_browser_body_class');

//Function for the post thumbnail Title
function the_post_thumbnail_caption( $post_id ) {
  $thumbnail_id    = get_post_thumbnail_id($post_id);
  $thumbnail_image = get_posts(array('p' => $thumbnail_id, 'post_type' => 'attachment'));
  if ($thumbnail_image && isset($thumbnail_image[0])) {
    return $thumbnail_image[0]->post_excerpt;
  }
}
//Pagination function for News page
function news_pagination() {
  if( is_singular() )
    return;

  global $wp_query;
  /** Stop execution if there's only 1 page */
  if( $wp_query->max_num_pages <= 1 )
    return;

  $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
  $max   = intval( $wp_query->max_num_pages );
  /** Add current page to the array */
  if ( $paged >= 1 )
    $links[] = $paged;
  /** Add the pages around the current page to the array */
  if ( $paged >= 3 ) {
    $links[] = $paged - 1;
    $links[] = $paged - 2;
  }

  if ( ( $paged + 2 ) <= $max ) {
    $links[] = $paged + 2;
    $links[] = $paged + 1;
  }

  echo '<div id="news-pagination" class="text-center clearfix margin-top-20 margin-bottom-20"><ul class="pagination">' . "\n";
  /** Previous Post Link */
  if ( get_previous_posts_link() )
    printf( '<li>%s</li>' . "\n", get_previous_posts_link('«') );

  /** Link to first page, plus ellipses if necessary */
  if ( ! in_array( 1, $links ) ) {
    $class = 1 == $paged ? ' class="active"' : '';

    printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

    if ( ! in_array( 2, $links ) )
      echo '<li>...</li>';
  }
  /** Link to current page, plus 2 pages in either direction if necessary */
  sort( $links );
  foreach ( (array) $links as $link ) {
    $class = $paged == $link ? ' class="active"' : '';
    printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
  }
  /** Link to last page, plus ellipses if necessary */
  if ( ! in_array( $max, $links ) ) {
    if ( ! in_array( $max - 1, $links ) )
      echo '<li><a href="#">…</a></li>' . "\n";

    $class = $paged == $max ? ' class="active"' : '';
    printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
  }

  /** Next Post Link */
  if ( get_next_posts_link() )
    printf( '<li>%s</li>' . "\n", get_next_posts_link('»') );

  echo '</ul></div>' . "\n";
}

//This function truncates the the excerpt by word not character for get_the_excerpt()
function word_truncate_excerpt( $limit ){
  $excerpt = get_the_excerpt();

  if (str_word_count($excerpt, 0) > $limit){
    $words = str_word_count($excerpt, 2);
    $pos = array_keys($words);
    $excerpt = substr($excerpt, 0, $pos[$limit]) . '...';
  }
  return $excerpt;
}

?>