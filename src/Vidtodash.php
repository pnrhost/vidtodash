<?php

namespace Pnrhost\Vidtodash;

class Vidtodash
{
    public function __construct($post = null)
    {

        $this->file = $post->getMedia('videos')->first()->getPath();

        $formated_vid = new Ffmpeg($this->file);

        $dash = new Mp4box($post);
    }

    

    public $file;
}
