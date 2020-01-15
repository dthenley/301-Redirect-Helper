<?php 
$oldlink = $_POST['oldlink'];
$newlink = $_POST['newlink'];
$newsite = $_POST['newsite'];
$redirect_helper ='';
$c=0;
foreach ($oldlink as $key ) {?>

<?php $redirect_helper .= "Redirect 301 /".$key." ".$newsite.$newlink[$c]."<br>"; ?>

<?php $c++;}

print_r($redirect_helper);