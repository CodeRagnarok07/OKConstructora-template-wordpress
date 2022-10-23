<?php
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>

  <!-- banner -->
<div class="container mb-20">
    <div class="mt-40 flex flex-col-reverse md:flex-row gap-3 md:gap-6">
        <div class="md:w-2/6 flex flex-col justify-around items-center md:items-start ">
            <h3>hacemos realidad tu proyecto</h3>
            <a class="bg-primary py-3 px-4 mt-2 " href="<?php echo esc_url( home_url( '/contacto' ) ); ?>">
                <h4>
                    ponete en contacto
                </h4>
            </a>
        </div>

        <div class="md:w-5/6">

            <img class="w-full object-cover" src="<?php echo get_template_directory_uri(); ?>/assets/images/banner.jpg" alt="banner">
        </div>
    </div>
</div>