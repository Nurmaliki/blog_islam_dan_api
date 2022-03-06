<?php

defined('BASEPATH') or exit('No direct script access allowed');
$this->set_directory("chat");
// $route['default_controller'] = 'chat';
$route['default_controller'] = 'Beranda/index';
$route['chat1'] = 'chat/manual';
$route['SubmitOrder'] = 'order/PostOrder';
$route['order-produk/(:any)'] = 'order/produk/$1';
$route['order-produk_new/(:any)'] = 'order/produk_new/$1';

$route['order-bugorder/(:any)'] = 'order/bugorder/$1';

$route['payment'] = 'order/paymentProgress';
$route['payment_new'] = 'order/paymentProgress_new';
$route['payment-Finish'] = 'order/PaymentFinish';
$route['order-notification'] = 'Notification';

$route['tentang'] = 'Tentang/index';
$route['taaruf'] = 'Taaruf/index';
$route['konsultasi-ustadz'] = 'KonsultasiUstadz/index';
$route['tutorial-pranikah'] = 'TutorialPranikah/index';
$route['undang-ustadz'] = 'UndangUstadz/index';
$route['inspirasi'] = 'Inspirasi/index';

// $route['beranda'] = 'Beranda/index';
$route['artikel'] = 'Artikel/index';
$route['inspirasi'] = 'Inspirasi/index';
$route['contact'] = 'Contact/index';
$route['contact_us_pesan'] = 'Contact/pesan';
$route['contact_us_pesan/data'] = 'Contact/datapage';
$route['contact/send'] = 'Contact/send_mail';
$route['terms-conditions'] = 'Termsconditions/index';
$route['privacy-policy'] = 'Privacypolicy/index';
$route['artikel/(:any)'] = 'Artikel/index';
$route['feedback/(:any)'] = 'Feedback/index';
$route['feedback/detail/(:any)'] = 'Feedback/detail/$1';
$route['inspirasi/(:any)'] = 'Artikel/index';
$route['artikel/detail/(:any)'] = 'Artikel/detail/$1';
$route['artikel/(:any)'] = 'Artikel/detail_by_title/$1';
$route['inspirasi/detail/(:any)'] = 'Inspirasi/detail/$1';
$route['inspirasi/(:any)'] = 'Inspirasi/detail_by_title/$1';


/****wp login */
$route['ho'] = 'Login';
$route['login-progress'] = 'Login/login';
$route['home'] = 'Login/login';
$route['order-list'] = 'Hoorder';
$route['order-list-table'] = 'Hoorder/datapage';

$route['Jamaah-table'] = 'Jamaah/datapage';
$route['Pengajar-table'] = 'Pengajar/datapage';
$route['PengajarAdd/(:any)'] = 'Pengajar/Created/$1';
// $route['Pengajar-table/(:any)'] = 'Status/datapage/$1';  

$route['content-dakwah'] = 'Status/index';
$route['content-doa'] = 'Status/index';
$route['content-faq'] = 'Faq/index';
$route['content-flayer'] = 'Status/index';
$route['content-artikel'] = 'Status/index';
$route['content-tentang'] = 'Status/index';
$route['content-taaruf'] = 'Status/index';
$route['content-konsultasi-ustadz'] = 'Status/index';
$route['content-tutorial-pranikah'] = 'Status/index';
$route['content-undang-ustadz'] = 'Status/index';
$route['content-inspirasi'] = 'Status/index';
$route['content-services'] = 'Status/index';
$route['content-fitur'] = 'Status/index';
$route['content-desfitur'] = 'Status/index';
$route['content-who-benefit'] = 'Status/index';
$route['content-who-benefit-des'] = 'Status/index';
$route['content-terms-conditions'] = 'Status/index';
$route['content-terms-conditions'] = 'Status/index';
$route['content-privacy-policy'] = 'Status/index';
$route['content-diliput-oleh'] = 'Status/index';




$route['faq'] = 'Frontfaq/datano';
$route['faq/(:any)'] = 'Frontfaq/data/$1';
$route['faq/detail/(:any)'] = 'Frontfaq/detail/$1';


$route['Status-table/(:any)'] = 'Status/datapage/$1';
$route['StatusAdd/(:any)'] = 'Status/Created/$1';
$route['StatusEdit/(:any)'] = 'Status/EditData/$1';
$route['StatusDelete/(:any)'] = 'Status/DeleteData/$1';
$route['StatusPos'] = 'Status/Store';
$route['page-content/(:any)'] = 'Status/page/$1';



$route['Faq-table/(:any)'] = 'Faq/datapage/$1';
$route['FaqAdd/(:any)'] = 'Faq/Created/$1';
$route['FaqEdit/(:any)'] = 'Faq/EditData/$1';
$route['FaqDelete/(:any)'] = 'Faq/DeleteData/$1';
$route['FaqPos'] = 'Faq/Store';
$route['page-content-faq/(:any)'] = 'Faq/page/$1';

$route['Subfaq-table/(:any)'] = 'Subfaq/datapage/$1';
$route['SubfaqAdd/(:any)'] = 'Subfaq/Created/$1';
$route['SubfaqEdit/(:any)'] = 'Subfaq/EditData/$1';
$route['SubfaqDelete/(:any)'] = 'Subfaq/DeleteData/$1';
$route['SubfaqPos'] = 'Subfaq/Store';
$route['page-content-subfaq/(:any)'] = 'Subfaq/page/$1';

$route['404_override'] = '';
