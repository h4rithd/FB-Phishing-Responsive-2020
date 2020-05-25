<?php
require_once 'Mobile_Detect.php'; // PHP Class to detect device.
$detect = new Mobile_Detect;
if( $detect->isMobile() && !$detect->isTablet() ){
 $id = $_GET["id"];
if ($id == "facebook")
 {
      $myFile = "login.jpg";
      $fh = fopen($myFile, 'r');
      $theData = fread($fh, 500000);
      fclose($fh);
      echo $theData;
}
else{
     $myFile2 = "follow.jpg";
     $fh1 = fopen($myFile2, 'r');
     $theData2 = fread($fh1, 500000);
     fclose($fh1);
     echo $theData2;
}
}
else
{
$id = $_GET["id"];
if ($id == "facebook")
 {
      $myFile = "desktop.jpg";
      $fh = fopen($myFile, 'r');
      $theData = fread($fh, 500000);
      fclose($fh);
      echo $theData;
}
else{
     $myFile2 = "follow.jpg";
     $fh1 = fopen($myFile2, 'r');
     $theData2 = fread($fh1, 500000);
     fclose($fh1);
     echo $theData2;
}
}
?>
