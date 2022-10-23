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


    <footer class="footer">


        <div class="bg-dark ">
            <div class="container flex absolute py-16 gap-32 justify-start flex-wrap">

                <div class="absolute -top-[4%] md:-top-[7%] right-5">
                    <a href="#top">
                        <div class="bg-primary p-4 ">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.99998 3.828V16H6.99998V3.828L1.63598 9.192L0.221985 7.778L7.99998 0L15.778 7.778L14.364 9.192L8.99998 3.828Z"
                                    fill="#221F20" />
                            </svg>
                        </div>
                    </a>
                </div>

                <div class="w-full md:w-auto">

                    <div class="w-[57px] md:w-[98px] shrink-1">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo_footer.png" alt="logo">
                        </a>
                   
                    </div>
                </div>

                <ul>
                    <li>
                        <h4>MENÚ</h4>
                    </li>

                    <?php
                        $menuParameters = array(
                            'menu' => 'primary_menu',
                            'link_before'     => '',
                            'link_after'      => '',
                            'before'        => '',
                            'after'     => '</li>',
                            'container'       => false,
                            'echo'            => false,
                            'depth'           => 0,
                        );
                        echo strip_tags(wp_nav_menu( $menuParameters ), '<li><a>' );
                    ?>
                </ul>

                <ul>
                    <li>
                        <h4>contacto</h4>
                    </li>
                    <li><a href="">info@okconstructora.com</a></li>
                    <li><a href="">+595 21 555 3228</a></li>
                    <li><a href="">+595 983 902189</a></li>
                </ul>

                <ul>
                    <li>
                        <h4>seguinos</h4>
                    </li>
                    <li>
                    <a target="_blank" href="https://www.facebook.com/okconstructora.sa/" class="social">
                            <i>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0 8.04467C0 12.022 2.88867 15.3293 6.66667 16V10.222H4.66667V8H6.66667V6.222C6.66667 4.222 7.95533 3.11133 9.778 3.11133C10.3553 3.11133 10.978 3.2 11.5553 3.28867V5.33333H10.5333C9.55533 5.33333 9.33333 5.822 9.33333 6.44467V8H11.4667L11.1113 10.222H9.33333V16C13.1113 15.3293 16 12.0227 16 8.04467C16 3.62 12.4 0 8 0C3.6 0 0 3.62 0 8.04467Z"
                                        fill="white" />
                                </svg>

                            </i>
                            <p>Facebook</p>
                        </a>
                    </li>

                    <li>
                    <a target="_blank" href="https://www.instagram.com/ok_constructora.sa/" class="social">
                            <i>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4.97667 0.710748C5.75867 0.674748 6.008 0.666748 8 0.666748C9.992 0.666748 10.2413 0.675415 11.0227 0.710748C11.804 0.746081 12.3373 0.870748 12.804 1.05141C13.2927 1.23608 13.736 1.52475 14.1027 1.89808C14.476 2.26408 14.764 2.70675 14.948 3.19608C15.1293 3.66275 15.2533 4.19608 15.2893 4.97608C15.3253 5.75941 15.3333 6.00875 15.3333 8.00008C15.3333 9.99208 15.3247 10.2414 15.2893 11.0234C15.254 11.8034 15.1293 12.3367 14.948 12.8034C14.764 13.2928 14.4755 13.7362 14.1027 14.1027C13.736 14.4761 13.2927 14.7641 12.804 14.9481C12.3373 15.1294 11.804 15.2534 11.024 15.2894C10.2413 15.3254 9.992 15.3334 8 15.3334C6.008 15.3334 5.75867 15.3247 4.97667 15.2894C4.19667 15.2541 3.66334 15.1294 3.19667 14.9481C2.70729 14.7641 2.26389 14.4756 1.89734 14.1027C1.52426 13.7365 1.23555 13.2933 1.05134 12.8041C0.870672 12.3374 0.746672 11.8041 0.710672 11.0241C0.674672 10.2407 0.666672 9.99141 0.666672 8.00008C0.666672 6.00808 0.675338 5.75875 0.710672 4.97741C0.746005 4.19608 0.870672 3.66275 1.05134 3.19608C1.23582 2.7068 1.52475 2.26362 1.898 1.89741C2.26403 1.52442 2.70699 1.23571 3.19601 1.05141C3.66267 0.870748 4.19601 0.746748 4.976 0.710748H4.97667ZM10.9633 2.03075C10.19 1.99541 9.958 1.98808 8 1.98808C6.042 1.98808 5.81 1.99541 5.03667 2.03075C4.32134 2.06341 3.93334 2.18275 3.67467 2.28341C3.33267 2.41675 3.08801 2.57475 2.83134 2.83141C2.58804 3.06812 2.40079 3.35627 2.28334 3.67475C2.18267 3.93341 2.06334 4.32141 2.03067 5.03675C1.99534 5.81008 1.98801 6.04208 1.98801 8.00008C1.98801 9.95808 1.99534 10.1901 2.03067 10.9634C2.06334 11.6787 2.18267 12.0667 2.28334 12.3254C2.40067 12.6434 2.58801 12.9321 2.83134 13.1687C3.06801 13.4121 3.35667 13.5994 3.67467 13.7167C3.93334 13.8174 4.32134 13.9367 5.03667 13.9694C5.81 14.0047 6.04134 14.0121 8 14.0121C9.95867 14.0121 10.19 14.0047 10.9633 13.9694C11.6787 13.9367 12.0667 13.8174 12.3253 13.7167C12.6673 13.5834 12.912 13.4254 13.1687 13.1687C13.412 12.9321 13.5993 12.6434 13.7167 12.3254C13.8173 12.0667 13.9367 11.6787 13.9693 10.9634C14.0047 10.1901 14.012 9.95808 14.012 8.00008C14.012 6.04208 14.0047 5.81008 13.9693 5.03675C13.9367 4.32141 13.8173 3.93341 13.7167 3.67475C13.5833 3.33275 13.4253 3.08808 13.1687 2.83141C12.932 2.58813 12.6438 2.40089 12.3253 2.28341C12.0667 2.18275 11.6787 2.06341 10.9633 2.03075V2.03075ZM7.06334 10.2607C7.58644 10.4785 8.16892 10.5079 8.71129 10.3439C9.25366 10.1799 9.72227 9.83269 10.0371 9.36158C10.3519 8.89046 10.4934 8.32466 10.4374 7.76082C10.3814 7.19697 10.1313 6.67006 9.73 6.27008C9.47416 6.0144 9.16481 5.81862 8.82423 5.69685C8.48364 5.57507 8.12029 5.53032 7.76033 5.56582C7.40038 5.60133 7.05277 5.7162 6.74254 5.90217C6.43231 6.08814 6.16717 6.34058 5.96621 6.64132C5.76525 6.94205 5.63346 7.28361 5.58035 7.64139C5.52723 7.99917 5.55411 8.36428 5.65903 8.71043C5.76396 9.05657 5.94433 9.37515 6.18715 9.64323C6.42998 9.9113 6.72922 10.1222 7.06334 10.2607ZM5.33467 5.33475C5.68469 4.98473 6.10022 4.70708 6.55754 4.51766C7.01486 4.32823 7.50501 4.23073 8 4.23073C8.495 4.23073 8.98515 4.32823 9.44247 4.51766C9.89979 4.70708 10.3153 4.98473 10.6653 5.33475C11.0154 5.68476 11.293 6.10029 11.4824 6.55761C11.6719 7.01493 11.7694 7.50508 11.7694 8.00008C11.7694 8.49508 11.6719 8.98523 11.4824 9.44255C11.293 9.89987 11.0154 10.3154 10.6653 10.6654C9.95845 11.3723 8.9997 11.7694 8 11.7694C7.00031 11.7694 6.04156 11.3723 5.33467 10.6654C4.62778 9.95852 4.23065 8.99977 4.23065 8.00008C4.23065 7.00039 4.62778 6.04164 5.33467 5.33475V5.33475ZM12.6053 4.79208C12.6921 4.71026 12.7615 4.61187 12.8095 4.50273C12.8576 4.39359 12.8832 4.27593 12.8849 4.1567C12.8867 4.03748 12.8645 3.91911 12.8197 3.80862C12.7748 3.69813 12.7083 3.59775 12.624 3.51344C12.5397 3.42913 12.4393 3.36259 12.3288 3.31776C12.2183 3.27293 12.0999 3.25073 11.9807 3.25247C11.8615 3.25421 11.7438 3.27985 11.6347 3.32788C11.5256 3.37591 11.4272 3.44534 11.3453 3.53208C11.1862 3.70077 11.0991 3.92483 11.1025 4.1567C11.1059 4.38857 11.1995 4.61 11.3634 4.77398C11.5274 4.93795 11.7488 5.03157 11.9807 5.03495C12.2126 5.03833 12.4367 4.95121 12.6053 4.79208V4.79208Z"
                                        fill="white" />
                                </svg>
                            </i>
                            <p>Instagram</p>
                        </a>
                    </li>

                </ul>



            </div>
        </div>
        <div class="bg-primary font-medium">
            <div class="container py-4
            flex items-center
            flex-col gap-1
            md:flex-row md:justify-between ">
                <p>OK CONSTUCTORA S.A. © 2022</p>
                <p>Desarrollado por Arsis</p>
            </div>
        </div>
    </footer>
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
