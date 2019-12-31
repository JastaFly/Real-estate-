<?php 
if (!empty($_POST))  {
    require_once('../../../../wp-load.php');
    global $wpdb;
    date_default_timezone_set("Europe/Moscow");
    $date_msk = date('Y-m-d H:i:s');
    $date_gmt = gmdate('Y-m-d H:i:s');
    $category_id = $_POST[acf][field_5e00cbad09606];
    $category = $wpdb->get_row( "SELECT * FROM $wpdb->terms WHERE term_id = $category_id", ARRAY_A);
    $wpdb->insert(
        'wp_posts',
        array('post_title' => $category[name] . ' ' . $_POST[acf][field_5e00bf9502acb] . ' м<sup>2</sup> ' . $_POST[acf][field_5e00c2fd53bf2],
              'post_author' => 1,
              'post_status' => 'publish',
              'post_date' => $date_msk,
              'post_date_gmt' => $date_gmt,
              'post_modified' => $date_msk,
              'post_modified_gmt' => $date_gmt,
              'post_content' => '<!-- wp:paragraph --> <p> </p> <!-- /wp:paragraph -->'
             )
    );
    $post_id = $wpdb->get_results( "SELECT * FROM wp_posts ORDER BY ID DESC LIMIT 1" );
    $wpdb->update(
        'wp_posts',
        array( 'guid' => 'http://' . $_SERVER['HTTP_HOST'] . '/?p=' . $post_id[0]->ID ),
        array( 'ID' => $post_id[0]->ID )
    );
    $href_post = 'http://' . $_SERVER['HTTP_HOST'] . '/?p=' . $post_id[0]->ID;
    echo $href_post;
    $wpdb->insert(
        'wp_term_relationships',
        array( 'object_id' => $post_id[0]->ID , 
              'term_taxonomy_id' => $_POST[acf][field_5e00cbad09606]
             )
    );
    $wpdb->insert(
        'wp_term_relationships',
        array( 'object_id' => $post_id[0]->ID , 
              'term_taxonomy_id' => $_POST[acf][field_5e04c55723050]
             )
    );
    $wpdb->insert(
        'wp_postmeta',
        array( 'post_id' => $post_id[0]->ID , 
              'meta_key' => 'space',
              'meta_value' => $_POST[acf][field_5e00bf9502acb]
             )
    );
    $wpdb->insert(
        'wp_postmeta',
        array( 'post_id' => $post_id[0]->ID , 
              'meta_key' => '_space',
              'meta_value' => 'field_5e00bf9502acb'
             )
    );
    $wpdb->insert(
        'wp_postmeta',
        array( 'post_id' => $post_id[0]->ID , 
              'meta_key' => 'price',
              'meta_value' => $_POST[acf][field_5e00c0eb02acc]
             )
    );
    $wpdb->insert(
        'wp_postmeta',
        array( 'post_id' => $post_id[0]->ID , 
              'meta_key' => '_price',
              'meta_value' => 'field_5e00c0eb02acc'
             )
    );
    $wpdb->insert(
        'wp_postmeta',
        array( 'post_id' => $post_id[0]->ID , 
              'meta_key' => 'adress',
              'meta_value' => $_POST[acf][field_5e00c2fd53bf2]
             )
    );
    $wpdb->insert(
        'wp_postmeta',
        array( 'post_id' => $post_id[0]->ID , 
              'meta_key' => '_adress',
              'meta_value' => 'field_5e00c2fd53bf2'
             )
    );
    $wpdb->insert(
        'wp_postmeta',
        array( 'post_id' => $post_id[0]->ID , 
              'meta_key' => 'live_space',
              'meta_value' => $_POST[acf][field_5e00c64d576e8]
             )
    );
    $wpdb->insert(
        'wp_postmeta',
        array( 'post_id' => $post_id[0]->ID , 
              'meta_key' => '_live_space',
              'meta_value' => 'field_5e00c64d576e8'
             )
    );
    $wpdb->insert(
        'wp_postmeta',
        array( 'post_id' => $post_id[0]->ID , 
              'meta_key' => 'floor',
              'meta_value' => $_POST[acf][field_5e00cbad09606]
             )
    );
    $wpdb->insert(
        'wp_postmeta',
        array( 'post_id' => $post_id[0]->ID , 
              'meta_key' => '_floor',
              'meta_value' => 'field_5e00cbad09606'
             )
    );
    $wpdb->insert(
        'wp_postmeta',
        array( 'post_id' => $post_id[0]->ID , 
              'meta_key' => 'foto',
              'meta_value' => $_POST[acf][field_5e00cacaa614f]
             )
    );
    $wpdb->insert(
        'wp_postmeta',
        array( 'post_id' => $post_id[0]->ID , 
              'meta_key' => '_foto',
              'meta_value' => 'field_5e00cacaa614f'
             )
    );
    $wpdb->insert(
        'wp_postmeta',
        array( 'post_id' => $post_id[0]->ID , 
              'meta_key' => 'type',
              'meta_value' => $_POST[acf][field_5e00cbad09606]
             )
    );
    $wpdb->insert(
        'wp_postmeta',
        array( 'post_id' => $post_id[0]->ID , 
              'meta_key' => '_type',
              'meta_value' => 'field_5e00cbad09606'
             )
    );
    $wpdb->insert(
        'wp_postmeta',
        array( 'post_id' => $post_id[0]->ID , 
              'meta_key' => 'city',
              'meta_value' => $_POST[acf][field_5e04c55723050]
             )
    );
    $wpdb->insert(
        'wp_postmeta',
        array( 'post_id' => $post_id[0]->ID , 
              'meta_key' => '_city',
              'meta_value' => 'field_5e04c55723050'
             )
    );
}
    
?>