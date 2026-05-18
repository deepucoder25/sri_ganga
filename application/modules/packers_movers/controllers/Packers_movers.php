<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Packers_movers extends MX_Controller
{

    function index()
    {
        $data['title'] = "Top Packers and Movers in India | eGati Relocation";
        $data['description'] = "eGati Relocation is India's leading packers and movers company, offering reliable home shifting, corporate office relocation, car transport, and warehousing solutions.";
        $data['module'] = "packers_movers";
        $data['view_file'] = "states";
        echo Modules::run('template/layout2', $data);
    }
    function state()
    {
        $data['title'] = "Top Packers and Movers in India | eGati Relocation";
        $data['description'] = "eGati Relocation is India's leading packers and movers company, offering reliable home shifting, corporate office relocation, car transport, and warehousing solutions.";
        $data['module'] = "packers_movers";
        $data['view_file'] = "states";
        echo Modules::run('template/layout2', $data);
    }
    function state_services($state)
    {
        $this->load->module('home');
        $this->home->oldurl_to_newurl();
        $this->load->helper('text');
        $state = str_replace("_", " ", ucwords($state));
        $data = array(
            "state" => $state,
            "title" => "Professional Packers and Movers in $state | eGati Relocation",
            "description" => "Find the best and most reliable packers and movers in $state. eGati Relocation offers professional home shifting, office relocation, and car transport services.",
            "keywords" => "$state packers and movers, movers near me $state, home shifting $state",
            "module" => "packers_movers",
            "view_file" => "city_list",
        );
        echo Modules::run('template/layout2', $data);
    }
    function get_title($city, $state)
    { 
        $seo = array(
            // "Siliguri" => array(
            //     "title" => "",
            //     "desc" => ""
            // ),
        );
        foreach ($seo as $k => $s) {
            if ($k == $city) {
                return $s;
            }
        }
        //edit by Arshad 15-11-2024
        return array(
            'title' => "",
            "desc" => ""
        );
    }
    function city($state = 'Bihar', $city = 'Patna')
    {
        $this->load->helper('text');
        $state = str_replace("_", " ", $state);
        $state = ucwords(str_replace("-", " ", $state));
        $city = str_replace("_", " ", $city);
        $city = urldecode(ucwords(str_replace("-", " ", $city)));
        $seo = $this->get_title($city, $state);
        if (empty($seo['title'])) {
            $seo['title'] = "Best Packers and Movers in $city | Safe Shifting - eGati";
        }
        if (empty($seo['desc'])) {
            $seo['desc'] = "Looking for professional packers and movers in $city? eGati Relocation offers safe, secure, and affordable home shifting, office shifting, and vehicle transport services in $city. Get a free quote today!";
        }
        $statelink=strtolower($state);
        $data = array(
            "city" => $city,
            "state" => $state,
            'img' => base_url('assets') . "/images/state/google/$statelink.png",
            "title" => $seo['title'],
            "description" => $seo['desc'],
            "keywords" => "movers and packers in $city, Movers Packers $city, Movers near me $city, Packers and movers in $city, Moving companies near me $city, Movers $city, Packers and movers near me $city",
            "Removal companies in $city, Moving services in $city, Cheap movers in $city, Local movers in $city, Local moving companies in $city",
            "$city best moving companies, House movers $city, Packers movers $city, Moving services near $city, House removals $city, Cheap moving companies in $city",
            "Professional movers in $city, House movers near $city, Cheap movers $city, Best packers and movers in $city, Affordable movers $city, International movers from $city, International moving companies in $city",
            "module" => "packers_movers",
            "view_file" => "view_service",
        );
        echo Modules::run('template/layout2', $data);
    }
   
}
