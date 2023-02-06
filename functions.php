<?php
    function enqueue_style_script() {
        $ver = '1.0.0';

        wp_register_style('maincss', get_template_directory_uri() . '/assets/css/main.css', array(), $ver, 'all');
        wp_enqueue_style('maincss');

        wp_register_script('mainjs', get_template_directory_uri() . '/assets/js/main.js', array(), $ver, 1, 1);
        wp_enqueue_script('mainjs');
    }

    add_action('wp_enqueue_scripts', 'enqueue_style_script');

    function twenty_twenty_one_widgets_init() {

        register_sidebar(
            array(
                'name'          => esc_html__( 'Footer', 'twentytwentyone' ),
                'id'            => 'sidebar-1',
                'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'twentytwentyone' ),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget'  => '</section>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            )
        );
    }
    add_action( 'widgets_init', 'twenty_twenty_one_widgets_init' );
?>