<?php

function custom_meta_box(){ 
   $sale_ad = new_cmb2_box([
        'title' => 'Ad Block',
        'id'=> 'sale_price',
        'object_types' => 'topic',
    ]);

    $sale_ad -> add_field ([
        'name' => 'Sale Price',
        'id'=> 'sp',
        'type' => 'text',

    ]);

    $sale_ad -> add_field([
        'name' => 'Add Link',
        'id' => 'adlink',
        'type' => 'text',
    ]);

  
};

add_action('cmb2_init' , 'custom_meta_box' );

?>  