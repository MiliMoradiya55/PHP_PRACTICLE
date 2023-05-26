<html>
        <body>
            <form method="POST">
                <label for="term">Enter the number</label>
                <input type="number" id="term" name="term">
                <button type="submit">Genrate:</button> 
            </form>

        

        <?php
           if(isset ($_POST['term']))
            {
                $term=$_POST['term'];
                $a=0;
                $b=1;
                echo "<p>THE FIBONACCI SERISE UP TO NUMBER</p>";
                echo "<ul>";
                echo "</li> $a</li>";
                echo "</li> $b</li>";
                for($i=3;$i<=$term;$i++)
                {
                    $sum=$a+$b;
                    echo "<li> $sum </li>";
                    $a=$b;
                    $b=$sum;
                }
                echo "</ul>";
            }

        ?>    
        </body>
</html>