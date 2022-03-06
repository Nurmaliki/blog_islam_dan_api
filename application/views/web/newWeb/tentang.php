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
                  
                        </article>
                                               
                    </div>
                </div>
            </div>
        </div>
    </section>



    <?php include('component/footer.php'); ?>