<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = 'home/error';
$route['search'] = 'home/search';

/* Main Pages */
$route['about'] = 'about/index';
$route['gallery'] = 'gallery/photo_gallery';
$route['branches'] = 'packers_movers/state';
$route['contact'] = 'contacts/index';

/* Service Pages */
$route['services'] = 'services/index';
$route['home-shifting'] = 'services/homeShifting';
$route['office-shifting'] = 'services/officeShifting';
$route['car-transportation'] = 'services/carTransportation';
$route['bike-transportation'] = 'services/bikeTransportation';
$route['packing-unpacking'] = 'services/packingUnpacking';
$route['loading-unloading'] = 'services/loadingUnloading';
$route['storage-solutions'] = 'services/storageSolutions';

/* Legacy/Other Routes */
$route["photo-gallery"]="gallery/photo_gallery";
$route["video-gallery"]="gallery/video_gallery";
$route["(:any).htm"]="home/error";
$route["infrastructure"]="about/infrastructure";
$route["why-choose-us"]="about/choose";
$route["testimonials"]="about/testimonials";
$route["bill-for-claim"]="services/bill";
$route["iba-approved"]="services/iba";
$route["international-shifting"]="services/international";
$route["goods-insurance"]="services/insurance";

/* Dynamic SEO Routes */
$route["packers-movers-(:any)-india"]="packers_movers/state_services/$1";
$route["(:any)-packers-movers-(:any)"]="packers_movers/city/$2/$1";

/* State Shortcuts */
$route["bihar"]="packers_movers/state_services/bihar";
$route["maharashtra"]="packers_movers/state_services/maharashtra";
$route["delhi"]="packers_movers/state_services/delhi";
$route["uttarpradesh"]="packers_movers/state_services/uttarpradesh";
$route["punjab"]="packers_movers/state_services/punjab";
$route["karnataka"]="packers_movers/state_services/karnataka";
$route["westbengal"]="packers_movers/state_services/westbengal";
$route["telangana"]="packers_movers/state_services/telangana";

$route['translate_uri_dashes'] = TRUE;