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
    $GLOBALS['wwbFeatures']['header_image'] = false;
    $GLOBALS['wwbFeatures']['home_box'] = true;
    $GLOBALS['wwbFeatures']['slider'] = false;
    $GLOBALS['wwbFeatures']['portfolio'] = false;
    $GLOBALS['wwbFeatures']['video'] = false;
    $GLOBALS['wwbFeatures']['featured_products'] = false;
    $GLOBALS['wwbFeatures']['testimony'] = false;
    $GLOBALS['wwbFeatures']['featured_page'] = false;
    $GLOBALS['wwbFeatures']['featured_pages'] = false;
    $GLOBALS['wwbFeatures']['modal'] = false;

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
    echo     "col-md-9 col-lg-8";
}

function workweb_base_sidebar_class()
{
    echo     "col-md-3 col-lg-4";
}

remove_filter('wp_nav_menu_items', 'add_last_nav_item', 10, 2);
