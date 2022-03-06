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
            <div class="items flex items-center">
                <h1 class="title">Kontak Kami</h1>
            </div>
        </div>
    </header>

    <section class="section-page section-page--contact">
        <div class="container container--small">
            <div class="box-contact">
                <div class="flex items wrap">
                    <div class="item-8 m:item-12">
                        <form method="post" action="/contact/send">
                            <input type="hidden" name="_token" value="bylYt47F2VjLR2C5NQ362FK9H809wM9g4ZCPCkYZ">                            
                            <p class="p-b-4">
                                    Masukan atau kritik membangun yang membawa pada perbaikan akan kami berikan imbalan. Salam dari kami di SYARIA.
                            </p>
                            <?php if ($this->session->flashdata('email_sent') !== null) { ?>
                                <p style="color: orange;" class="p-b-4">
                                    <?php echo $this->session->flashdata('email_sent'); ?>
                                </p>
                            <?php } ?>
                            <div class="field">
                                <label for="name">Nama Lengkap</label>
                                <input type="text" name="nama" id="name" placeholder="Tulis nama di sini..." class="field-style" required>
                                                            </div>
                            
                            <div class="field">
                                <label for="email">Tulis email aktif</label>
                                <input type="email" name="email" id="email" placeholder="Tulis email di sini..." class="field-style" required>
                            </div>
                                                    
                            
                                                    
                            <div class="field">
                                <label for="message">Pesan kamu</label>
                                <textarea name="pesan" id="message" class="field-style" placeholder="Tulis pesan di sini..." required></textarea>
                            </div>

                            <div class="field">
                                <div data-sitekey="6LfQfZkUAAAAAOeREoJnqB1mtp7KTHh4PpDHRrik" class="g-recaptcha"></div>
                            </div>
                            
                            <div class="field">
                                <button type="submit" class="btn-primary">Kirim pesan</button>
                            </div>
                            
                        </form>
                    </div>
                    <div class="item-4 m:item-12">
                        <div class="box-info">
                            Tautan yang mungkin kamu butuhkan:
                            <nav>
                                <ul class="help">
                                    <li class="flex items-center">
                                        <div class="icon">
                                            <object data="https://kesan.id/images/message.svg" type=""></object>
                                        </div>
                                        <a href="/faq" class="btn-transparent icon-right content-between">
                                            <span>F A Q</span>
                                            <object data="<?php echo base_url()."public/";?>new_web/images/chevron-right.svg" type="image/svg+xml"></object>
                                        </a>
                                    </li>
                                    
                                    <li class="flex items-center">
                                        <div class="icon">
                                            <object data="https://kesan.id/images/privacy.svg" type=""></object>
                                        </div>
                                        <a href="/terms-conditions" class="btn-transparent icon-right content-between">
                                            <span>Syarat &amp; ketentuan</span>
                                            <object data="<?php echo base_url()."public/";?>new_web/images/chevron-right.svg" type="image/svg+xml"></object>
                                        </a>
                                    </li>

                                    <li class="flex items-center">
                                        <div class="icon">
                                            <object data="https://kesan.id/images/terms.svg" type=""></object>
                                        </div>
                                        <a href="/privacy-policy" class="btn-transparent icon-right content-between">
                                            <span>Kebijakan Privasi</span>
                                            <object data="<?php echo base_url()."public/";?>new_web/images/chevron-right.svg" type="image/svg+xml"></object>
                                        </a>
                                    </li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include('component/footer.php'); ?>