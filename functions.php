<?php

/**
 * Child theme automatically overrides parent
 */



/**
 * Set what features to show
 * Overrides defaults set in parent.  Pick what you want
 */
function setwwbFeatures()
{
    $GLOBALS['wwbFeatures']['header_image'] = true;
    $GLOBALS['wwbFeatures']['home_box'] = true;
    $GLOBALS['wwbFeatures']['slider'] = true;
    $GLOBALS['wwbFeatures']['portfolio'] = true;
    $GLOBALS['wwbFeatures']['video'] = true;
    $GLOBALS['wwbFeatures']['featured_products'] = true;
    $GLOBALS['wwbFeatures']['testimony'] = true;
    $GLOBALS['wwbFeatures']['featured_page'] = true;
    $GLOBALS['wwbFeatures']['featured_pages'] = true;
    $GLOBALS['wwbFeatures']['modal'] = true;

    //What should the 'more' link say?
    $GLOBALS['wwbVars']['more'] = 'more';

    //Change to bust style cache
    $GLOBALS['wwbVars']['stylecache'] = wp_get_theme()->get('Version');

    //Home Box settings: How many boxes?
    $GLOBALS['wwbVars']['homebox_num'] = 4;

    //Featured Pages settings: How many pages?
    $GLOBALS['wwbVars']['featuredpages_num'] = 1;

    //Latest Post settings: How many boxes?
    $GLOBALS['wwbVars']['latestposts_num'] = 1;
}
setwwbFeatures();

/**
 * Set page widths
 */
function workweb_base_primary_sidebar_class()
{
    echo     "col-md-9 col-lg-8 col-lg-offset-1";
}

function workweb_base_sidebar_class()
{
    echo     "col-md-3 col-lg-4";
}

//add_filter('wp_nav_menu_items', 'add_last_nav_item', 10, 2);
remove_filter( 'wp_nav_menu_items', 'add_last_nav_item', 10, 2);
