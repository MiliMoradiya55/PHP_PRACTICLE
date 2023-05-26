<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <form method="POST">
    <h1>Diffrent Types Of Math Function</h1>
   <label>Enter the number</label>
    <input type="number" id="text" value=""><br><br><br>
    <input type="button" name="convert Binary" value="convert Binary">
    <input type="button" name="convert Octal" value="convert Octal">
    <input type="button" name="convert Hexadecimal" value="convert Hexadecimal">
    <input type="button" name="convert Sin" value="convert Sin">
    <input type="button" name="convert Cos" value="convert Cos">
    <input type="button" name="convert Tan" value="convert Tan">
    <?php
    if(isset ($_POST['number']))
     {
         $number=$_POST['number'];
         $number=sin($number);
         echo "the sin value is".$number;
     }
     ?>
     </form>
     </body>
     </html>



     