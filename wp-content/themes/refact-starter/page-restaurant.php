<?php
/** Template Name: Restaurant Landing */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    
    <header class="c-hero">
        <div class="c-hero__bg">
            <picture>  
                <!-- Source for mobile devices -->  
                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/hero-bg.webp">  
                <!-- Source for tablet devices -->  
                <source media="(min-width: 768px) and (max-width: 1024px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/hero-bg.webp">  
                <!-- Source for desktop devices -->  
                <source media="(min-width: 1025px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/hero-bg.webp">  
                <!-- Fallback image for browsers that do not support `<picture>` -->  
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-bg.webp" alt="">  
            </picture>  
        </div>
        <div class="o-container o-relative o-flex o-flex--col">
            <div class="c-hero__bar">
                <div class="c-logo">
                    <a class="c-logo__link" href="#">
                        <img loading=" lazy" fetchpriority="low" class="c-logo__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/resturant-logo.png" width="208" height="113" alt="Logo">
                    </a>
                </div>
                <button class="c-hero__navBtn js-open-nav">
                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg" fill="white">
                        <path d="M34 28.3337H0V24.5559H34V28.3337ZM34 18.8892H0V15.1114H34V18.8892ZM34 5.66699V9.44477H0V5.66699H34Z"/>
                    </svg>
                </button>
                <div class="c-nav js-nav">
                    <nav class="c-nav__menu">
                        <ul class="c-nav__list">
                            <li class="c-nav__item">
                                <a class="c-nav__link" href="#">Why Us</a>
                            </li>
                            <li class="c-nav__item">
                                <a class="c-nav__link" href="#">Menu</a>
                            </li>
                            <li class="c-nav__item">
                                <a class="c-nav__link" href="#">Popular Dishes</a>
                            </li>
                            <li class="c-nav__item">
                                <a class="c-nav__link" href="#">Book</a>
                            </li>
                            <li class="c-nav__item">
                                <a class="c-nav__link" href="#">Contact</a>
                            </li>
                        </ul>
                    </nav>
                    <button class="c-hero__closeBtn js-close-nav">
                        <svg width="34" height="34" viewBox="0 0 24 24" fill="white" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_72_608)">
                                <path d="M24 1.41269L22.6087 0.0244141L12 10.6128L1.39129 0.0244141L0 1.41269L10.6087 12.0012L0 22.5889L1.39129 23.9771L12 13.3894L22.6087 23.9771L24 22.5889L13.3905 12.0012L24 1.41269Z" />
                            </g>
                            <defs>
                            <clipPath id="clip0_72_608">
                            <rect width="24" height="24" />
                            </clipPath>
                            </defs>
                        </svg>
                    </button>
                </div>
               
            </div>
            <div class="c-hero__content">
                <h1 class="c-hero__title">Book a table in the best Mexican restaturant</h1>
                <p class="c-hero__text">30% off for the Christmas</p>
                <div class="c-hero__btns">
                    <a class="c-btn c-btn--primary" href="#">Book Now</a>
                    <a class="c-btn c-btn--secondary" href="#">See Menu</a>
                </div>
            </div>
            <a class="c-hero__scroll" href="#">
                <svg width="16" height="35" viewBox="0 0 16 35" fill="none" xmlns="http://www.w3.org/2000/svg" fill="white">
                    <path d="M8.79482 34.7326L15.7353 27.7387C16.0882 27.3835 16.0882 26.8136 15.7353 26.4584C15.3824 26.1031 14.8163 26.1031 14.4634 26.4584L9.05215 31.9055L9.05215 0.910316C9.05215 0.407052 8.64778 -3.21376e-07 8.14782 -3.43229e-07C7.64787 -3.65083e-07 7.2435 0.407052 7.2435 0.910316L7.2435 31.9055L1.84697 26.4584C1.49406 26.1031 0.927939 26.1031 0.575033 26.4584C0.398579 26.636 0.310353 26.8654 0.310353 27.1023C0.310353 27.3391 0.398579 27.5685 0.575033 27.7461L7.52288 34.74C7.86844 35.0879 8.44191 35.0879 8.79482 34.7326Z" />
                </svg>
            </a>
        </div>
    </header>

    <section class="c-block c-block--overlay-col">
        <div class="o-container">
            <div class="c-block__box o-box">
                <div class="o-grid">
                    <div class="o-grid__item">
                        <h2 class="c-title">Why Customers Like us?</h2>
                        <p>When we first opened our restaturant, it didn't take a long time ofr us to prove our diffrence.</p>
                        <p>Our native chefs, the Chinese atmosphere of the restaturant, the variety of dishes, the high quality of foods, and affordable prices made us well-known very soon. </p>
                        <p>Today, we have customers not only from this area but also from other cities.</p>
                    </div>
                    <div class="o-grid__item">
                        <picture>  
                            <!-- Source for mobile devices -->  
                            <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/cooking.webp">  
                            <!-- Source for tablet devices -->  
                            <source media="(min-width: 768px) and (max-width: 1024px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/cooking.webp">  
                            <!-- Source for desktop devices -->  
                            <source media="(min-width: 1025px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/cooking.webp">  
                            <!-- Fallback image for browsers that do not support `<picture>` -->  
                            <img loading=" lazy" fetchpriority="low" src="<?php echo get_template_directory_uri(); ?>/assets/images/cooking.webp" alt="">  
                        </picture> 
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="c-block">
        <div class="o-container">
            <div class="c-block__box o-box">
                <div class="c-menu">
                    <div class="c-menu__nav">
                        <h2 class="c-menu__title c-title">Our Menu</h2>
                        <ul class="c-menu__nav__items">
                            <li class="c-menu__nav__item"><a class="c-menu__nav__link js-menu-nav-link is-active" data-menu-id="starter" href="#">starter</a></li>
                            <li class="c-menu__nav__item"><a class="c-menu__nav__link js-menu-nav-link" data-menu-id="main-dishes" href="#">main dishes</a></li>
                            <li class="c-menu__nav__item"><a class="c-menu__nav__link js-menu-nav-link" data-menu-id="desserts" href="#">desserts</a></li>
                        </ul>
                    </div>
                    <!-- starter -->
                    <div class="c-menu__items js-menu-items" data-menu-id="starter">
                       <div class="c-menu__item">
                            <div class="c-menu__item__content">
                                <strong class="c-menu__item__name">Pork Wontons</strong>
                                <p class="c-menu__item__desc">Pork, chestnuts, bamboo shoots, spring onion egg, wontonr</p>
                            </div>
                            <div class="c-menu__item__price">
                                <div class="c-price">
                                    <span class="c-price__symbol">$</span>
                                    <span class="c-price__amount">30</span>
                                </div>
                            </div>
                        </div>
                        <div class="c-menu__item">
                            <div class="c-menu__item__content">
                                <strong class="c-menu__item__name">Real Kung Pao chicken</strong>
                                <p class="c-menu__item__desc">Peanuts, chicken tights, rice wine, cornflour, soy sauce, chillies</p>
                            </div>
                            <div class="c-menu__item__price">
                                <div class="c-price">
                                    <span class="c-price__symbol">$</span>
                                    <span class="c-price__amount">18</span>
                                </div>
                            </div>
                        </div>
                        <div class="c-menu__item">
                            <div class="c-menu__item__content">
                                <strong class="c-menu__item__name">Stir Fried Tofu with Rice</strong>
                                <p class="c-menu__item__desc">Tofu, rice, vinger, soy sauce, seasmae oil, ginger</p>
                            </div>
                            <div class="c-menu__item__price">
                                <div class="c-price">
                                    <span class="c-price__symbol">$</span>
                                    <span class="c-price__amount">25</span>
                                </div>
                            </div>
                        </div>
                        <div class="c-menu__item">
                            <div class="c-menu__item__content">
                                <strong class="c-menu__item__name">Chinese pepper steak</strong>
                                <p class="c-menu__item__desc">Steak, pepper, vinger wine, ginger</p>
                            </div>
                            <div class="c-menu__item__price">
                                <div class="c-price">
                                    <span class="c-price__symbol">$</span>
                                    <span class="c-price__amount">15</span>
                                </div>
                            </div>
                        </div>
                        <div class="c-menu__item">
                            <div class="c-menu__item__content">
                                <strong class="c-menu__item__name">Chicken with Chestnuts</strong>
                                <p class="c-menu__item__desc">Chicken, chestnuts, soy sauce, vinger</p>
                            </div>
                            <div class="c-menu__item__price">
                                <div class="c-price">
                                    <span class="c-price__symbol">$</span>
                                    <span class="c-price__amount">19</span>
                                </div>
                            </div>
                        </div>
                        <div class="c-menu__item">
                            <div class="c-menu__item__content">
                                <strong class="c-menu__item__name">Honey Walnut Shrimp</strong>
                                <p class="c-menu__item__desc">Wulnuts, mayonnaise, prawns, honey, egg, rice flour</p>
                            </div>
                            <div class="c-menu__item__price">
                                <div class="c-price">
                                    <span class="c-price__symbol">$</span>
                                    <span class="c-price__amount">15</span>
                                </div>
                            </div>
                        </div>
                        <div class="c-menu__item">
                            <div class="c-menu__item__content">
                                <strong class="c-menu__item__name">Kung Pao chicken</strong>
                                <p class="c-menu__item__desc">Chicken tights, shaoxing wine, soy sauce, chilli, peanuts, cucumber</p>
                            </div>
                            <div class="c-menu__item__price">
                                <div class="c-price">
                                    <span class="c-price__symbol">$</span>
                                    <span class="c-price__amount">29</span>
                                </div>
                            </div>
                        </div>
                        <div class="c-menu__item">
                            <div class="c-menu__item__content">
                                <strong class="c-menu__item__name">Tsao's chicken</strong>
                                <p class="c-menu__item__desc">Chicken tights, rice vinger, rice wine, orange zest, banana ketchup, garlic</p>
                            </div>
                            <div class="c-menu__item__price">
                                <div class="c-price">
                                    <span class="c-price__symbol">$</span>
                                    <span class="c-price__amount">35</span>
                                </div>
                            </div>
                        </div>
                        <div class="c-menu__item">
                            <div class="c-menu__item__content">
                                <strong class="c-menu__item__name">Chinese Steamed Halibut</strong>
                                <p class="c-menu__item__desc">Fillet halibut, ginger, coriander, soy sauce</p>
                            </div>
                            <div class="c-menu__item__price">
                                <div class="c-price">
                                    <span class="c-price__symbol">$</span>
                                    <span class="c-price__amount">19</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- main-dishes -->
                    <div class="c-menu__items js-menu-items" data-menu-id="main-dishes" style="display: none;">
                        <div class="c-menu__item">
                            <div class="c-menu__item__content">
                                <strong class="c-menu__item__name">Pork Wontons main dishes</strong>
                                <p class="c-menu__item__desc">Pork, chestnuts, bamboo shoots, spring onion egg, wontonr</p>
                            </div>
                            <div class="c-menu__item__price">
                                <div class="c-price">
                                    <span class="c-price__symbol">$</span>
                                    <span class="c-price__amount">30</span>
                                </div>
                            </div>
                        </div>
                        <div class="c-menu__item">
                            <div class="c-menu__item__content">
                                <strong class="c-menu__item__name">Real Kung Pao chicken main dishes</strong>
                                <p class="c-menu__item__desc">Peanuts, chicken tights, rice wine, cornflour, soy sauce, chillies</p>
                            </div>
                            <div class="c-menu__item__price">
                                <div class="c-price">
                                    <span class="c-price__symbol">$</span>
                                    <span class="c-price__amount">18</span>
                                </div>
                            </div>
                        </div>
                        <div class="c-menu__item">
                            <div class="c-menu__item__content">
                                <strong class="c-menu__item__name">Stir Fried Tofu with Rice main dishes</strong>
                                <p class="c-menu__item__desc">Tofu, rice, vinger, soy sauce, seasmae oil, ginger</p>
                            </div>
                            <div class="c-menu__item__price">
                                <div class="c-price">
                                    <span class="c-price__symbol">$</span>
                                    <span class="c-price__amount">25</span>
                                </div>
                            </div>
                        </div>
                        <div class="c-menu__item">
                            <div class="c-menu__item__content">
                                <strong class="c-menu__item__name">Chicken with Chestnuts main dishes</strong>
                                <p class="c-menu__item__desc">Chicken, chestnuts, soy sauce, vinger</p>
                            </div>
                            <div class="c-menu__item__price">
                                <div class="c-price">
                                    <span class="c-price__symbol">$</span>
                                    <span class="c-price__amount">19</span>
                                </div>
                            </div>
                        </div>
                        <div class="c-menu__item">
                            <div class="c-menu__item__content">
                                <strong class="c-menu__item__name">Honey Walnut Shrimp main dishes</strong>
                                <p class="c-menu__item__desc">Wulnuts, mayonnaise, prawns, honey, egg, rice flour</p>
                            </div>
                            <div class="c-menu__item__price">
                                <div class="c-price">
                                    <span class="c-price__symbol">$</span>
                                    <span class="c-price__amount">15</span>
                                </div>
                            </div>
                        </div>
                        <div class="c-menu__item">
                            <div class="c-menu__item__content">
                                <strong class="c-menu__item__name">Kung Pao chicken main dishes</strong>
                                <p class="c-menu__item__desc">Chicken tights, shaoxing wine, soy sauce, chilli, peanuts, cucumber</p>
                            </div>
                            <div class="c-menu__item__price">
                                <div class="c-price">
                                    <span class="c-price__symbol">$</span>
                                    <span class="c-price__amount">29</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- deserts -->
                    <div class="c-menu__items js-menu-items" data-menu-id="desserts" style="display: none;">
                        <div class="c-menu__item">
                            <div class="c-menu__item__content">
                                <strong class="c-menu__item__name">Pork Wontons desert</strong>
                                <p class="c-menu__item__desc">Pork, chestnuts, bamboo shoots, spring onion egg, wontonr</p>
                            </div>
                            <div class="c-menu__item__price">
                                <div class="c-price">
                                    <span class="c-price__symbol">$</span>
                                    <span class="c-price__amount">30</span>
                                </div>
                            </div>
                        </div>
                        <div class="c-menu__item">
                            <div class="c-menu__item__content">
                                <strong class="c-menu__item__name">Real Kung Pao chicken desert</strong>
                                <p class="c-menu__item__desc">Peanuts, chicken tights, rice wine, cornflour, soy sauce, chillies</p>
                            </div>
                            <div class="c-menu__item__price">
                                <div class="c-price">
                                    <span class="c-price__symbol">$</span>
                                    <span class="c-price__amount">18</span>
                                </div>
                            </div>
                        </div>
                        <div class="c-menu__item">
                            <div class="c-menu__item__content">
                                <strong class="c-menu__item__name">Stir Fried Tofu with Rice desert</strong>
                                <p class="c-menu__item__desc">Tofu, rice, vinger, soy sauce, seasmae oil, ginger</p>
                            </div>
                            <div class="c-menu__item__price">
                                <div class="c-price">
                                    <span class="c-price__symbol">$</span>
                                    <span class="c-price__amount">25</span>
                                </div>
                            </div>
                        </div>
                        <div class="c-menu__item">
                            <div class="c-menu__item__content">
                                <strong class="c-menu__item__name">Kung Pao chicken desert</strong>
                                <p class="c-menu__item__desc">Chicken tights, shaoxing wine, soy sauce, chilli, peanuts, cucumber</p>
                            </div>
                            <div class="c-menu__item__price">
                                <div class="c-price">
                                    <span class="c-price__symbol">$</span>
                                    <span class="c-price__amount">29</span>
                                </div>
                            </div>
                        </div>
                        <div class="c-menu__item">
                            <div class="c-menu__item__content">
                                <strong class="c-menu__item__name">Tsao's chicken desert</strong>
                                <p class="c-menu__item__desc">Chicken tights, rice vinger, rice wine, orange zest, banana ketchup, garlic</p>
                            </div>
                            <div class="c-menu__item__price">
                                <div class="c-price">
                                    <span class="c-price__symbol">$</span>
                                    <span class="c-price__amount">35</span>
                                </div>
                            </div>
                        </div>
                        <div class="c-menu__item">
                            <div class="c-menu__item__content">
                                <strong class="c-menu__item__name">Chinese Steamed Halibut desert</strong>
                                <p class="c-menu__item__desc">Fillet halibut, ginger, coriander, soy sauce</p>
                            </div>
                            <div class="c-menu__item__price">
                                <div class="c-price">
                                    <span class="c-price__symbol">$</span>
                                    <span class="c-price__amount">19</span>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
                <div class="o-flex">
                </div>

            </div>
        </div>
    </section>

    <section class="c-block c-block--no-margin-bottom">
        <div class="o-container">
            <div class="c-block__box o-box">
                <div class="c-slider">
                    <div class="c-slider__top">
                        <div class="c-title">The Most Popular Dishes</div>
                        <div class="c-slider__nav">
                            <button class="c-slider__nav__btn js-btn-prev">
                                <svg width="30" height="13" viewBox="0 0 30 13" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.223408 5.93606L6.06905 0.218059C6.36597 -0.0726864 6.84228 -0.0726864 7.1392 0.218059C7.43612 0.508805 7.43612 0.975209 7.1392 1.26596L2.58641 5.72406H28.4928C28.9134 5.72406 29.2537 6.0572 29.2537 6.46909C29.2537 6.88098 28.9134 7.21413 28.4928 7.21413H2.58641L7.1392 11.6601C7.43612 11.9509 7.43612 12.4173 7.1392 12.708C6.99074 12.8534 6.79898 12.9261 6.60103 12.9261C6.40308 12.9261 6.21132 12.8534 6.06286 12.708L0.21722 6.98395C-0.0735149 6.69927 -0.0735149 6.2268 0.223408 5.93606Z"/>
                                </svg>
                            </button>
                            <div class="c-slider__nav__stats"><span class="c-slider__nav__current js-carousel-slide">1</span><span>/</span><span>3</span></div>
                            <button class="c-slider__nav__btn js-btn-next">
                                <svg width="30" height="13" viewBox="0 0 30 13" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M29.2839 5.93606L23.4383 0.218059C23.1414 -0.0726864 22.665 -0.0726864 22.3681 0.218059C22.0712 0.508805 22.0712 0.975209 22.3681 1.26596L26.9209 5.72406H1.01452C0.593885 5.72406 0.253662 6.0572 0.253662 6.46909C0.253662 6.88098 0.593885 7.21413 1.01452 7.21413H26.9209L22.3681 11.6601C22.0712 11.9509 22.0712 12.4173 22.3681 12.708C22.5166 12.8534 22.7083 12.9261 22.9063 12.9261C23.1042 12.9261 23.296 12.8534 23.4445 12.708L29.2901 6.98395C29.5808 6.69927 29.5808 6.2268 29.2839 5.93606Z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="js-carousel">
                        <div class="c-slider__slide">
                            <div class="o-grid">
                                <div class="o-grid__col">
                                    <div class="c-slider__slide__img">
                                        <picture>  
                                            <!-- Source for mobile devices -->  
                                            <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/pork.webp">  
                                            <!-- Source for tablet devices -->  
                                            <source media="(min-width: 768px) and (max-width: 1024px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/pork.webp">  
                                            <!-- Source for desktop devices -->  
                                            <source media="(min-width: 1025px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/pork.webp">  
                                            <!-- Fallback image for browsers that do not support `<picture>` -->  
                                            <img loading=" lazy" fetchpriority="low" src="<?php echo get_template_directory_uri(); ?>/assets/images/pork.webp" alt="">  
                                        </picture> 
                                    </div>
                                </div>
                                <div class="o-grid__col c-slider__slide__content">
                                    <h2 class="c-slider__slide__title">Sweet and sour pork</h2>
                                    <div class="c-slider__slide__text">
                                        <p>Sweet and Sour Pork Tenderloin is one of the classic cuisines in China. Pork tenderloin is the main material of this dish.</p>
                                        <p>The dish tastes sour and sweet, but also crispy outside and soft inside, which can stimulate people’s appetite.</p>
                                    </div>
                                    <div class="c-price">
                                        <span class="c-price__symbol">$</span>
                                        <span class="c-price__amount">36</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="c-slider__slide">
                            <div class="o-grid">
                                <div class="o-grid__col">
                                    <div class="c-slider__slide__img">
                                        <picture>  
                                            <!-- Source for mobile devices -->  
                                            <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/pork.webp">  
                                            <!-- Source for tablet devices -->  
                                            <source media="(min-width: 768px) and (max-width: 1024px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/pork.webp">  
                                            <!-- Source for desktop devices -->  
                                            <source media="(min-width: 1025px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/pork.webp">  
                                            <!-- Fallback image for browsers that do not support `<picture>` -->  
                                            <img loading=" lazy" fetchpriority="low" src="<?php echo get_template_directory_uri(); ?>/assets/images/pork.webp" alt="">  
                                        </picture> 
                                    </div>
                                </div>
                                <div class="o-grid__col c-slider__slide__content">
                                    <h2 class="c-slider__slide__title">Sweet and sour pork</h2>
                                    <div class="c-slider__slide__text">
                                        <p>Sweet and Sour Pork Tenderloin is one of the classic cuisines in China. Pork tenderloin is the main material of this dish.</p>
                                        <p>The dish tastes sour and sweet, but also crispy outside and soft inside, which can stimulate people’s appetite.</p>
                                    </div>
                                    <div class="c-price">
                                        <span class="c-price__symbol">$</span>
                                        <span class="c-price__amount">36</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="c-slider__slide">
                            <div class="o-grid">
                                <div class="o-grid__col">
                                    <div class="c-slider__slide__img">
                                        <picture>  
                                            <!-- Source for mobile devices -->  
                                            <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/pork.webp">  
                                            <!-- Source for tablet devices -->  
                                            <source media="(min-width: 768px) and (max-width: 1024px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/pork.webp">  
                                            <!-- Source for desktop devices -->  
                                            <source media="(min-width: 1025px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/pork.webp">  
                                            <!-- Fallback image for browsers that do not support `<picture>` -->  
                                            <img loading=" lazy" fetchpriority="low" src="<?php echo get_template_directory_uri(); ?>/assets/images/pork.webp" alt="">  
                                        </picture> 
                                    </div>
                                </div>
                                <div class="o-grid__col c-slider__slide__content">
                                    <h2 class="c-slider__slide__title">Sweet and sour pork</h2>
                                    <div class="c-slider__slide__text">
                                        <p>Sweet and Sour Pork Tenderloin is one of the classic cuisines in China. Pork tenderloin is the main material of this dish.</p>
                                        <p>The dish tastes sour and sweet, but also crispy outside and soft inside, which can stimulate people’s appetite.</p>
                                    </div>
                                    <div class="c-price">
                                        <span class="c-price__symbol">$</span>
                                        <span class="c-price__amount">36</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="c-book">
        <div class="c-book__bg">
            <picture>  
                <!-- Source for mobile devices -->  
                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/book-bg.webp">  
                <!-- Source for tablet devices -->  
                <source media="(min-width: 768px) and (max-width: 1024px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/book-bg.webp">  
                <!-- Source for desktop devices -->  
                <source media="(min-width: 1025px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/book-bg.webp">  
                <!-- Fallback image for browsers that do not support `<picture>` -->  
                <img loading=" lazy" fetchpriority="low" src="<?php echo get_template_directory_uri(); ?>/assets/images/book-bg.webp" alt="">  
            </picture>  
        </div>
        <div class="o-container o-relative">
            <div class="o-grid">
                <div class="o-grid__col c-book__content">
                    <h3 class="c-title">Book a Table</h3>
                    <p>When we first opened our restaturant, it didn't take a long time for us to prove our diffrence. </p>
                </div>
                <div class="o-grid__col c-book__form">
                    <div class="c-book__box o-box">
                        <form action="" method="post" class="c-form">
                            <div class="c-form__filed">
                                <label class="c-form__lable" for="book-name">your name</label>
                                <input class="c-form__input" id="book-name" type="text">
                            </div>
                            <div class="c-form__filed">
                                <label class="c-form__lable" for="book-phone">your phone</label>
                                <input class="c-form__input" id="book-phone" type="phone">
                            </div>
                            <div class="c-form__filed">
                                <label class="c-form__lable" for="book-email">your email</label>
                                <input class="c-form__input" id="book-email" type="email">
                            </div>
                            <div class="c-form__filed">
                                <label class="c-form__lable" for="book-date">date</label>
                                <input class="c-form__input" id="book-date" type="date" placeholder="Aug 27, 2019" pattern="[A-Za-z]{3} \d{1,2}, \d{4}">
                            </div>
                            <div class="c-form__filed">
                                <label class="c-form__lable" for="book-time">time</label>
                                <input class="c-form__input" id="book-time" type="time" value="18:00" step="60">
                            </div>
                            <div class="c-form__filed">
                                <label class="c-form__lable" for="book-number">number of people</label>
                                <div class="c-form__input__number">
                                    <button class="c-form__input__number__btn js-input-decrease-btn">
                                        <svg width="13" height="2" viewBox="0 0 13 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.4238 1.80838H0.423828V0H12.4238V1.80838Z" fill="#909090"/>
                                        </svg>
                                    </button>
                                    <input class="c-form__input js-book-number" id="book-number" type="number" value="1" min="1" step="1">
                                    <button class="c-form__input__number__btn js-input-increase-btn">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.93585 6.41509H15.0642V9.0566H8.93585V16H6.1283V9.0566H0V6.41509H6.1283V0H8.93585V6.41509Z" fill="#909090"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <button type="submit" class="c-btn c-btn--primary">Book Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="c-contact">
        <div class="o-container">
            <div class="c-contact__top">
                <div class="c-title">Contact Us</div>
                <div class="o-grid o-grid--3col">
                    <div class="o-grid__col">
                        <div class="c-icon-info">
                            <svg class="c-icon-info__icon" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M24.3285 21.1687C23.2831 20.1365 21.9779 20.1365 20.9392 21.1687C20.1467 21.9544 19.3543 22.7402 18.5752 23.5392C18.3622 23.759 18.1824 23.8056 17.9227 23.6591C17.4099 23.3794 16.8639 23.153 16.3712 22.8467C14.0738 21.4017 12.1494 19.5439 10.4447 17.453C9.59905 16.4142 8.8466 15.3022 8.32054 14.0503C8.214 13.7973 8.23398 13.6308 8.4404 13.4244C9.23281 12.6586 10.0052 11.8728 10.7843 11.0871C11.8697 9.99503 11.8697 8.71652 10.7777 7.6178C10.1584 6.99186 9.53912 6.37924 8.91984 5.75331C8.28059 5.11405 7.64799 4.46814 7.00208 3.83554C5.95663 2.81673 4.65149 2.81673 3.6127 3.8422C2.81363 4.62795 2.04786 5.43368 1.23548 6.20611C0.483021 6.91861 0.103463 7.79093 0.0235567 8.80974C-0.102962 10.4678 0.30323 12.0326 0.875896 13.5575C2.04786 16.7139 3.83245 19.5173 5.99659 22.0876C8.91984 25.5635 12.4091 28.3137 16.491 30.298C18.3289 31.1903 20.2333 31.8762 22.3042 31.9894C23.7292 32.0693 24.9678 31.7097 25.96 30.5977C26.6392 29.8385 27.4049 29.146 28.1241 28.4202C29.1895 27.3415 29.1962 26.0363 28.1374 24.9709C26.8722 23.699 25.6004 22.4338 24.3285 21.1687Z" fill="white"/>
                                <path d="M23.0567 15.8615L25.5139 15.442C25.1277 13.1847 24.0622 11.1404 22.4441 9.5156C20.7328 7.80426 18.5686 6.72552 16.1848 6.39258L15.8385 8.86303C17.683 9.12273 19.3611 9.95509 20.6862 11.2802C21.9381 12.5321 22.7571 14.1169 23.0567 15.8615Z" fill="white"/>
                                <path d="M26.8989 5.18062C24.0623 2.34393 20.4731 0.552689 16.5111 0L16.1648 2.47045C19.5875 2.94989 22.6905 4.50142 25.141 6.94523C27.4649 9.26919 28.9898 12.2058 29.5425 15.4353L31.9997 15.0158C31.3537 11.2735 29.5891 7.87748 26.8989 5.18062Z" fill="white"/>
                            </svg>
                            <span class="c-icon-info__text">(212) 574-4682</span>
                        </div>
                    </div>
                    <div class="o-grid__col">
                        <div class="c-icon-info">
                            <svg class="c-icon-info__icon" width="32" height="32" viewBox="0 0 24 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 0C5.60964 0 0.410767 5.19887 0.410767 11.5891C0.410767 19.5196 10.782 31.1621 11.2235 31.6538C11.6383 32.1157 12.3624 32.1149 12.7764 31.6538C13.218 31.1621 23.5891 19.5196 23.5891 11.5891C23.589 5.19887 18.3902 0 12 0ZM12 17.4199C8.78483 17.4199 6.1692 14.8042 6.1692 11.5891C6.1692 8.374 8.78489 5.75837 12 5.75837C15.215 5.75837 17.8306 8.37406 17.8306 11.5892C17.8306 14.8043 15.215 17.4199 12 17.4199Z" fill="white"/>
                            </svg>
                            <span class="c-icon-info__text">219 W 43rd St, NY 10036</span>
                        </div>
                    </div>
                    <div class="o-grid__col">
                        <div class="c-icon-info">
                            <svg class="c-icon-info__icon" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M27.4794 4.03427C24.5614 1.34476 20.9319 0 16.5973 0C12.0408 0 8.1567 1.52754 4.95148 4.58915C1.74626 7.65075 0.140381 11.4565 0.140381 16.0131C0.140381 20.3803 1.66792 24.1338 4.71647 27.2803C7.77808 30.4268 11.8907 32 17.0674 32C20.1877 32 23.2493 31.3603 26.2522 30.0743C27.2314 29.6565 27.7079 28.5337 27.3097 27.5479C26.8984 26.5296 25.7365 26.0596 24.7246 26.4904C22.1135 27.6132 19.5545 28.1746 17.0608 28.1746C13.0918 28.1746 10.0172 26.967 7.83683 24.5451C5.66303 22.1297 4.57286 19.2901 4.57286 16.0326C4.57286 12.4945 5.74136 9.54386 8.07184 7.17421C10.3958 4.8111 13.2616 3.62301 16.6561 3.62301C19.783 3.62301 22.4268 4.59567 24.581 6.541C26.7352 8.48633 27.8124 10.9343 27.8124 13.8849C27.8124 15.9021 27.3162 17.5863 26.3305 18.9245C25.3448 20.2693 24.3199 20.9351 23.2559 20.9351C22.6814 20.9351 22.3942 20.6283 22.3942 20.0082C22.3942 19.5055 22.4333 18.918 22.5051 18.2391L23.7193 8.31008H19.5414L19.2738 9.28274C18.2097 8.41452 17.0412 7.97715 15.7748 7.97715C13.7642 7.97715 12.0408 8.78009 10.6112 10.3794C9.17506 11.9788 8.46352 14.0416 8.46352 16.5614C8.46352 19.0224 9.09673 21.0135 10.3697 22.5214C11.6426 24.0359 13.1702 24.7866 14.9588 24.7866C16.5582 24.7866 17.9225 24.1142 19.0584 22.776C19.9135 24.062 21.1734 24.7018 22.8381 24.7018C25.286 24.7018 27.4011 23.6377 29.1832 21.5031C30.9654 19.3749 31.8597 16.8029 31.8597 13.7936C31.8597 9.98123 30.404 6.72379 27.4794 4.03427ZM17.8572 19.0551C17.1196 20.0473 16.2383 20.55 15.2134 20.55C14.5149 20.55 13.9535 20.1844 13.5292 19.4533C13.0984 18.7222 12.8829 17.8148 12.8829 16.7246C12.8829 15.3798 13.1832 14.2962 13.7838 13.4737C14.3844 12.6512 15.1286 12.2334 16.0164 12.2334C16.7867 12.2334 17.4721 12.5402 18.0727 13.1603C18.6732 13.7805 18.9735 14.603 18.9735 15.6344C18.967 16.9204 18.5949 18.0563 17.8572 19.0551Z" fill="white"/>
                            </svg>
                            <span class="c-icon-info__text">info@mercaditofood.com</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="c-contact__map">
                <div class="c-contact__map__mapbox js-map"></div>
                </div>
            </div>
            <div class="c-contact__open">
                <strong class="c-contact__open__title">Open Hours</strong>
                <p class="o-contact__open__subtitle">Every Day 8am–12am</p>
            </div>
        </div>
    </section>

    <footer class="c-footer">
        <p>All rights are reserved for Mercadito Restaurant © 2019</p>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>