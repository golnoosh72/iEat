<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iEat</title>
    <link rel="stylesheet" href="https://use.typekit.net/bsg5ydy.css">

    <script>
        document.documentElement.className = "js";
        let supportsCssVars = function () {
            let e, t = document.createElement("style");
            return t.innerHTML = "root: { --tmp-var: bold; }", document.head.appendChild(t), e = !!(window.CSS && window.CSS.supports && window.CSS.supports("font-weight", "var(--tmp-var)")), t.parentNode.removeChild(t), e
        };
        supportsCssVars() || alert("Please view this demo in a modern browser that supports CSS Variables.");
    </script>
</head>
<body>
<div class="background">
    <div class="page-container">
        <div><?php echo $this->notification ?></div>
        <!--MAIN CONTENT-->
        <svg class="hidden">
            <symbol id="icon-arrow" viewBox="0 0 24 24">
                <title>arrow</title>
                <polygon points="6.3,12.8 20.9,12.8 20.9,11.2 6.3,11.2 10.2,7.2 9,6 3.1,12 9,18 10.2,16.8 "/>
            </symbol>
            <symbol id="icon-drop" viewBox="0 0 24 24">
                <title>drop</title>
                <path d="M12,21c-3.6,0-6.6-3-6.6-6.6C5.4,11,10.8,4,11.4,3.2C11.6,3.1,11.8,3,12,3s0.4,0.1,0.6,0.3c0.6,0.8,6.1,7.8,6.1,11.2C18.6,18.1,15.6,21,12,21zM12,4.8c-1.8,2.4-5.2,7.4-5.2,9.6c0,2.9,2.3,5.2,5.2,5.2s5.2-2.3,5.2-5.2C17.2,12.2,13.8,7.3,12,4.8z"/>
                <path d="M12,18.2c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7c1.3,0,2.4-1.1,2.4-2.4c0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7C15.8,16.5,14.1,18.2,12,18.2z"/>
            </symbol>
        </svg>
        <main>
            <div class="slideshow">
                <div class="slide">
                    <div class="slide__img-wrap">
                        <div class="slide__img"
                             style="background-image: url(<?php echo PROJECT_DIR ?>views/assets/HomeSlideShow/img/6.jpg);"></div>
                        <div class="slide__img-reveal"></div>
                    </div>
                    <div class="slide__title-wrap">
                        <h3 class="slide__title">
                            <div class="slide__box"></div>
                            <span class="slide__title-inner"></span></h3>
                        <h4 class="slide__subtitle">
                            <div class="slide__box"></div>
                            <span class="slide__subtitle-inner"></span></h4>
                        <p class="slide__quote"><em></em></p>
                        <a class="slide__explore"><span class="slide__explore-inner"></span></a>
                    </div>
                    <span class="slide__number">01</span>
                    <div class="slide__side">
                        <span class="slide__info"></span>
                        <h5 class="slide__category"></h5>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide__img-wrap">
                        <div class="slide__img"
                             style="background-image: url(<?php echo PROJECT_DIR ?>views/assets/HomeSlideShow/img/2.jpg);"></div>
                        <div class="slide__img-reveal"></div>
                    </div>
                    <div class="slide__title-wrap">
                        <h3 class="slide__title">
                            <div class="slide__box"></div>
                            <span class="slide__title-inner"></span></h3>
                        <h4 class="slide__subtitle">
                            <div class="slide__box"></div>
                            <span class="slide__subtitle-inner"></span></h4>
                        <p class="slide__quote"><em></em></p>
                        <a class="slide__explore"><span class="slide__explore-inner"></span></a>
                    </div>
                    <span class="slide__number">02</span>
                    <div class="slide__side">
                        <span class="slide__info"></span>
                        <h5 class="slide__category"></h5>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide__img-wrap">
                        <div class="slide__img"
                             style="background-image: url(<?php echo PROJECT_DIR ?>views/assets/HomeSlideShow/img/3.jpg);"></div>
                        <div class="slide__img-reveal"></div>
                    </div>
                    <div class="slide__title-wrap">
                        <h3 class="slide__title">
                            <div class="slide__box"></div>
                            <span class="slide__title-inner"></span></h3>
                        <h4 class="slide__subtitle">
                            <div class="slide__box"></div>
                            <span class="slide__subtitle-inner"></span></h4>
                        <p class="slide__quote"><em></em></p>
                        <a class="slide__explore"><span class="slide__explore-inner"></span></a>
                    </div>
                    <span class="slide__number">03</span>
                    <div class="slide__side">
                        <span class="slide__info"></span>
                        <h5 class="slide__category"></h5>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide__img-wrap">
                        <div class="slide__img"
                             style="background-image: url(<?php echo PROJECT_DIR ?>views/assets/HomeSlideShow/img/4.jpg);"></div>
                        <div class="slide__img-reveal"></div>
                    </div>
                    <div class="slide__title-wrap">
                        <h3 class="slide__title">
                            <div class="slide__box"></div>
                            <span class="slide__title-inner"></span></h3>
                        <h4 class="slide__subtitle">
                            <div class="slide__box"></div>
                            <span class="slide__subtitle-inner"></span></h4>
                        <p class="slide__quote"><em></em></p>
                        <a class="slide__explore"><span class="slide__explore-inner"></span></a>
                    </div>
                    <span class="slide__number">04</span>
                    <div class="slide__side">
                        <span class="slide__info"></span>
                        <h5 class="slide__category"></h5>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide__img-wrap">
                        <div class="slide__img"
                             style="background-image: url(<?php echo PROJECT_DIR ?>views/assets/HomeSlideShow/img/5.jpg);"></div>
                        <div class="slide__img-reveal"></div>
                    </div>
                    <div class="slide__title-wrap">
                        <h3 class="slide__title">
                            <div class="slide__box"></div>
                            <span class="slide__title-inner"></span></h3>
                        <h4 class="slide__subtitle">
                            <div class="slide__box"></div>
                            <span class="slide__subtitle-inner"></span></h4>
                        <p class="slide__quote"><em></em></p>
                        <a class="slide__explore"><span class="slide__explore-inner"></span></a>
                    </div>
                    <span class="slide__number">05</span>
                    <div class="slide__side">
                        <span class="slide__info"></span>
                        <h5 class="slide__category"></h5>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide__img-wrap">
                        <div class="slide__img"
                             style="background-image: url(<?php echo PROJECT_DIR ?>views/assets/HomeSlideShow/img/3.jpg);"></div>
                        <div class="slide__img-reveal"></div>
                    </div>
                    <div class="slide__title-wrap">
                        <h3 class="slide__title">
                            <div class="slide__box"></div>
                            <span class="slide__title-inner"></span></h3>
                        <h4 class="slide__subtitle">
                            <div class="slide__box"></div>
                            <span class="slide__subtitle-inner"></span></h4>
                        <p class="slide__quote"><em></em></p>
                        <a class="slide__explore"><span class="slide__explore-inner"></span></a>
                    </div>
                    <span class="slide__number">06</span>
                    <div class="slide__side">
                        <span class="slide__info"></span>
                        <h5 class="slide__category"></h5>
                    </div>
                </div>
            </div>
        </main>
        <div class="loader">
            <div class="loader__inner"></div>
        </div>

        <!-- /HomePage -->
    </div>
</div><!-- end container fluid -->


</body>
</html>