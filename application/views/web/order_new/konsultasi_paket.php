<?php include('/var/www/html/syaria/application/views/web/newWeb/component/header.php'); ?>
<style>
    ul.a {
        list-style-type: revert;
        font-size: 18px;
    }

    ul.a li::marker {
        /* list-style-type: circle; */
        color: #17a74a;
    }

    /* The container */
    .container {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        /* cursor: pointer; */
        font-size: 22px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* Hide the browser's default radio button */
    .container input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
    }

    /* Create a custom radio button */
    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: #eee;
        border-radius: 50%;
    }

    /* On mouse-over, add a grey background color */
    .container:hover input~.checkmark {
        background-color: #ccc;
    }

    /* When the radio button is checked, add a blue background */
    .container input:checked~.checkmark {
        background-color: #17a74a;
    }

    /* Create the indicator (the dot/circle - hidden when not checked) */
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the indicator (dot/circle) when checked */
    .container input:checked~.checkmark:after {
        display: block;
    }

    /* Style the indicator (dot/circle) */
    .container .checkmark:after {
        top: 9px;
        left: 9px;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: white;
    }
</style>


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

    .slick-dots {
        display: none !important;
    }

    @media only screen and (max-width: 460px) {
        .img {
            display: none;
        }

        .button_pay {
            font-size: 26px !important;
        }

        #banner_overlay_container_image {
            display: block;
        }
    }

    #banner_overlay_container_image {
        position: unset !important;
    }

    .button_pay {
        font-size: 16px !important;
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
        background-color: #188247 !important;
        color: #778191;
    }

    .blink {
        -webkit-animation: blink .75s linear infinite;
        -moz-animation: blink .75s linear infinite;
        -ms-animation: blink .75s linear infinite;
        -o-animation: blink .75s linear infinite;
        animation: blink .75s linear infinite;
        color: #F00;
        font-weight: bold;
    }

    @-webkit-keyframes blink {
        0% {
            opacity: 1;
        }

        50% {
            opacity: 1;
        }

        50.01% {
            opacity: 0;
        }

        100% {
            opacity: 0;
        }
    }

    @-moz-keyframes blink {
        0% {
            opacity: 1;
        }

        50% {
            opacity: 1;
        }

        50.01% {
            opacity: 0;
        }

        100% {
            opacity: 0;
        }
    }

    @-ms-keyframes blink {
        0% {
            opacity: 1;
        }

        50% {
            opacity: 1;
        }

        50.01% {
            opacity: 0;
        }

        100% {
            opacity: 0;
        }
    }

    @-o-keyframes blink {
        0% {
            opacity: 1;
        }

        50% {
            opacity: 1;
        }

        50.01% {
            opacity: 0;
        }

        100% {
            opacity: 0;
        }
    }

    @keyframes blink {
        0% {
            opacity: 1;
        }

        50% {
            opacity: 1;
        }

        50.01% {
            opacity: 0;
        }

        100% {
            opacity: 0;
        }
    }
</style>

<header class="header-page">
    <div class="container container--small">
        <div class="flex items-center content-between">
            <!-- <h1 class="title">Order Produk</h1> -->
        </div>
    </div>
</header>


<section style="padding-top: 0;background-color: #f2f2f2;" class="section-page section-page--info">
    <div class="container">
        <div class="items flex wrap items-center">
            <div class="item-5 m:item-12">
                <div class="cover-img">
                    <img class="img" style="margin-top:-30px;margin-bottom: 20px;" src="<?php echo base_url() . "/public/"; ?>images/web/lp/hp.png">
                </div>
            </div>

            <div class="item-7 m:item-12">
                <div style="padding-top: 0;" class="box-info-content">
                    <h1 class="slider-title">Alhamdulillah...</h1>
                    <h4 class="text-white display-6">Hai <?php echo $resultperson->fullname; ?>..,</h4>
                    <h4 class="text-white">Kami mengucapkan terimakasih atas kesediaan kaka untuk berinfaq dan mendukung kami untuk terus memberikan layanan terbaik kami untuk umat</h4>
                    <div class="clearfix"></div>
                    <h4 class="text-white">Semoga menjadi amal ibadah yang penuh keberkahan</h4>
                    <div class="clearfix"></div>
                    <h4 class="text-white">Jazakumullah khoiron katsiron</h4>
                </div>
            </div>
        </div>
    </div>
</section>


<section style="padding-top: 0;" class="section-page section-page--info">
    <div class="container">
        <div class="items flex wrap ">
            <div class="item-12 m:item-12">
                <div style="height: 36px;" class="cover-img">
                    <img style="width: 98px;height: 50px;" src="<?php echo base_url() . "/public/"; ?>images/web/lp/syaria1.png">
                </div>

            </div>

            <div class="item-12 m:item-12">
                <div style="padding-top: 0;" class="box-info-content">
                    <h3 class="testimonial-text section-space20">“Aplikasi Konsultasi Islami Online Dengan Ustadz/Ustadzah Lewat Chatting Layaknya Chatting Di Aplikasi Whatsapp”</h3>
                </div>
            </div>

            <div class="item-6 m:item-12">
                <div style="    border: 2px solid #17a74a;padding: 1.75em;border-radius: 8px;" class="box-info-content">
                    <h5 class="mb-0">Tanya jawab dan diskusi keislaman, konsultasi keluarga, karir, jodoh secara langsung dengan Asatidz</h5>
                </div>
            </div>
            <div class="item-6 m:item-12">
                <div style="    border: 2px solid #17a74a;padding: 1.75em;border-radius: 8px;" class="box-info-content">
                    <h5 class="mb-0">Asatidz lulusan pondok pesantren terkemuka di tanah air</h5>
                </div>
            </div>
            <div class="item-6 m:item-12">
                <div style="    border: 2px solid #17a74a;padding: 1.75em;border-radius: 8px;" class="box-info-content">
                    <h5 class="mb-0">Asatidz menguasai berbagai kitab seperti kitab tauhid, fiqih dan kitab lainnya</h5>
                </div>
            </div>

            <div class="item-6 m:item-12">
                <div style="    border: 2px solid #17a74a;padding: 1.75em;border-radius: 8px;" class="box-info-content">
                    <h5 class="mb-0">Asatidz berpengalaman sebagai dai dan guru di pesantren, madrasah</h5>
                </div>
            </div>


            <div class="item-12 m:item-12 item-center">
                <img src="<?php echo base_url() . "/public/"; ?>images/web/lp/all_ustadz.jpg">
            </div>


        </div>
    </div>
</section>



<section style="padding-top: 0;background-color: #f2f2f2;" class="section-page section-page--info">
    <div class="container">
        <div class="items flex wrap items-center">

            <div class="item-12 m:item-12">
                <div style="padding-top: 0;" class="box-info-content ">
                    <header style="padding-bottom: 1em;" class="header-section">
                        <h2 class="heading flex warp content-center">INGATLAH...!</h2>
                        <!-- <h1>INGATLAH...!</h1> -->
                    </header>
                    <h1 class="flex warp content-center">من لم يكن له شيخ فشيخه الشيطان</h1>

                    <em>
                        <h2 class="testimonial-text flex warp content-center">“Barangsiapa tidak memiliki guru maka gurunya adalah syaithan.”</h2>
                    </em>
                    <p class="flex warp content-center">Belajar ilmu agama tidak sama dengan belajar ilmu lainnya yang cukup dengan baca buku, otodidak, nonton video youtube atau belajar dari sosmed Ilmu agama harus dipelajari dari sumber yang jelas dan memiiki keterhubungan garis ilmu tidak terputus hingga Nabi Muhammad SAW (Sanad)</p>
                    <!-- <div class="clearfix"></div> -->
                    <p class=" content-center">SYARIAID hadir menghubungkan jamaah dengan Asatidz untuk belajar Islam secara langsung lewat <b>KONSULTASI ONLINE</b></p>
                    <!-- <div class="clearfix"></div> -->
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
                        <h2 class="heading  flex warp content-center ">Mereka Yang Telah Mendapat Manfaat
                        </h2>
                    </header>
                    <div class="text-center"><em>
                            <h1 class="text-white">Alhamdulillah...</h1>
                            <h1 class="text-white">Ribuan jamaah telah mendownload dan</h1>
                            <h1 class="text-white">menggunakan SYARIAID</h1>
                            <h1 class="text-white">Alhamdulillah... </h1>
                            <h1 class="text-white">Mereka telah mendapatkan manfaat</h1>
                        </em>
                    </div>

                </div>
            </div>
        </div>

        <div class="items flex wrap items-center variable-width">
            <?php //foreach ($who_benefit as $key => $value) { 
            for ($i = 1; $i < 5; $i++) {
            ?>
                <div class="item-3">
                    <article class="news">
                        <figure>

                            <img style="width:230px;height:470px;" src="<?php echo base_url(); ?>/public/images/web/lp/slick/<?= $i ?>.jpg" alt="" class="lazyload">

                        </figure>

                    </article>
                </div>
            <?php } ?>
        </div>

    </div>
</section>

<section style="padding-top: 0; background-color: #f2f2f2;" class="section-page section-page--info">
    <div class="container">
        <div class="items flex wrap items-center">
            <div class="item-12 m:item-12">
                <div style="padding-top: 0;" class="box-info-content">
                    <header style="padding-bottom:0" class="header-section">
                        <h2 class="heading  flex warp content-center ">MENGAPA BERINFAQ DI DEPAN? </h2>
                    </header>
                </div>
            </div>
            <div class="item-4 m:item-12">
                <div class="cover-img">
                    <img src="<?php echo base_url() . "/public/"; ?>images/web/lp/cricleustd.png" style="margin-top: -40px;margin-bottom: 10px; height:100%">
                </div>
            </div>

            <div class="item-8 m:item-12">
                <div style="padding-top: 0;" class="box-info-content">
                    <ul class="a">
                        <li class="slider-title">Ada keberkahan dalam mendapatkan ilmunya dengan "Bulghah"</li>
                        <li class="slider-title">Membantu Ustadz/Ustadzah yang menjadi narasumber </li>
                        <li class="slider-title">Untuk membuktikan keseriusan belajar tentang islam </li>
                        <li class="slider-title">Menghidari pertanyaan iseng, usil atau mengetes Ustadz/Ustadzah </li>
                        <li class="slider-title">Bersedekah kepada orang alim atau ahli fiqih: Satu dibalas 900.000</li>
                    </ul>


                </div>
            </div>
        </div>
    </div>
</section>


<!-- 
<div style="background:#00b0f0;color:#fff;">
    <div class="container text-center display-5 font-weight-bold">
        <h1 class="text-white">BERAPA INFAQNYA?</h1>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <p class="text-black">Kami tidak membatasi kebaikan kaka. Siapkan infaq terbaik kaka untuk memdukung layanan kami</p>
                <div class="box-infa text-center" style="border: 4px solid #ce3838;border-style: dashed;margin: auto;background: #f6c3c3;padding: 10px;">
                    <div class="rp-infaq" style="display: inline-flex;background: #000;padding: 10px;">
                        <div class="row" style="padding: 10px;">
                            <h1 style="padding-right: 10px;" class="text-white">Rp</h1>
                            <input type="number" id="infaq-tambahan" class="infaq-tambahan" onkeyup="return formatRupiahs(this.value,this.id)">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <p class="text-black display-6" style="margin:0;">Infaq dasar sebesar Rp 59.000. </p>
                    <div class="blink">
                        Silahkan isi infaq tambahan sesuai dengan keikhlasan kaka minimal sebesar Rp 100</div>
                </div>
                <div class="clearfix"></div>
                <p class="text-black display-6">Dengan infaq ini, kaka juga telah ikut berkontribusi dalam menyebarkan dakwah islam yang rahmatan lil alamin lewat teknologi digital.</p>
                <h3 class="text-black">Masyaallah Tabarokallah..</h3>
                <h3 class="text-black text-left" style="padding-top:20px">PS</h3>
                <div class="d-flex align-items-baseline mb-2 pr-2">
                    <i class="fa fa-check fa-2x mr-2  text-black"></i>
                    <div class="">
                        <h4 class="mb-0  text-black">Kaka dapat konsultasi dengan Ustadz/Ustadzah Syariaid selama 30 hari</h4>
                    </div>
                </div>
                <div class="d-flex align-items-baseline mb-2 pr-2">
                    <i class="fa fa-check fa-2x mr-2  text-black"></i>
                    <div class="">
                        <h4 class="mb-0  text-black">Jam layanan konsultasi : 07:00 - 22:00 WIB setiap hari</h4>
                    </div>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div> -->



<section class="section-page section-page--faq">
    <div class="container container--small">
        <div class="items flex wrap">
            <div class="item-12 m:item-12">
                <div style="padding-top: 0;" class="box-info-content">
                    <!-- <header style="padding-bottom: 1em;" class="header-section">
                        <h2 class="heading">Tentang SYARIAID</h2>
                    </header> -->

                    <div style="    border: 2px solid #17a74a;padding: 1.75em;border-radius: 8px;" class="list-testimonial">
                        <div class="content-testimonial">


                            <!-- <label class="container">Free
                                <input type="radio" id="free" name="radio-paket" data-prodak="3" data-person="<?php echo $resultperson->id; ?>" onclick="return valData(this)">
                                <span class="checkmark"></span>
                            </label> -->
                            <?php print_r($resultprodak);

                            foreach ($resultprodak as $key => $value) { ?>
                                <label class="container"><?= $value->id == 6 ?  "Mingguan" : "Bulanan" ?>
                                    <input type="radio" id="paket<?php echo $value->id; ?>" name="radio-paket" data-prodak="<?php echo $value->id; ?>" data-person="<?php echo $resultperson->id; ?>" value="<?php echo $value->infaq; ?>" onclick="return valData(this)">
                                    <span class="checkmark"></span>
                                </label>
                            <?php  } ?>

                        </div>
                    </div>
                    <button style="margin-top: 2em;" type="submit" class="btn-primary button_pay ">Saya Siap Menikah</button>
                </div>
            </div>




        </div>
    </div>
</section>
<form id="payment-form" method="post" action="<?= base_url() ?>payment-Finish">
    <input type="hidden" id="valdata" name="valdata" />
    <input type="hidden" name="result_type" id="result-type" value=""></div>
    <input type="hidden" name="result_data" id="result-data" value=""></div>
</form>


<?php include('/var/www/html/syaria/application/views/web/newWeb/component/footer.php'); ?>