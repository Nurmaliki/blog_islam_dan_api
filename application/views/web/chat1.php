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
    <!-- Bootstrap -->
    <?php foreach($this->authio->WebCss() as $asset){echo $asset;};?>
    <style type="text/css">
    @media only screen and (max-width: 460px){
    #banner_overlay_container_image { display: block; }}
    #banner_overlay_container_image{position: unset !important; }
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
        font-size: 11px;
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
    </style>


</head>

<body class="bg-white">
    <div id="header" class="header">
    <div class="container">    
        <!-- <div class="container"> -->
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-12 col-sm-6 col-6">
                    <!-- logo -->
                    <div id="header_logo" class="logo">
                        <a href="index.php"><img  src="<?php echo base_url()."/public/";?>images/web/logo.png" alt="Borrow - Loan Company Website Template"></a>
                    </div>
                </div>
                <!-- logo -->
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                </div>
            </div>
        <!-- </div> -->
    </div>  
    </div>  

<div class="container" style="padding-top:30px">
    <div class="row">
        <div class="col-lg-6 col-md-12 col-12">
        <img  id="banner_overlay_container_image" style="margin-top:-30px;" src="<?php echo base_url()."/public/";?>images/web/ustad.png">
        </div>
        <div class="col-lg-6 col-md-12 col-12">
        <h6 class="lead m-t-0">Alhamdulillah...</h6>
        <p class="text-muted mb-0">Kami mengucapkan terimakasih atas kesediaan kaka untuk berinfaq dan mendukung kami untuk terus memberikan layanan terbaik kami untuk umat</p>
        <div class="clearfix"></div>
        <p class="text-muted mb-0">Semoga menjadi amal ibadah yang penuh keberkahan Jazakumullah khoiron katsiron</p>
            <div style="padding-top: 10px;padding-bottom: 10px;">
            <div class="table-responsive" style="background-color: #24843a;padding: 2px;">
                <table class="table" style="margin-bottom: 0px">
                    <thead style="background: cornflowerblue;">
                        <tr style="color: #fff;">
                            <th style="text-align: left;padding: 12px;">PRODUCT</th>
                            <th style="text-align: left;padding: 12px;">INFAQ</th>
                        </tr>
                    </thead>
                    <tbody style="background: lightskyblue;">
                        <tr style="color: #000;">
                            <td>Konsultasi Online SyariaID – 30 Hari</td>
                            <td>Rp. 50.123</td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
            </div>
            <p>* Lakukan infaq sejumlah nominal diatas<br/>
            ** Kaka dapat konsultasi dengan Ustadz/Ustadzah Syariaid selama 30 hari</p>
           

            <div class="row">
            <div class="col-lg-6">
                    <div class="custom-control custom-radio">
                        <input type="radio" id="BNI" name="customRadio" class="custom-control-input" onclick="return infobank(this.id)">
                        <label class="custom-control-label" for="BNI">Bank BNI </label>
                        <img src="<?php echo base_url()."/public/";?>images/web/bank/bni.png" style="width: 64px;height: 32px;">
                    </div>
                    <div class="clearfix"></div>
                    <div id="bubble-BNI"></div>
                    <div class="clearfix"></div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="BRI" name="customRadio" class="custom-control-input" onclick="return infobank(this.id)">
                        <label class="custom-control-label" for="BRI">Bank BRI</label>
                        <img src="<?php echo base_url()."/public/";?>images/web/bank/bri.png" style="width: 64px;height: 32px;">
                    </div>
                    <div class="clearfix"></div>
                    <div id="bubble-BRI"></div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="MANDIRI" name="customRadio" class="custom-control-input" onclick="return infobank(this.id)">
                        <label class="custom-control-label" for="MANDIRI">Bank MANDIRI</label>
                        <img src="<?php echo base_url()."/public/";?>images/web/bank/mandiri.png" style="width: 64px;height: 32px;">
                    </div>
                    <div class="clearfix"></div>
                    <div id="bubble-MANDIRI"></div>
                </div>
                <div class="col-lg-6">
                <h6 class="lead m-t-0">Data Diri akun Syariaid</h6>
                    <dl class="row mb-0">
                        <div class="col-sm-3 text-sm-right"><dt>Nama:</dt> </div>
                        <div class="col-sm-9 text-sm-left"><dd class="mb-1">Sarwani</dd> </div>
                    </dl>
                    <dl class="row mb-0">
                        <div class="col-sm-3 text-sm-right"><dt>Email:</dt> </div>
                        <div class="col-sm-9 text-sm-left"><dd class="mb-1">Sarwani</dd> </div>
                    </dl>
                    <dl class="row mb-0">
                        <div class="col-sm-3 text-sm-right"><dt>HP:</dt> </div>
                        <div class="col-sm-9 text-sm-left"><dd class="mb-1">Sarwani</dd> </div>
                    </dl>
                </div>
            </div>
            <div class="clearfix"></div>
            <button class="btn common_button" style="background: #28a745;color: #fffbfb;border-radius: 40px;" name="send-message" id="form-input-btn">INFQ</button>
        </div>
    </div>
</div>    
</body>
<?php foreach($this->authio->WebJs() as $asset){echo $asset;};?>
<script>
    function infobank(e){
        $("#bubble-BNI").html('');
        $("#bubble-BRI").html('');
        $("#bubble-MANDIRI").html('');
        let html='<div class="bubble">';
        html +='Lakukan pembayaran langsung ke rekening Bank <span style="font-weight: bold;">'+e+'</span> kami, Silahkan gunakan <span style="font-weight: bold;">ID Pesanan Anda sebagai referensi </span>pembayaran. Pesanan Anda tidak akan dikirim sampai dana telah kami terima.</div>';
        $("#bubble-"+e).html(html);
    }
</script>

</html>
