<div id="home-page">
    <?php $this->load->view('about_widget'); ?>
    <?php $this->load->view('why_choose_us_widget'); ?>

    <?php $this->load->view('service_widget'); ?>
        <section class="content-box-section py-5">
        <div class="container">

            <div class="content-box">
                <h3>Why Customers Choose Our Company</h3>
                <p>
                    People usually remember the small details during relocation. Whether the movers arrived on schedule.
                    Whether cartons were handled carefully. Whether updates were shared properly during
                    transportation.Those practical details matter more than flashy advertising lines.
                </p>
                <p>At <em>E Gati Relocation Packers and Movers</em>, the focus stays on organised coordination and
                    dependable handling.</p>
                <ul>
                    <li>Straightforward pricing without hidden surprises</li>
                    <li>Trained relocation and loading staff</li>
                    <li>Interstate and local transportation support</li>
                    <li>Safer handling for furniture and fragile belongings</li>
                    <li>Consistent communication during movement</li>
                    <li>Organised planning before relocation begins</li>
                </ul>
                <p>Customers searching online for Top Packers and Movers often contact us after difficult past
                    experiences involving delays and damaged items. Our team tries to reduce those problems through
                    planning, supervision, and clearer coordination.
                </p>
            </div>

        </div>
    </section>

    <?php $this->load->view('process_widget'); ?>
    <?php
    // Testimonial Data
    $data['testimonial_list'] = [
        ['name' => 'Anjali Sharma', 'pos' => 'Delhi to Bangalore', 'text' => 'Before shifting, I was honestly worried because my earlier moving experience was terrible. But the team at E Gati Relocation Packers and Movers handled my furniture and cartons very carefully. Everything arrived safely, and the staff stayed polite throughout the day', 'color' => 'bg-blue'],
        ['name' => 'Rohit Mehta', 'pos' => 'Office Relocation', 'text' => 'Our office relocation needed proper coordination because we couldn’t afford work delays. The moving team planned everything in an organised way and completed the shifting smoothly without creating confusion for employees.', 'color' => 'bg-green'],
        ['name' => 'Priya Kapoor', 'pos' => 'Local Shifting', 'text' => 'I had several fragile kitchen items and electronic appliances that needed extra attention during packing. The staff packed everything patiently and handled the transportation properly. The entire experience felt much more professional than I expected.', 'color' => 'bg-teal'],
        ['name' => 'Sandeep Roy', 'pos' => 'Vehicle Transport', 'text' => 'My relocation schedule was very tight, so delivery timing mattered a lot. The transport team coordinated properly and completed the shifting on time. I appreciated how organised the entire process felt.', 'color' => 'bg-blue'],
        ['name' => 'Neha Verma', 'pos' => 'Storage Service', 'text' => 'The best part for me was the communication. I kept receiving updates during loading, transportation, and delivery. That regular coordination removed a lot of stress during the move.', 'color' => 'bg-green']
    ];

    $data['faqs'] = [
        [
            "question" => "Do you provide interstate relocation support?",
            "answer" => "Yes, interstate transportation and relocation services are available across India."
        ],
        [
            "question" => "Are packing materials included?",
            "answer" => "Yes, packing materials are arranged for safer item handling during movement."
        ],
        [
            "question" => "Can office equipment be shifted safely?",
            "answer" => "Yes, office relocation is coordinated carefully with organised handling support."
        ],
        [
            "question" => " Is vehicle transportation available?",
            "answer" => "Yes, bike and car transport services are available for different routes."
        ]
    ];
    ?>
    <?php $this->load->view('testimonial_widget', $data); ?>
    <?php $this->load->view('faq_widget', $data); ?>
</div>