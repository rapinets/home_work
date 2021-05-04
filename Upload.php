<?php




class Upload
{
    protected $uploadDir ="upload";


    public function __construct()
    {
        if (isset($_FILES['filename'])) {
            $filename = $_FILES['filename']['name'];

            $tmp_filename = $_FILES['filename']['tmp_name'];
            move_uploaded_file($tmp_filename, "$this->uploadDir/$filename");
        }
    }
}