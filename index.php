<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>



    <?php get_template_part( 'template-parts/content-main-carrusel' ); ?> 
    <?php get_template_part( 'template-parts/content-feats' ); ?> 



    <!-- ABOUT -->
    <section class="bg-primary py-32 -my-16">
        <div class="container">
            <h2 class="mb-3">NOSOTROS</h2>
            <p>OK CONSTRUCTORA nace en mayo del 2012 impulsada por los ingenieros Santiago Gómez Grassi y Miguel Abente
                Brun, quienes luego de más de 34 años de servicio y experiencia en el mundo de la construcción en el
                Paraguay, deciden emprender con su propia empresa, ofreciendo su inigualable capacidad, compromiso y
                confiabilidad a un público cada vez más exigente.</p>

                <?php get_template_part( 'template-parts/content-card-about' ); ?> 

        </div>
    </section>
    <!-- ENDABOUT -->

    <!-- carrusel 2 -->
    <section class=" ">
        <div class="carrusel-slider ">

            <div class="flex ">


                <button class="left-control ml-auto">
                    
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M3.828 7.00005H16V9.00005H3.828L9.192 14.364L7.778 15.778L0 8.00005L7.778 0.222046L9.192 1.63605L3.828 7.00005Z"
                            fill="#221F20" />
                    </svg>
                </button>

                <div class="slider slider-grid galeria-nosotros container" style="--grid:1;--grid-md:1">
                    <div class="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/crl/foto3-1.jpg" alt="foto galerya okconstructora">
                    </div>
                    <div class="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/crl/foto3-2.jpg" alt="foto galerya okconstructora">
                    </div>
                    <div class="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/crl/foto3-3.jpg" alt="foto galerya okconstructora">
                    </div>
                    <div class="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/crl/foto3-4.jpg" alt="foto galerya okconstructora">
                    </div>
                    <div class="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/crl/foto3-5.jpg" alt="foto galerya okconstructora">
                    </div>
                </div>

                <button class="right-control mr-auto">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12.172 7.00005L6.808 1.63605L8.222 0.222046L16 8.00005L8.222 15.778L6.808 14.364L12.172 9.00005H0V7.00005H12.172Z"
                            fill="#221F20" />
                    </svg>

                </button>
            </div>

            <div class="dot-control mt-8 mb-16">
            </div>
        </div>

    </section>
    <!-- carrusel 2 -->

    <!-- galery2 -->
    <section class="bg-dark pt-20 relative ">
        <div class="container pb-[253px] ">
            <!-- <h2>GALERíA DE FOTOS</h2> -->
            <p class="mt-3 mb-7">
                Nos mantenemos en crecimiento constante dentro de un mercado exigente, proyectando y ejecutando obras de
                todo tipo, ya sean civiles, industriales o comerciales.
            </p>

            <div class="carrusel-slider">
                <div style="--grid:1;--grid-md:3; gap:16px;" class="slider slider-grid 
                    absolute inset-x-0 flex flex-col md:flex-row lg:h-[264px] mt-8">
                    
                    <div class="bg-dark h-full w-full group relative ">
                        <img class="w-full h-full"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/hover/RESIDENCIA-PALOMA.jpg"
                        title="RESIDENCIA PALOMA" alt="RESIDENCIA PALOMA" >
                        <div
                            class=" w-full h-full bg-[#FFCB1F] opacity-0 group-hover:opacity-100 cursor-pointer absolute inset-0  flex flex-col text-black p-8">
                            <h3 class="m-auto">RESIDENCIA PALOMA</h3>
                            <p></p>
                        </div>
                    </div>

                    <div class="bg-dark h-full w-full group relative ">
                        <img class="w-full h-full"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/hover/RESIDENCIA-PERALTA.jpg"
                        title="RESIDENCIA PERALTA" alt="RESIDENCIA PERALTA" >
                        <div
                            class=" w-full h-full bg-[#FFCB1F] opacity-0 group-hover:opacity-100 cursor-pointer absolute inset-0  flex flex-col text-black p-8">
                            <h3 class="m-auto">RESIDENCIA PERALTA</h3>
                            <p></p>
                        </div>
                    </div>

                  <div class="bg-dark h-full w-full group relative ">
                        <img class="w-full h-full"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/hover/RESIDENCIA-TAVA-CERRO.jpg"
                        title="RESIDENCIA TAVA CERRO" alt="RESIDENCIA TAVA CERRO" >
                        <div
                            class=" w-full h-full bg-[#FFCB1F] opacity-0 group-hover:opacity-100 cursor-pointer absolute inset-0  flex flex-col text-black p-8">
                            <h3 class="m-auto">RESIDENCIA TAVA CERRO</h3>
                            <p></p>
                        </div>
                    </div>
                </div>

            </div>

        </div>


    </section>
    <!-- galery2 -->

 <?php get_template_part( 'template-parts/content-banner' ); ?> 

<?php
get_footer();
