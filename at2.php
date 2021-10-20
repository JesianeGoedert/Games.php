<!DOCTYPE html>

<?php 
    $titulo="JOKENPO";
    $escolha= isset($_POST ['opcaojogador']) ? $_POST['opcaojogador']:"";
    $comp= rand(1,3);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo;?></title>
</head>
<body>
<?php include "menu.php";?>
     <form action="" method="post">
        <h3><?php echo $titulo; ?></h3>
        <label>Escolha uma opção: </label><br>
        <input type="radio" name="opcaojogador" id="opcaojogador" value="1"> 
            <?php if ($escolha=="Pedra") echo "checked"; ?> 1- Pedra
        <input type="radio" name="opcaojogador" id="opcaojogador" value="2"> 
            <?php if ($escolha=="Papel") echo "checked"; ?> 2 - Papel
        <input type="radio" name="opcaojogador" id="opcaojogador" value="3"> 
            <?php if ($escolha=="Tesoura") echo "checked"; ?> 3 - Tesoura<br>
        <br>
        
        <input type="submit" name="jogar" id="jogar" value="JOGAR"> <br> 

    <p>Usuário: <?php echo "<img src='img/ppt/$escolha.png' width='180' alt=''>";?><br>
        Computador: <?php echo "<img src='img/ppt/$comp.png' width='180' alt=''>";?><br>
    <br>
        <?php 
            if ($escolha==$comp):
                echo "EMPATE!";
            endif;
            if (($escolha==1) and ($comp==2)):
                echo "O COMPUTADOR VENCEU!";
            endif;
            if (($escolha==2) and ($comp==1)):
                echo "VOCÊ VENCEU!";
            endif;
            if (($escolha==1) and ($comp==3)):
                echo "VOCÊ VENCEU!";
            endif;
            if (($escolha==3) and ($comp==1)):
                echo "O COMPUTADOR VENCEU!";
            endif;
            if (($escolha==3) and ($comp==2)):
                echo "VOCÊ VENCEU!";
            endif;
            if (($escolha==2) and ($comp==3)):
                echo "O COMPUTADOR VENCEU!";
            endif;     
        ?>
    </form>        
    
</body>
</html>