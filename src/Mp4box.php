<?php

namespace Pnrhost\Vidtodash;

class Mp4box
{
    public function __construct($post)
    {
        $this->post = $post;

        $this->file  = $post->getMedia('videos')->first()->getPath();

        $this->convert();
    }

    public function convert()
    {
        echo 'MP4BOX - Dashing....';

        $file_path_parts_array = explode('/', $this->file);
        $file_path_parts_array = array_filter($file_path_parts_array);
        $file = array_pop($file_path_parts_array);

        $path = '/';

        foreach ($file_path_parts_array as $key => $value) {
            $path .= $value .'/';
        }

        $path = rtrim($path, '/');

        $mpd_name = explode('.', $file)[0];

           $cmd = "cd $path && /usr/local/bin/MP4Box -dash 1500 -profile live -out $mpd_name.mpd output_500k.mp4#video:id=video_500k output_500k.mp4#audio:id=audio output_4000k.mp4#video:id=video_4000k output_1000k.mp4#video:id=video_1000k";

           exec($cmd);
    }

    public $file;
    public $post;
}
