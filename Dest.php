<?php


class Dest
{
    public function __construct()
    {

        if (file_exists("upload/source.txt")){
            $file = file("upload/source.txt");
            $reversed = array_reverse($file);

            if (file_exists('upload/dest.txt')) {
                file_put_contents('upload/dest.txt', $reversed);
            }
        }

    }

}