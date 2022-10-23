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


    <!-- carrusel 1 -->
    <section id="top" class="container flex relative  mb-32  h-[350px] sm:h-[550px] lg:h-auto">

        <div class=" md:w-full md:mt-20 relative z-[15]  md:-mr-60 ">
            <div class="flex flex-col py-[20%] px-6 md:p-0 h-full ">

                <h1 class="w-full ">NOS CARACTERIZA <br> LA EXCELENCIA</h1>
                <p class="md:w-1/2 mt-3 md:mb-11">Nuestra propuesta de valor consiste en contar con un equipo
                    experimentado
                    y
                    profesional, lo
                    que nos
                    permite proponer soluciones de calidad a la medida de las necesidades del cliente.</p>

                <a class="bg-primary py-3 px-4 mt-2 w-auto mr-auto" href="<?php echo esc_url( home_url( '/contacto' ) ); ?>">
                    <h4>
                        ponete en contacto
                    </h4>
                </a>
            </div>

        </div>

        <div class="absolute inset-0 md:relative md:w-full h-full">
            <div class="carrusel-slider  ">
                <div class="md:hidden bg-white bg-opacity-60 absolute inset-0 -bottom-10 z-[10] before:"></div>

                <div class="slider slider-grid  h-full " style="--grid:1;--grid-md:1">

                    <div class="h-[350px] sm:h-[550px] lg:h-auto ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/main/foto1-2.jpg" alt="photo-galery">
                    </div>
                    <div class="h-[350px] sm:h-[550px] lg:h-auto ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/main/foto1-3.jpg" alt="photo-galery">
                    </div>
                    <div class="h-[350px] sm:h-[550px] lg:h-auto ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/main/foto1-4.jpg" alt="photo-galery">
                    </div>
                    <div class="h-[350px] sm:h-[550px] lg:h-auto ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/main/foto1-5.jpg" alt="photo-galery">
                    </div>
                    
                </div>

                <!-- dot -->
                <div class="md:flex md:px-[20%]">
                    <div class="dot-control -mt-12 ">
                    </div>
                </div>

                <!-- cntrols -->
                <div class="hidden md:flex w-20 justify-between absolute -left-28 bottom-24 z-[20]">
                    <button class="left-control">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3.828 7.00005H16V9.00005H3.828L9.192 14.364L7.778 15.778L0 8.00005L7.778 0.222046L9.192 1.63605L3.828 7.00005Z"
                                fill="#221F20" />
                        </svg>
                    </button>

                    <button class="right-control">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.172 7.00005L6.808 1.63605L8.222 0.222046L16 8.00005L8.222 15.778L6.808 14.364L12.172 9.00005H0V7.00005H12.172Z"
                                fill="#221F20" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>
