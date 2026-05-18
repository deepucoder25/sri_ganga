<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
class Home extends MX_Controller
{
    function error()
    {
        $this->oldurl_to_newurl();
        $data['title'] = "Page Not Found | eGati Relocation";
        $data['description'] = "The page you are looking for does not exist. Browse our professional packers and movers services to assist with your relocation.";
        $data['module'] = "home";
        $data['view_file'] = "error";
        echo Modules::run('template/layout2', $data);
    }
    function index()
    {
        $data['title'] = "eGati Relocation | Top Packers and Movers in India";
        $data['description'] = "eGati Relocation is India's leading packing and moving company. We offer reliable, secure, and affordable home shifting, office relocation, and vehicle transport services across India.";
        $data['module'] = "home";
        $data['view_file'] = "home";
        echo Modules::run('template/layout1', $data);
    }
    public function oldurl_to_newurl()
    {
        // if (@$this->uri->segment(1) == "packers-movers-bihar-india") {
        //     redirect("bihar", 'location', 301);
        // }
    }
}
