<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="vista.css"/>
        <script src="vista.js"></script>
        <title>Document</title>
    </head>
    <body>
        <?php
            if(isset($_POST['Adopcion'])){
                ?>
                <script> cambiaClase(1); </script>
                <?php
            }else{
                if(isset($_POST['Usuarios'])){
                    ?>
                    <script> cambiaClase(2); </script>
                    <?php
                }else{
                    ?>
                    <script> cambiaClase(0); </script>
                    <?php
                }
            }
        ?>
        <div class='menu'>
            <form action='Index.php'method='post'> 
                <p><input class='active' type='submit' name='Animales' value='Animales'></p>
            </form>
            <form action='Index.php'method='post'>
                <p><input class='cell_menu' type='submit' name='Adopcion' value='Adopcion'></p>
            </form>
            <form action='Index.php'method='post'>
                <p><input class='cell_menu' type='button' name='Usuarios' value='Usuarios'></p>
            </form>
        </div>
    </body>
</html>