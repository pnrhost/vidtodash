<?php

namespace Pnrhost\Vidtodash;

class Convert
{
    public function __construct($file)
    {
        $this->file = $file;
    }

    public function convert()
    {
        // die($this->file);
    }

    public $file;
}
