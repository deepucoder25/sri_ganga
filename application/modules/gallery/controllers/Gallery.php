<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Gallery extends MX_Controller {
    

    function photo_gallery()
    {
        $data['title'] = "Our Relocation Gallery | eGati Relocation in Action";
        $data['description'] = "Browse through our photo gallery to see eGati's professional team in action. Check out our high-quality packing materials, specialized vehicle carriers, and systematic loading process.";
        $data['module'] = "gallery";
        $data['view_file'] = "photo-gallery";
        echo Modules::run('template/layout2', $data);
    }
    

}