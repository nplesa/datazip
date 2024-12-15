<?php

namespace amadeus64\DataZip;

class DataZip
{
    private $extension;

    public function __construct()
    {
    
    }

    private function checkIfExtensionExist()){
        $extensions = get_loaded_extensions();
        dd($extensions);
        $this->extension = in_array('php-zip', $extensions);

    }

}