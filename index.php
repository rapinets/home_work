<?php

require 'Upload.php';
require 'Backup.php';
require 'AddFilesToBackup.php';
require 'DeleteTxt.php';
require 'Dest.php';
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <input type="hidden" name="MAX_FILE_SIZE" value="10000000" >
    Завантажити файл: <br><br>
    <input name="filename" type="file" ><br><br>
    <input type="submit" value="Завантажити" ><br><br>
</form>

<?php
$upload = new Upload();
$backupDir = new Backup();
$addFilesToBackup = new AddFilesToBackup();
$addFilesToBackup->addFilesToBackup();
$dest = new Dest();
?>

</body>
</html>
