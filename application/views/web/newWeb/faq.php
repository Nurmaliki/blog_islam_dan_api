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
            <div class="items flex wrap">
                            <div class="item-3 m:item-12 mobile-nopad">
                    <aside class="sidebar-faq">
                        <h3>
                            Kategori pilihan
                        </h3>
                        <div class="scroll-mobile">
                            <ul>
                                <?php foreach ($faq_all as $key => $value) { ?>
                                    <li class="<?php  if($faq_active[0]->id == $value->id){ echo 'active';}else{ echo ''; } ?> ">
                                        <a href="/faq/<?php echo $value->id ?>"> <?php echo $value->judul ?></a>
                                    </li>
                                <?php } ?>
                                
                                
                            </ul>
                        </div>
                    </aside>
                </div>
                

                <div class="item-9 m:item-12 mobile-nopad">
                    <div class="main-faq">
                        <h2>Pertanyaan umum</h2>
                        <ul class="box-questions">
                            <?php $number = 1;?>
                            <?php foreach ($subfaq as $key => $value) { ?>
                                <li>
                                    <a href="/faq/detail/<?php echo $value->id ?>">
                                        <div class="number"><?php echo $number++; ?></div>
                                        <p><?php echo $value->judul ?></p>
                                    </a>
                                </li>
                            <?php } ?>
                            
                        </ul>
                    </div>
                </div>
                        </div>
        </div>
    </section>



    <?php include('component/footer.php'); ?>