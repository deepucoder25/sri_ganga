<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Services extends MX_Controller
{
    function index()
    {
        $data['title'] = "Professional Packing & Moving Services | eGati Relocation";
        $data['description'] = "Explore our wide range of professional packing and moving services across India, including home shifting, office relocation, car transport, and warehousing.";
        $data['module'] = "services";
        $data['view_file'] = "service";
        echo Modules::run('template/layout2', $data);
    }

    function homeShifting()
    {
        $data['title'] = "Best Home Shifting & House Relocation Services | eGati";
        $data['description'] = "Get reliable, safe, and stress-free home shifting and house relocation services across India. Premium packing materials and skilled loaders ensure complete safety.";
        $data['module'] = "services";
        $data['view_file'] = "home";
        echo Modules::run('template/layout2', $data);
    }

    function officeShifting()
    {
        $data['title'] = "Corporate Office Shifting & Relocation Services | eGati";
        $data['description'] = "Professional corporate office shifting and IT relocation services with zero business downtime, systematic packing, and seamless setup.";
        $data['module'] = "services";
        $data['view_file'] = "office";
        echo Modules::run('template/layout2', $data);
    }

    function carTransportation()
    {
        $data['title'] = "Safe Car Transportation & Vehicle Carrier Services | eGati";
        $data['description'] = "Looking for secure car carrier services? eGati offers door-to-door, damage-free car transportation across India in specialized enclosed trailers.";
        $data['module'] = "services";
        $data['view_file'] = "car";
        echo Modules::run('template/layout2', $data);
    }

    function bikeTransportation()
    {
        $data['title'] = "Secure Bike Transportation & Carrier Services | eGati";
        $data['description'] = "Get reliable door-to-door bike transportation and two-wheeler relocation services in India. Scratch-free transport with professional multi-layer packing.";
        $data['module'] = "services";
        $data['view_file'] = "bike";
        echo Modules::run('template/layout2', $data);
    }

    function packingUnpacking()
    {
        $data['title'] = "Premium Packing & Unpacking Services | Damage-Free | eGati";
        $data['description'] = "High-quality multi-layer packing services using bubble wrap, foam, and sturdy cartons. Professional unpacking and systematic arranging assistance.";
        $data['module'] = "services";
        $data['view_file'] = "packing";
        echo Modules::run('template/layout2', $data);
    }

    function loadingUnloading()
    {
        $data['title'] = "Safe Loading & Unloading Services | Expert Movers - eGati";
        $data['description'] = "Expert loading and unloading services for secure shifting. Our trained team uses specialized equipment to safely handle heavy, fragile, and valuable goods.";
        $data['module'] = "services";
        $data['view_file'] = "loading";
        echo Modules::run('template/layout2', $data);
    }

    function storageSolutions()
    {
        $data['title'] = "Secure Storage & Warehousing Solutions | Household Storage - eGati";
        $data['description'] = "Safe and fully secure household goods storage and commercial warehousing solutions. Short and long-term storage facilities with 24/7 security surveillance.";
        $data['module'] = "services";
        $data['view_file'] = "storage_solutions";
        echo Modules::run('template/layout2', $data);
    }
}