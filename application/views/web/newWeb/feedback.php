<?php include('component/header.php'); ?>
<link rel="stylesheet" href="<?php echo base_url()."public/";?>new_web/css/pages.css" as="style">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/tiny-slider.css">
    <style type="text/css">
        .custom-pagination > ul {
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
                <h1 class="title">Mereka Yang Telah Mendapat Manfaat</h1>
                <!-- <div class="">
                    <input id="search" type="text" class="field-style" placeholder="Cari berita di sini..." style="min-width:200px">
                </div> -->
            </div>
        </div>
    </header>

    <section class="section-page section-page--news">
                <div class="main-populer-post">
            <div class="container container--small">
                <div class="items flex warp">
                    <div class="item-12">
                        <section class="populer-post">
                            <header class="header-section">
                                <h2>Mereka Yang Telah Mendapat Manfaat</h2>
                            </header>
                            <div class="slide-news">
                                <div id="contentNewsPopular">

                                    <?php foreach ($artikel as $key => $value) { ?>
                                        <div class="item-news">
                                            <article class="news news--popular flex m:direction-column">
                                                <figure class="news__figure">
                                                    <a  href="/feedback/detail/<?php print_r($value->id);  ?>">
                                                        <img src="/asset/status/<?php print_r($value->image); ?>" alt="" class="lazyload">
                                                    </a>
                                                </figure>
                                                <div class="news__info">
                                                    <a  href="/feedback/detail/<?php print_r($value->id);  ?>" class="link"><?php echo $value->judul ?></a>
                                                    <ul class="meta font-small">
                                                        <li>Redaksi SYARIA</li>
                                                        <li><?php 
                                                        $day =date('l', strtotime($value->create_date));
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
                                                        ?></li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                    <?php } ?>
                                 
                                    
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container container--small">
            <div class="items flex warp">
                <div class="item-12">

                    <header class="header-section flex items-center content-between">
                                                    <h2>Mereka Yang Telah Mendapat Manfaat lainnya</h2>
                        <!-- <div class="header-section__cta">
                            <select name="" id="feed-category" class="field-style" style="min-width:200px">
                                <option value="">Semua Kategori</option>
                                <option value="berita">Berita</option>
                                <option value="artikel">Artikel</option>
                                <option value="islam">Islam</option>
                            </select>
                        </div> -->
                    </header>
                            <?php foreach ($artikel as $key => $value) { ?>
                            <article class="news flex">
                                <figure class="news__figure">
                                    <a href="/feedback/detail/<?php print_r($value->id);  ?>">
                                        <img src="/asset/status/<?php print_r($value->image); ?>" alt="" class="lazyload">
                                    </a>
                                </figure>
                                <div class="news__info">
                                    <a  href="/feedback/detail/<?php print_r($value->id);  ?>" class="link"><?php echo $value->judul; ?></a>
                                    <ul class="meta font-small">
                                        <li>Redaksi SYARIA</li>
                                        <li>Berita</li>
                                        <li>Minggu, 24 Oktober 2021</li>
                                    </ul>
                                    <!-- <p class="m:hide"><?php echo substr($value->content,1,30);  ?></p> -->
                                </div>
                            </article>

                            <?php } ?>

                            
                                            
                    <!-- <nav class="pagination m-t-4">
                        <ul class="flex items-center content-center">
                            <li>
                                <span>1</span>
                            </li>

                            <li>
                                <a href="">2</a>
                            </li>

                            <li>
                                <a href="">3</a>
                            </li>

                            <li>
                                <a href="">4</a>
                            </li>

                            <li>
                                <a href="">5</a>
                            </li>
                        </ul>
                    </nav> -->

                    <!-- <nav class="pagination m-t-4 custom-pagination">
                        <ul class="pagination" role="navigation">
        
                    <li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Previous">
                <span class="page-link" aria-hidden="true">&lsaquo;</span>
            </li>
        
        
                    
            
            
                                                                        <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                                                                <li class="page-item"><a class="page-link" href="https://kesan.id/feed?page=2">2</a></li>
                                                                                <li class="page-item"><a class="page-link" href="https://kesan.id/feed?page=3">3</a></li>
                                                                                <li class="page-item"><a class="page-link" href="https://kesan.id/feed?page=4">4</a></li>
                                                                    
                            <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span></li>
            
            
                                
            
            
                                                                        <li class="page-item"><a class="page-link" href="https://kesan.id/feed?page=93">93</a></li>
                                                                                <li class="page-item"><a class="page-link" href="https://kesan.id/feed?page=94">94</a></li>
                                                        
        
                    <li class="page-item">
                <a class="page-link" href="https://kesan.id/feed?page=2" rel="next" aria-label="Next &raquo;">&rsaquo;</a>
            </li> 
            </ul>

                    </nav> -->
                    <?php 
echo $links;
	?> 

                </div>
            </div>
        </div>
    </section>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
  
    <?php include('component/footer.php'); ?>