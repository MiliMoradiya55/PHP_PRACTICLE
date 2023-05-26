<?php
if($_POST)
{
    $num=$_POST['num'];
    $reverse=strrev($num);
    if($num==$reverse)
    {
        echo $num."is palindrom";
    }
    else
    {
        echo $num."is not palindrom";
    }
}
?>