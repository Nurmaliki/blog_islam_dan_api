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
            <h1 class="title">Inspirasi</h1>
            <!-- <div class="">
                    <input id="search" type="text" class="field-style" placeholder="Cari berita di sini..." style="min-width:200px">
                </div> -->
        </div>
    </div>
</header>


<section class="section-page section-page--news">
    <div class="container">
        <!-- <div class="items">
                <div class="item-12">
                    <header class="header-section flex items-center content-between">
                        <h2 class="heading">
                            Inspirasi
                        </h2>
                        <div class="header-section__cta">
                            <a href="inspirasi" class="btn-primary-o">Lihat semua</a>
                        </div>
                    </header>
                </div>
            </div> -->
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



<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>


<?php include('component/footer.php'); ?>