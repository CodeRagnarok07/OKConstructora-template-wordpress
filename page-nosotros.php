<?php /* Template Name: page-contacto */ ?>
<?php get_header(); ?>

<section class="container flex flex-col-reverse justify-between items-center 
            gap-3 mb-7 md:mb-0 md:flex-row">
    <div class="md:w-2/5">
    <h1>nosotros</h1>
    <p>Nuestra propuesta de valor consiste en contar con un equipo experimentado y profesional, lo que nos
        permite proponer soluciones de calidad a la medida de las necesidades del cliente.</p>
    </div>
    <div>
        <img 
        src="<?php echo get_template_directory_uri(); ?>/assets/images/about/nosotros.jpg"
        alt="">
    </div>
</section>
<!-- ABOUT -->
<section class="bg-primary pt-6 pb-14 md:py-32 -mb-6 md:-mt-16 md:-mb-8  ">
    <div class="container">

    <h1>filosofía</h1>
        <?php get_template_part( 'template-parts/content-card-about' ); ?> 
    </div>
</section>
<!-- ENDABOUT -->


<section class="container flex flex-col justify-between md:gap-[117px] mb-7 relative z-50
    md:-mb-8 md:flex-row">

    <div class="md:w-4/5" >
        <svg class="h-auto md:w-[80px]  w-[40px]" viewBox="0 0 80 68" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M80 0.670556L77.9811 14.8321C73.9432 14.5008 70.6625 15.1634 68.1388 16.8197C65.6151 18.3932 63.8486 20.712 62.8391 23.7762C61.9138 26.7576 61.7455 30.2359 62.3344 34.211H80V68H45.6782V34.211C45.6782 22.2855 48.4963 13.2586 54.1325 7.13021C59.7687 0.919006 68.3912 -1.23421 80 0.670556ZM34.3218 0.670556L32.3028 14.8321C28.265 14.5008 24.9842 15.1634 22.4606 16.8197C19.9369 18.3932 18.1703 20.712 17.1609 23.7762C16.2355 26.7576 16.0673 30.2359 16.6562 34.211H34.3218V68H0V34.211C0 22.2855 2.81809 13.2586 8.45426 7.13021C14.0904 0.919006 22.7129 -1.23421 34.3218 0.670556Z"
                fill="#221F20" />
        </svg>

        <p class="mt-10 font-semibold"  style="font-size: 24px; line-height: 38px;">
        Nuestro know how nos posiciona en un lugar ideal y nos da ventaja sobre los competidores, ya que nos otorga la versatilidad de transitar desde la etapa del diseño hasta la materialización del producto.
        </p>

        <h4 class="font-black mb-2 mt-7">Ing. Oliver Ortiz Kiep</h4>
        <p>Director General</p>
    </div>
    <div class="md:mt-[108px] w-full md:w-full ml-auto md:ml-0">
        <img 
        src="<?php echo get_template_directory_uri(); ?>/assets/images/about/director.png"
        alt="Ing. Oliver Ortiz Kiep">
    </div>
</section>


<!-- equipo -->
<section class="bg-dark pt-32 -mb-16 ">
    <h2 class="container mb-4">equipo</h2>
    <div class="-mb-16">

    <div class="carrusel-slider ">

        <div class="flex items-center gap-7 justify-center mx-auto ">

            <button class="left-control ml-auto">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M3.828 7.00005H16V9.00005H3.828L9.192 14.364L7.778 15.778L0 8.00005L7.778 0.222046L9.192 1.63605L3.828 7.00005Z"
                        fill="white" />
                </svg>
            </button>
            <div class="slider slider-grid galeria-nosotros container" style="--grid:2;--grid-md:4">
            
                <img class="w-auto px-2" 
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/about/equipo/team-card-1.png"
                    alt="">
                <img class="w-auto px-2" 
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/about/equipo/team-card-2.png"
                    alt="">
                <img class="w-auto px-2" 
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/about/equipo/team-card-3.png"
                    alt="">
                <img class="w-auto px-2" 
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/about/equipo/team-card-4.png"
                    alt="">
                <img class="w-auto px-2" 
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/about/equipo/team-card-5.png"
                    alt="">
                <img class="w-auto px-2" 
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/about/equipo/team-card-6.png"
                    alt="">
                <img class="w-auto px-2" 
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/about/equipo/team-card-7.png"
                    alt="">
                <img class="w-auto px-2" 
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/about/equipo/team-card-8.png"
                    alt="">
                <img class="w-auto px-2" 
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/about/equipo/team-card-9.png"
                    alt="">
                <img class="w-auto px-2" 
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/about/equipo/team-card-10.png"
                    alt="">
       
            </div>
            <button class="right-control mr-auto">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12.172 7.00005L6.808 1.63605L8.222 0.222046L16 8.00005L8.222 15.778L6.808 14.364L12.172 9.00005H0V7.00005H12.172Z"
                        fill="white" />
                </svg>
            </button>
        </div>

        <div class="dot-control my-8 mb-2"></div>
    </div>
</div>
</section>
<!-- equipo -->

<p class="container mt-32">
Contamos con un equipo técnico que analiza cada proyecto, ya sea ejecutivo, de desarrollo propio o proyectos de
estudios de arquitectura provistos por nuestros clientes. Los presupuestos se realizan siguiendo nuestros
estándares y, una vez adjudicada la obra, el proyecto queda a cargo de un ingeniero o arquitecto del equipo.
Desde la oficina se organizan las compras y provisión de insumos para cada obra.
</p>

<?php get_template_part( 'template-parts/content-banner' ); ?> 

<?php get_footer(); ?>
