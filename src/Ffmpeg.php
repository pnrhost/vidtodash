<?php

namespace Pnrhost\Vidtodash;

class Ffmpeg
{
    public function __construct($file)
    {
        $this->file = $file;

        $this->convert();
    }

    public function convert()
    {
        echo 'FFMPEG - Converting ....';


        $file_path_parts_array = explode('/', $this->file);
        $file_path_parts_array = array_filter($file_path_parts_array);
        $file = array_pop($file_path_parts_array);

        $path = '/';

        foreach ($file_path_parts_array as $key => $value) {
            $path .= $value .'/';
        }

        $path = rtrim($path, '/');

        
        $cmd  = "/home/reza/bin/ffmpeg  -i $this->file -r 25 -g 25   -c:v libx264 -c:a libfdk_aac -b:v 500k $path/output_500k.mp4 -r 25 -g 25   -c:v libx264 -c:a libfdk_aac -b:v 1000k $path/output_1000k.mp4 -r 25 -g 25  -c:v libx264 -c:a libfdk_aac -b:v 4000k $path/output_4000k.mp4 2>&1";


        exec($cmd, $output, $value);
    }

    public $file;
}
