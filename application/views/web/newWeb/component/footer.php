<footer class="main-footer">
    <div class="container container-heading">
        <div class="items flex wrap">
            <div class="item-3 m:item-12">
                <figure class="logo-footer m-b-2">
                    <img style="    width: 190px;" src="<?php echo base_url() . "public/"; ?>new_web/images/logo_syaria.png" alt="" srcset="">
                    <!-- <img style="width: 100px;" src="images/logo.png" alt="" srcset=""> -->

                </figure>
                <!-- <p class="logo-cap" style="color: #17a74a; font-weight: bold;">Membangun Keluarga Islami</p> -->
            </div>
            <div class="item-1 m:item-6">
                <h3>SYARIAID</h3>
                <ul>
                    <li>
                        <?php if ($this->uri->segment(1) === null || $this->uri->segment(1) != 'beranda') { ?>
                            <a href="https://syaria.id">Beranda</a>
                        <?php } else { ?>
                            <a href="https://syaria.id/beranda">Beranda</a>
                        <?php } ?>

                    </li>

                    <li>
                        <?php if ($this->uri->segment(1) != 'beranda'   || $this->uri->segment(1) === null) { ?>
                            <a href="/#services">Services</a>
                        <?php } else { ?>
                            <a href="beranda#services">Services</a>
                        <?php } ?>

                    </li>

                    <li>
                        <?php if ($this->uri->segment(1) != 'beranda'   || $this->uri->segment(1) === null) { ?>
                            <a href="/#fitur">Fitur</a>
                        <?php } else { ?>
                            <a href="/beranda#fitur">Fitur</a>
                        <?php } ?>

                    </li>

                    <li>
                        <?php if ($this->uri->segment(1) != 'beranda'  || $this->uri->segment(1) === null) { ?>
                            <a href="/#artikel">Artikel</a>
                        <?php } else { ?>
                            <a href="/beranda#artikel">Artikel</a>
                        <?php } ?>
                    </li>

                    <li>
                        <a href="/contact">Kontak</a>
                    </li>


                </ul>
            </div>

            <div class="item-2 m:item-6">
                <h3>UMUM</h3>
                <ul>
                    <li>
                        <a href="/faq">F A Q</a>
                    </li>

                    <li>
                        <a href="/terms-conditions">Syarat &amp; Ketentuan </a>
                    </li>

                    <li>
                        <a href="/privacy-policy">Kebijakan Privasi </a>
                    </li>
                </ul>
            </div>

            <div class="item-3 m:item-12 follow">
                <h3>IKUTI KAMI</h3>
                <ul>
                    <li>
                        <a href="https://www.facebook.com/syariaidofficial/" class="social-media flex items-center" target="_blank">
                            <object data="<?php echo base_url() . "public/"; ?>new_web/images/socmed/facebook.svg" type="image/svg+xml" alt="Ikuti kami di facebook"></object>
                            <span>SyariaID - Aplikasi Chat dengan Ustadz</span>
                        </a>
                    </li>

                    <li>
                        <a href="https://instagram.com/syariaidofficial" class="social-media flex items-center" target="_blank">
                            <object data="<?php echo base_url() . "public/"; ?>new_web/images/socmed/instagram.svg" type="image/svg+xml" alt="Ikuti kami di instagram"></object>
                            <span>@syariaidofficial</span>
                        </a>
                    </li>
                    <!-- <li>
                        <a href="https://twitter.com/syaria" class="social-media flex items-center" target="_blank">
                            <object data="<?php echo base_url() . "public/"; ?>new_web/images/socmed/twitter.svg" type="image/svg+xml" alt="Ikuti kami di twitter"></object>
                            <span>@Syaria</span>
                        </a>
                    </li> -->


                </ul>
            </div>

            <div class="item-3 m:item-12">
                <div class="flex warp content-between direction-column m:items-center">
                    <h3>UNDUH SYARIAID</h3>
                    <div class="box-download flex items-center">
                        <a href="https://play.google.com/store/apps/details?id=santri.syaria" target="_blank" class="m-r-2">
                            <img src="<?php echo base_url() . "public/"; ?>new_web/images/google.svg" alt="">
                        </a>
                        <!-- <a href="https://apps.apple.com/us/app/SYARIAID/id1479939730" target="_blank">
                            <img src="images/apple.svg" alt="">
                        </a> -->
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container foot-note">
        <div class="flex warp content-center">
            Copyright ©2021 SYARIAID made with maliki
        </div>
    </div>
</footer>

<section class="banner-app is-show">
    <div class="box-banner-app flex">
        <a href="https://play.google.com/store/apps/details?id=santri.syaria" class="flex items-center content-between">
            <div class="icon-app">

            </div>
            <strong>Buka aplikasi SYARIAID</strong>
        </a>
        <button id="buttonCloseBanner" aria-label="tutup informasi download SYARIAID">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19 5L5 19" stroke="#697784" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M5 5L19 19" stroke="#697784" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>
    </div>
</section>


<?php if ($this->uri->segment(1) != 'beranda'    || $this->uri->segment(1) === null) { ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> -->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->
    <!-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script> -->
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() . "public/"; ?>new_web/slick/slick.min.js"></script>

    <script>
        $('.variable-width').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
        });
    </script>

    <script>
        // const axios = require('axios').default;
        // const axios = require('axios');

        // Make a request for a user with a given ID
        // var config = {
        // method: 'get',
        // url: 'https://api.myquran.com/v1/sholat/kota/semua',
        // headers: { }
        // };

        // axios(config)
        // .then(function (response) {
        //     console.log(JSON.stringify(response.data));
        // })
        // .catch(function (error) {
        // console.log(error);
        // });

        const d = new Date();
        var tanggal = d.getDate();
        var bulan = d.getMonth() + 1;
        var tahun = d.getFullYear();

        if (localStorage.getItem('idkota')) {
            var kota = localStorage.getItem('idkota');
        } else {
            var kota = '1301';

        }

        var config = {
            method: 'get',
            url: 'https://api.myquran.com/v1/sholat/jadwal/' + kota + '/' + tahun + '/' + bulan + '/' + tanggal,
            headers: {}
        };

        axios(config)
            .then(function(response) {
                // console.log(JSON.stringify(response.data.data));
                // console.log(JSON.stringify(response.data.data.lokasi));
                document.getElementById('Lokasi').innerHTML = JSON.stringify(response.data.data.lokasi).replace(/["]+/g, '');
                // console.log(JSON.stringify(response.data.data.daerah));
                // console.log(JSON.stringify(response.data.data.jadwal));
                // console.log(JSON.stringify(response.data.data.jadwal.tanggal));
                // console.log(JSON.stringify(response.data.data.jadwal.imsak));
                document.getElementById('Tahajud').innerHTML = JSON.stringify(response.data.data.jadwal.imsak).replace(/["]+/g, '');

                // console.log(JSON.stringify(response.data.data.jadwal.subuh));
                document.getElementById('Subuh').innerHTML = JSON.stringify(response.data.data.jadwal.subuh).replace(/["]+/g, '');

                // console.log(JSON.stringify(response.data.data.jadwal.terbit));
                // document.getElementById('Terbit').innerHTML = JSON.stringify(response.data.data.jadwal.terbit);

                // console.log(JSON.stringify(response.data.data.jadwal.dhuha));
                document.getElementById('Duha').innerHTML = JSON.stringify(response.data.data.jadwal.dhuha).replace(/["]+/g, '');

                // console.log(JSON.stringify(response.data.data.jadwal.dzuhur));
                document.getElementById('Zuhur').innerHTML = JSON.stringify(response.data.data.jadwal.dzuhur).replace(/["]+/g, '');

                // console.log(JSON.stringify(response.data.data.jadwal.ashar));
                document.getElementById('Asar').innerHTML = JSON.stringify(response.data.data.jadwal.ashar).replace(/["]+/g, '');

                // console.log(JSON.stringify(response.data.data.jadwal.maghrib));
                document.getElementById('Magrib').innerHTML = JSON.stringify(response.data.data.jadwal.maghrib).replace(/["]+/g, '');

                // console.log(JSON.stringify(response.data.data.jadwal.isya));
                document.getElementById('Isya').innerHTML = JSON.stringify(response.data.data.jadwal.isya).replace(/["]+/g, '');

                // console.log(JSON.stringify(response.data.data.jadwal.date));
                // console.log(JSON.stringify(response.data).jadwal);

            })
            .catch(function(error) {
                console.log(error);
            });
    </script>
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136833084-1"></script> -->
    <!-- <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-136833084-1');
    </script> -->

    <script defer type="text/javascript">
        // if('serviceWorker' in navigator) {
        // navigator.serviceWorker
        //         .register('js/sw.js')
        //         .then(function() { console.log("Service Worker Registered"); });
        // }

        // const nav = document.querySelector('.global-header');
        // const navTop = nav.offsetTop;

        // function stickyNavigation() {
        //     if (window.scrollY >= 600) {
        //         nav.classList.add('is-fixed');
        //     } else {
        //         nav.classList.remove('is-fixed');
        //     }
        // }

        // window.addEventListener('scroll', stickyNavigation);

        tns({
            "container": "#contentServices",
            mode: 'gallery',
            "items": 1,
            "navContainer": "#thumbnailServices",
            "navAsThumbnails": true,
            "speed": 300,
            "autoplay": true,
            "disable": true,
            "responsive": {
                "480": {
                    "disable": false,
                }
            }
        })

        const changeLocation = document.getElementById('changeLoctation')
        const noScroll = document.querySelector('body')
        const openModal = document.getElementById('modalChangeLocation')
        const closeModal = document.getElementById('closeModal')
        const clearLoc = document.getElementById('city')

        document.getElementById('changeLoctation').click = function() {
            document.querySelector('body').classList.add('no-scroll');
            document.getElementById('modalChangeLocation').classList.add('main-modal--show');
            document.getElementById("city").focus();
        }

        function changeLoctation() {
            document.querySelector('body').classList.add('no-scroll');
            document.getElementById('modalChangeLocation').classList.add('main-modal--show');
            document.getElementById("city").focus();
        }


        document.getElementById('closeModal').click = function() {
            document.querySelector('body').classList.remove('no-scroll')
            document.getElementById('modalChangeLocation').classList.remove('main-modal--show')
            document.getElementById('city').value = ''
        }

        function closeModal_click() {
            document.querySelector('body').classList.remove('no-scroll');
            document.getElementById('modalChangeLocation').classList.remove('main-modal--show');
            document.getElementById('city').value = '';
        }


        // var currentLocation = document.getElementById('currentLocation')
        // currentLocation.onclick = function() {
        //     getLocation();
        // }

        // function getLocation() {
        //     if (navigator.geolocation) {

        //         navigator.geolocation.watchPosition(function(position) {

        //             console.log("i'm tracking you!");

        //             console.log("Latitude: " + position.coords.latitude +
        //                 "\nLongitude: " + position.coords.longitude);
        //           },
        //           function(error) {
        //             if (error.code == error.PERMISSION_DENIED) {
        //                 console.log("you denied me :-(");
        //                 alert("Please allow browser to get your location!")
        //             }

        //           });
        //     } else {
        //         console.log("Geolocation is not supported by this browser.");
        //     }
        // }

        // setTimeout(function() {
        //     getLocation();
        // }, 1500); // 1.5s
    </script>

    <script type="text/javascript">
        function autocomplete(inp, url) {
            /*the autocomplete function takes two arguments,
            the text field element and an array of possible autocompleted values:*/
            var currentFocus;
            /*execute a function when someone writes in the text field:*/

            // var textInput = document.getElementById('city');
            var textInput = inp;

            // Init a timeout variable to be used below
            var timeout = null;

            // Listen for keystroke events
            textInput.onkeyup = function(e) {
                if (e.keyCode != 13 && e.keyCode != 37 && e.keyCode != 38 && e.keyCode != 39 && e.keyCode != 40) {
                    // Clear the timeout if it has already been set.
                    // This will prevent the previous task from executing
                    // if it has been less than <MILLISECONDS>
                    clearTimeout(timeout);

                    // Make a new timeout set to go off in 800ms
                    timeout = setTimeout(function() {

                        if (inp.value) {

                            var config = {
                                method: 'get',
                                url: url + "/" + inp.value,
                                headers: {}
                            };

                            axios(config)
                                .then(function(response) {
                                    console.log(response.data);
                                    var result_pertama = response.data;
                                    var result = response.data;

                                    if (result_pertama.status) {
                                        console.log(result.data);
                                        console.log("result");

                                        var arr = result.data;
                                        var inp = document.getElementById("city");
                                        console.log(arr);

                                        var a, b, i, val = inp.value;
                                        /*close any already open lists of autocompleted values*/
                                        closeAllLists();
                                        if (!val) {
                                            return false;
                                        }
                                        currentFocus = -1;
                                        /*create a DIV element that will contain the items (values):*/
                                        a = document.createElement("ul");
                                        a.setAttribute("id", inp.id + "autocomplete-list");
                                        a.setAttribute("class", "autocomplete-items");
                                        a.setAttribute("style", "height: 350px;overflow-y: scroll;");
                                        /*append the DIV element as a child of the autocomplete container:*/
                                        inp.parentNode.appendChild(a);
                                        /*for each item in the array...*/
                                        for (i = 0; i < arr.length; i++) {
                                            /*create a DIV element for each matching element:*/
                                            b = document.createElement("li");
                                            /*make the matching letters bold:*/
                                            // b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                                            // b.innerHTML += arr[i].substr(val.length);
                                            b.innerHTML += arr[i].lokasi;
                                            /*insert a input field that will hold the current array item's value:*/
                                            b.innerHTML += "<input type='hidden' value='" + arr[i].id + "'>";
                                            /*execute a function when someone clicks on the item value (DIV element):*/
                                            b.addEventListener("click", function(e) {
                                                /*insert the value for the autocomplete text field:*/
                                                //   console.log(arr[i].lokasi)
                                                inp.value = '';
                                                localStorage.setItem('idkota', this.getElementsByTagName("input")[0].value);

                                                swal("Berhasil Pilih Kota", {
                                                    buttons: false,
                                                    icon: "success",
                                                    timer: 3000,
                                                });
                                                const d = new Date();
                                                var tanggal = d.getDate();
                                                var bulan = d.getMonth() + 1;
                                                var tahun = d.getFullYear();

                                                if (localStorage.getItem('idkota')) {
                                                    var kota = localStorage.getItem('idkota');
                                                } else {
                                                    var kota = '1301';

                                                }

                                                var config = {
                                                    method: 'get',
                                                    url: 'https://api.myquran.com/v1/sholat/jadwal/' + kota + '/' + tahun + '/' + bulan + '/' + tanggal,
                                                    headers: {}
                                                };

                                                axios(config)
                                                    .then(function(response) {
                                                        // console.log(JSON.stringify(response.data.data));
                                                        // console.log(JSON.stringify(response.data.data.lokasi));
                                                        document.getElementById('Lokasi').innerHTML = JSON.stringify(response.data.data.lokasi).replace(/["]+/g, '');
                                                        // console.log(JSON.stringify(response.data.data.daerah));
                                                        // console.log(JSON.stringify(response.data.data.jadwal));
                                                        // console.log(JSON.stringify(response.data.data.jadwal.tanggal));
                                                        // console.log(JSON.stringify(response.data.data.jadwal.imsak));
                                                        document.getElementById('Tahajud').innerHTML = JSON.stringify(response.data.data.jadwal.imsak).replace(/["]+/g, '');

                                                        // console.log(JSON.stringify(response.data.data.jadwal.subuh));
                                                        document.getElementById('Subuh').innerHTML = JSON.stringify(response.data.data.jadwal.subuh).replace(/["]+/g, '');

                                                        // console.log(JSON.stringify(response.data.data.jadwal.terbit));
                                                        // document.getElementById('Terbit').innerHTML = JSON.stringify(response.data.data.jadwal.terbit);

                                                        // console.log(JSON.stringify(response.data.data.jadwal.dhuha));
                                                        document.getElementById('Duha').innerHTML = JSON.stringify(response.data.data.jadwal.dhuha).replace(/["]+/g, '');

                                                        // console.log(JSON.stringify(response.data.data.jadwal.dzuhur));
                                                        document.getElementById('Zuhur').innerHTML = JSON.stringify(response.data.data.jadwal.dzuhur).replace(/["]+/g, '');

                                                        // console.log(JSON.stringify(response.data.data.jadwal.ashar));
                                                        document.getElementById('Asar').innerHTML = JSON.stringify(response.data.data.jadwal.ashar).replace(/["]+/g, '');

                                                        // console.log(JSON.stringify(response.data.data.jadwal.maghrib));
                                                        document.getElementById('Magrib').innerHTML = JSON.stringify(response.data.data.jadwal.maghrib).replace(/["]+/g, '');

                                                        // console.log(JSON.stringify(response.data.data.jadwal.isya));
                                                        document.getElementById('Isya').innerHTML = JSON.stringify(response.data.data.jadwal.isya).replace(/["]+/g, '');

                                                        // console.log(JSON.stringify(response.data.data.jadwal.date));
                                                        // console.log(JSON.stringify(response.data).jadwal);


                                                    })
                                                    .catch(function(error) {
                                                        console.log(error);
                                                    });

                                                /*close the list of autocompleted values,
                                                (or any other open lists of autocompleted values:*/
                                                closeAllLists();
                                            });
                                            a.appendChild(b);
                                            // }
                                        }


                                    } else {
                                        // alert(result_pertama.message);

                                        swal("Kota Tidak Ditemukan", {
                                            buttons: false,
                                            icon: "warning",
                                            timer: 3000,
                                        });
                                    }
                                })
                                .catch(function(error) {
                                    console.log(error);
                                });
                        }


                        //   xhr.send(null);
                    }, 300);
                }
            };
            /*execute a function presses a key on the keyboard:*/
            inp.addEventListener("keydown", function(e) {
                var x = document.getElementById(this.id + "autocomplete-list");
                if (x) x = x.getElementsByTagName("li");
                if (e.keyCode == 40) {
                    /*If the arrow DOWN key is pressed,
                    increase the currentFocus variable:*/
                    currentFocus++;
                    /*and and make the current item more visible:*/
                    addActive(x);
                } else if (e.keyCode == 38) { //up
                    /*If the arrow UP key is pressed,
                    decrease the currentFocus variable:*/
                    currentFocus--;
                    /*and and make the current item more visible:*/
                    addActive(x);
                } else if (e.keyCode == 13) {
                    /*If the ENTER key is pressed, prevent the form from being submitted,*/
                    e.preventDefault();
                    if (currentFocus > -1) {
                        /*and simulate a click on the "active" item:*/
                        if (x) x[currentFocus].click();
                    }
                }
            });

            function addActive(x) {
                /*a function to classify an item as "active":*/
                if (!x) return false;
                /*start by removing the "active" class on all items:*/
                removeActive(x);
                if (currentFocus >= x.length) currentFocus = 0;
                if (currentFocus < 0) currentFocus = (x.length - 1);
                /*add class "autocomplete-active":*/
                x[currentFocus].classList.add("autocomplete-active");
            }

            function removeActive(x) {
                /*a function to remove the "active" class from all autocomplete items:*/
                for (var i = 0; i < x.length; i++) {
                    x[i].classList.remove("autocomplete-active");
                }
            }

            function closeAllLists(elmnt) {
                /*close all autocomplete lists in the document,
                except the one passed as an argument:*/
                var x = document.getElementsByClassName("autocomplete-items");
                for (var i = 0; i < x.length; i++) {
                    if (elmnt != x[i] && elmnt != inp) {
                        x[i].parentNode.removeChild(x[i]);
                    }
                }
            }
            /*execute a function when someone clicks in the document:*/
            document.addEventListener("click", function(e) {
                closeAllLists(e.target);
            });
        }

        autocomplete(document.getElementById("city"), "https://api.myquran.com/v1/sholat/kota/cari");
    </script>

    <script type="text/javascript">
        var btnMenu = document.querySelector('#toggleMenu')
        var containerMenu = document.querySelector('.header-content__navigation')
        var body = document.querySelector('body')

        btnMenu.onclick = function() {
            containerMenu.classList.toggle('is-show')
            btnMenu.classList.toggle('is-active')
            body.classList.toggle('no-scroll')
        }



        var btnCloseBanner = document.getElementById('buttonCloseBanner')

        btnCloseBanner.onclick = function() {
            document.querySelector('.banner-app').classList.remove('is-show')
        }
    </script>

<?php  } ?>


<?php if ($this->uri->segment(1) != 'beranda'  || $this->uri->segment(1) !== null) { ?>
    <script async src="<?php echo base_url() . "public/"; ?>new_web/js/share.js"></script>
<?php } ?>


<?php if ($this->uri->segment(1) == 'order-produk') { ?>
    <?php foreach ($this->authio->WebJs() as $asset) {
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
            //     Swal.fire('', 'Silahkan isi infaq tambahan sesuai dengan keikhlasan kaka [Minimal infaq Rp.100]', '')

            //     return false;
            //     buxe();
            // }

            let prodak = $('input[name="radio-paket"]:checked').data("prodak");
            let person = $('input[name="radio-paket"]:checked').data("person");
            let infaq = 0;
            let valData = person + ":" + prodak;
            $("#valdata").val(person + ":" + prodak);

            if ($("#valdata").val() == "") {
                Swal.fire('', 'Silahkan Pilih Paket', '')

                return false;
                buxe();
            }
            // $(this).attr("disabled", "disabled");

            $.ajax({
                type: 'POST',
                url: _url + 'payment_new',
                data: {
                    'data': valData,
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
<?php } ?>


</body>

</html>