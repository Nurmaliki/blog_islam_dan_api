
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
<link rel="icon" href="<?php echo base_url()."/public/images/web/favicon.ico";?>" type="image/x-icon">
    <?php foreach($this->authio->WebCss() as $asset){echo $asset;};?>
    <style type="text/css">
    	#prev_btn{
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
			-webkit-border-radius : 50px;
			-moz-border-radius : 50px;
			outline: none;
			border: none;
		}
		#next_btn{
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
			-moz-border-radius : 50px;
			-webkit-border-radius : 50px;
			outline: none;
			border: none;
		}

		#prev_btn img{
			width: 30px;
		}
		#next_btn img{
			width: 30px;
		}
    </style>


</head>

<body>
    <div class="collapse searchbar" id="searchbar">
        <div class="search-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
            <button class="btn btn-default" type="button">Go!</button>
            </span> </div>
                        <!-- /input-group -->
                    </div>
                    <!-- /.col-lg-6 -->
                </div>
            </div>
        </div>
    </div>
    
    

    <div style="background: url('images/banner.jpg');background-size: cover;background-position: center;background-attachment: fixed;" id="banner">
        <div id="header" class="header">
        <!-- <div class="container"> -->
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-12 col-sm-6 col-6">
                    <!-- logo -->
                    <div id="header_logo" class="logo">
                        <a href="#"><img  src="<?php echo base_url()."public/";?>images/web/logo.png" alt="Syari.id"></a>
                    </div>
                </div>
                <!-- logo -->
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                      <div id="navigation">
                        <ul>
                            <li><a href="#about" class="animsition-link">Tentang Syaria</a></li>
                            <li><a href="#layanan" class="animsition-link">Layanan</a></li>
                            <li><a href="#mitra" class="animsition-link">Gabung Sebagai Mitra</a></li>
                            <li><a href="#contact" class="animsition-link">Hubungi Kami</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        <!-- </div> -->
    </div>
        <div id="banner_overlay">
            <div id="banner_overlay_container_header_mobile">
                <!-- <p>
                    Sempurnakan Hijrahmu Dengan Syaria.id Menghadirkan Ustadz dan Ustadzah Sunnah dari pesantren, kampus dalam dan luar negeri
                </p> -->

                <p>
                Sempurnakan Hijrahmu dengan Syaria.id, Aplikasi Chat dengan Ustadz dan Ustadzah Sunnah langsung dari Hape. Juga dapat mengundang mereka untuk isi kajian di Mesjid, rumah maupun kantor. Kompetensi mereka tidak usah diragukan lagi karena mereka Alumni dari Pesantren ternama dan Kampus dalam dan luar negeri
                </p>

            </div>
            <div class="row" id="banner_overlay_container">
                 <div class="col-sm-6">
                    <img  class="animated pulse" id="banner_overlay_container_image" src="<?php echo base_url()."public/";?>images/web/mockupapphandphone.png">
                </div>
                 <div id="banner_overlay_container_right" class="col-sm-6 animated slideInRight" style="margin-left: -100px;">

                        

                    <h1  id="banner_overlay_container_header_title">Sempurnakan Hijrahmu Dengan Syaria.id Menghadirkan Ustadz dan Ustadzah Sunnah dari pesantren, kampus dalam dan luar negeri</h1>
                    <!-- <h2  id="banner_overlay_container_header_subtitle">Para Asatidz selalu siap untuk diajak diskusi dan tanya jawab islam, konsultasi pernikahan, konsultasi keluarga, jodoh dan karir</h2> -->
                    <br>
                    <br>
                    <br>

                    <a href="https://play.google.com/store/apps/details?id=santri.syaria"><button class="common_button">Download Aplikasi</button></a>
                    <!-- <img id="banner_overlay_container_header_title_btn" src="images/google_play.png"> -->
                </div>
            </div>
        </div>
    </div>
   
   <div class="container" style="padding-top: 200px;padding-bottom: 200px;">
        <br>
        <br>
       <center><h2 id="about" class="common_section_title">Tentang Kami</h2></center>
         <br>
        <br>
        <br>
       <div id="container_about_us">
            <h4>TEMUKAN USTADZ DAN USTADAH DI SEKITAR ANDA</h4>
            <p>Bismillah... Kami hadir untuk mendekatkan qolbu yang dahaga siraman ruhani dengan menghadirkan para dai ke tempat Anda baik di rumah, masjid, perkantoran dan lain-lain.</p> 

       </div>
   </div>


  

   <div style="background: #188247 !important">
        <div class="container" style="padding-top: 100px;padding-bottom: 100px; ">
            <center><h2 id="layanan" class="common_section_title" style="color:  #fdcb6e;border-color: #fdcb6e;">Layanan Kami</h2></center>
            <br>
            <br>
            <br>

            <div class="row" id="container_about_us">

            	 <div class="col-sm-3">
                    <div class="card animated pulse" style="width: 15rem;border-radius : 0;box-shadow : none !important;">
                      <div style="padding-top: 30px;">
                          <center><img style="width: 140px;" class="card-img-top" src="<?php echo base_url()."public/";?>images/web/icons/cariustad.png" alt="Card image cap"></center>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Cari Ustad</h5>
                        <p class="card-text">Menghadirdkan ustadz dan ustadzah berkompeten ke rumah Anda</p>
                      </div>
                    </div>
                </div>



                <div class="col-sm-3">
                    <div class="card animated pulse" style="width: 15rem;border-radius : 0;box-shadow : none !important;">
                      <div style="padding-top: 30px;">
                          <center><img style="width: 140px;" class="card-img-top" src="<?php echo base_url()."public/";?>images/web/icons/tanya_ustad.png" alt="Card image cap"></center>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Tanya  Ustad</h5>
                        <p class="card-text">Tanya jawab secara langsung dengan ustadz melalui aplikasi pesan</p>
                      </div>
                    </div>
                </div>

                
                 <div class="col-sm-3">
                    <div class="card animated pulse" style="width: 15rem;border-radius : 0;box-shadow : none !important;">
                      <div style="padding-top: 30px;">
                          <center><img style="width: 110px" class="card-img-top" src="<?php echo base_url()."public/";?>images/web/icons/cariguru.png" alt="Card image cap"></center>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Cari Guru</h5>
                        <p class="card-text">Menghadirkan guru-guru untuk mengajar putra-putri Anda di tempat Anda</p>
                      </div>
                    </div>
                </div>

                 <div class="col-sm-3">
                    <div class="card animated pulse" style="width: 15rem;border-radius : 0;box-shadow : none !important;">
                      <div style="padding-top: 30px;">
                          <center><img class="card-img-top" src="<?php echo base_url()."public/";?>images/web/icons/caripenginapan.png" alt="Card image cap"></center>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Cari Penginapan</h5>
                        <p class="card-text">Cari penginapan nyaman dan bernuansa religius di pondok pesantren</p>
                      </div>
                    </div>
                </div>



               

           </div>


          <div style="position: relative;" class="layan_mikro">

            <div class="card animated pulse" style="width: 15rem;height:200px;border-radius : 0;box-shadow : none !important; ">
              <div style="padding-top:20px;">
                  <center><img style="width: 80px !important;" class="card-img-top" src="<?php echo base_url()."public/";?>images/web/quran.png" alt="Card image cap"></center>
              </div>
              <div class="card-body">
                <h5 class="card-title" style="text-align: center !important;">Baca Quran</h5>
              </div>
            </div>

            <div class="card animated pulse" style="width: 15rem;height:200px;border-radius : 0;box-shadow : none !important;  ">
              <div style="padding-top:20px;">
                  <center><img style="width: 80px !important;" class="card-img-top" src="<?php echo base_url()."public/";?>images/web/murotal.png" alt="Card image cap"></center>
              </div>
              <div class="card-body">
                <h5 class="card-title" style="text-align: center !important;">Murottal</h5>
              </div>
            </div>

            <div class="card animated pulse" style="width: 15rem;height:200px;border-radius : 0;box-shadow : none !important;  ">
              <div style="padding-top:20px;">
                  <center><img style="width: 100px !important;" class="card-img-top" src="<?php echo base_url()."public/";?>images/web/tasbih_2.png" alt="Card image cap"></center>
              </div>
              <div class="card-body">
                <h5 class="card-title" style="text-align: center !important;">Tasbih</h5>
              </div>
            </div>

            <div class="card animated pulse" style="width: 15rem;height:200px;border-radius : 0;box-shadow : none !important; ">
              <div style="padding-top:20px;">
                  <center><img style="width: 80px !important;" class="card-img-top" src="<?php echo base_url()."public/";?>images/web/sholat.png" alt="Card image cap"></center>
              </div>
              <div class="card-body">
                <h5 class="card-title" style="text-align: center !important;">Waktu Sholat</h5>
              </div>
            </div>  
              

            <div class="card animated pulse" style="width: 15rem;height:200px;border-radius : 0;box-shadow : none !important; ">
              <div style="padding-top:20px;">
                  <center><img style="width: 80px !important;" class="card-img-top" src="<?php echo base_url()."public/";?>images/web/asmaulhusna.png" alt="Card image cap"></center>
              </div>
              <div class="card-body">
                <h5 class="card-title" style="text-align: center !important;">Asmaul Husna</h5>
              </div>
            </div>
            <div class="card animated pulse" style="width: 15rem;height:200px;border-radius : 0;box-shadow : none !important; ">
              <div style="padding-top:20px;">
                  <center><img style="width: 80px !important;" class="card-img-top" src="<?php echo base_url()."public/";?>images/web/kiblat.png" alt="Card image cap"></center>
              </div>
              <div class="card-body">
                <h5 class="card-title" style="text-align: center !important;">Arah Kiblat</h5>
              </div>
            </div>
            
            
             
          </div>

       </div>
   </div>


    <div class="container" style="padding-top:100px;padding-bottom: 100px;">
        <br>
        <br>
       <center><h2 id="alasan" class="common_section_title">Mengapa Pilih Syaria </h2></center>
         <br>
        <br>
        <br>
       <div id="container_about_us">
            <div class="row">
                <div class="col-sm-6 hilite_box">
                    <ul>
                        <li>Latar belakang dari berbagai pondok pesantren terkemuka di tanah air serta dari kampus dalam dan luar negeri di jurau</li>
                        <li>Memiliki sanad keilmuan yang jelas dan bersambung</li>
                        <li>Aktif mengajar dan mengisi kajian-kajian sunnah</li>
                        <li>Ustadz-ustadz yang ramah, moderat dan berakhlaqul karimah</li>
                    </ul>
                    
                </div>
                <div class="col-sm-6">
                    <div class="vertical_line"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="vertical_line right"></div>
                </div>
                <div class="col-sm-6 hilite_box right">
                    <ul>
                        <li>Aktif sebagai pengajar di lembaga pendidikan formal dan non formal</li>
                        <li>Sesuai dengan bidang keilmuannya</li>
                        <li>Ramah dan sabar menghadapi anak didik</li>
                    </ul>
                </div>
               
            </div>
            <div class="row">
                <div class="col-sm-6 hilite_box">
                    <ul>
                        <li>Diadakan oleh berbagai pesantren modern dan terkemuka</li>
                        <li>Materi kajian yang komprehensif untuk pendidikan akhlak dan akal</li>
                        <li>Peserta dibatasi jumlahnya sehingga program tersampaikan secara maksimal</li>
                    </ul>
                    
                </div>
                <div class="col-sm-6">
                    <div class="vertical_line"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="vertical_line right"></div>
                </div>
                <div class="col-sm-6 hilite_box right">
                    <ul>
                        <li>Berlokasi di berbagai pondok pesantren</li>
                        <li>Suasana yang nyaman dan religius</li>
                        <li>Dapat mengikuti kajian-kajian yang diadakan oleh pesantren tersebut</li>
                        <li>Harga terjangkau</li>
                    </ul>
                </div>
               
            </div>

       </div>
   </div>


    <div class="" style="padding-top: 100px;padding-bottom: 100px;background: white;box-shadow: 0px 3px 2px rgba(40,40,40,0.1)">
        <br>
        <br>
       <center><h2 class="common_section_title">Proses Pencarian Ustad</h2></center>
         <br>
        <br>
        <br>
       <div class="row">
           <div id="ustad_search" class="col-sm-6">
                <img  style="margin-top:-30px;" class="animated pulse" id="banner_overlay_container_image" src="<?php echo base_url()."public/";?>images/web/ustad.png">
           </div>
           <div id="flow_list_container" class="col-sm-6" id="container_about_us" style="margin-left: -140px;">
            <div class="flow_list">
                <div class="flow_point">
                    <span>1</span>
                </div>
                <div class="flow_list_caption">
                    Pilih jenis layanan yang dibutuhkan (misal cari ustadz)
                </div>
            </div>
            <div class="flow_list">
                <div class="flow_point">
                    <span>2</span>
                </div>
                <div class="flow_list_caption">
                   Tentukan kategori kajian
                </div>
            </div>
            <div class="flow_list">
                <div class="flow_point">
                    <span>3</span>
                </div>
                <div class="flow_list_caption">
                    Review profile dan pilih salah satu ustadz yang diinginkan
                </div>
            </div>
            <div class="flow_list">
                <div class="flow_point">
                    <span>4</span>
                </div>
                <div class="flow_list_caption">
                    Tentukan lokasi dan catatan kajian seperti materi yang ingin disampaikan oeh ustadz
                </div>
            </div>
            <div class="flow_list">
                <div class="flow_point">
                    <span>5</span>
                </div>
                <div class="flow_list_caption">
                    Tunggu update permintaan disetujui atau tidak oleh ustadz bersangkutan
                </div>
            </div>
       </div>
       </div>
   </div>



   <div style="padding-top: 100px;padding-bottom: 100px;background: #fdcb6e">
        <br>
        <br>
       <center><h2 id="mitra" class="common_section_title">Menjadi Mitra Syaria</h2></center>
         <br>
        <br>
        <br>
       <div class="container" id="container_about_us">
            <h4 style="color: rgb(10,10,10);font-size: 50px;">بَلِّغُوا عَنِّى وَلَوْ آيَةً</h4>
            <p style="color: rgb(50,50,50);font-size: 20px;margin-top: 30px;line-height: 180%;">
                "Sampaikanlah dariku walau hanya satu ayat” (HR. Bukhari)
                <br>
                <br>
                Jikalau umat memanggil, maka segerakalah penuhi kewajiban itu
                Syari.id adalah aplikasi religius yang menyediakan berbagai layanan untuk
                memenuhi kebutuhan qolbu umat. Syaria.id terbuka untuk umum,
                jika Anda ingin bergabung menjadi mitra kami sebagai ustadz,
                guru atau pemilik pesantren, hubungi kami di syariaid@gmail.com
    </p>
       </div>
   </div>

    <?php foreach($this->authio->WebJs() as $asset){echo $asset;};?>
    <script type="text/javascript">
        window.onscroll = function(){
            if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600) {
                $("#header").addClass("float");
            } else {
                $("#header").removeClass("float");
            }
        }

      $(document).ready(function(){
        $('.layan_mikro').slick({
          slidesToShow: 3,
          dots: false,
          prevArrow: '<button id="prev_btn"><center><img src="<?php echo base_url()."public/";?>images/web/icons/back.png" /> </center></button>',
          nextArrow: '<button id="next_btn"><center><img src="<?php echo base_url()."public/";?>images/web/icons/next.png" /> </center></button>',
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          responsive: [{
                breakpoint: 1024,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 3,
                  infinite: true,
                  dots: true
                }
              },
              {
                breakpoint: 600,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 2
                }
              },
              {
                breakpoint: 480,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
                }
              }
          ]
        });
      });
    
    </script>
</body>


</html>
