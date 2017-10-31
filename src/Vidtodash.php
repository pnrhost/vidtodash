<?php

namespace Pnrhost\Vidtodash;

use App\Post;

class Vidtodash
{
    public function __construct()
    {
        $post = Post::last();

        $this->file = $post->getMedia('videos')->first()->getPath();

        $formated_vid = new Ffmpeg($this->file);

        $dash = new Mp4box($post);
    }

    

    public $file;
}
