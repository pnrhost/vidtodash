<?php

namespace Pnrhost\Vidtodash;

class Ffmpeg
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
