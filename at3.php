<!DOCTYPE html>

<?php 
    $user1= rand(1,6);
    $user2= rand(1,6);
    $comp1= rand(1,6);
    $comp2= rand(1,6); 
    $somauser= ($user1 + $user2);
    $somacomp= ($comp1 + $comp2); 
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DADOS</title>
</head>
<body>
<?php include "menu.php";?>

<form>
    
    <input type="submit" name="jogar" id="jogar" value= "JOGAR"> <br> 
    <br>

    <p>Usuário: <?php echo "<img src='img/dados/$user1.png' alt=''>";?>
             <?php echo "<img src='img/dados/$user2.png' alt=''>";?>
             <?php echo $somauser;?><br>

    Computador: <?php echo "<img src='img/dados/$comp1.png' alt=''>";?>
                <?php echo "<img src='img/dados/$comp2.png' alt=''>";?>
                <?php echo $somacomp;?><br>
    <br>

    <?php 
        if ($somauser == $somacomp):
            echo "EMPATE!";
        endif;

        if ($somauser > $somacomp):
            echo "VOCÊ VENCEU!";
        endif;
        
        if ($somauser < $somacomp):
            echo "O COMPUTADOR VENCEU!";
        endif;
    ?>
</form>
</body>
</html>