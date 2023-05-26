<?php
    if($_SERVER['REQUEST_METHOD'] === "POST")
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $age=$_POST['age'];
        $Address=$_POST['Address'];
        $D_O_B=$_POST['D_O_B'];
        $hobby=$_POST['hobbies'];
        
        echo "<p>Name is: $name</p>";
        echo "<p>Email is: $email</p>";
        echo "<p>Age is: $age</p>";
        echo "<p>Address is: $Address</p>";
        echo "<p>D_O_B is: $D_O_B</p>";
        echo "<p>Hobbies is: " . implode(",",$hobby)."</p>";
    }
    else
    {
        echo '<h2> User Information form: <br>';
        echo '<form method="POST"><br>';
        echo '<label for="">Name:</label>';
        echo '<input type="text" name="name"><br>';
        echo '<label for="">Email:</label>';
        echo '<input type="email" name="email"><br>';
        echo '<label for="">Age:</label>';
        echo '<input type="number" name="age"><br>';
        echo '<label for="">Address:</label>';
        echo '<input type="text" name="Address"><br>';
        echo '<label for="">D_O_B:</label>';
        echo '<input type="date" name="D_O_B"><br>';
        echo '<label for="">Hbbies:</label><br>';
        echo '<input type="checkbox" name="hobbies[]" value="Reading"> ';
        echo '<label for="">Reading</label><br>';
        echo '<input type="checkbox" name="hobbies[]" value="writing">';
        echo '<label for="">writing</label><br>';
        echo '<input type="checkbox" name="hobbies[]" value="Travelling">';
        echo '<label for="">Travelling</label><br>';
        echo '<input type="checkbox" name="hobbies[]" value="music">';
        echo '<label for="">music</label><br>';
        echo '<input type="submit" value="submit"><br>';
        echo '</form><br>';
    
    }

?>