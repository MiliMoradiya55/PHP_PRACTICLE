
<html>
<head> 
 <title>Prac-4(C)</title>
</head>
<body>
 <?php
 $a1=array
 (
 array(1,4,2),
 array(5,1,2),
 array(3,3,1)
 ); 
 $a2=array
 (
 array(6,2,4),
 array(2,3,5),
 array(3,4,1)
 );
 $result=array
 (
 array(0,0,0),
 array(0,0,0),
 array(0,0,0)
 );
 for($i=0;$i<3;$i++)
 {
 for($j=0;$j<3;$j++)
 {
 for($k=0;$k<3;$k++)
 {
 $result[$i][$j]+=$a1[$i][$k] * $a2[$k][$j];
 }
 }
 }
 echo "Result of Multipilication : <br><br>";
 for($i=0;$i<3;$i++)
 {
 for($j=0;$j<3;$j++)
 {
 echo $result[$i][$j]." </t> ";
 }
 echo"<br/>";
 } 
 ?>
</body>
</html>