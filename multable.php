
<html>
  
<body>
        <form method="POST">
            Enter the number: 
            <input type="number" name="number">      
            <input type="Submit" value="CLICK ME">
        </form>
</body> 
</html>
  
<?php
if($_POST) 
{
    $num = $_POST["number"];
  
    echo ("<p>Multiplication Table of $num: </p>");
        for ($i = 1; $i <= 10; $i++) 
        {
        echo ($num. " * " . "$i" . " = " . $num * $i . "</p>");
    }
}
?>