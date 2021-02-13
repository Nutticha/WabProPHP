<?php
echo getcwd().'<br>';
$dir = 'C:\xampp\htdocs\WabProPHP ';
$files = scandir($dir);
foreach($files as $value){
echo $value."<br>";
}
echo getcwd().'<br>';
chdir('..\..\\');
echo getcwd().'<br>';
chdir("htdocs\WabProPHP");
echo getcwd().'<br>';
?>