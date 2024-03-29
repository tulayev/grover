<?php
// For cpanel, delete storage folder in public folder before running this script.
$targetFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage/app/public';
$linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/public/storage';
symlink($targetFolder, $linkFolder);
echo 'Symlink process successfully completed';
