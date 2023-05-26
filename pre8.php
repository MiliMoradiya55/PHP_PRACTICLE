<?php
session_start();
?>
<html>
<head>
    <title>session</title>
</head>
<body>
    <form method="POST">
        <label>enter the name</label>
        <input type="text" name="name"><br><br>
        <label>enter the rollno</label>
        <input type="number" name="rollno"><br><br>
        <input type="submit" name="submit" value="submit">
    </form>
<?php
  if(isset($_POST['name'],$_POST['rollno']))
  {
    $name=$_POST['name'];
    $rollno=$_POST['rollno'];
    echo "my name is:".$name."<br>";
    echo "my rollno is:".$rollno."<br>";
  }
  session_destroy();
?>
</body>
</html>