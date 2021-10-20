<!DOCTYPE html>

<?php
  $title= "PAR OU ÍMPAR";
  $numeroUser= isset($_POST['numUser']) ? $_POST['numUser']:0;
  $numpi= isset($_POST['numpi']) ? $_POST['numpi']: "";
  $numcomp=rand(0,10);
  $soma= ($numeroUser + $numcomp);
  $pori= $_POST['numpi'];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $title;?></title>
</head>
<body>
<?php include "menu.php";?>

<form action="" method="post">
    <h3><?php echo $title; ?></h3> <br>
    <label>Escolha um número:</label> 
    <select name="numUser" id="numUser" value= "numUser">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
    </select><br>

    <input type="radio" name="numpi" id="numpi" value= "PAR"
        <?php if ("numUser"== "PAR") echo "checked";?>> Par
    <input type="radio" name="numpi" id="numpi" value= "IMPAR"
        <?php if ("numUser"=="IMPAR") echo "checked"; ?>> Ímpar <br> <br>

    <input type="submit" name= "jogar" id= "jogar" value= "JOGAR"> 
    <br> 

    <p>Usuário: <?php echo "<img src='img/1_10/$numeroUser.png' alt=''>";?><br>
    Computador: <?php echo "<img src='img/1_10/$numcomp.png' alt=''>";?><br>
    Soma: <?php echo " ". $soma;?> <br> <br>
     
    <?php
        if ((($soma % 2==0) && ($pori== "PAR")) || (($soma % 2 <> 0) && ($pori=="IMPAR"))){
            echo "VOCÊ VENCEU!";
        }
        else { 
            echo "O COMPUTADOR VENCEU!";
        }
    ?>

    </form>
</body>
</html>







    