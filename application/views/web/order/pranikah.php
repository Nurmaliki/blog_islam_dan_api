<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Cari Ustadz dan Tanya Jawab Ustadz Terdekat">
    <meta name="keywords" content="cari ustadz, tanya ustadz, cari penginapan, cari santri kilat,cari guru, Baca Quran 30 juz, Murottal AL quran lengkap, Mp3 Al quran lengkap, audio Al quran, Tasbih, dzikir pagi dan petang, dzikir setelah sholat, dzikir sebelum sholat, wirid sholat, waktu sholat, waktu sholat paling akurat, arah kiblat, kompas, asmaul husna, asmaul husna dan artinya,kajian sunnah, kajian tauhid, kajian fiqih, kajian tafsir, 99 Asamul Husna dilengkapi tulisan arab, mp3 99 nama Allah, Asmaul husna dengan audio, asmaul husna anak-anak, kalendar islam, kalendar hijaiyah">
    <title>Syaria</title>
    <link rel="icon" href="<?php echo base_url() . "/public/images/web/favicon.ico"; ?>" type="image/x-icon">
    <script type="text/javascript" src="https://app.midtrans.com/snap/snap.js" data-client-key="Mid-client-zfxrOD0tm3IQ3M9o"></script>
    <?php foreach ($this->authio->WebCss() as $asset) {
        echo $asset;
    }; ?>
    <style type="text/css">
        input {
            outline: 0;
            background: transparent;
            border-width: 0 0 4px;
            border-style: dashed;
            border-color: #fff;
            border-radius: 4px;
            font-size: 40px;
            width: 200px;
            font-weight: bold;
            color: #fff;
        }

        input:focus {
            outline: none;
            border-color: #ef4152;
        }

        input[type="number"]::-webkit-outer-spin-button,
        input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type="number"] {
            -moz-appearance: textfield;
        }

        #prev_btn {
            cursor: pointer;
            background-color: #188247;
            z-index: 2;
            -moz-z-index: 2;
            -webkkit-z-index: 2;
            left: -30px;
            top: -25px;
            margin-top: auto;
            margin-bottom: auto;
            bottom: 0;
            position: absolute;
            width: 50px;
            height: 50px;
            border-radius: 50px;
            -webkit-border-radius: 50px;
            -moz-border-radius: 50px;
            outline: none;
            border: none;
        }

        #next_btn {
            cursor: pointer;
            background-color: #188247;
            z-index: 2;
            -moz-z-index: 2;
            -webkkit-z-index: 2;
            right: -20px;
            top: -25px;
            margin-top: auto;
            margin-bottom: auto;
            bottom: 0;
            position: absolute;
            width: 50px;
            height: 50px;
            border-radius: 50px;
            -moz-border-radius: 50px;
            -webkit-border-radius: 50px;
            outline: none;
            border: none;
        }

        #prev_btn img {
            width: 30px;
        }

        #next_btn img {
            width: 30px;
        }

        @media only screen and (max-width: 460px) {
            .img {
                display: none;
            }

            #banner_overlay_container_image {
                display: block;
            }

            .text-topim {
                font-size: 24px;
                text-align: left !important;
            }

            .button_pay {
                font-size: 16px !important;
            }
        }

        #banner_overlay_container_image {
            position: unset !important;
        }

        .header {
            background: var(--main-color) !important;
            padding: 10px !important;
        }

        .table thead th tr {
            border: 2px solid #f8f9fa;
        }

        .table td,
        .table th {
            border: 2px solid #f8f9fa;
        }

        .clearfix {
            padding-bottom: 10px;
        }

        .bubble {
            position: relative;
            height: 100px;
            padding: 10px;
            background: #f8eedc;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            font-style: italic;
            font-size: 12px;
        }

        .bubble:after {
            content: '';
            position: absolute;
            border-style: solid;
            border-width: 0px 14px 15px;
            border-color: #f8eedc transparent;
            display: block;
            width: 0;
            z-index: 1;
            top: -15px;
            left: 30px;
        }

        .top-container {
            background-color: #0070c0 !important;
            color: #778191;
        }

        .txt-program-istimewa {
            font-size: 26px;
            text-align: center;
        }
    </style>
    <script>
        var _url = "<?php echo str_replace('http', 'https', base_url()); ?>";
    </script>
</head>


<body class="bg-white">
    <div id="header" class="header">
        <div class="container">
            <!-- <div class="container"> -->
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-12 col-sm-6 col-6">
                    <!-- logo -->
                    <div id="header_logo" class="logo">
                        <a href="index.php"><img src="<?php echo base_url() . "/public/"; ?>images/web/logo.png" alt="Syari.id"></a>
                    </div>
                </div>
                <!-- logo -->
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                </div>
            </div>
            <!-- </div> -->
        </div>
    </div>
    <div>
        <div class="bg-light-blue how-it-section">
            <div class="container" style="padding-top:30px">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-12 text-center">
                        <img class="img" style="margin-top:-10px;margin-bottom: 20px;" src="<?php echo base_url() . "/public/"; ?>images/web/nikah/hp.png">
                    </div>
                    <div class="col-lg-8 col-md-12 col-12">
                        <h1 class="text-white text-right text-topim">Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir.<br />- Ar-Rum ayat 21 -</h1>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section-space20" style="background: #7f7f7f">
        <div class="container">
            <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="section-title text-center mb60">
                    <h1 class="text-white">Udah Ingin Nikah atau Masih Nunggu?</h1>
                </div>
            </div>
            <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="section-title text-center">
                    <em>
                        <h3 class="text-white">Jangan sampai nyesel setelah nikah, gara-gara gak persiapan. Ingat, waktu gak bisa diulang</h3>
                    </em>
                </div>
            </div>
        </div>
    </div>


    <div class="section-space20">
        <div class="container">
            <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="section-title text-center mb60">
                    <h1 class="text-black">Kata Siapa Nikah adalah Puncak Kebahagiaan?</h1>
                </div>
            </div>
            <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="section-title text-center mb60">
                    <em>
                        <h2>Menurut data terkini jumlah perceraian di Indonesia pada tahun ini (2020) sebesar <b>306.688</b> per agustus.</h2>
                    </em>
                    <div class="clearfix"></div>
                    <h3>Itu artinya jumlah perceraian di Indonesia rata-rata mencapai<br /><b>seperempat</b> (1/4) dari <b>dua juta</b> jumlah peristiwa nikah dalam setahun. Atau bisa dikatakan dari <b>4</b> pasangan <b>menikah, 1 </b>pasangan <b>cerai</b></h3>
                </div>
            </div>
        </div>
    </div>

    <div class="section-space20 bg-light-blue how-it-section">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="section-title text-center mb60">
                        <h1 class="text-white">Kenapa Kasus Perceraian Meningat?</h1>
                    </div>
                </div>
            </div>
            <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="d-flex align-items-baseline mb-2 pr-2">
                    <i class="fa fa-check fa-2x mr-2  text-white"></i>
                    <div class="">
                        <h3 class="mb-0  text-white">Banyak konflik dan masalah rumah tangga karena <u>niat dan pola pikir</u> yang salah</h3>
                    </div>
                </div>
                <div class="d-flex align-items-baseline mb-2 pr-2">
                    <i class="fa fa-check fa-2x mr-2  text-white"></i>
                    <div class="">
                        <h3 class="mb-0  text-white"><u>Kurang persiapan ilmu</u> dan mental sebelum menikah</h3>
                    </div>
                </div>
                <div class="d-flex align-items-baseline mb-2 pr-2">
                    <i class="fa fa-check fa-2x mr-2  text-white"></i>
                    <div class="">
                        <h3 class="mb-0  text-white">Tidak mengerti <u>hak dan kewajiban </u>pasangan menurut syariat islam </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-space20">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-12 text-center">
                <img src="<?php echo base_url() . "/public/"; ?>images/web/nikah/o_in.jpg">
            </div>
        </div>
    </div>

    <div class="section-space20" style="background: #7f7f7f">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="section-title text-center mb60">
                        <h1 class="text-white">Coba sekarang Tanyakan pada Diri Anda</h1>
                    </div>
                </div>
            </div>
            <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="d-flex align-items-baseline mb-2 pr-2">
                    <i class="fa fa-check fa-2x mr-2  text-white"></i>
                    <div class="">
                        <h3 class="mb-0  text-white">Apakah Anda sudah mengerti bagaimana menata <u>niat nikah </u>yang benar dalam islam?</h3>
                    </div>
                </div>
                <div class="d-flex align-items-baseline mb-2 pr-2">
                    <i class="fa fa-check fa-2x mr-2  text-white"></i>
                    <div class="">
                        <h3 class="mb-0  text-white">Apakah Anda sudah tahu <u>hak dan kewajiban</u> suami dan istri?</h3>
                    </div>
                </div>
                <div class="d-flex align-items-baseline mb-2 pr-2">
                    <i class="fa fa-check fa-2x mr-2  text-white"></i>
                    <div class="">
                        <h3 class="mb-0  text-white">Apakah Anda faham <u>aturan dan tatakrama</u> berkeluarga dalam islam?</h3>
                    </div>
                </div>
                <div class="d-flex align-items-baseline mb-2 pr-2">
                    <i class="fa fa-check fa-2x mr-2  text-white"></i>
                    <div class="">
                        <h3 class="mb-0  text-white">Apakah Anda sudah mengerti cara menjadi <u>istri sholehah/suami sholeh?</u></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-space20 bg-light-blue how-it-section">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="section-title text-center mb60">
                        <h1 class="text-white">Jika Anda BELUM faham, Anda adalah orang yang TEPAT untuk mengikuti Program Tutorial Pra Nikah ini</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12" style="padding-bottom: 10px;">
                    <div onclick="this.style.display='none'; this.nextSibling.style.display='block';"><img src="<?php echo base_url() . "/public/"; ?>images/web/nikah/vid_1.png" style="cursor:pointer" /></div>
                    <div style="display:none">
                        <embed src="https://youtube.com/v/e_W9DHl53fk?&autoplay=1&mute=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="100%" height="344"></embed></object>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12" style="padding-bottom: 10px;">
                    <div onclick="this.style.display='none'; this.nextSibling.style.display='block';"><img src="<?php echo base_url() . "/public/"; ?>images/web/nikah/vid_2.png" style="cursor:pointer" /></div>
                    <div style="display:none">
                        <embed src="https://youtube.com/v/e_W9DHl53fk?autoplay=1&mute=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="100%" height="344"></embed></object>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12" style="padding-bottom: 10px;">
                    <div onclick="this.style.display='none'; this.nextSibling.style.display='block';"><img src="<?php echo base_url() . "/public/"; ?>images/web/nikah/vid_3.png" style="cursor:pointer" /></div>
                    <div style="display:none">
                        <embed src="https://youtube.com/v/e_W9DHl53fk?autoplay=1&mute=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="100%" height="344"></embed></object>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12" style="padding-bottom: 10px;">
                    <div onclick="this.style.display='none'; this.nextSibling.style.display='block';"><img src="<?php echo base_url() . "/public/"; ?>images/web/nikah/vid_4.png" style="cursor:pointer" /></div>
                    <div style="display:none">
                        <embed src="https://youtube.com/v/e_W9DHl53fk?autoplay=1&mute=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="100%" height="344"></embed></object>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12" style="padding-bottom: 10px;">
                    <div onclick="this.style.display='none'; this.nextSibling.style.display='block';"><img src="<?php echo base_url() . "/public/"; ?>images/web/nikah/vid_5.png" style="cursor:pointer" /></div>
                    <div style="display:none">
                        <embed src="https://youtube.com/v/e_W9DHl53fk?autoplay=1&mute=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="100%" height="344"></embed></object>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12" style="padding-bottom: 10px;">
                    <div onclick="this.style.display='none'; this.nextSibling.style.display='block';"><img src="<?php echo base_url() . "/public/"; ?>images/web/nikah/vid_6.png" style="cursor:pointer" /></div>
                    <div style="display:none">
                        <embed src="https://youtube.com/v/e_W9DHl53fk?autoplay=1&mute=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="100%" height="344"></embed></object>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--sadsad-->
    <div class="section-space20 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section-title mb60 text-center">
                        <h1>Mengapa Program ini Istimewa?</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 section-space20">
                    <div class="feature feature-icon-style">
                        <i class="fa fa-heart fa-4x" style="color:#0070c0;"></i>
                        <div class="feature-content">
                            <div class="txt-program-istimewa">Menyajikan secara lengkap tuntunan nikah islami berdasarkan alqur'an dan hadist</div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 section-space20">
                    <div class="feature feature-icon-style">
                        <i class="fa fa-heart fa-4x" style="color:#0070c0;"></i>
                        <div class="feature-content">
                            <div class="txt-program-istimewa">Mengupas kriteria-kriteria untuk menjadi perempuan/istri sholihah dan laki-laki/suami sholih</div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 section-space20">
                    <div class="feature feature-icon-style">
                        <i class="fa fa-heart fa-4x" style="color:#0070c0;"></i>
                        <div class="feature-content">
                            <div class="txt-program-istimewa">Dilengkapi dengan referensi ulama-ulama dalam menafsirkan alquran dan hadist</div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 section-space20">
                    <div class="feature feature-icon-style">
                        <i class="fa fa-heart fa-4x" style="color:#0070c0;"></i>
                        <div class="feature-content">
                            <div class="txt-program-istimewa">Dilengkapi dengan kisah-kisah hikmah dari keluarga Rasulullah SAW dan orang-orang salih</div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <!--sadsad-->

    <div class="section-space20" style="background: #ed7d31">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="section-title text-center mb60">
                        <h1 class="text-white">Apa yang Anda Dapatkan dalam Program ini?</h1>
                        <p class="text-white text-center" style="font-size:20px">Anda akan mendapat akses ke video-video Tutorial Pra Nikah melalui Aplikasi SyariaiID berikut ini selama 1 tahun:</p>
                        <ol class="text-white text-left" style="font-size:24px">
                            <li>Perkenalan, dan review materi</li>
                            <li>Definsi, Hukum, dan Tujuan menikah</li>
                            <li>Cara memilih pasangan dan memantapkannya</li>
                            <li>Ta’aruf dan khitbah</li>
                            <li>Syarat dan Rukun Menikah</li>
                            <li>Urutan wali dan 6 syarat 2 saksi</li>
                            <li>Syarat aqad nikah</li>
                            <li>Mahar dan kesunnahannya</li>
                            <li>Resepsi pernikahan (walimah)</li>
                            <li>Jenis-Jenis perceraian</li>
                            <li>Talak</li>
                            <li>Sang Muhallil</li>
                            <li>Ruju dan Masa Iddah</li>
                            <li>Nafkah</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-space20">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="section-title text-center">
                        <h1 class="text-black slider-title">Hanya itu? <br />Tidak...Anda juga akan mendapatkan <br />paket berikut ini:</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 section-space20">
                    <div class="feature feature-icon-style">
                        <img src="<?php echo base_url() . "/public/"; ?>images/web/nikah/buku1.png">
                        <div class="feature-content">
                            <div class="txt-program-istimewa">Buku Nasehat Calon Pengantin</div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 section-space20">
                    <div class="feature feature-icon-style">
                        <img src="<?php echo base_url() . "/public/"; ?>images/web/nikah/buku2.png">
                        <div class="feature-content">
                            <div class="txt-program-istimewa">Ebook 25 Hadits-Hadits Pernikahan</div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 section-space20">
                    <div class="feature feature-icon-style">
                        <img src="<?php echo base_url() . "/public/"; ?>images/web/nikah/buku3.png">
                        <div class="feature-content">
                            <div class="txt-program-istimewa">Ebook Mudah Belajar Haid</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- <div class="section-space20 bg-light-blue how-it-section">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="section-title text-center">
                        <h1 class="text-white">Belum Cukup? Anda juga akan mendapat paket  konsultasi private gratis selama 1 tahun lewat aplikasi SyariaID dengan Ustadz/Ustadzah SyariaID</h1>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="section-space20" style="background: #ed7d31">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="section-title text-center mb60">
                        <h1 class="text-white">Berapa Investasinya?</h1>
                        <p class="text-white text-center" style="font-size:20px">Lebih tepatnya: berapa harga yang pantas untuk mempersiapkan diri menyambut jodoh sejati? Apakah Rp. 1.000.000 terlalu mahal?
                            <br />
                            Tenang Paket Program Tutorial Pra Nikah ini harganya hanya
                        </p>
                        <div class="rp-infaq bg-light-blue" style="display: inline-flex;padding: 10px;background-color: #c85c33">
                            <div class="row" style="padding: 10px;">
                                <h1 style="padding-right: 10px;" class="text-white">Rp</h1>
                                <input type="text" maxlength="10" class="infaq-ori" value="399.000" readonly />
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <p class="text-white text-center" style="font-size:20px;background: #931283;">Khusus pembelian hari ini dapat harga DISKON jadi:</p>

                        <div class="rp-infaq bg-light-blue" style="display: inline-flex;padding: 10px;">
                            <div class="row" style="padding: 10px;">
                                <h1 style="padding-right: 10px;" class="text-white">Rp</h1>
                                <input type="text" maxlength="10" class="infaq" value="254.900" readonly />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-space20">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-12">
                <button class="btn button_pay text-center font-weight-bold" style="background: #e60000;color: #fffbfb;font-size:36px" name="send-message" id="form-input-btn">Saya Ikut Program ini</button>
            </div>
        </div>
    </div>
    <?php $resultprodak = $resultprodak[0]; ?>
    <form id="payment-form" method="post" action="<?= base_url() ?>payment-Finish">
        <input type="hidden" id="valdata" name="valdata" value="<?php echo $resultperson->id . ':' . $resultprodak->id; ?>" />
        <input type="hidden" name="result_type" id="result-type" value=""></div>
        <input type="hidden" name="result_data" id="result-data" value=""></div>
    </form>

</body>
<?php foreach ($this->authio->WebJs() as $asset) {
    echo $asset;
}; ?>
<script>
    $('.button_pay').click(function(event) {
        event.preventDefault();
        $(this).attr("disabled", "disabled");

        $.ajax({
            type: 'POST',
            url: _url + 'payment',
            data: {
                'data': $("#valdata").val(),
                'infaq': $(".infaq").val()
            },
            cache: false,

            success: function(data) {

                var resultType = document.getElementById('result-type');
                var resultData = document.getElementById('result-data');

                function changeResult(type, data) {
                    $("#result-type").val(type);
                    $("#result-data").val(JSON.stringify(data));
                }

                snap.pay(data, {

                    onSuccess: function(result) {
                        changeResult('success', result);
                        console.log(result.status_message);
                        $("#payment-form").submit();
                    },
                    onPending: function(result) {
                        changeResult('pending', result);
                        console.log(result.status_message);
                        $("#payment-form").submit();
                    },
                    onError: function(result) {
                        changeResult('error', result);
                        console.log(result.status_message);
                        console.log("errro", result);
                        $("#payment-form").submit();
                    }
                });
            }
        });
    });
</script>

</html>