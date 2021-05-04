<?php


class AddFilesToBackup
{
    private $uploadDir = "upload";
    private $backupDir = "backup";

    public function addFilesToBackup()
    {
        $files = scandir("$this->uploadDir");
        foreach ($files as $file) {
            $f = filectime("$this->uploadDir/$file");
            if ($file != '.' && $file != '..' && (60 * 60 * 24 * 3) <= time() - $f) {
                rename("$this->uploadDir/$file", "$this->backupDir/$file");
            }
        }
    }

}