<?php
/**
 * Created by PhpStorm.
 * User: Eli
 * Date: 1/22/18
 * Time: 12:14 PM
 */


/**
 * The homepage template file
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>



<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php the_custom_logo(); ?>
    <?php the_content(); ?>

<?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
