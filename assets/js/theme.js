/*Theme Javascript*/

/**
 * Menu Hover Functions
 */
jQuery('.dropdown').mouseover(function(){ jQuery(this).addClass('show'); jQuery('.dropdown-menu', this).addClass('show'); });

jQuery('.dropdown').on('mouseleave',function(){ jQuery(this).removeClass('show'); jQuery('.dropdown-menu', this).removeClass('show'); });