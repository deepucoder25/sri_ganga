<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class About extends MX_Controller
{

    function index()
    {
        $data['title'] = "About Us | eGati Relocation - Trusted Shifting Experts";
        $data['description'] = "Learn more about eGati Relocation, India's most trusted packers and movers. Read about our journey, mission, values, and why we are the preferred choice for relocation services.";
        $data['module'] = "about";
        $data['view_file'] = "about";
        echo Modules::run('template/layout2', $data);
    }

    function choose()
    {
        $data['title'] = "Why Choose Us | eGati Relocation - Safe & Reliable Shifting";
        $data['description'] = "Discover what makes eGati Relocation stand out. From our experienced team to 100% safety guarantee, find out why customers trust us with their shifting needs.";
        $data['module'] = "about";
        $data['view_file'] = "choose";
        echo Modules::run('template/layout2', $data);
    }
    
    function testimonials()
    {
        $data['title'] = "Testimonials & Customer Stories | eGati Relocation";
        $data['description'] = "Read genuine reviews, testimonials, and success stories from our happy customers who experienced stress-free relocation with eGati.";
        $data['module'] = "about";
        $data['view_file'] = "testimonials";
        echo Modules::run('template/layout2', $data);
    }
}
