<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<link rel="stylesheet" href="<?= base_url('assets/css/home.css') ?>">

<div id="home-page">
    <?php $this->load->view('about_widget'); ?>
    <?php $this->load->view('service_widget'); ?>
    <?php $this->load->view('process_widget'); ?>
    <?php
 // Testimonial Data
        $data ['testimonial_list'] = [
            ['name' => 'Rahul Sharma', 'pos' => 'Delhi to Bangalore', 'text' => 'The team was professional and handled all my delicate items with extreme care. Their packing quality is top-notch.', 'color' => 'bg-blue'],
            ['name' => 'Priya Patel', 'pos' => 'Office Relocation', 'text' => 'Moving our office was a huge task, but Sri Ganga Relocation made it look easy. Minimal downtime and zero damage.', 'color' => 'bg-green'],
            ['name' => 'Amit Singh', 'pos' => 'Local Shifting', 'text' => 'Fast, efficient, and very reasonably priced. The staff was polite and finished the job ahead of schedule.', 'color' => 'bg-teal'],
            ['name' => 'Sonia Verma', 'pos' => 'Vehicle Transport', 'text' => 'I was worried about my car transport, but they delivered it in perfect condition. Great communication.', 'color' => 'bg-blue'],
            ['name' => 'Vikram Rao', 'pos' => 'Storage Service', 'text' => 'Safe and clean storage facilities. I kept my goods for 3 months and everything was returned in same condition.', 'color' => 'bg-green']
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

