<?php

namespace amadeus64\datazip;

class datazip
{
    private $extension;

    public function __construct()
    {
        $this->checkIfExtensionExist();
    }

    private function checkIfExtensionExist()){
        $extensions = get_loaded_extensions();
        dd($extensions);
        $this->extension = in_array('php-zip', $extensions);

    }

}