<?php
require("session.php");
    $nav1='Search';
    $nav2='About';
    $nav3='Service';
    $nav4='Contact';

    if(isset($user) && $user!=''){
        $auth = 'Выйти';
    }
    else {
        $auth = 'Войти';
    }

    require("head.php");
    require("header.php");
?>
<body>
    <div class="intro">
        <div class="container">
            <div class="intro_inner">
                <h1 class="intro-subtitle">Вашим животным нужна помощь?</h1>
                <h1 class="intro-title">Мы вам поможем</h1>
                    <div class="container">
                        <form class="search-form" action="search_page.php" method='post'>
                            <input type="search" name="search" class="search-field" placeholder="Введите район и найдите вет-клинику для вашего питомца..." required>
                            <input type="submit" name="submit" class="search-btn" value="   Search   ">
                        </form>
                        <?php
                        if (isset($_POST['submit'])){
                            $search = $_POST['search'];
                        }
                        ?>
                    </div>
                <a class="btn" href="#section">Learn more</a>
            </div>
        </div>
    </div>

    <section class="section" id="section">
        <div class="container">

            <div class="section_header">
                <h2 class="section_title">About application brief and history</h2>
                <div class="section_text">
                    <p>Ваш домашний питомец заболел и вы не знаете что делать? Хотите найти ветеринарную клинику поблизости? 
                        Наше приложение вам поможет!!!
                        Просто введите название вашего района и наше приложение сделает всё за вас. 
                    </p>
                </div>
            </div>
            
            <div class="about">
                <div class="about-item">
                    <div class="about_img">
                        <img class="img" src="images/scale_1200.jpg" alt="">
                    </div>
                </div>
                <div class="about-item">
                    <div class="about_img">
                        <img class="img" src="images/48f49f01921ae5a76c426085d50825a9.jpg" alt="">
                    </div>
                </div>
                <div class="about-item">
                    <div class="about_img">
                        <img class="img" src="images/kompiuternyi-dizain-sobaka-kot-druzia.jpg" alt="">
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- <div class="statistic">
        <div class="container">
            <div class="stat">
                <div class="stat-item">
                    <div class="stat_count">1987</div>
                    <div class="stat_text">Cultural objects</div>
                </div>
                <div class="stat-item">
                    <div class="stat_count">567</div>
                    <div class="stat_text">Manors and palaces</div>
                </div>
                <div class="stat-item">
                    <div class="stat_count">432</div>
                    <div class="stat_text">Museum and open halls</div>
                </div>
                <div class="stat-item">
                    <div class="stat_count">54</div>
                    <div class="stat_text">Memorable places</div>
                </div>
                <div class="stat-item">
                    <div class="stat_count">553</div>
                    <div class="stat_text">Amazing adventures</div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- <section class="section" id="section-2">
        <div class="container">

            <div class="section_header">
                <h3 class="section_suptitle">Only the newest</h3>
                <h2 class="section_title">About the services that were used</h2>
            </div>

            <div class="services">
                <div class="service-item">
                    <img class="service-icon" src="images/html5.png" alt="">
                    <div class="service-title">HTML</div>
                    <div class="service-text">Lorem ipsum dolor sit amet, consectetur</div>
                </div>
                <div class="service-item">
                    <img class="service-icon" src="images/CSS3_logo.png" alt="">
                    <div class="service-title">CSS</div>
                    <div class="service-text">Lorem ipsum dolor sit amet, consectetur</div>
                </div>
                <div class="service-item">
                    <img class="service-icon" src="images/Figma-1-logo.png" alt="">
                    <div class="service-title">Figma</div>
                    <div class="service-text">Lorem ipsum dolor sit amet, consectetur</div>
                </div>
            </div>
            <div class="services">
                <div class="service-item">
                    <img class="service-icon-1" src="images/PHP-logo.png" alt="">
                    <div class="service-title">PHP</div>
                    <div class="service-text">Lorem ipsum dolor sit amet, consectetur</div>
                </div>
                <div class="service-item">
                    <img class="service-icon-1" src="images/PhpMyAdmin_logo.png" alt="">
                    <div class="service-title">phpMyAdmin</div>
                    <div class="service-text">Lorem ipsum dolor sit amet, consectetur</div>
                </div>
                <div class="service-item">
                    <img class="service-icon-2" src="images/javascript-logo.png" alt="">
                    <div class="service-title">JavaScript</div>
                    <div class="service-text">Lorem ipsum dolor sit amet, consectetur</div>
                </div>
            </div>
        </div>
    </section> -->

    <section class="section section--map" id="map">
        <div class="container">
            <div class="map">
                <h2 class="map_title">
                    <div><i class="fas fa-map-marker-alt"></i></div>
                    <a href="https://goo.gl/maps/ymPasHA5VcMdABoz9" target="_blank">Посмотреть Москву на карте</a>
                 </h2>
            </div>
        </div>
    </section>

    <section class="section-contact" id="cont">
        <div class="container">
            <div class="cont_header">
                <h3 class="cont_suptitle">We are always in touch</h3>
                <h2 class="cont_title">Contacts</h2>
                <div class="cont_text">
                    <p>Вы можете всегда связаться с нами в любое удобное для вас время. Мы всегда на связи.</p>
                </div>
                <div class="cont-icon">
                    <a href="https://vk.com/" class="href_cont" target="_blank"><i class="fab fa-vk"></i></a></i>
                    <a href="https://twitter.com" class="href_cont" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://ru-ru.facebook.com" class="href_cont" target="_blank"><i class="fab fa-facebook"></i></a>
                    <a href="https://web.whatsapp.com" class="href_cont" target="_blank"><i class="fas fa-envelope-square"></i></a>
                    <a href="https://github.com/Anni003/Project" class="href_cont" target="_blank"><i class="fab fa-github-square"></i></a>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
    require("footer.php");
?>
</html>