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

    <!-- FEATS -->
    <section class="container flex flex-col-reverse gap-8 items-center
    md:gap-16 md:flex-row">

        <div class="w-full -ml-[5%] sm:-ml-[10%]  ">
            <img class="w-full h-[176px] sm:h-[276px]  md:h-[476px]  lg:h-[576px]  object-cover" 
            src="<?php echo get_template_directory_uri(); ?>/assets/images/feat.jpg" alt="exconstructora">
        </div>
        <div class="w-full flex flex-col gap-7 md:gap-16">
            <div>
                <h3 class="flex items-center gap-3"><svg width="30" height="27" viewBox="0 0 30 27" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M3 24.3333V6.6C2.99992 6.3263 3.08407 6.05921 3.24102 5.83499C3.39798 5.61076 3.62014 5.44028 3.87733 5.34667L16.772 0.658669C16.8727 0.622011 16.9808 0.61018 17.0871 0.624181C17.1933 0.638181 17.2947 0.677601 17.3825 0.739096C17.4703 0.800592 17.5419 0.88235 17.5914 0.97744C17.6409 1.07253 17.6667 1.17815 17.6667 1.28534V7.88934L26.088 10.696C26.3536 10.7845 26.5846 10.9543 26.7483 11.1814C26.912 11.4085 27.0001 11.6814 27 11.9613V24.3333H29.6667V27H0.333332V24.3333H3ZM5.66667 24.3333H15V4.14L5.66667 7.53467V24.3333ZM24.3333 24.3333V12.9227L17.6667 10.7V24.3333H24.3333Z"
                            fill="#FFCB1F" />
                    </svg>
                    OBRAS DE PRIMER NIVEL
                </h3>
                <p class="mt-2">Nos enfocamos en la proyección y construcción de obras civiles, industriales y
                    comerciales de alta
                    calidad.</p>
            </div>
            <div>
                <h3 class="flex items-center gap-3">
                <svg width="24" height="27" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.33333 12.4813V0.333344L24 8.33334V27H0V8.33334L9.33333 12.4813ZM12 4.82534V16.5853L2.66667 12.4373V24.3333H21.3333V9.91601L12 4.82668V4.82534Z" fill="#FFCB1F"/>
                </svg>

                    ACTITUD HUMANA
                </h3>
                <p class="mt-2">Contamos con una organización que, a pesar de su estructura y la búsqueda constante de la eficiencia de la misma, sea amable y colaborativa. Creemos en el trabajo en equipo.</p>
            </div>
            <div>
                <h3 class="flex items-center gap-3">
                <svg width="30" height="28" viewBox="0 0 30 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M27 24.6667H29.6667V27.3334H0.333332V24.6667H3V2.00002C3 1.6464 3.14047 1.30726 3.39052 1.05721C3.64057 0.807163 3.97971 0.666687 4.33333 0.666687H25.6667C26.0203 0.666687 26.3594 0.807163 26.6095 1.05721C26.8595 1.30726 27 1.6464 27 2.00002V24.6667ZM24.3333 24.6667V3.33335H5.66667V24.6667H24.3333ZM9.66667 12.6667H13.6667V15.3334H9.66667V12.6667ZM9.66667 7.33335H13.6667V10H9.66667V7.33335ZM9.66667 18H13.6667V20.6667H9.66667V18ZM16.3333 18H20.3333V20.6667H16.3333V18ZM16.3333 12.6667H20.3333V15.3334H16.3333V12.6667ZM16.3333 7.33335H20.3333V10H16.3333V7.33335Z" fill="#FFCB1F"/>
                </svg>ESPIRITU COLABORATIVO</h3>
                <p class="mt-2">Construimos día a día relaciones estrechas en pie de igualdad con nuestros proveedores, estudios de arquitectura y profesionales del rubro. El espíritu colaborativo y la sinergia entre los actores de nuestras obras garantizan siempre la excelencia del producto final.</p>
            </div>
        </div>
    </section>
    <!-- END FEATS -->