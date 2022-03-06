<?php include('component/header.php'); ?>


<header class="header-homepage" id="top">
    <div class="container">

        <div id="banner-top" style="    margin-top: 6%;" class="items flex wrap items-center">

            <div class="item-5 m:item-12">
                <div class="box-info-content cover-img">

                    <img style="       margin-top: 57px;
                        width: 200px;
                        margin-left: 252px;" src="<?php echo base_url() . "public/"; ?>new_web/images/phone.png" class="phone" alt="SYARIAID Aplikasi untuk Kedaulatan Santri dan Segenap Anak Negeri">
                </div>


            </div>


            <div class="item-7 m:item-12">
                <h4 style="
                    font-size: 2em;
                    font-weight: 500;
                    max-width: 100%;
                    color: #16b95f;">Sempurnakan Hijrahmu
                </h4>
                <h1 style="
                        font-size:2.7em;
                    font-weight: 600;
                    color: #16b95f;">
                    Aplikasi SYARIAID

                </h1>
                <h2 style="
                     font-size: 2em;
                    font-weight: 600;
                    color: #16b95f;">
                    Membangun Keluarga Islami

                </h2>
                <div class="download">
                    <a href="https://play.google.com/store/apps/details?id=santri.syaria" target="_blank">
                        <img style="
                            width: 215px;
                        " src="<?php echo base_url() . "public/"; ?>new_web/images/google.svg" alt="Download SYARIAID melalui playstore">
                    </a>
                    <!-- <a href="https://apps.apple.com/us/app/SYARIAID/id1479939730" target="_blank">
                            <img src="images/apple.svg" alt="Download SYARIAID melalui appstore">
                        </a> -->
                </div>
            </div>


        </div>
        <div class="header-homepage__boxed flex items-end">

            <div class="box-adzan">
                <div class="box-adzan__header flex items-center content-between">
                    <h2>Waktu salat di <strong id="Lokasi">.....</strong></h2>

                    <button onclick="changeLoctation()" id="changeLoctation" class="btn-primary-o" aria-label="Ganti lokasi salat">
                        <span>Ganti lokasi</span>
                    </button>
                </div>
                <div class="box-adzan__body flex items-center content-between">

                    <div class="list-time flex items-center">
                        <div class="list-time__icon">
                            <object data="<?php echo base_url() . "public/"; ?>new_web/images/salat/tahajud.svg" type="image/svg+xml" alt="jadwal salat tahajud"></object>

                        </div>
                        <div class="list-time__content">
                            <span>Tahajud</span>
                            <h3 id="Tahajud">....</h3>
                        </div>
                    </div>

                    <div class="list-time flex items-center">
                        <div class="list-time__icon">
                            <object data="<?php echo base_url() . "public/"; ?>new_web/images/salat/subuh.svg" type="image/svg+xml" alt="jadwal salat subuh"></object>
                        </div>
                        <div class="list-time__content">
                            <span>Subuh</span>
                            <h3 id="Subuh">....</h3>
                        </div>
                    </div>

                    <div class="list-time flex items-center">
                        <div class="list-time__icon">
                            <object data="<?php echo base_url() . "public/"; ?>new_web/images/salat/dhuha.svg" type="image/svg+xml" alt="jadwal salat dhuha"></object>
                        </div>
                        <div class="list-time__content">
                            <span>Duha</span>
                            <h3 id="Duha">....</h3>
                        </div>
                    </div>

                    <div class="list-time flex items-center">
                        <div class="list-time__icon">
                            <object data="<?php echo base_url() . "public/"; ?>new_web/images/salat/dzuhur.svg" type="image/svg+xml" alt="jadwal salat dzuhur"></object>
                        </div>
                        <div class="list-time__content">
                            <span>Zuhur</span>
                            <h3 id="Zuhur">....</h3>
                        </div>
                    </div>

                    <div class="list-time flex items-center">
                        <div class="list-time__icon">
                            <object data="<?php echo base_url() . "public/"; ?>new_web/images/salat/ashar.svg" type="image/svg+xml" alt="jadwal salat ashar"></object>
                        </div>
                        <div class="list-time__content">
                            <span>Asar</span>
                            <h3 id="Asar">....</h3>
                        </div>
                    </div>

                    <div class="list-time flex items-center">
                        <div class="list-time__icon">
                            <object data="<?php echo base_url() . "public/"; ?>new_web/images/salat/maghrib.svg" type="image/svg+xml" alt="jadwal salat maghrib"></object>
                        </div>
                        <div class="list-time__content">
                            <span>Magrib</span>
                            <h3 id="Magrib">....</h3>
                        </div>
                    </div>

                    <div class="list-time flex items-center">
                        <div class="list-time__icon">
                            <object data="<?php echo base_url() . "public/"; ?>new_web/images/salat/isya.svg" type="image/svg+xml" alt="jadwal salat isya"></object>
                        </div>
                        <div class="list-time__content">
                            <span>Isya</span>
                            <h3 id="Isya">....</h3>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
</header>




<section style="padding-top: 0;" class="section-page section-page--info">
    <div class="container">
        <div class="items flex wrap items-center">

            <div class="item-7 m:item-12">
                <div style="padding-top: 0;" class="box-info-content">
                    <header style="padding-bottom: 1em;" class="header-section">
                        <h2 class="heading">Tentang SYARIAID</h2>
                    </header>
                    <p>
                        <?php // print_r($tentang->judul);
                        ?>
                        <?php print_r(str_replace('</p>', ' ', str_replace('<p style="margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; direction: ltr; unicode-bidi: embed; word-break: normal;">', ' ', str_replace('</span>', ' ', str_replace('<span style="font-size: 12pt; font-family: Calibri;">', ' ', $tentang->judul))))) ?>
                    </p>
                    <a href="tentang" class="btn-transparent">
                        <span>Selengkapnya </span>
                        <object data="<?php echo base_url() . "public/"; ?>new_web/images/chevron-right.svg" type="image/svg+xml" alt="Pelajari lebih dalam"></object>
                    </a>
                </div>
            </div>


            <div class="item-5 m:item-12">
                <div class="cover-img">
                    <img style="    margin: auto;" src="<?php echo base_url() . "public/"; ?>new_web/images/tentang.png" alt="" srcset="">
                </div>
            </div>


        </div>

        <div style="padding-top: 0;" id="services" class="content-nudging">
            <div class="items flex wrap items-center">



                <div class="item-12 m:item-12">
                    <div style="padding-top: 0;padding-bottom: 0;" class="box-info-content">
                        <header style="padding-bottom: 1em;" class="header-section">
                            <h2 class="heading">Services</h2>
                        </header>

                        <?php print_r(str_replace('</p>', ' ', str_replace('<p style="margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; direction: ltr; unicode-bidi: embed; word-break: normal;">', ' ', str_replace('</span>', ' ', str_replace('<span style="font-size: 12pt; font-family: Calibri;">', ' ', $services->content))))) ?>


                    </div>
                </div>



            </div>
        </div>

    </div>
</section>



<section style="    padding-bottom: 2em;" class="section-page section-page--testimonial">
    <div class="container">
        <div class="items flex wrap">
            <div class="item-12">

            </div>
        </div>
        <div class="mobile-slide">
            <div class="items flex">
                <div class="item-3 ">
                    <div style="    border: 2px solid #17a74a;padding: 1.70em;" class="list-testimonial">
                        <div class="content-testimonial">
                            <!-- <h2>SYARIAID bagus buat santri dan umat Islam.</h2> -->
                            <div style="justify-content: center; display: flex;" class="">
                                <img src="asset/status/<?php print_r($taaruf->image); ?>" alt="" style="    width: 48px;  height: 48px;" class="img-cover lazyload">
                            </div>
                            <div style="justify-content: center;  display: flex;" class="content-testimonial__header flex items-center">

                                <div class="whos">
                                    <strong>Taaruf Syaria </strong>
                                    <br>
                                    <!-- <span>Pengasuh Ponpes Sunan Pandanaran (Yogyakarta)</span> -->
                                </div>
                            </div>
                            <div class="content-testimonial__body">
                                <p>

                                    <?php print_r(str_replace('</p>', ' ', str_replace('<p style="margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; direction: ltr; unicode-bidi: embed; word-break: normal;">', ' ', str_replace('</span>', ' ', str_replace('<span style="font-size: 11pt; font-family: Calibri;">', ' ', $taaruf->judul))))) ?>


                                </p>
                            </div>
                            <a href="taaruf" class="btn-transparent">
                                <span>Selengkapnya </span>
                                <object data="<?php echo base_url() . "public/"; ?>new_web/images/chevron-right.svg" type="image/svg+xml" alt="Pelajari lebih dalam"></object>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="item-3">
                    <div style="    border: 2px solid #17a74a;padding: 1.75em;" class="list-testimonial">
                        <div class="content-testimonial">
                            <!-- <h2>SYARIAID bagus buat santri dan umat Islam.</h2> -->
                            <div style="justify-content: center; display: flex;">
                                <img src="asset/status/<?php print_r($konsultasi_ustadz->image); ?>" alt="" style="    width: 48px;  height: 48px;" class="img-cover lazyload">
                            </div>
                            <div style="justify-content: center; display: flex;" class="content-testimonial__header flex items-center">

                                <div class="whos">
                                    <strong>Konsultasi Ustadz
                                    </strong>
                                    <br>
                                    <!-- <span>Pengasuh Ponpes Sunan Pandanaran (Yogyakarta)</span> -->
                                </div>
                            </div>
                            <div class="content-testimonial__body">
                                <p>
                                    <?php print_r(str_replace('</p>', ' ', str_replace('<p style="margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; direction: ltr; unicode-bidi: embed; word-break: normal;">', ' ', str_replace('</span>', ' ', str_replace('<span style="font-size: 11pt; font-family: Calibri;">', ' ', $konsultasi_ustadz->judul))))) ?>


                                </p>
                            </div>
                            <a href="konsultasi-ustadz" class="btn-transparent">
                                <span>Selengkapnya </span>
                                <object data="<?php echo base_url() . "public/"; ?>new_web/images/chevron-right.svg" type="image/svg+xml" alt="Pelajari lebih dalam"></object>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="item-3">
                    <div style="    border: 2px solid #17a74a;padding: 1.75em;" class="list-testimonial">
                        <div class="content-testimonial">
                            <!-- <h2>SYARIAID bagus buat santri dan umat Islam.</h2> -->
                            <div style="justify-content: center; display: flex;">
                                <img src="asset/status/<?php print_r($tutorial_pranikah->image); ?>" style="    width: 48px;  height: 48px;" alt="" class="img-cover lazyload">
                            </div>
                            <div style="justify-content: center; display: flex;" class="content-testimonial__header flex items-center">

                                <div class="whos">
                                    <strong>Tutorial Pranikah
                                    </strong>
                                    <br>
                                    <!-- <span>Pengasuh Ponpes Sunan Pandanaran (Yogyakarta)</span> -->
                                </div>
                            </div>
                            <div class="content-testimonial__body">
                                <p>
                                    <?php print_r(str_replace('</p>', ' ', str_replace('<p style="margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; direction: ltr; unicode-bidi: embed; word-break: normal;">', ' ', str_replace('</span>', ' ', str_replace('<span style="font-size: 11pt; font-family: Calibri;">', ' ', $tutorial_pranikah->judul))))) ?>
                                </p>
                            </div>
                            <a href="tutorial-pranikah" class="btn-transparent">
                                <span>Selengkapnya </span>
                                <object data="<?php echo base_url() . "public/"; ?>new_web/images/chevron-right.svg" type="image/svg+xml" alt="Pelajari lebih dalam"></object>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="item-3">
                    <div style="    border: 2px solid #17a74a;padding: 1.75em;" class="list-testimonial">
                        <div class="content-testimonial">
                            <!-- <h2>SYARIAID bagus buat santri dan umat Islam.</h2> -->
                            <div style="justify-content: center; display: flex;">
                                <img src="asset/status/<?php print_r($undang_ustadz->image); ?>" alt="" style="    width: 48px;  height: 48px;" class="img-cover lazyload">
                            </div>
                            <div style="justify-content: center; display: flex;" class="content-testimonial__header flex items-center">

                                <div class="whos">
                                    <strong>
                                        Undang Ustadz
                                    </strong>
                                    <br>
                                    <!-- <span>Pengasuh Ponpes Sunan Pandanaran (Yogyakarta)</span> -->
                                </div>
                            </div>
                            <div class="content-testimonial__body">
                                <p>
                                    <?php print_r(str_replace('</p>', ' ', str_replace('<p style="margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; direction: ltr; unicode-bidi: embed; word-break: normal;">', ' ', str_replace('</span>', ' ', str_replace('<span style="font-size: 11pt; font-family: Calibri;">', ' ', $undang_ustadz->judul))))) ?>
                                </p>
                            </div>
                            <a href="undang-ustadz" class="btn-transparent">
                                <span>Selengkapnya </span>
                                <object data="<?php echo base_url() . "public/"; ?>new_web/images/chevron-right.svg" type="image/svg+xml" alt="Pelajari lebih dalam"></object>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>



<section style="padding-top: 0;" class="section-page section-page--info">
    <div class="container">


        <div style="padding-top: 0; padding-bottom: 0;" id="fitur" class="content-nudging">
            <div class="items flex wrap items-center">



                <div class="item-12 m:item-12">
                    <div style="padding-top: 0;padding-bottom: 0;" class="box-info-content">
                        <header style="    padding-bottom: 1em;" class="header-section">
                            <h2 class="heading">Sahabat Ibadah Setiap Hari (Fitur)</h2>
                        </header>


                    </div>
                </div>



            </div>
        </div>

    </div>
</section>


<section style="padding-bottom:1em;" class="section-page section-page--testimonial">
    <div class="container">

        <div class="mobile-slide">
            <div style="    display: flex;    flex-wrap: wrap;    align-items: center;    justify-content: center;" class="items flex">
                <?php foreach ($fitur as $key => $value) { ?>
                    <div class="item-4 " style="padding: 1em;display: flex;    justify-content: center;">
                        <div style="    padding: 1.70em;width: 300px;    height: 300px;" class="list-testimonial">
                            <div class="content-testimonial">
                                <!-- <h2>SYARIAID bagus buat santri dan umat Islam.</h2> -->
                                <div style="justify-content: center; display: flex;" class="">
                                    <img src="asset/status/<?php print_r($value->image); ?>" alt="" style="    width: 48px;  height: 48px;" class="img-cover lazyload">
                                </div>
                                <div style="justify-content: center;  display: flex;" class="content-testimonial__header flex items-center">

                                    <div class="whos">
                                        <strong><?php echo $value->judul; ?> </strong>
                                        <br>
                                        <!-- <span>Pengasuh Ponpes Sunan Pandanaran (Yogyakarta)</span> -->
                                    </div>
                                </div>
                                <div class="content-testimonial__body">
                                    <p>

                                        <?php print_r(str_replace('</p>', ' ', str_replace('<p style="margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; direction: ltr; unicode-bidi: embed; word-break: normal;">', ' ', str_replace('</span>', ' ', str_replace('<span style="font-size: 12pt; font-family: Calibri;">', ' ', $value->content))))) ?>



                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php } ?>




            </div>
        </div>
        <div class="items flex wrap items-center">



            <div class="item-12 m:item-12">
                <div class="box-info-content">

                    <p style="text-align: center;">
                        <?php print_r(str_replace('</p>', ' ', str_replace('<p style="margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; direction: ltr; unicode-bidi: embed; word-break: normal;">', ' ', str_replace('</span>', ' ', str_replace('<span style="font-size: 12pt; font-family: Calibri;">', ' ', $desfitur->content))))) ?>
                    </p>

                </div>
            </div>



        </div>
    </div>
</section>






<section style="padding-top: 0;" class="section-page section-page--info">
    <div class="container">
        <div class="items flex wrap items-center">

            <div class="item-12 m:item-12">
                <div style="padding-top: 0;" class="box-info-content">
                    <header style="padding-bottom:0" class="header-section">
                        <h2 class="heading">Mereka Yang Telah Mendapat Manfaat
                        </h2>
                    </header>
                    <p>
                        <?php print_r(str_replace('</p>', ' ', str_replace('<p style="margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; direction: ltr; unicode-bidi: embed; word-break: normal;">', ' ', str_replace('</span>', ' ', str_replace('<span style="font-size: 12pt; font-family: Calibri;">', ' ', $who_benefit_des->content))))) ?>


                    </p>
                    <!-- <a href="about" class="btn-transparent">
                            <span>Selengkapnya </span>
                            <object data="images/chevron-right.svg" type="image/svg+xml" alt="Pelajari lebih dalam"></object>
                        </a> -->
                </div>
            </div>


            <!-- <div class="item-5 m:item-12">
                    <div class="cover-img">
                        <img src="images/tentang.png" alt="" srcset="">
                             </div>
                </div> -->


        </div>


        <div class="items flex wrap items-center variable-width">
            <?php foreach ($who_benefit as $key => $value) { ?>
                <div class="item-3">
                    <article class="news">
                        <figure>
                            <a style="    justify-content: center;   display: flex;" href="feedback/detail/<?php print_r($value->id); ?>">
                                <img style="width:230px;height:470px;" src="asset/status/<?php print_r($value->image); ?>" alt="" class="lazyload">
                            </a>
                        </figure>

                    </article>
                </div>
            <?php } ?>






        </div>

    </div>
</section>










<section style="padding-top:2em;padding-bottom: 2em;" class="section-page section-page--news">
    <div class="container">
        <div class="items">
            <div class="item-12">
                <header style="padding-bottom:1em" class="header-section flex items-center content-between">
                    <h2 class="heading">
                        Inspirasi
                    </h2>
                    <div class="header-section__cta">
                        <a href="inspirasi" class="btn-primary-o">Lihat semua</a>
                    </div>
                </header>
            </div>
        </div>
        <div class="mobile-slide">
            <div style="    display: flex;    flex-wrap: wrap;    align-items: center;    justify-content: center;" class="flex  items box-news">
                <?php foreach ($inspirasi as $key => $value) { ?>
                    <div class="item-3">
                        <article class="news">
                            <figure>
                                <a href="/inspirasi/<?= str_replace(" ", "-", $value->judul)   ?>">
                                    <img src="asset/status/<?php print_r($value->image); ?>" alt="" class="lazyload">
                                </a>
                            </figure>
                            <!-- <div class="news__detail">
                                        <span class="font-small">Artikel | Jumat, 15 Oktober 2021</span>
                                        <a href="feed/seri-shalawat-bukti-sejarah-shalawat-sejak-zaman-tabiin-vi-f174" class="link text-large">Seri Shalawat: Bukti Sejarah Shalawat Sejak Zaman Tabiin (VI)</a>
                                    </div> -->
                        </article>
                    </div>
                <?php } ?>



            </div>
        </div>

    </div>
</section>


<section style="padding-top: 0;padding-bottom: 2em;" id="artikel" class="section-page section-page--news">
    <div class="container">
        <div class="items">
            <div class="item-12">
                <header style="padding-bottom: 1em;" class="header-section flex items-center content-between">
                    <h2 class="heading">
                        Artikel Terbaru
                    </h2>
                    <div class="header-section__cta">
                        <a href="artikel" class="btn-primary-o">Lihat semua</a>
                    </div>
                </header>
            </div>
        </div>
        <div class="mobile-slide">
            <div class="flex warp items box-news">
                <?php
                foreach ($artikel as $key => $value) { ?>


                    <div class="item-3">
                        <article class="news">
                            <figure>
                                <a href="/artikel/<?= str_replace(" ", "-", $value->judul)   ?>">
                                    <img src="asset/status/<?php print_r($value->image); ?>" alt="" class="lazyload">
                                </a>
                            </figure>
                            <div class="news__detail">
                                <span class="font-small">Artikel | <?php

                                                                    // setlocale(LC_ALL, 'id_ID');
                                                                    // $day = strftime("%A", strtotime($value->create_date)); 

                                                                    // // echo $day ;

                                                                    // $datetime = DateTime::createFromFormat('Y-m-d', $value->create_date);
                                                                    $day = date('l', strtotime($value->create_date));
                                                                    switch ($day) {
                                                                        case 'Sunday':
                                                                            $hari = 'Minggu';
                                                                            break;
                                                                        case 'Monday':
                                                                            $hari = 'Senin';
                                                                            break;
                                                                        case 'Tuesday':
                                                                            $hari = 'Selasa';
                                                                            break;
                                                                        case 'Wednesday':
                                                                            $hari = 'Rabu';
                                                                            break;
                                                                        case 'Thursday':
                                                                            $hari = 'Kamis';
                                                                            break;
                                                                        case 'Friday':
                                                                            $hari = 'Jum\'at';
                                                                            break;
                                                                        case 'Saturday':
                                                                            $hari = 'Sabtu';
                                                                            break;
                                                                        default:
                                                                            $hari = 'Tidak ada';
                                                                            break;
                                                                    }
                                                                    echo $hari;
                                                                    echo date(', d F Y', strtotime($value->create_date));
                                                                    ?></span>
                                <a href="/artikel/detail/<?php print_r($value->id);  ?>"><?php print_r($value->judul); ?> </a>
                            </div>
                        </article>
                    </div>

                <?php } ?>
            </div>
        </div>

    </div>
</section>

<?php if (count($diliput_oleh) > 0) { ?>


    <section style="padding-top: 0;padding-bottom: 2em;" class="section-page section-page--media">
        <div class="container">
            <div class="items">
                <div class="item-12">
                    <header class="header-section flex items-center content-left">
                        <h2 class="heading">
                            Telah Diliput Oleh :
                        </h2>
                    </header>
                    <div class="box-media">
                        <ul>
                            <?php foreach ($diliput_oleh as $key => $value) { ?>
                                <li>
                                    <a href="">
                                        <img src="asset/status/<?php print_r($value->image); ?>" alt="" class="lazyload">
                                    </a>
                                </li>
                            <?php } ?>



                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php } ?>

<div class="main-modal" id="modalChangeLocation">
    <div class="container-modal">
        <div class="container-modal__header flex items-center content-between">
            <h2>Ganti lokasi salat</h2>
            <button onclick="closeModal_click()" id="closeModal" aria-label="Tutup modal">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19 5L5 19" stroke="#697784" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M5 5L19 19" stroke="#697784" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </div>
        <div class="container-modal__body">

            <!-- <input id="autoComplete" tabindex="1"> -->

            <form autocomplete="on" action="">
                <div class="autocomplete">
                    <label for="city">Silakan cari dan pilih lokasi</label>
                    <input id="city" type="text" name="city" placeholder="Cari kota" class="field-style">
                </div>
                <!-- <input type="submit" class="submit" value="PILIH"> -->
            </form>
        </div>
    </div>
</div>


<?php include('component/footer.php'); ?>