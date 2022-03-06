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
    <link rel="icon" href="<?php echo base_url() . "/public/images/web/favicon.ico"; ?>" type="image/x-icon">
    <script type="text/javascript" src="https://app.midtrans.com/snap/snap.js" data-client-key="Mid-client-zfxrOD0tm3IQ3M9o"></script>
    <?php foreach ($this->authio->WebCss() as $asset) {
        echo $asset;
    }; ?>
    <style type="text/css">
        [type="radio"]:checked,
        [type="radio"]:not(:checked) {
            position: absolute;
            left: -9999px;
        }

        [type="radio"]:checked+label,
        [type="radio"]:not(:checked)+label {
            position: relative;
            padding-left: 35px;
            cursor: pointer;
            line-height: 28px;
            display: inline-block;
            color: #000000;
            font-size: 20px;
            font-weight: bold;
        }

        [type="radio"]:checked+label:before,
        [type="radio"]:not(:checked)+label:before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 30px;
            height: 30px;
            border: 1px solid #ddd;
            border-radius: 100%;
            background: #fff;
        }

        [type="radio"]:checked+label:after,
        [type="radio"]:not(:checked)+label:after {
            content: '';
            width: 20px;
            height: 20px;
            background: #00b0f0;
            position: absolute;
            top: 6px;
            left: 6px;
            border-radius: 100%;
            -webkit-transition: all 0.2s ease;
            transition: all 0.2s ease;
        }

        [type="radio"]:not(:checked)+label:after {
            opacity: 0;
            -webkit-transform: scale(0);
            transform: scale(0);
        }

        [type="radio"]:checked+label:after {
            opacity: 1;
            -webkit-transform: scale(1);
            transform: scale(1);
        }


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

        input:focus {
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

        .box-options-konsultasi {
            margin-left: 30%;
        }

        #prev_btn {
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
            -webkit-border-radius: 50px;
            -moz-border-radius: 50px;
            outline: none;
            border: none;
        }

        #next_btn {
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
            -moz-border-radius: 50px;
            -webkit-border-radius: 50px;
            outline: none;
            border: none;
        }

        #prev_btn img {
            width: 30px;
        }

        #next_btn img {
            width: 30px;
        }

        @media only screen and (max-width: 460px) {
            #quot {
                font-size: 1em;
            }

            #title-paket {
                font-size: 1.1em !important;
            }

            .box-options-konsultasi {
                margin-left: 0%;
            }

            .img {
                display: none;
            }

            #banner_overlay_container_image {
                display: block;
            }

            .text-topim {
                font-size: 24px;
                /* text-align: left !important; */
            }

            .button_pay {
                font-size: 16px !important;
            }
        }

        #banner_overlay_container_image {
            position: unset !important;
        }

        .header {
            background: var(--main-color) !important;
            padding: 10px !important;
        }

        .table thead th tr {
            border: 2px solid #f8f9fa;
        }

        .table td,
        .table th {
            border: 2px solid #f8f9fa;
        }

        .clearfix {
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

        .top-container {
            background-color: #0070c0 !important;
            color: #778191;
        }

        .txt-program-istimewa {
            font-size: 26px;
            text-align: center;
        }
    </style>
    <script>
        var _url = "<?php echo str_replace('http', 'https', base_url()); ?>";
    </script>
</head>


<body class="bg-white">
    <div id="header" class="header">
        <div class="container">
            <!-- <div class="container"> -->
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-12 col-sm-6 col-6">
                    <!-- logo -->
                    <div id="header_logo" class="logo">
                        <a href="index.php"><img src="<?php echo base_url() . "/public/"; ?>images/web/logo.png" alt="Syari.id"></a>
                    </div>
                </div>
                <!-- logo -->
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                </div>
            </div>
            <!-- </div> -->
        </div>
    </div>
    <div>
        <div style="background-color: #fa9cc5;" class="bg-light-blue how-it-section">
            <div class="container" style="padding-top:30px">
                <div class="row">
                    <!-- <div class="col-lg-4 col-md-12 col-12 text-center">
                        <img class="img" style="margin-top:-10px;margin-bottom: 20px;" src="<?php echo base_url() . "/public/"; ?>images/web/nikah/hp.png">
                    </div> -->
                    <div class="col-lg-12 col-md-12 col-12">
                        <h1 class="text-white text-center text-topim">Masyaallah Tabarakallah...</h1>
                        <br>
                        <h1 class="text-white text-center text-topim">Kaka sudah sampai sini</h1>
                        <h1 class="text-white text-center text-topim"> Insyaallah kaka sudah siap NIKAH lahir dan bathin</h1>
                        <br>
                        <h1 class="text-white text-center text-topim">Aplikasi SYARIAID dapat menjadi wasilah untuk bertemu dengan jodoh dunia akhirat kaka...Amin</h1>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section-space20" style="background: #ffff">
        <div class="container">
            <!-- <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="section-title text-center mb60">
                    <h1 class="text-white">Udah Ingin Nikah atau Masih Nunggu?</h1>
                </div>
            </div> -->
            <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="section-title text-center">
                    <em>
                        <h3 id="quot" class="text-black">"Dan Allah menjadikan bagimu pasangan (suami atau istri) dari jenis kamu sendiri dan menjadikan anak dan cucu bagimu dari pasanganmu, serta memberimu rezeki dari yang baik. Mengapa mereka beriman kepada yang batil dan mengingkari nikmat Allah?”
                        </h3>
                    </em>
                    <h4 class="text-bold text-black">An-Nahl Ayat 72</h4>
                </div>
            </div>
        </div>
    </div>

    <div style="background:#ffff;color:#fff;">
        <div class="container text-center display-5 font-weight-bold">
            <h3 di="title-paket" class="text-black title-paket">Untuk melanjutkan proses Taaruf Online Silahkan pilih salah satu paket di bawah ini:
            </h3>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">


                    <div class="box-infa text-center" style="border: 4px solid #ce3838;border-style: dashed;margin: auto;background: #f6c3c3;padding: 10px;">

          
                        <div class="box-options-konsultasi">
                            <div class="text-left">
                                <p style="margin-bottom:1px">
                                    <input type="radio" id="minggu" name="radio-paket" data-prodak="6" data-person="<?php echo $resultperson->id; ?>" onclick="return valData(this)">
                                    <label for="minggu">PAKET TAARUF 7 HARI - Rp <?= number_format($resultprodak[0]->infaq , 0, ',', '.') ?></label>

                                <ul class="text-black" style="margin-left: 20px;">
                                    <li>Taaruf Online dengan semua member</li>
                                    <li>Konsultasi dengan Ustadz Pembimbing </li>
                                </ul>
                                </p>
                                <p style="margin-bottom:1px">
                                    <input type="radio" id="bulan" name="radio-paket" data-prodak="7" data-person="<?php echo $resultperson->id; ?>" onclick="return valData(this)">
                                    <label for="bulan">PAKET TAARUF 30 HARI - Rp <?= number_format($resultprodak[1]->infaq , 0, ',', '.') ?></label>
                                <ul class="text-black" style="margin-left: 20px;">
                                    <li>Taaruf Online dengan semua member</li>
                                    <li>Konsultasi dengan Ustadz Pembimbing </li>
                                </ul>
                                </p>
                            </div>
                        </div>






                    </div>
                    <div class="clearfix"></div>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>











    <div class="section-space20">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-12">
                <button class="btn button_pay text-center font-weight-bold" style="background: #fa9cc5;color: #fffbfb;font-size:36px" name="send-message" id="form-input-btn">Saya Siap Menikah</button>
            </div>
        </div>
    </div>
    <?php $resultprodak = $resultprodak[0]; ?>
    <form id="payment-form" method="post" action="<?= base_url() ?>payment-Finish">
        <input type="hidden" id="valdata" name="valdata" value="<?php echo $resultperson->id . ':' . $resultprodak->id; ?>" />
        <input type="hidden" name="result_type" id="result-type" value=""></div>
        <input type="hidden" name="result_data" id="result-data" value=""></div>
    </form>

</body><?php foreach ($this->authio->WebJs() as $asset) {
            echo $asset;
        }; ?>
<script>
    function valData(e) {
        let id = e.id;
        let prodak = $("#" + id).data("prodak");
        let person = $("#" + id).data("person");
        $("#valdata").val(person + ":" + prodak);
    }
    $('.button_pay').click(function(event) {
        event.preventDefault();

        // if ($(".infaq-tambahan").val() == "" || Number($(".infaq-tambahan").val().replace(/[^,\d]/g, '')) < 100) {
        //     Swal.fire('', 'Silahkan isi sedekah tambahan sesuai dengan keikhlasan kaka [Minimal sedekah Rp.100]', '')
        //     return false;
        //     buxe();
        // }

        if (!$("input[name='radio-paket']:checked").val()) {
            Swal.fire('', 'Siliahkan pilih jenis paket konsultasi terlebih dahulu', '')
            return false;
            buxe();
        }

        $(this).attr("disabled", "disabled");
        infaq = 0
        $.ajax({
            type: 'POST',
            url: _url + 'payment',
            data: {
                'data': $("#valdata").val(),
                'infaq': infaq
            },
            cache: false,

            success: function(data) {

                var resultType = document.getElementById('result-type');
                var resultData = document.getElementById('result-data');

                function changeResult(type, data) {
                    $("#result-type").val(type);
                    $("#result-data").val(JSON.stringify(data));
                }

                snap.pay(data, {

                    onSuccess: function(result) {
                        changeResult('success', result);
                        console.log(result.status_message);
                        $("#payment-form").submit();
                    },
                    onPending: function(result) {
                        changeResult('pending', result);
                        console.log(result.status_message);
                        $("#payment-form").submit();
                    },
                    onError: function(result) {
                        changeResult('error', result);
                        console.log(result.status_message);
                        console.log("errro", result);
                        $("#payment-form").submit();
                    }
                });
            }
        });
    });

    function formatRupiahs(angka, id) {
        var rupiah = document.getElementById(id);
        rupiah.addEventListener('keyup', function(e) {
            rupiah.value = formatRupiah(this.value);
        });
    }

    function formatRupiah(angka) {
        if (Number(angka) < 0) {
            return;
        }
        let prefix = "";
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? '' + rupiah : '');
    }

    $(document).ready(function() {
        $('.layan_mikro').slick({
            slidesToShow: 3,
            dots: false,
            prevArrow: '<button id="prev_btn"><center><img src="<?php echo base_url() . "public/"; ?>images/web/icons/back.png" /> </center></button>',
            nextArrow: '<button id="next_btn"><center><img src="<?php echo base_url() . "public/"; ?>images/web/icons/next.png" /> </center></button>',
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