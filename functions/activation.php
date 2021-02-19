<?php
add_action( 'after_switch_theme', 'sunflower_activate_theme', 10, 2 );


function sunflower_activate_theme( $old_theme_name, $old_theme = false ){
    sunflower_import_widgets();

}

function sunflower_import_widgets(){
    // check for theme_mods_urwahl3000
    $options = get_option('theme_mods_urwahl3000');  
    $sidebars_widgets = array_merge($options['sidebars_widgets']['data']['infospalte'], $options['sidebars_widgets']['data']['fussleist'] );
    
    $option = get_option('sidebars_widgets');                  
    if( empty($option['sidebar-1'] ) ){
        $option['sidebar-1'] = $sidebars_widgets;
        update_option('sidebars_widgets', $option);
    }
 
}