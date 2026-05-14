<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<link rel="stylesheet" href="<?= base_url('assets/css/home.css') ?>">

<div id="home-page">
    <?php $this->load->view('about_widget'); ?>
    <?php $this->load->view('service_widget'); ?>
    <?php $this->load->view('stats_widget'); ?>
    <?php $this->load->view('process_widget'); ?>
    <?php
$data['testimonials'] = [
    [
        "name" => "Vikram Mehta",
        "role" => "Corporate Client",
        "image" => "https://i.pravatar.cc/150?u=11",
        "review" => "The level of professionalism was astounding. They handled our office relocation with zero downtime and surgical precision."
    ],
    [
        "name" => "Aditi Rao",
        "role" => "Residential Client",
        "image" => "https://i.pravatar.cc/150?u=12",
        "review" => "From Mumbai to Bangalore, not a single scratch. Their smart packing system is truly advanced. World-class experience!"
    ],
    [
        "name" => "Suresh Raina",
        "role" => "Vehicle Logistics",
        "image" => "https://i.pravatar.cc/150?u=13",
        "review" => "Transported my luxury SUV across the country safely. The specialized carrier and real-time tracking were top-notch."
    ],
    [
        "name" => "Rahul Khanna",
        "role" => "International Client",
        "image" => "https://i.pravatar.cc/150?u=14",
        "review" => "Exceptional coordination for our overseas move. The team kept us updated at every single stage of the journey."
    ]
];

$data['faqs'] = [
    [
        "question" => "How are tariffs calculated?",
        "answer" => "Our algorithmic pricing engine considers asset volume, transit distance, specialized resource requirements, and insurance value to provide a precise, transparent quote with no hidden charges."
    ],
    [
        "question" => "What is asset protection protocol?",
        "answer" => "We provide comprehensive multi-layer transit insurance and utilize impact-resistant industrial grade materials for all assets to ensure 100% safety during the entire relocation process."
    ],
    [
        "question" => "Do you handle vehicle logistics?",
        "answer" => "Yes, we utilize specialized closed-container carriers with advanced security systems for car and bike transportation across any distance, ensuring scratch-free delivery."
    ],
    [
        "question" => "International Relocation services?",
        "answer" => "We offer full-scale international moving solutions including customs clearance, port logistics, and door-to-door delivery worldwide with real-time global tracking."
    ]
];
?>
    <?php $this->load->view('testimonial_widget',$data); ?>
    <?php $this->load->view('faq_widget',$data); ?>
</div>

