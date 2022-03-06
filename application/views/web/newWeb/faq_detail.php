<?php include('component/header.php'); ?>
 
     
<header class="header-page">
        <div class="container container--small">
            <div class="flex items-center content-between">
                <h1 class="title">FAQ SYARIAID</h1>
            </div>
        </div>
    </header>

    <section class="section-page section-page--faq">
        <div class="container container--small">
            <div class="items flex warp">
                <div class="item-12">
                    <article class="news-detail">
                        <h2><?php print_r($faq_active[0]->judul); ?></h2>
                        <div class="html-tag">
                            
                            <!-- <p><span style="font-size: 12pt;">Panduan Setting Azan IOS</span></p> -->
                            <?php print_r($faq_active[0]->content); ?>
                        </div>
                        
                        <div class="box-share flex items-center content-between">
                            <h3>Bagikan informasi ini </h3>
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
                        </div>
                    </article>
                    
                </div>
            </div>
        </div>
    </section>



    <?php include('component/footer.php'); ?>