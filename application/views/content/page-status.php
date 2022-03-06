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
    @media only screen and (max-width: 460px){
    #banner_overlay_container_image { display: block; }}
    #banner_overlay_container_image{position: unset !important; }
    .header{
        background: var(--main-color) !important;
        padding:10px !important;
    }
    img{
        width: 100% !important;
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
                                <img  src="<?php echo base_url()."/public/";?>images/web/logo.png" alt="Syari.id">
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                </div>
            </div>
    </div>  
    </div>  

<div class="container" style="padding-top: 10px;padding-bottom: 10px;">
<?php 
$src=base_url().'asset/status/'.$result[0]->image;
echo '<img src="'.$src.'" />';?>
    <div class="row" style="margin-top:10px">
    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
        <?php echo $result[0]->content;?>
        </div>
        </div>
    </div>
</body>
</html>
<?php foreach($this->authio->WebJs() as $asset){echo $asset;};?>
