<?php




class DeleteTxt
{
    private $uploadDir = 'upload';


    public function __construct()
    {
        $files = scandir($this->uploadDir);

        foreach ($files as $file) {
            if ($file != '.' && $file != '..' && fnmatch('*\.txt', $file)) {
                $str = file_get_contents("$this->uploadDir/$file");
                $find = "тест";
                $pos = stripos($str, $find);
                if ($pos !== false) {
                    unlink("$this->uploadDir/$file");
                }
            }
        }
    }




}