<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Services extends MX_Controller
{
    function index()
    {
        $data['title'] = "Our Services | eGati Relocation";
        $data['description'] = "Explore our wide range of professional packing and moving services across India.";
        $data['module'] = "services";
        $data['view_file'] = "service";

        echo Modules::run('template/layout2', $data);
    }

    function homeShifting()
    {
        $data['title'] = "Home Shifting Services | eGati Relocation";
        $data['description'] = "Reliable and safe home shifting services across India.";
        $data['module'] = "services";
        $data['view_file'] = "home";
        echo Modules::run('template/layout2', $data);
    }

    function officeShifting()
    {
        $data['title'] = "Office Shifting Services | eGati Relocation";
        $data['description'] = "Professional office relocation services with zero downtime.";
        $data['module'] = "services";
        $data['view_file'] = "office";
        echo Modules::run('template/layout2', $data);
    }

    function carTransportation()
    {
        $data['title'] = "Car Transportation Services | eGati Relocation";
        $data['description'] = "Safe and secure car carrier services in India.";
        $data['module'] = "services";
        $data['view_file'] = "car";
        echo Modules::run('template/layout2', $data);
    }

    function bikeTransportation()
    {
        $data['title'] = "Bike Transportation Services | eGati Relocation";
        $data['description'] = "Door-to-door bike relocation services with specialized carriers.";
        $data['module'] = "services";
        $data['view_file'] = "bike";
        echo Modules::run('template/layout2', $data);
    }

    function packingUnpacking()
    {
        $data['title'] = "Packing & Unpacking Services | eGati Relocation";
        $data['description'] = "High-quality packing materials and professional unpacking assistance.";
        $data['module'] = "services";
        $data['view_file'] = "packing";
        echo Modules::run('template/layout2', $data);
    }

    function loadingUnloading()
    {
        $data['title'] = "Loading & Unloading Services | eGati Relocation";
        $data['description'] = "Expert handling of your goods during loading and unloading.";
        $data['module'] = "services";
        $data['view_file'] = "loading";
        echo Modules::run('template/layout2', $data);
    }

    function storageSolutions()
    {
        $data['title'] = "Storage & Warehousing Solutions | eGati Relocation";
        $data['description'] = "Safe and secure household storage and warehousing services.";
        $data['module'] = "services";
        $data['view_file'] = "storage_solutions";
        echo Modules::run('template/layout2', $data);
    }
}