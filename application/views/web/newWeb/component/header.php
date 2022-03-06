<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="en" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="robots" content="index,nofollow" /> -->
    <meta name="copyright" content="Copyright © 2015" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="google" content="notranslate" />

    <title>Aplikasi keluarga Islami : Taaruf, Konsultasi, Tutorial Pranikah Dan Nikah, Parenting</title>

    <meta name="title" content="Aplikasi keluarga islami : taaruf, konsultasi, tutorial pranikah dan nikah" />
    <meta name="keywords" content="SYARIAID,SYARIAID APP,Kedaulatan Santri,Aplikasi Kedaulatan Santri dan Kepribadian Muslim,muslim,kepribadian,aplikasi islami,karya anak negeri,gratis,bebas iklan,santri,purna santri,umat,islam,Utama" />
    <meta name="url" content="https://syaria.id" />
    <meta name="description" content="SYARIAID adalah aplikasi Islami karya anak negeri terlengkap, gratis, dan bebas iklan yang didesain khusus untuk menemani para santri, purna santri, dan segenap umat Islam setiap saat." />
    <meta name="description" content=" <?= !empty($this->uri->segment(1)) && ($this->uri->segment(1) == 'artikel' || $this->uri->segment(1) == 'inspirasi')  ? str_replace("-", " ", $this->uri->segment(2)) : 'Membangun keluarga islami : Taaruf, Konsultasi Ustadz, Tutorial Pra Nikah / Pasca Nikah, Parenting.' ?> " />
    <meta name="keywords" content=" <?= !empty($this->uri->segment(1)) && ($this->uri->segment(1) == 'artikel' || $this->uri->segment(1) == 'inspirasi')  ? str_replace("-", " ", $this->uri->segment(2)) : 'Membangun keluarga islami : Taaruf, Konsultasi Ustadz, Tutorial Pra Nikah / Pasca Nikah, Parenting.' ?> " />


    <meta name="twitter:card" content="<?= !empty($this->uri->segment(1)) ? ucwords($this->uri->segment(1)) : 'Home' ?>">
    <meta name="twitter:site" content="@syaria" />
    <meta name="twitter:creator" content="@syaria" />
    <meta name="twitter:url" content="https://syaria.id">
    <meta name="twitter:title" content="<?= !empty($this->uri->segment(1)) ? ucwords($this->uri->segment(1)) : 'Home' ?>">
    <meta name="twitter:description" content="SYARIAID adalah aplikasi Islami karya anak negeri terlengkap, gratis, dan bebas iklan yang didesain khusus untuk menemani para santri, purna santri, dan segenap umat Islam setiap saat.">
    <meta name="twitter:image" content="images/logo.png">

    <meta property="og:title" content="<?= !empty($this->uri->segment(1)) ? ucwords($this->uri->segment(1)) : 'Home' ?>" />
    <meta property="og:site_name" content="SYARIAID" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://syaria.id" />
    <meta property="og:description" content="SYARIAID adalah aplikasi Islami karya anak negeri terlengkap, gratis, dan bebas iklan yang didesain khusus untuk menemani para santri, purna santri, dan segenap umat Islam setiap saat." />
    <meta property="og:description" content=" <?= !empty($this->uri->segment(1)) && ($this->uri->segment(1) == 'artikel' || $this->uri->segment(1) == 'inspirasi')  ? str_replace("-", " ", $this->uri->segment(2)) : 'Membangun keluarga islami : Taaruf, Konsultasi Ustadz, Tutorial Pra Nikah / Pasca Nikah, Parenting.' ?> " />
    <meta name="author" content="@syaria">
    <meta name="csrf-token" content="PWYswy568jMFUTE9GpcsmPmxm30AZoiISWqtEqbs" />
    <meta name="image:Logo" content="<?php echo base_url() . "public/"; ?>new_web/images/logo.png" />
    <meta property="og:image" content="<?php echo base_url() . "public/"; ?>new_web/images/logo.png" />

    <link rel="icon" href="<?php echo base_url() . "public/"; ?>new_web/images/icon-syaria.ico">

    <link rel="canonical" href="" />

    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url() . "public/"; ?>new_web/dist/images/fav/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url() . "public/"; ?>new_web/dist/images/fav/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url() . "public/"; ?>new_web/dist/images/fav/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url() . "public/"; ?>new_web/dist/images/fav/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url() . "public/"; ?>new_web/dist/images/fav/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url() . "public/"; ?>new_web/dist/images/fav/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url() . "public/"; ?>new_web/dist/images/fav/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url() . "public/"; ?>new_web/dist/images/fav/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url() . "public/"; ?>new_web/dist/images/fav/apple-icon-180x180.png">

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/logo.png">
    <meta name="theme-color" content="#ffffff">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600|Signika:400,700&display=swap" rel="stylesheet">
    <?php //if ($this->uri->segment(1) == 'beranda'  || $this->uri->segment(1) == 'beranda' || $this->uri->segment(1) == 'order-produk' || $this->uri->segment(1) !== null) { 
    ?>
    <link rel="stylesheet" href="<?php echo base_url() . "public/"; ?>new_web/css/app.css" as="style">
    <?php // } 
    ?>
    <?php if ($this->uri->segment(1) == 'undang-ustadz' || $this->uri->segment(1) == 'tutorial-pranikah' || $this->uri->segment(1) == 'konsultasi-ustadz' || $this->uri->segment(1) == 'taaruf') { ?>
        <link rel="stylesheet" href="<?php echo base_url() . "public/"; ?>new_web/css/pages.css" as="style">
    <?php } ?>
    <?php if (($this->uri->segment(1) == 'faq' &&   $this->uri->segment(1) !== null)) { ?>
        <link rel="stylesheet" href="<?php echo base_url() . "public/"; ?>new_web/css/faq.css" as="style">
    <?php } ?>

    <?php if ($this->uri->segment(1) == 'order-produk') { ?>
        <script type="text/javascript" src="https://app.midtrans.com/snap/snap.js" data-client-key="Mid-client-zfxrOD0tm3IQ3M9o"></script>
        <script>
            var _url = "<?php echo str_replace('http', 'https', base_url()); ?>";
        </script>
    <?php } ?>
    <link rel="stylesheet" href="<?php echo base_url() . "public/"; ?>new_web/css/style.css" as="style">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/tiny-slider.css">
    <!--[if (lt IE 9)]><script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.helper.ie8.js"></script><![endif]-->
    <style type="text/css">
        .autocomplete-active {
            background-color: #f7f9fb;
        }

        html {
            scroll-behavior: smooth;
        }
    </style>

    <script async src="<?php echo base_url() . "public/"; ?>new_web/js/lazysizes.js"></script>

    <!-- Google Tag Manager
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-T4WK8K2');
    </script> -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-56NHL21EGD"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-56NHL21EGD');
    </script>
    <!-- End Google Tag Manager -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . "public/"; ?>new_web/slick/slick.css" />
    <!-- // Add the new slick-theme.css if you want the default styling -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . "public/"; ?>new_web/slick/slick-theme.css" />
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T4WK8K2" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
    <!-- End Google Tag Manager (noscript) -->

    <header class="global-header is-fixed">
        <div class="container">
            <div class="header-content flex items-center content-between">
                <div class="header-content__logo">
                    <figure class="logo">
                        <?php if ($this->uri->segment(1) === null || $this->uri->segment(1) != 'beranda') { ?>
                            <a href="https://syaria.id">
                                <img class="logo1" style="    width:90px;" src="<?php echo base_url() . "public/"; ?>new_web/images/logo_syaria.png" alt="SYARIAID Aplikasi untuk Kedaulatan Santri dan Segenap Anak Negeri">
                                <!-- <img class="logo2" style="    width: 85px;" src="images/logo.png" alt="SYARIAID Aplikasi untuk Kedaulatan Santri dan Segenap Anak Negeri"> -->
                            </a>
                        <?php } else { ?>

                            <a href="https://syaria.id/beranda">
                                <img class="logo1" style="    width:90px;" src="<?php echo base_url() . "public/"; ?>new_web/images/logo_syaria.png" alt="SYARIAID Aplikasi untuk Kedaulatan Santri dan Segenap Anak Negeri">
                                <!-- <img class="logo2" style="    width: 85px;" src="images/logo.png" alt="SYARIAID Aplikasi untuk Kedaulatan Santri dan Segenap Anak Negeri"> -->
                            </a>
                        <?php } ?>

                    </figure>
                </div>
                <nav class="header-content__navigation flex items-center">
                    <?php if ($this->uri->segment(1) === null || $this->uri->segment(1) != 'beranda') { ?>
                        <a href="https://syaria.id">Beranda</a>
                    <?php } else { ?>
                        <a href="https://syaria.id/beranda">Beranda</a>
                    <?php } ?>

                    <?php if ($this->uri->segment(1) != 'beranda'   || $this->uri->segment(1) === null) { ?>
                        <a href="/#services">Services</a>
                    <?php } else { ?>
                        <a href="/beranda#services">Services</a>
                    <?php } ?>
                    <?php if ($this->uri->segment(1) === null || $this->uri->segment(1) != 'beranda') { ?>
                        <a href="/#fitur">Fitur</a>
                    <?php } else { ?>
                        <a href="/beranda#fitur">Fitur</a>
                    <?php } ?>

                    <?php if ($this->uri->segment(1) != 'beranda'  || $this->uri->segment(1) === null) { ?>
                        <a href="/#artikel">Artikel</a>
                    <?php } else { ?>
                        <a href="/beranda#artikel">Artikel</a>
                    <?php } ?>

                    <a href="/contact">Kontak</a>
                </nav>

            </div>
        </div>

    </header>

    <button id="toggleMenu" aria-label="open menu navigation">
        <div>
            <span></span>
        </div>
    </button>