<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>

</head>
<body>
    <?php echo "coucou"; 
        $Nombre = rand(0,100) ;
    ?>
    
        <?php    
        echo $Nombre;
        if($Nombre%2 == 1){?>
                <div class="red"><?php
                echo "je suis impaire"?>
                </div>
        <?php    
        } 
            else{
                ?><div class ="blue"><?php
                echo "je suis paire"?>
                </div>
            <?php
            } 
            ?>

    

   
    
    

</body>
</html>
