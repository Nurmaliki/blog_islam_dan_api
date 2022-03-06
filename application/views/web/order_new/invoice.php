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
    .img-left-invoice { display: none; }}
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
    <di >
    <div class="section-space20">
        <div class="container bg-primary" style="padding-top:30px">
                <div class="col-lg-12 col-md-12 col-12">
                <h1 class="">Syukron katsiron.....</h1>
                    <h4 class="">Segera lakukan pembayaran infaq ke rekening kami</h4>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-lg-3">
                            <input type="text" class="form-control" value="<?php echo $VA;?>" id="invoice" readonly />
                        </div>
                        <div class="col-lg-3">
                        <button onclick="CopyNumber()" style="background: #ffc107;color: #fffbfb;font-size:15px" class="btn form-control">Copy rekening</button>
                        </div>
                    </div>
                </div> 
                <div class="row">       
                <div class="col-lg-6 col-md-12 col-12"> 
                <div style="padding:20px">       
                <h3 class="">Detil Pembayaran</h3>
                <div class="row" style="padding:10px;background:#dfca89;">
                    <div class="col-lg-4 col-md-6 col-12">
                        <h5 class="mb-2">Nama Bank</h5>
                        <h5 class="mb-0"><?php echo strtoupper($bank)?></h5>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <h5 class="mb-2">VA Number</h5>
                        <h5 class="mb-0"><?php echo $VA;?> </h5>
                    </div>
                    
                </div>   
                </div>   
                <div class="table-responsive" style="background-color: #24843a;padding: 2px;">
                    <table class="table" style="margin-bottom: 0px">
                        <thead style="background: cornflowerblue;padding: ;">
                            <tr style="color: #fff;padding-bottom:;">
                                <th style="text-align: left;padding: 12px;">PRODUCT</th>
                                <th style="text-align: left;padding: 12px;">INFAQ</th>
                            </tr>
                        </thead>
                        <tbody style="background: lightskyblue;">
                            <tr style="color: #000;">
                                <td><?php echo $produk;?></td>
                                <td><?php echo $this->authio->rupiah($infaq);?></td>
                            </tr>
                            <?php 
                            if($infaq_sukarela>0){
                                echo ' <tr style="color: #000;">
                                <td>Infaq Sukarela </td>
                                <td>'.$this->authio->rupiah($infaq_sukarela).'</td>
                            </tr>';
                            }

                            echo '<tr>
                                    <td>Total Infaq :</td>
                                    <td>'.$this->authio->rupiah($infaq_sukarela+$infaq).'</td>
                                </tr>';
                            ?>
                        </tbody>
                    </table>
                    </div> 
                <div style="padding:20px">
                <h3 class="">Data Diri</h3>
                <div class="row" style="padding:10px;background: lightskyblue;">
                    <div class="col-lg-4 col-md-6 col-12">
                        <h5 class="mb-2">Nama</h5>
                        <h5 class="mb-0"><?php echo $nama;?></h5>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <h5 class="mb-2">Email</h5>
                        <h5 class="mb-0"><?php echo $email;?> </h5>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <h5 class="mb-2">Telephon</h5>
                        <h5 class="mb-0"><?php echo $tlp;?> </h5>
                    </div>
                </div> 
                </div>
                <div style="padding:20px">
                <button id="btn-close-app" style="background:#e51818;color:#fffbfb;font-size:15px" class="btn form-control" onclick="return closeapp(1)">Close</button>
                </div>
                </div> 
                <div class="col-lg-6 col-md-12 col-12 text-center">
                 <img class="img-left-invoice"  style="margin-top:-30px;margin-bottom: 20px;" src="<?php echo base_url()."/public/";?>images/web/lp/hp.png">
                </div>     
            </div>  
            <div class="clearfix"></div>
            <div class="clearfix"></div>
        </div>
        </div>
    </di>
    

</body>
<?php foreach($this->authio->WebJs() as $asset){echo $asset;};?>
<script>
    function CopyNumber() {
    var copyText = document.getElementById("invoice");
        copyText.select();
        copyText.setSelectionRange(0, 99999); 
        document.execCommand("copy");
        Swal.fire('','Copied Invoice Number:',copyText.value);

    }

    function closeapp(id){
        localStorage.setItem("id",id);
        Android.nextScreen(id);
    }
</script>

</html>
