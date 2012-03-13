<?
include("mobile/Mobile_Detect.php");

    $detect = new Mobile_Detect();

    if ($detect->isMobile())
        header("Location:mobile/index.php");
    else
        header("Location:fr/index.php"); 

?>