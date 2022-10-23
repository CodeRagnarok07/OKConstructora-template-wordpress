<?php /* Template Name: page-contacto */ ?>
<?php get_header(); ?>

    <section class="container flex flex-col-reverse justify-between items-center gap-3 mb-7 md:mb-0 md:flex-row ">
        <div class="md:w-2/5">
            <h1>SERVICIOS</h1>
            <p>Proyección, ejecución y mantenimiento de viviendas, edificios, naves industriales y locales comerciales</p>
        </div>
        <div class="">
            <img 
            src="<?php echo get_template_directory_uri(); ?>/assets/images/services/servicios-portada.jpg" 
             alt="">
        </div>
    </section>

    <!-- feats -->
    <section class="bg-primary pt-6 pb-14 md:py-32 -mb-6 md:-my-16">
        <div class="container">

            <div class="grid grid-cols-1 md:grid-cols-2 h-min gap-4 mt-8">

                <div class="bg-dark h-full p-11 w-full ">
                    <div class="flex gap-3 items-center">
                        <svg width="30" height="27" viewBox="0 0 30 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.99992 24.3333V6.6C2.99984 6.3263 3.08399 6.05921 3.24094 5.83499C3.3979 5.61076 3.62006 5.44028 3.87725 5.34667L16.7719 0.658669C16.8726 0.622011 16.9807 0.61018 17.087 0.624181C17.1933 0.638181 17.2946 0.677601 17.3824 0.739096C17.4702 0.800592 17.5419 0.88235 17.5913 0.97744C17.6408 1.07253 17.6666 1.17815 17.6666 1.28534V7.88934L26.0879 10.696C26.3535 10.7845 26.5845 10.9543 26.7482 11.1814C26.9119 11.4085 27 11.6814 26.9999 11.9613V24.3333H29.6666V27H0.333252V24.3333H2.99992ZM5.66658 24.3333H14.9999V4.14L5.66658 7.53467V24.3333ZM24.3333 24.3333V12.9227L17.6666 10.7V24.3333H24.3333Z" fill="#FFCB1F"/>
                        </svg>
                        <h3 class="mt-4 mb-3">VIVIENDAS</h3>
                    </div>
                    <p class="mt-auto">
                        Diseños personalizados atendiendo las necesidades del cliente, prestando una delicada atención al detalle.
                    </p>
                </div>

                <div class="bg-dark h-full p-11 w-full ">
                    <div class="flex gap-3 items-center">
                    <svg width="24" height="27" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.33333 12.4813V0.333344L24 8.33334V27H0V8.33334L9.33333 12.4813ZM12 4.82534V16.5853L2.66667 12.4373V24.3333H21.3333V9.91601L12 4.82668V4.82534Z" fill="#FFCB1F"/>
                    </svg>
                        <h3 class="mt-4 mb-3">EDIFICIOS</h3>
                    </div>
                    <p class="mt-auto">
                        Tanto para oficinas como para departamentos, nuestra amplia experiencia nos permite encarar la proyección y ejecución de estas construcciones.
                    </p>
                </div>

                <div class="bg-dark h-full p-11 w-full ">
                    <div class="flex gap-3 items-center">
                        <svg width="30" height="27" viewBox="0 0 30 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.99992 24.3333V6.6C2.99984 6.3263 3.08399 6.05921 3.24094 5.83499C3.3979 5.61076 3.62006 5.44028 3.87725 5.34667L16.7719 0.658669C16.8726 0.622011 16.9807 0.61018 17.087 0.624181C17.1933 0.638181 17.2946 0.677601 17.3824 0.739096C17.4702 0.800592 17.5419 0.88235 17.5913 0.97744C17.6408 1.07253 17.6666 1.17815 17.6666 1.28534V7.88934L26.0879 10.696C26.3535 10.7845 26.5845 10.9543 26.7482 11.1814C26.9119 11.4085 27 11.6814 26.9999 11.9613V24.3333H29.6666V27H0.333252V24.3333H2.99992ZM5.66658 24.3333H14.9999V4.14L5.66658 7.53467V24.3333ZM24.3333 24.3333V12.9227L17.6666 10.7V24.3333H24.3333Z" fill="#FFCB1F"/>
                        </svg>
                        <h3 class="mt-4 mb-3">NAVES INDUSTRIALES</h3>
                    </div>
                    <p class="mt-auto">
                        La formación de nuestro equipo nos permite ofrecer la construcción o asesoramiento de edificios industriales para el almacenamiento de bienes.
                    </p>
                </div>

                <div class="bg-dark h-full p-11 w-full ">
                    <div class="flex gap-3 items-center">
                    <svg width="24" height="27" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.33333 12.4813V0.333344L24 8.33334V27H0V8.33334L9.33333 12.4813ZM12 4.82534V16.5853L2.66667 12.4373V24.3333H21.3333V9.91601L12 4.82668V4.82534Z" fill="#FFCB1F"/>
                    </svg>
                        <h3 class="mt-4 mb-3">LOCALES COMERCIALES</h3>
                    </div>
                    <p class="mt-auto">
                        Nos encargamos de la ejecución y mantenimiento de espacios funcionales para negocios comerciales en cualquier punto del país.
                    </p>
                </div>


            </div>
        </div>
    </section>
    <!-- end-feats -->

    <?php get_template_part( 'template-parts/content-feats' ); ?> 

    <!-- servicios -->
    <section class="container servicios mt-32 ">

        <div class="serv-item">
            <div>
                <img 
                src="<?php echo get_template_directory_uri(); ?>/assets/images/services/items/01.jpg" 
                alt="">
            </div>
            <div class="serv-text-box">
                <hr class="top-line ">
                <h2 class="mt-4 mb-3">PROYECCIÓN Y EJECUCIÓN DE CUALQUIER TIPO DE PROYECTO</h2>
                <p></p>
            </div>
        </div>

        <div class="serv-item">
            <div>
                <img 
                src="<?php echo get_template_directory_uri(); ?>/assets/images/services/items/02.jpg" 
                alt="">
            </div>
            <div class="serv-text-box">
                <hr class="top-line ">
                <h2 class="mt-4 mb-3">SERVICIO POSVENTA</h2>
                <p></p>
            </div>
        </div>

        <div class="serv-item">
            <div>
                <img 
                src="<?php echo get_template_directory_uri(); ?>/assets/images/services/items/03.jpg" 
                alt="">
            </div>
            <div class="serv-text-box">
                <hr class="top-line ">
                <h2 class="mt-4 mb-3">VIVIENDAS</h2>
                <p></p>
            </div>
        </div>

        <div class="serv-item">
            <div>
                <img 
                src="<?php echo get_template_directory_uri(); ?>/assets/images/services/items/04.jpg" 
                alt="">
            </div>
            <div class="serv-text-box">
                <hr class="top-line ">
                <h2 class="mt-4 mb-3">EDIFICIOS</h2>
                <p></p>
            </div>
        </div>  

        <div class="serv-item">
            <div>
                <img 
                src="<?php echo get_template_directory_uri(); ?>/assets/images/services/items/05.jpg" 
                alt="">
            </div>
            <div class="serv-text-box">
                <hr class="top-line ">
                <h2 class="mt-4 mb-3">NAVES INDUSTRIALES</h2>
                <p></p>
            </div>
        </div>  

        <div class="serv-item">
            <div>
                <img 
                src="<?php echo get_template_directory_uri(); ?>/assets/images/services/items/06.jpg" 
                alt="">
            </div>
            <div class="serv-text-box">
                <hr class="top-line ">
                <h2 class="mt-4 mb-3">LOCALES COMERCIALES</h2>
                <p></p>
            </div>
        </div>  


    </section>
    <!-- servicios -->


<?php get_template_part( 'template-parts/content-banner' ); ?> 
<?php get_footer(); ?>
