<?php /* Template Name: page-contacto */ ?>
<?php get_header(); ?>

    <section class="container flex flex-col-reverse justify-between items-center gap-3 mb-7 md:mb-0 md:flex-row">
        <div class="md:w-2/5">
            <h1> CONTACTO</h1>
            <p>¿Tenés en mente una vivienda exclusiva o necesitás asesoramiento para un proyecto industrial? Escribinos y nos pondremos manos a la obra para concretar tu proyecto.</p>
        </div>
        <div>
            <img 
            src="<?php echo get_template_directory_uri(); ?>/assets/images/contacto.jpg" 
            alt="">
        </div>
    </section>
    <!-- ABOUT -->
    <section class="bg-primary pt-6 pb-14 md:py-32 -mb-6 md:-my-16">
        <div class="container">

            <div class="flex flex-col md:flex-row gap-4 mt-8">

                <div class="bg-dark h-full p-11 w-full ">
                    <div class="flex gap-3 items-center">
                        <svg width="24" height="30" viewBox="0 0 24 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 29.6373L3.51467 21.152C1.83646 19.4738 0.693582 17.3356 0.230571 15.0078C-0.232439 12.68 0.00520913 10.2672 0.913465 8.07454C1.82172 5.88184 3.35979 4.0077 5.33318 2.68913C7.30656 1.37056 9.62663 0.666779 12 0.666779C14.3734 0.666779 16.6934 1.37056 18.6668 2.68913C20.6402 4.0077 22.1783 5.88184 23.0865 8.07454C23.9948 10.2672 24.2324 12.68 23.7694 15.0078C23.3064 17.3356 22.1636 19.4738 20.4853 21.152L12 29.6373ZM18.6 19.2667C19.9052 17.9613 20.794 16.2983 21.1541 14.4878C21.5141 12.6774 21.3292 10.8008 20.6228 9.09542C19.9163 7.39003 18.7201 5.93242 17.1852 4.9069C15.6504 3.88138 13.8459 3.33401 12 3.33401C10.1541 3.33401 8.34962 3.88138 6.81478 4.9069C5.27994 5.93242 4.08367 7.39003 3.37722 9.09542C2.67077 10.8008 2.48589 12.6774 2.84594 14.4878C3.20599 16.2983 4.09481 17.9613 5.4 19.2667L12 25.8667L18.6 19.2667ZM12 15.3333C11.2928 15.3333 10.6145 15.0524 10.1144 14.5523C9.61429 14.0522 9.33334 13.3739 9.33334 12.6667C9.33334 11.9594 9.61429 11.2812 10.1144 10.7811C10.6145 10.281 11.2928 10 12 10C12.7072 10 13.3855 10.281 13.8856 10.7811C14.3857 11.2812 14.6667 11.9594 14.6667 12.6667C14.6667 13.3739 14.3857 14.0522 13.8856 14.5523C13.3855 15.0524 12.7072 15.3333 12 15.3333Z" fill="#FFCB1F"/>
                        </svg>

                        <h3 class="mt-4 mb-3">dirección</h3>
                    </div>

                    <p class="mt-auto">Avda. Mariscal López 4877 casi Gumersindo Sosa. Asunción, Paraguay</p>
                </div>

                <div class="bg-dark h-full p-11 w-full ">
                    <div class="flex gap-3 items-center">
                        <svg width="28" height="27" viewBox="0 0 28 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.6665 3.00001H25.9998C26.3535 3.00001 26.6926 3.14049 26.9426 3.39053C27.1927 3.64058 27.3332 3.97972 27.3332 4.33334V25.6667C27.3332 26.0203 27.1927 26.3594 26.9426 26.6095C26.6926 26.8595 26.3535 27 25.9998 27H1.99984C1.64622 27 1.30708 26.8595 1.05703 26.6095C0.80698 26.3594 0.666504 26.0203 0.666504 25.6667V4.33334C0.666504 3.97972 0.80698 3.64058 1.05703 3.39053C1.30708 3.14049 1.64622 3.00001 1.99984 3.00001H7.33317V0.333344H9.99984V3.00001H17.9998V0.333344H20.6665V3.00001ZM17.9998 5.66668H9.99984V8.33334H7.33317V5.66668H3.33317V11H24.6665V5.66668H20.6665V8.33334H17.9998V5.66668ZM24.6665 13.6667H3.33317V24.3333H24.6665V13.6667Z" fill="#FFCB1F"/>
                        </svg>
                        <h3 class="mt-4 mb-3">horario</h3>
                    </div>
                    <p class="mt-auto">
                        Lunes a Viernes — 08:00 a 17:00 <br>
                        Sábado — 09:00 a 12:00</p>
                </div>

                <div class="bg-dark h-full p-11 w-full ">
                    <div class="flex gap-3 items-center">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.488 10.2427C9.73911 12.4406 11.5594 14.2609 13.7573 15.512L14.936 13.8613C15.1255 13.5959 15.4058 13.4092 15.7237 13.3364C16.0417 13.2637 16.3752 13.31 16.6613 13.4667C18.5471 14.4972 20.6296 15.117 22.772 15.2853C23.1064 15.3118 23.4185 15.4634 23.6461 15.7098C23.8737 15.9561 24 16.2792 24 16.6147V22.564C24.0001 22.8941 23.8777 23.2125 23.6565 23.4576C23.4353 23.7027 23.1311 23.857 22.8027 23.8907C22.093 23.9639 21.3801 24.0004 20.6667 24C9.25333 24 0 14.7467 0 3.33333C0 2.616 0.036 1.904 0.109333 1.19733C0.143006 0.86893 0.297312 0.564694 0.542386 0.343512C0.78746 0.12233 1.10587 -7.11437e-05 1.436 3.1023e-08H7.38533C7.72075 -4.20247e-05 8.04386 0.126335 8.29024 0.353934C8.53662 0.581533 8.68817 0.893631 8.71467 1.228C8.88297 3.37039 9.50277 5.45291 10.5333 7.33867C10.69 7.62475 10.7363 7.95832 10.6636 8.27626C10.5908 8.5942 10.4041 8.87446 10.1387 9.064L8.488 10.2427ZM5.12533 9.36667L7.65867 7.55733C6.93971 6.00546 6.44714 4.35845 6.196 2.66667H2.68C2.672 2.888 2.668 3.11067 2.668 3.33333C2.66667 13.2747 10.7253 21.3333 20.6667 21.3333C20.8893 21.3333 21.112 21.3293 21.3333 21.32V17.804C19.6415 17.5529 17.9945 17.0603 16.4427 16.3413L14.6333 18.8747C13.9049 18.5916 13.1973 18.2575 12.516 17.8747L12.4387 17.8307C9.82344 16.3423 7.65771 14.1766 6.16933 11.5613L6.12533 11.484C5.74254 10.8027 5.40838 10.0951 5.12533 9.36667Z" fill="#FFCB1F"/>
                        </svg>
                        <h3 class="mt-4 mb-3">teléfonos</h3>
                    </div>

                    <p class="mt-auto">+595 21 555 3228 <br>+595 983 902189</p>
                </div>

            </div>
        </div>
    </section>
    <!-- ENDABOUT -->
    <div class="container flex mb-20 flex-col md:flex-row">
        <div class="h-[677px] w-full">
            <iframe class="" width="100%" height="100%"
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d461759.06327487685!2d-57.58492!3d-25.287646!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x945da89d7bbce953%3A0xf7e3e09bac06d7bd!2sGomez%20De%20Castro%20550%2C%20Asunci%C3%B3n%2C%20Paraguay!5e0!3m2!1ses-419!2sus!4v1666152369551!5m2!1ses-419!2sus"
                style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>


        

        <div class="px-6 md:px-16 flex items-end mt-6 md:mt-0 w-full">
            <form action="<?php echo admin_url( 'admin-post.php' ) ?>" class="form">
                <div>
                    <h2>ENVIANOS UN MENSAJE</h2>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p> -->
                </div>
                <br>
                <div class="form-control">
                    <label for="name">Nombre</label>
                    <input id="name" name="name" type="text">
                </div>
                <br>
                <div class="form-control">
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email">
                </div>
                <br>
                <div class="form-control">
                    <label for="message">Mensaje</label>
                    <textarea name="" id="message" name="message" class="h-[140px]"></textarea>
                </div>

                <div class="flex mt-6">
                <input type="hidden" name="action" value="process_form">
                <input class="px-4 py-3 bg-primary h4 cursor-pointer" type="submit" name="submit" value="ENVIAR MENSAJE">
                   
                </div>

                <h4> <?php
            // if ( isset($_GET['sent']) ){
            //     if ( $_GET['sent'] == '1'){
            //         echo "<p> ✔ Formulario enviado correctamente</p><br>";
            //     }
            //     else {
            //         echo "<p> Hubo un error al enviar</p><br>";
            //     }
            // }
            // ?></h4>
            </form>

        </div>
    </div>

<?php get_footer(); ?>
