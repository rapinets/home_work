<?php


class Backup
{
    public function __construct()
    {
        if (! file_exists("backup")) {
            mkdir('backup');
        }
    }

}