<?php include('component/header.php'); ?>
<link rel="stylesheet" href="<?php echo base_url() . "public/"; ?>new_web/css/pages.css" as="style">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/tiny-slider.css">
<style type="text/css">
    .custom-pagination>ul {
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: center;
        justify-content: center;
    }

    .custom-pagination .pagination ul li.disabled span {
        background-color: transparent;
    }
</style>



<header class="header-page">
    <div class="container container--small">
        <div class="flex items-center content-between">
            <h1 class="title">Berita SYARIA</h1>
            <!-- <div class="">
                    <input id="search" type="search" class="field-style" placeholder="Cari berita di sini..." style="min-width:200px">
                </div> -->
        </div>
    </div>
</header>

<section class="section-page section-page--news">
    <div class="container container--small">
        <div class="items flex warp">
            <div class="item-12">

                <article class="news-detail">
                    <header class="news-detail__meta">
                        <ul class="meta font-small">
                            <li>Redaksi SYARIA</li>
                            <li>Artikel</li>
                            <li>

                                <?php
                                $day = date('l', strtotime($artikel->create_date));
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
                                echo date(', d F Y', strtotime($artikel->create_date));
                                ?>
                            </li>
                        </ul>
                        <h2><?php echo $artikel->judul; ?></h2>
                    </header>
                    <figure class="">
                        <img src="/asset/status/<?php print_r($artikel->image); ?>" alt="" width="100%">
                    </figure>
                    <div class="html-tag">
                        <?php echo $artikel->content; ?>
                    </div>
                    <div class="box-share flex items-center content-between">
                        <h3>Bagikan artikel ini </h3>
                        <div class="box-share__cta flex items-center ">
                            <button class="btn-default btn--small m-l-1 social_share" data-type="facebook">
                                <img src="<?php echo base_url() . "public/"; ?>new_web/images/socmed/facebook.svg" alt="">
                            </button>
                            <button class="btn-default btn--small m-l-1 social_share" data-type="twitter">
                                <img src="<?php echo base_url() . "public/"; ?>new_web/images/socmed/twitter.svg" alt="">
                            </button>
                            <button class="btn-default btn--small m-l-1 social_share" data-type="telegram">
                                <img src="<?php echo base_url() . "public/"; ?>new_web/images/socmed/telegram.svg" alt="">
                            </button>
                            <button class="btn-default btn--small m-l-1 social_share" data-type="whatsapp">
                                <img src="<?php echo base_url() . "public/"; ?>new_web/images/socmed/whatsapp.svg" alt="">
                            </button>
                            <button class="btn-default btn--small m-l-1 social_share" data-type="email">
                                <img src="<?php echo base_url() . "public/"; ?>new_web/images/socmed/gmail.svg" alt="">
                            </button>
                        </div>
                    </div>
                </article>


            </div>
        </div>
    </div>
</section>


<section class="section-page section-page--news">
    <div class="container container--small">
        <div class="items flex wrap">
            <div class="item-12">
                <header class="header-section">
                    <h2 class="heading">
                        Berita terkait
                    </h2>
                </header>
            </div>
            <?php foreach ($artikel_terkait as $key => $value) { ?>
                <div class="item-6 m:item-6">
                    <article class="news flex news--y">
                        <figure class="news__figure">
                            <a href="/artikel/<?= str_replace(" ", "-", $value->judul)   ?>">
                                <img src="/asset/status/<?php print_r($value->image); ?>" alt="" class="lazyload">
                            </a>
                        </figure>
                        <div class="news__info">
                            <a href="/artikel/<?= str_replace(" ", "-", $value->judul)   ?>" class="link"><?php echo $value->judul; ?></a>
                            <ul class="meta font-small">
                                <li>Redaksi SYARIA</li>
                                <li><?php echo date(' d F Y', strtotime($value->create_date)); ?></li>
                            </ul>
                        </div>
                    </article>

                </div>
            <?php } ?>


        </div>
    </div>
</section>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script> -->


<?php include('component/footer.php'); ?>