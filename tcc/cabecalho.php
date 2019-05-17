<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>denuncias araquari</title>

    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="js/slicknav.min.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">


</head>

<body>
   <?php 

    if ( (!isset ($_SESSION['nome'])) and (!isset ($_SESSION['senha'])) )
    {
    ?>      
        
        <nav class="menu-navigation-dark">
            <a href="oqd.php"><i class=""></i><span>O que denuciar?</span></a>
            <a href="denuncia.php"><i class=""></i><span>Denuncie</span></a>
            <a href="contato.php" class=""><i class=""></i><span>Fale conosco</span></a>
            <a href="login.php"><i class=""></i><span>Login</span></a>
            <a href="sobre.php"><i class=""></i><span>Sobre</span></a>
            <a href="qvad.php"><i class=""></i><span>quem vê a denuncia?</span></a>
            <a href="verdenuncia.php"><i class=""></i><span>ver denuncias</span></a>
    
        </nav>
    <?php }
    else { 
    ?>
        <nav class="menu-navigation-dark">
            <a href="oqd.php"><i class=""></i><span>O que denuciar?</span></a>
            <a href="denuncia.php"><i class=""></i><span>Denuncie</span></a>
            <a href="contato.php" class=""><i class=""></i><span>Fale conosco</span></a>
            <a href="login.php"><i class=""></i><span>Login</span></a>
            <a href="sobre.php"><i class=""></i><span>Sobre</span></a>
            <a href="qvad.php"><i class=""></i><span>quem vê a denuncia?</span></a>
        </nav>
    <?php } ?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="js/jquery.slicknav.min.js"></script>

<script>

    $(function(){

        var menu = $('.menu-navigation-dark');

        menu.slicknav();

        // Mark the clicked item as selected

        menu.on('click', 'a', function(){
            var a = $(this);

            a.siblings().removeClass('selected');
            a.addClass('selected');
        });
    });

</script>

</body>

</html>
