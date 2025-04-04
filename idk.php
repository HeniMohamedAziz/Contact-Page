<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aziz Heni</title>
    <script src="scriipt.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <br>
    <div>
        <p id="waring">** Demons are ALWAYS awake **</p>
    </div>
    <div id="ba3"><img src="zbaybi.png"></div><br><br>
    <form id="form1" action="" method="post">
        <input name="namedata" placeholder="             Esmek kenk bkrarzek" type="text" id="name" ><br><br>
        <textarea name="secrets" placeholder="        **Feel Free ya Hobbi**" rows="8" id="wabna" ></textarea><br><br><br>
        <input type="submit" value="Ab3eth" id="btn">
      </form>
    <p></p>
    <br><br><br><br> 
    
<footer>
    <p id="bitch">JUST A LITTLE REMINDER THAT *AZIZ* IS THE BEST HUMAN BEING EVER BUT HE IS ALSO A REAL DANGER TO THOSE WHO HATE HIM<br> <br>
    </p>
</footer>  
</body>
</html>


<?php
              
if(isset($_POST['namedata']))
{
$name=$_POST['namedata'];
$ch='his name: '.$name
$ff = fopen('data.txt', 'a');
fwrite($ff, $ch.'\n');
fclose($ff);
}
if(isset($_POST['secrets']))
{
$feel=$_POST['secrets'];
$ch1='his msg: '.$feel
$ff = fopen('data.txt', 'a');
fwrite($ff, $ch1.'\n');
fclose($ff);
}
$ff = fopen('data.txt', 'a');
fwrite($ff, '______________________new one________________\n');
fclose($ff);
?>






























