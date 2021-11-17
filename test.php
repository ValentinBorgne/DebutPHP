<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>PHP</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php echo "coucou"; 
        $Nombre = rand(0,100) ;
    ?>
    
        <?php    
        echo $Nombre;
        if($Nombre%2 == 1){
            
                echo '<div class ="red">je suis impair';
            '</div>';
            
        }
        else{
            echo '<div class ="blue">je suis pair';
            '</div>';

        }
        ?>
   
    
    

</body>
</html>
