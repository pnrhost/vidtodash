<?php

namespace Pnrhost\Vidtodash;

class Vidtodash
{
    public function __construct($file)
    {
        $this->file = $file;

        $formated_vid = Ffmpeg($this->file);

        return $dash = Mp4dash($formated_vid);
    }

    

    public $file;
}
