<?php
/**
 * Created by PhpStorm.
 * User: Hauw
 * Date: 9/26/2018
 * Time: 9:11 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Theme Title -->
    <title>OOPS!!!</title>
    <meta name="description" content="G.O.X">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript,countdown,themeforest,responsive,bootstrap4">
    <meta name="author" content="Mehmet Demiray">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <?php echo $css; ?>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-129018132-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-129018132-1');
</script>


</head>
<!--
    1.  LOADING ANIMATION
    2.  CANVAS ANIMATIONS
    3.  OVERLAY
    4.  LEFT PANEL
        4.1. Left Panel | Center 
            4.1.1. Logo
            4.1.2. Loading Animation Text
            4.1.3. Subscribe Button
            4.1.4. Contact Button
        4.2. Left Panel | Bottom
            4.2.1. Scrolling Button
    5.  CENTER
        5.1. Countdown
    6. RIGHT PANEL
        6.1. About Section
            6.1.1. About Informations
            6.1.2. Carousel Animation
                6.1.2.1. Support
                6.1.2.2. Responsive
                6.1.2.3. Photography
                6.1.2.4. Documented
                6.1.2.5. Features
                6.1.2.6. Recycle
        6.2. Gallery
        6.3. Contact Section
            6.3.1. Contact Information
            6.3.2. Contact Form
            6.3.3. Contact Form Success Message
            6.3.4. Contact Form Error Message
        6.4. Social Section
            6.4.1. Facebook
            6.4.2. Twitter
            6.4.3. Google
            6.4.4. Dribbble
            6.4.5. Skype
        6.5. Map
        6.6. Back to Top Button
    7. SUBSCRIBE MODAL
        7.1. Modal Close Button 
        7.2. Modal Body 
            7.2.1. Mailchimp Subscription Form
    8. SCRIPTS
    9. KENBURNS SLIDE SETTINGS
-->

<body data-overlay-type="dotted" data-theme-color="magentamix">
    <!-- ===================================
    You can change here:
    - - -
    data-overlay-type="dotted"
    data-overlay-type="gradient"
    - - -
    data-theme-color="purple"
    data-theme-color="red"
    data-theme-color="green"
    data-theme-color="blue"
    data-theme-color="magentamix"
    data-theme-color="orange"
    data-theme-color="dark"
    data-theme-color="white"
    ==================================== -->

    <!-- ==============================================================
        1. LOADING ANIMATION 
    =============================================================== -->
    <div class="loading-page">
        <svg xmlns="http://www.w3.org/2000/svg" width="80px" height="60px" viewBox="5 0 80 60">
            <path id="wave" fill="none" stroke-width="2" stroke-linecap="round" d=""></path>
        </svg>
    </div>
    
    <!-- ==============================================================
        2. CANVAS ANIMATIONS 
    =============================================================== -->
    <div id="kenburns"></div>
    <!-- This code for only spider animation -->
    <canvas id="canvas" class=""></canvas>
    <!-- This code for other particle animations (eg. Line, stars Nasa, Snow, Polygons) -->
    <div id="particles" class="particles-js none"></div>
    
    <!-- ============================================================== 
        3. OVERLAY 
    =============================================================== -->
    <div class="overlay"></div>

    <!-- ============================================================== 
        4. LEFT PANEL 
    =============================================================== -->
    <div id="left">
        <div class="outer">
            <div class="middle">
                <div class="inner text-center">

                    <!-- 4.1. Left Panel | Center 
                    -->
                    <div class="container">
                        <!-- 4.1.1. Logo -->
                        <a class="logo" href="javascript:void(0)"></a>
                        <!-- 4.1.2. Loading Animation Text -->
                        <h3 class="headline loading-bar">
                            <!-- This is static text <span>...</span> -->
                            <span>We are</span>
                            <span class="animated-words">
                                <!-- There are words. You can add more texts in <b></b> tag. -->
                                <b class="is-visible">creative.</b>
                                <b>G.O.X. !</b>
                                <b>awesome.</b>
                            </span>
                        </h3>
                        <!-- 4.1.3. Subscribe Button -->
                        <div class="btn-home" data-toggle="modal" data-target="#subscribeModal">
                            <span class="button__mask"></span>
                            <span class="button__text">SUBSCRIBE <i class="far fa-bell"></i></span>
                            <span class="button__text button__text--bis">SUBSCRIBE <i class="far fa-bell"></i></span>
                        </div>
                        <!-- 4.1.4. Contact Button -->
                        <a href="https://api.whatsapp.com/send?phone=089514055817&text=&source=&data=&app_absent=" class="scrollLink smoth">
                            <div class="btn-home">
                                <span class="button__mask"></span>
                                <span class="button__text">CONTACT <i class="far fa-envelope"></i></span>
                                <span class="button__text button__text--bis">CONTACT <i class="far fa-envelope"></i></span>
                            </div>
                        </a>
                    </div>

                    <!-- 4.2. Left Panel | Bottom 
                    -->
                    <div class="container container-bottom">
                        <!-- 4.2.1. Scrolling Button -->
                        <a href="#about" class="smoth">
                            <div id="scrolling">
                                <div class="mouse">
                                    <div class="mouse-in"></div>
                                </div>
                                <div>
                                    <span class="down-arrow-1"></span>
                                    <span class="down-arrow-2"></span>
                                    <span class="down-arrow-3"></span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================================== 
        5. CENTER
    =============================================================== -->
    <div id="center">
        <div class="rotate-text">

            <!-- 5.1. Countdown 
            -->
            <ul class="countdown">
                <li><span class="days">00</span><p class="days_ref">day</p></li>
                <li><span class="hours">00</span><p class="hours_ref">hours</p></li>
                <li><span class="minutes">00</span><p class="minutes_ref">minutes</p></li>
                <li><span class="seconds">00</span><p class="seconds_ref">seconds</p></li>
            </ul>
        </div>
    </div>

    <!-- ============================================================== 
        6. RIGHT PANEL
    =============================================================== -->
    <div id="right">
        <section id="about" class="about">

            <!-- 6.1.1. About Informations-->
            <h3>Sabar yakk!!</h3>
            <h1 class="first">OOOPPPPSSSS!!! sabar dong!.</h1>
            <p class="description">
                Link yang tadi dibuka itu masih dummy yaaa. Web sesungguhnya masih dalam proses jadi mohon untuk menunggu hingga proses pembuatan web selesai. Waktu pengerjaan sudah tertera pada kolom disamping. Jika ingin ada notifikasi pemberitahuan, mohon untuk Subcribe dengan klik tombol pada kolom disebelah kiri.
                Terima Kasih! :)
            </p>

            <div class="contact-form">
                <button class="btn btn-send" id="btn-send"><a href="<?php echo site_url('Home'); ?>">Klik untuk Demo !</a></button>
            </div>

            <!-- 6.1.2. Carousel Animation-->
            <div class="about-gox">
                <!-- 6.1.2.1. Support -->
                <div class="text-center">
                    <img src="<?php echo base_url('/inti/dist/img/features/support.png'); ?>" alt="Support">
                    <h4>7/24 Support</h4>
                    <p>Selalu aktif untuk anda. Bahkan bisa lebih aktif dari pacar anda :p</p>
                </div>
                <!-- 6.1.2.2. Responsive -->
                <div class="text-center">
                    <img src="<?php echo base_url('/inti/dist/img/features/responsive.png'); ?>" alt="Responsive">
                    <h4>Responsive</h4>
                    <p>Sudah dapat diakses dengan tampilan menyesuaikan device yang anda gunakan.</p>
                </div>
                <!-- 6.1.2.3. Photography -->
                <div class="text-center">
                    <img src="<?php echo base_url('/inti/dist/img/features/photo.png'); ?>" alt="Photography">
                    <h4>HQ Photos</h4>
                    <p>Kulitas dari foto kami sangat bagus lho. copyright hati2 -_-</p>
                </div>
                <!-- 6.1.2.4. Documented -->
                <div class="text-center">
                    <img src="<?php echo base_url('/inti/dist/img/features/documented.png'); ?>" alt="Well Documented">
                    <h4>Documented</h4>
                    <p>Pengerjaan web kita ada dokumentasinya, agar pengguna web lebih mudah untuk mengoperasikan admin panel</p>
                </div>
                <!-- 6.1.2.5. Features -->
                <div class="text-center">
                    <img src="<?php echo base_url('/inti/dist/img/features/features.png'); ?>" alt="Features">
                    <h4>Features</h4>
                    <p>Pokoknya lengkap dech!!!.</p>
                </div>
                <!-- 6.1.2.6. Recycle -->
                <div class="text-center">
                    <img src="<?php echo base_url('/inti/dist/img/features/recycle.png'); ?>" alt="Recycle">
                    <h4>Recycle</h4>
                    <p>Delete ga sengaja? tenang ada backupnya kok di host kita mahhh :p</p>
                </div>
            </div>   
        </section>

        <div id="map"></div>

    </div>

    <!-- ============================================================== 
        7. SUBSCRIBE MODAL
    =============================================================== -->
    <div class="modal fade" id="subscribeModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <!-- 7.1. Modal Close Button 
                --> 
                <div class="modal-close" data-dismiss="modal" aria-label="Close">
                    <a href="#">
                        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                            <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                            <path class="checkmark__check" fill="none" d="M16 16 36 36 M36 16 16 36" />
                        </svg>
                    </a>
                </div>
                <!-- 7.2. Modal Body 
                --> 
                <div class="modal-body">
                    <h3>Subscribe Now</h3>
                    <span>Kalo webnya udah jadi nanti di email kok heheheh.....</span>

                    <!-- 7.2.1. Mailchimp Subscription Form -->
                    <form id="mc-form" class="subscribe-form" name="subscribe-form" method="POST" data-name="Subscription Form"
                        action="https://foog.us8.list-manage.com/subscribe/post-json?u=5273498a8cb820d982341e136&amp;id=50d1ff41bd&amp;c=?">
                        <div class="form-group">
                            <input type="email" name="EMAIL" id="mailInput" class="form form-control" placeholder="Your Email"
                                onfocus="this.placeholder=''" onblur="this.placeholder='Your Email'" required>
                            <a id="mc-subscribe" class="btn button-subscribe">Subscribe</a>
                            <p id="mc-notification"></p>
                            <label>*Sans bosss kalem. ga spam kok!</label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    

    <!-- ============================================================== 
        8. SCRIPTS
    =============================================================== -->
    <?php echo $js; ?> 
    <!-- ==============================================================
        9. KENBURNS SLIDE SETTINGS
    =============================================================== -->
    <script>
    $("#kenburns").vegas({
        slides: [
            { src: "<?php echo base_url('/inti/dist/img/backgrounds/bg2.jpg'); ?>" },
            { src: "<?php echo base_url('/inti/dist/img/backgrounds/bg3.jpg'); ?>" }
        ],
        animation: 'kenburns'
    });
    </script>
</body>

</html>