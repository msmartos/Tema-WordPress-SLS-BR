<?php
  //img post
  add_theme_support('post-thumbnails');

  //menus
  function register_my_menus(){
    register_nav_menus(
      array(
        'main-menu' => __('Menu Principal'),
        'celular-menu' => __('Menu Celular'),
        'footer-menu' => __('Menu Rodapé')
      )
    );
  }
  add_action('init', 'register_my_menus');

  //paginação
  function wpbeginner_numeric_posts_nav() {
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

    echo '<div class="navigation"><ul>' . "\n";

    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';

        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
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
            echo '<li>…</li>' . "\n";

        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }

    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li>%s</li>' . "\n", get_next_posts_link() );

    echo '</ul></div>' . "\n";

  }

  //limite resumo
  function custom_excerpt_length($length){
	  return 10;
  }
  add_filter('excerpt_length', 'custom_excerpt_length');

  //post type pro
  add_action('init', 'register_pro_post_type');

  function register_pro_post_type(){

    $labels = array(
      'name' => __('Skatistas'),
      'singular_name' => __('Skatista')
    );

    $args = array(
      'labels' => $labels,
      'description' => 'My custom post type',
      'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
      'public' => true,
      'has_archive' => true
    );

    register_post_type('pro', $args);
  }
  //bio, nascimento, base, patrocinadores, instagram, stats

  function listapro($query){
    if(is_post_type_archive('pro')){
      $query->set('posts_per_page', 36);
      $query->set('orderby', 'date');
      $query->set('order', 'asc');
    }
  }

  add_action('pre_get_posts', 'listapro');
?>
