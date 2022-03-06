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
    <!-- Bootstrap -->
    <script type="text/javascript"
            src="https://app.midtrans.com/snap/snap.js"
            data-client-key="Mid-client-zfxrOD0tm3IQ3M9o"></script>
    <?php foreach($this->authio->WebCss() as $asset){echo $asset;};?>
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
    input:focus{
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
    .slick-dots{
        display:none !important;
    }
    @media only screen and (max-width: 460px){
    .img { display: none; }
    .button_pay{font-size: 26px !important;}    
    #banner_overlay_container_image { display: block; }}
    #banner_overlay_container_image{position: unset !important; }
    .button_pay{font-size:16px !important;}
    .header{
        background: var(--main-color) !important;
        padding:10px !important;
    }
    .table thead th tr {
        border: 2px solid #f8f9fa;
    }
    .table td, .table th {
        border: 2px solid #f8f9fa;
    }
    .clearfix{
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
    .top-container{
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
        0% { opacity: 1; }
        50% { opacity: 1; }
        50.01% { opacity: 0; }
        100% { opacity: 0; }
    }
    
    @-moz-keyframes blink {
        0% { opacity: 1; }
        50% { opacity: 1; }
        50.01% { opacity: 0; }
        100% { opacity: 0; }
    }
    
    @-ms-keyframes blink {
        0% { opacity: 1; }
        50% { opacity: 1; }
        50.01% { opacity: 0; }
        100% { opacity: 0; }
    }
    
    @-o-keyframes blink {
        0% { opacity: 1; }
        50% { opacity: 1; }
        50.01% { opacity: 0; }
        100% { opacity: 0; }
    }
    
    @keyframes blink {
        0% { opacity: 1; }
        50% { opacity: 1; }
        50.01% { opacity: 0; }
        100% { opacity: 0; }
    }
    </style>
    <script>var _url = "<?php echo str_replace('http','https',base_url());?>";</script>
</head>

<body class="bg-white">
    <div id="header" class="header">
    <div class="container">    
        <!-- <div class="container"> -->
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-12 col-sm-6 col-6">
                    <!-- logo -->
                    <div id="header_logo" class="logo">
                        <a href="index.php"><img  src="<?php echo base_url()."/public/";?>images/web/logo.png" alt="Syari.id"></a>
                    </div>
                </div>
                <!-- logo -->
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                </div>
            </div>
        <!-- </div> -->
    </div>  
    </div>  
    <div id="payment-bank">
    <div class="top-container">
        <div class="container" style="padding-top:30px">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12 text-center">
                    <img  class="img" style="margin-top:-30px;margin-bottom: 20px;" src="<?php echo base_url()."/public/";?>images/web/lp/hp.png">
                    </div>
                <div class="col-lg-6 col-md-12 col-12">
                <h1 class="slider-title">Alhamdulillah...</h1>
                <h4 class="text-white display-6">Hai <?php echo $resultperson->fullname;?>..,</h4>
                    <h4 class="text-white">Kami mengucapkan terimakasih atas kesediaan kaka untuk berinfaq dan mendukung kami untuk terus memberikan layanan terbaik kami untuk umat</h4>
                    <div class="clearfix"></div>
                    <h4 class="text-white">Semoga menjadi amal ibadah yang penuh keberkahan</h4>
                    <div class="clearfix"></div>
                    <h4 class="text-white">Jazakumullah khoiron katsiron</h4>
                    </div>        
            </div>
        </div>
    </div>
    
    <div class="section-space20">
    <div class="container">
        <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 text-center">
                        <div>
                            <img src="<?php echo base_url()."/public/";?>images/web/lp/syaria1.png">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-12 text-center">
                    <h1 class="testimonial-text section-space20">“Aplikasi Konsultasi Islami Online Dengan Ustadz/Ustadzah Lewat Chatting Layaknya Chatting Di Aplikasi Whatsapp”</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="">
                                <div class="d-flex align-items-baseline mb-4 pr-4">
                                    <i class="fa fa-check-circle-o fa-2x mr-2 text-pink"></i>
                                    <div class="">
                                        <h2 class="mb-0">Tanya jawab dan diskusi keislaman, konsultasi keluarga, karir, jodoh secara langsung dengan Asatidz</h2>
                                    </div>
                                </div>
                                <div class="d-flex align-items-baseline mb-4 pr-4">
                                    <i class="fa fa-check-circle-o fa-2x mr-2 text-pink"></i>
                                    <div class="">
                                        <h2 class="mb-0">Asatidz lulusan pondok pesantren terkemuka di tanah air</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="">
                                <div class="d-flex align-items-baseline mb-4 pr-4">
                                    <i class="fa fa-check-circle-o fa-2x mr-2 text-pink"></i>
                                    <div class="">
                                        <h2 class="mb-0">Asatidz menguasai berbagai kitab seperti kitab tauhid, fiqih dan kitab lainnya</h2>
                                    </div>
                                </div>
                                <div class="d-flex align-items-baseline mb-4 pr-4">
                                    <i class="fa fa-check-circle-o fa-2x mr-2 text-pink"></i>
                                    <div class="">
                                        <h2 class="mb-0">Asatidz berpengalaman sebagai dai dan guru di pesantren, madrasah</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
    </div>
    </div>
    </div>

    <div class="section-space10">
    <div class="container">
            <div class="col-lg-12 col-md-12 col-12 text-center">
                <img  src="<?php echo base_url()."/public/";?>images/web/lp/all_ustadz.jpg">
                </div>
                <div class="clearfix"></div>
        </div>
    </div>

    <div class="">
    <div class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="text-center">
                        <h1>INGATLAH...!</h1>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="mb-5">
                        <h1>من لم يكن له شيخ فشيخه الشيطان</h1>
                        <em><h2 class="testimonial-text">“Barangsiapa tidak memiliki guru maka gurunya adalah syaithan.”</h2></em>
                    </div>
                    <p>Belajar ilmu agama tidak sama dengan belajar ilmu lainnya yang cukup dengan baca buku, otodidak, nonton video youtube atau belajar dari sosmed Ilmu agama harus dipelajari dari sumber yang jelas dan memiiki keterhubungan garis ilmu tidak terputus hingga Nabi Muhammad SAW (Sanad)</p>
                    <div class="clearfix"></div>
                    <p>SYARIAID hadir menghubungkan jamaah dengan Asatidz untuk belajar Islam secara langsung lewat <b>KONSULTASI ONLINE</b></p>
                    <div class="clearfix"></div>
                </div>
            </div>
            
        </div>
    </div>
    </div>
    <div class="">
    <div style="background:#17a2b8;color:#fff;">
        <div class="clearfix"></div>
            <div class="text-center"><em>
                        <h1 class="text-white">Alhamdulillah...</h1>
                        <h1 class="text-white">Ribuan jamaah telah mendownload dan</h1>
                        <h1 class="text-white">menggunakan SYARIAID</h1>
                        <h1 class="text-white">Alhamdulillah... </h1>
                        <h1 class="text-white">Mereka telah mendapatkan manfaat</h1></em>
                    </div>
                    <div class="clearfix"></div>
        </div>
    </div>

    <div class="container">
    <div style="position: relative;" class="layan_mikro">
        <?php 
        for($i=1;$i<20;$i++){ 
            echo '<div class="card animated pulse" style="width: 15rem;height:auto;border-radius : 0;box-shadow : none !important; ">
            <div style="padding:10px;">
                <img style="width: 100% !important;" class="card-img-top" src="'.base_url().'/public/images/web/lp/slick/'.$i.'.jpg" alt="Card image cap">
            </div>
          </div>';
        }
        ?>
    </div>
    </div>

    <div style="background: #aea9a9">
        <div class="container">
                <h1 class="text-center  text-white" style="padding-top:20px">MENGAPA BERINFAQ DI DEPAN?</h1>
                    <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="text-center">
                        <img  src="<?php echo base_url()."/public/";?>images/web/lp/cricleustd.png" style="margin-top: -40px;margin-bottom: 10px;">
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                        <div class="">
                                <div class="d-flex align-items-baseline mb-4 pr-4">
                                    <i class="fa fa-check-circle-o fa-2x mr-2  text-white"></i>
                                    <div class="">
                                        <h4 class="mb-0  text-white">Ada keberkahan dalam mendapatkan ilmunya dengan "Bulghah"</h4>
                                    </div>
                                </div>
                                <div class="d-flex align-items-baseline mb-4 pr-4">
                                    <i class="fa fa-check-circle-o fa-2x mr-2  text-white"></i>
                                    <div class="">
                                        <h4 class="mb-0  text-white">Membantu Ustadz/Ustadzah yang menjadi narasumber </h4>
                                    </div>
                                </div>

                                <div class="d-flex align-items-baseline mb-4 pr-4">
                                    <i class="fa fa-check-circle-o fa-2x mr-2  text-white"></i>
                                    <div class="">
                                        <h4 class="mb-0  text-white">Untuk membuktikan keseriusan belajar tentang islam </h4>
                                    </div>
                                </div>
                                <div class="d-flex align-items-baseline mb-4 pr-4">
                                    <i class="fa fa-check-circle-o fa-2x mr-2  text-white"></i>
                                    <div class="">
                                        <h4 class="mb-0  text-white">Menghidari pertanyaan iseng, usil atau mengetes Ustadz/Ustadzah </h4>
                                    </div>
                                </div>
                                <div class="d-flex align-items-baseline mb-4 pr-4">
                                    <i class="fa fa-check-circle-o fa-2x mr-2  text-white"></i>
                                    <div class="">
                                        <h4 class="mb-0  text-white">Bersedekah kepada orang alim atau ahli fiqih: Satu dibalas 900.000</h4>
                                    </div>
                                </div>
                            </div>
                    </div>
            </div>
        </div>
    </div>

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
                                    <input type="number"  id="infaq-tambahan" class="infaq-tambahan" onkeyup="return formatRupiahs(this.value,this.id)" >
                                </div>
                            </div>
                                <div class="clearfix"></div>
                                <p class="text-black display-6" style="margin:0;">Infaq dasar sebesar Rp 59.000. </p>
                                <div class="blink">
                                Silahkan isi infaq tambahan sesuai dengan keikhlasan kaka minimal sebesar Rp 100</div></div>    
                                <div class="clearfix"></div>
                                <p class="text-black display-6">Dengan infaq ini, kaka juga telah ikut berkontribusi dalam menyebarkan dakwah islam yang rahmatan lil alamin lewat teknologi digital.</p><h3 class="text-black">Masyaallah Tabarokallah..</h3>
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
    </div>
    
    <div class="section-space20">
    <div class="container">
        <div class="col-lg-12 col-md-12 col-12">
        
        <button class="btn button_pay text-center font-weight-bold" style="background: #ffc107;color: #fffbfb;border-radius: 40px;font-size:36px" name="send-message" id="form-input-btn">INFAQ SEKARANG</button>
            </div>
    </div>
    
    <form id="payment-form" method="post" action="<?=base_url()?>payment-Finish">
     <input type="hidden" id="valdata" name="valdata" value="<?php echo $resultperson->id.':'.$resultprodak->id;?>"/>  
      <input type="hidden" name="result_type" id="result-type" value=""></div>
      <input type="hidden" name="result_data" id="result-data" value=""></div>
    </form>

    </div>
    
    </div>

</body>
<?php foreach($this->authio->WebJs() as $asset){echo $asset;};?>
<script>
$('.button_pay').click(function (event) {
      event.preventDefault();

      if($(".infaq-tambahan").val()=="" || Number($(".infaq-tambahan").val().replace(/[^,\d]/g, ''))<100 ){
          Swal.fire('','Silahkan isi infaq tambahan sesuai dengan keikhlasan kaka [Minimal infaq Rp.100]','')

          return false;
          buxe();
      }
      $(this).attr("disabled", "disabled");
    
    $.ajax({
      type:'POST',  
      url: _url+'payment',
      data:{'data':$("#valdata").val(),'infaq':$(".infaq-tambahan").val()},
      cache: false,

      success: function(data) {
        
        var resultType = document.getElementById('result-type');
        var resultData = document.getElementById('result-data');

        function changeResult(type,data){
          $("#result-type").val(type);
          $("#result-data").val(JSON.stringify(data));
        }

        snap.pay(data, {
          
          onSuccess: function(result){
            changeResult('success', result);
            console.log(result.status_message);
            $("#payment-form").submit();
          },
          onPending: function(result){
            changeResult('pending', result);
            console.log(result.status_message);
            $("#payment-form").submit();
          },
          onError: function(result){
            changeResult('error', result);
            console.log(result.status_message);
            console.log("errro",result);
            $("#payment-form").submit();
          }
        });
      }
    });
  });
function formatRupiahs(angka,id){
    var rupiah = document.getElementById(id);
    rupiah.addEventListener('keyup', function(e){
               rupiah.value = formatRupiah(this.value);
           });
   }  
function formatRupiah(angka){
    if(Number(angka)<0){
        return;
    }
    let prefix="";
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
    split   		= number_string.split(','),
    sisa     		= split[0].length % 3,
    rupiah     		= split[0].substr(0, sisa),
    ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

    if(ribuan){
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
    }

    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return prefix == undefined ? rupiah : (rupiah ? '' + rupiah : '');
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

</html>
