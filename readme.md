# Creacionde plantilla wp

# style
https://developer.wordpress.org/themes/getting-started/your-first-theme/

`style.css`
```css
    /*
    Theme Name: ragnarokTheme
    Text Domain: ragnarokTheme
    Version: 2.0
    Tested up to: 6.0
    Requires at least: 4.7
    Requires PHP: 5.2.4
    Description: Our default theme for 2020 is designed to take full advantage of the flexibility of the block editor. Organizations and businesses have the ability to create dynamic landing pages with endless layouts using the group and column blocks. The centered content column and fine-tuned typography also makes it perfect for traditional blogs. Complete editor styles give you a good idea of what your content will look like, even before you publish. You can give your site a personal touch by changing the background colors and the accent color in the Customizer. The colors of all elements on your site are automatically calculated based on the colors you pick, ensuring a high, accessible color contrast for your visitors.
    Tags: blog, one-column, custom-background, custom-colors, custom-logo, custom-menu, editor-style, featured-images, footer-widgets, full-width-template, rtl-language-support, sticky-post, theme-options, threaded-comments, translation-ready, block-patterns, block-styles, wide-blocks, accessibility-ready
    Author: the WordPress team
    Author URI: https://wordpress.org/
    Theme URI: https://wordpress.org/themes/twentytwenty/
    License: GNU General Public License v2 or later
    License URI: http://www.gnu.org/licenses/gpl-2.0.html

    All files, unless otherwise stated, are released under the GNU General Public
    License version 2.0 (http://www.gnu.org/licenses/gpl-2.0.html)

    This theme, like WordPress, is licensed under the GPL.
    Use it to make something cool, have fun, and share what you've learned
    with others.
    */
```

# funtions

`funtions.php`

```php
<?php

function twentytwenty_register_styles() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'twentytwenty-style', get_stylesheet_uri(), array(), $theme_version );
	wp_style_add_data( 'twentytwenty-style', 'rtl', 'replace' );

	wp_enqueue_style( 'twentytwenty-print-style', get_template_directory_uri() . '/print.css', null, $theme_version, 'print' );

}

add_action( 'wp_enqueue_scripts', 'twentytwenty_register_styles' );


//  add  /assets/js/index.js
function twentytwenty_register_scripts() {
	$theme_version = wp_get_theme()->get( 'Version' );
	if ( ( ! is_admin() ) && is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'twentytwenty-js', get_template_directory_uri() . '/assets/js/index.js', array(), $theme_version, false );
	wp_script_add_data( 'twentytwenty-js', 'async', true );
}

add_action( 'wp_enqueue_scripts', 'twentytwenty_register_scripts' );
```

#### use
`header.php`

```php
    <?php
    /**
     * Header file for the Twenty Twenty WordPress default theme.
     *
     * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
     *
     * @package WordPress
     * @subpackage Twenty_Twenty
     * @since Twenty Twenty 1.0
     */
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <html class="no-js" <?php language_attributes(); ?>>
        <meta charset="<?php bloginfo( 'charset' ); ?>">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <?php wp_head(); ?>
    </head <?php body_class(); ?>>
        <body <?php body_class(); ?>>

        <?php wp_body_open();?>
```

`footer.php`

```php
    <?php
    /**
     * The template for displaying the footer
     *
     * Contains the opening of the #site-footer div and all content after.
     *
     * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
     *
     * @package WordPress
     * @subpackage Twenty_Twenty
     * @since Twenty Twenty 1.0
     */

    ?>


    
	<?php wp_footer(); ?>

    <script>
        (() => {
            const all_carrusel_slider = document.getElementsByClassName("carrusel-slider")
            for (const carrusel_slider of all_carrusel_slider) {

                //  Select chidrem items and width
                const slider = carrusel_slider.getElementsByClassName("slider")[0]

                let current = 0


                /* ReRenders */

                // current count 
                const renderCurretn = () => {
                    const cont_container = carrusel_slider.getElementsByClassName("render-cont")[0]
                    if (cont_container) {
                        cont_container.textContent = current + 1
                    }
                }

                // dot style
                function setDoct(auto) {
                    for (let dot of dot_control_cont.children) {
                        dot.className = ""
                    }
                    if (auto) {
                        dot_control_cont.children[current + 1].classList.add("active")
                    } else {
                        dot_control_cont.children[current].classList.add("active")
                    }
                    renderCurretn()
                }


                // arrow_controls
                function arrowControler(bol) {
                    const widthSlider = slider.children[0].offsetWidth
                    const cols = slider.offsetWidth / widthSlider
                    if (bol == true) {
                        current++
                        if (current >= slider.children.length / cols) {
                            slider.scrollLeft = 0
                            current = 0
                        } else {
                            slider.scrollLeft += widthSlider * cols
                        }
                    } else {
                        if (current < 1) {
                            slider.scrollLeft = slider.children.length * widthSlider * cols
                            current = slider.children.length - 1
                        } else {
                            slider.scrollLeft -= widthSlider * cols
                            current = current - 1
                        }
                    }
                    setDoct()
                    renderCurretn()

                }
                const right_control = carrusel_slider.getElementsByClassName("right-control")[0]
                const left_control = carrusel_slider.getElementsByClassName("left-control")[0]

                if (right_control) {
                    right_control.onclick = () => arrowControler(true)
                }
                if (left_control) {
                    left_control.onclick = () => arrowControler(false)
                }


                // Dot Control
                const dot_control_cont = carrusel_slider.getElementsByClassName("dot-control")[0]
                function indexControler(e, i) {
                    const widthSlider = slider.children[0].offsetWidth
                    const cols = slider.offsetWidth / widthSlider

                    slider.scrollLeft = widthSlider * i * cols

                    current = i
                    setDoct()
                }

                let widthSlider = slider.children[0].offsetWidth

                let cols = slider.offsetWidth / widthSlider

                let items_number = slider.children.length / cols
                for (let index = 0; index < items_number; index++) {
                    // const element = slider.children[index];
                    const dot_control = document.createElement("div")
                    dot_control.onclick = (e) => indexControler(e, index)
                    dot_control_cont.appendChild(dot_control)
                    console.log(dot_control_cont, dot_control);
                }

                if (dot_control_cont.children[0]) {

                    dot_control_cont.children[0].classList.add("active")
                }
                renderCurretn()




                function autoPlay() {
                    current = current + 1

                    const widthSlider = slider.children[0].offsetWidth
                    const cols = slider.offsetWidth / widthSlider
                    if (current >= slider.children.length / cols) {
                        slider.scrollLeft = 0
                        current = 0
                    } else {
                        slider.scrollLeft += widthSlider * cols
                    }
                    setDoct()
                }
                setInterval(() => {
                    autoPlay()
                }, 4000);
            }
        })();
    </script>
	</body>
</html>
```

### navbar loop

`funtions.php`
```php
    function register_my_menus() {
        register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
        )
        );
    }
    add_action( 'init', 'register_my_menus' );
```

#### use
```php
  <?php
        $menuParameters = array(
            'menu' => 'primary_menu',
            'link_before'     => '<span>',
            'link_after'      => '<div class="subrallado"></div></span>',
            'before'        => '<div class="group">',
            'after'     => '</div>',
            'container'       => false,
            'echo'            => false,
            'depth'           => 0,
        );
        echo strip_tags(wp_nav_menu( $menuParameters ), '<a><div>' );
    ?>
```


# page

### 1.- create page in admin
### 2.- create page.php
```php
<?php get_header(); ?>

    <?php
    // Start the loop.
    while ( have_posts() ) : the_post();
        // Include the page content template.
        get_template_part( 'template-parts/content', 'page' );
        // If comments are open or we have at least one comment, load up the comment template.
       
    endwhile;
    ?>

<?php get_footer(); ?>
```
### 3.- create page-{namepage}.php

```php
<?php /* Template Name: page-contacto */ ?>
<?php get_header(); ?>

 <h1>contenido<h1/>

   

<?php get_footer(); ?>
```

# template parts

### 1.- create file 
`\template-parts\content-[name].php`
```php
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
```


### use
index.php
```php
    <?php
        get_header();
        <?php get_template_part( 'template-parts/content-banner' ); ?> 
        get_footer();
    ?>
```

















