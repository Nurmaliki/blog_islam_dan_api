<?php include('component/header.php'); ?>

<header class="header-page">
        <div class="container container--small">
            <div class="flex items-center content-between">
                <h1 class="title"><?php print_r($title); ?></h1>
            </div>
        </div>
    </header>
 
    <section class="section-page section-page--news">
        <div class="container container--small">
            <div class="items flex warp">
                <div class="item-12">
                    <div class="space">
                        <article class="news-detail">
                        <div class="html-tag">
                        <?php print_r($data->content) ?>
                        </div>
<!--                             
                            <div class="html-tag">
                                <h3>Apa itu KESAN?</h3>
                                <p>
                                    KESAN adalah Aplikasi Kedaulatan Santri & Kepribadian Muslim yang lengkap, gratis, dan bebas iklan. Aplikasi karya anak negeri ini didesain untuk menemani dan mengedukasi umat Islam setiap saat. 
                                </p>
                                <p>
                                    Berbeda dengan aplikasi Islami lainnya, KESAN senantiasa aktif dan hadir dalam kehidupan para pengguna agar membantu mereka menjadi pribadi muslim yang lebih baik. Dengan fitur Alarm Kebaikan, pengguna senantiasa diingatkan untuk melakukan amalan positif yang Islami melalui notifikasi yang relevan dan aktual.
                                </p>
                                <h3>Bagaimana KESAN bekerja?</h3>
                                <p>
                                    Padatnya kesibukan sehari-hari mungkin menyebabkan kita terlewat melakukan ibadah wajib maupun sunnah yang sudah kita niatkan. Namun dengan KESAN hal ini tidak perlu terjadi lagi. Seperti sahabat yang baik, Alarm Kebaikan KESAN akan sigap mengingatkan kamu untuk menunaikan ibadah sesuai dengan pilihan dan kebiasaan yang ingin kamu bentuk. Dari mulai salat lima waktu, salat Duha, Tahajud, puasa Senin-Kamis, Ayyamul Bidh, tadarus, shalawatan, hingga amalan-amalan lainnya.
                                </p>
                                <p>
                                    Yup, KESAN dapat membantu kamu membentuk kebiasaan baru yang Islami. Baik untuk kamu yang sudah lama Istiqamah maupun sedang berupaya istiqamah, Insya Allah KESAN dapat membantumu.
                                </p>
                            </div>
                            <div class="box-share flex items-center content-between">
                                <h3>Bagikan artikel ini </h3>
                                <div class="box-share__cta flex items-center ">
                                    <button class="btn-default btn--small m-l-1 social_share" data-type="facebook">
                                        <img src="https://kesan.id/images/socmed/facebook.svg" alt="">
                                    </button>
                                    <button class="btn-default btn--small m-l-1 social_share" data-type="twitter">
                                        <img src="https://kesan.id/images/socmed/twitter.svg" alt="">
                                    </button>
                                    <button class="btn-default btn--small m-l-1 social_share" data-type="telegram">
                                        <img src="https://kesan.id/images/socmed/telegram.svg" alt="">
                                    </button>
                                    <button class="btn-default btn--small m-l-1 social_share" data-type="whatsapp">
                                        <img src="https://kesan.id/images/socmed/whatsapp.svg" alt="">
                                    </button>
                                    <button class="btn-default btn--small m-l-1 social_share" data-type="email">
                                        <img src="https://kesan.id/images/socmed/gmail.svg" alt="">
                                    </button>
                                </div>
                            </div> -->
                        </article>
                                               
                    </div>
                </div>
            </div>
        </div>
    </section>



    <?php include('component/footer.php'); ?>