<?php

function twentyseventeen_widgets_init_child(){
    register_sidebar( array(
        'name'    => _( 'Page Banner', 'twentyseventeen'),
        'id'      => 'page-banner',
        'description' => _( 'Add Widgets here to apprear in your banner.', 'twentyseventeen'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action( 'widget_init', 'twentyseventeen_widgets_init_child');


function enqueue_styles_child_theme() {

	$parent_style = 'twentyseventeen-style';
	$child_style  = 'twentyseventeen-child-style';

	wp_enqueue_style( $parent_style,
				get_template_directory_uri() . '/style.css' );

	wp_enqueue_style( $child_style,
				get_stylesheet_directory_uri() . '/style.css',
				array( $parent_style ),
				wp_get_theme()->get('Version')
				);
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles_child_theme' );


//Código adicional

function dcms_setup_theme_supported_features() {
    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => __( 'strong magenta', 'dominiotema' ),
            'slug' => 'strong-magenta',
            'color' => '#a156b4',
        ),
        array(
            'name' => __( 'light grayish magenta', 'dominiotema' ),
            'slug' => 'light-grayish-magenta',
            'color' => '#d0a5db',
        ),
        array(
            'name' => __( 'very light gray', 'dominiotema' ),
            'slug' => 'very-light-gray',
            'color' => '#eee',
        ),
        array(
            'name' => __( 'very dark gray', 'dominiotema' ),
            'slug' => 'very-dark-gray',
            'color' => '#444',
        ),
    ) );


    add_theme_support( 'editor-font-sizes', array(
        array(
            'name' => __( 'Small', 'dominiotema' ),
            'size' => 12,
            'slug' => 'small'
        ),
        array(
            'name' => __( 'Normal', 'dominiotema' ),
            'size' => 16,
            'slug' => 'normal'
        ),
        array(
            'name' => __( 'Large', 'dominiotema' ),
            'size' => 36,
            'slug' => 'large'
        ),
        array(
            'name' => __( 'Huge', 'dominiotema' ),
            'size' => 50,
            'slug' => 'huge'
        )
    ) );


	add_theme_support( 'editor-font-sizes', array(
		array(
			'name' => __( 'Small', 'dominiotema' ),
			'size' => 12,
			'slug' => 'small'
		),
		array(
			'name' => __( 'Normal', 'dominiotema' ),
			'size' => 16,
			'slug' => 'normal'
		),
		array(
			'name' => __( 'Large', 'dominiotema' ),
			'size' => 36,
			'slug' => 'large'
		),
		array(
			'name' => __( 'Huge', 'dominiotema' ),
			'size' => 50,
			'slug' => 'huge'
		)
	) );	

    add_theme_support( 'align-wide' );
    add_theme_support('disable-custom-font-sizes');
    add_theme_support( 'disable-custom-colors' );

}
//Mostrar resultados de los SnippetsAdd 
add_action( 'after_setup_theme', 'dcms_setup_theme_supported_features' );


//Para ordenar los eventos más recientes a la fecha actual.
add_action( 'pre_get_posts', 'dcms_order_content' );
function dcms_order_content( $query ) {
	if ( $query->is_main_query() && is_tax('eventos') ){
		$query->set( 'post_type', 'Eventos' );
		$query->set( 'orderby', 'fecha_de_evento' );
		$query->set( 'order', 'ASC' );
	}
	return $query;
}

//Se excluyen los articulos de testimonios (categoria Clientes)
function dcms_eliminar_entradas_home_page( $query ){
    if( $query->is_main_query() && $query->is_home() ) {
        $query->set('category__not_in',array(32));
    }
}
add_action( 'pre_get_posts', 'dcms_eliminar_entradas_home_page' );




//Hooks
function dcms_cambiar_objeto_post( $post_object ) {
	// print_r($post_object);
	$post_object->post_title = str_replace('Evento', 'Evento número: ', $post_object->post_title);
}

add_action( 'the_post', 'dcms_cambiar_objeto_post' );


//Hooks por filtro

function dcms_filtro_titulo( $titulo ) {
    $titulo = str_replace(':', ' # ', $titulo);
    return $titulo;
}


add_filter( 'the_title', 'dcms_filtro_titulo' );