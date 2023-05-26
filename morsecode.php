<html>
<head>
<title>Morse Code Encoder</title>
</head>
<body>
<h1>Morse Code Encoder</h1>
<form method="post" action="">
<label for="message">Enter Your Message:</label>
<input type="text" name="message" id="message">
<input type="submit" name="submit" value="Encode">
</form>
<?php
$morse_code = array(
'A' => '.-', 
'B' => '-...', 
'C' => '-.-.', 
'D' => '-..', 
'E' => '.', 
'F' => '..-.', 
'G' => '--.', 
'H' => '....',
'I' => '..',
'J' => '.---',
'K' => '-.-',
'L' => '.-..',
'M' => '--', 
'N' => '-.', 
'O' => '---', 
'P' => '.--.', 
'Q' => '--.-', 
'R' => '.-.', 
'S' => '...', 
'T' => '-',
'U' => '..-', 
'V' => '...-', 
'W' => '.--', 
'X' => '-..-', 
'Y' => '-.--', 
'Z' => '--..', 
'0' => '-----', 
'1' => '.----', 
'2' => '..---',
'3' => '...--', 
'4' => '....-', 
'5' => '.....', 
'6' => '-....', 
'7' => '--...', 
'8' => '---..', 
'9' => '----.'
);
if(isset($_POST['submit']))
 {
$message = strtoupper($_POST['message']);
$encoded_message = '';
for($i = 0; $i < strlen($message); $i++)
{
if($message[$i] == ' ')
{
$encoded_message .= '/';
}else
{
$encoded_message .= $morse_code[$message[$i]] . ' '; 
}
}
echo '<p>Encoded Message: ' . $encoded_message . '</p>';
}
?>
</body>
</html>
