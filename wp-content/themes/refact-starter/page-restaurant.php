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
                        <img class="c-logo__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/resturant-logo.png" width="208" height="113" alt="Logo">
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
            <div class="c-block__box">
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
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cooking.webp" alt="">  
                        </picture> 
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="c-block">
        <div class="o-container">
            <div class="c-block__box">
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

    <?php wp_footer(); ?>
</body>
</html>