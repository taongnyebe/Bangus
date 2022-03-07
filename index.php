<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="">
        <h1>Hello world</h1>
    </div>
    <?php
        $num=10;
        for ($i=0; $i < $num; $i++) { 
            ?>
            <div class="">
                <h2><?php echo $i ?> </h2>
            </div>
            <?php      
        }
    ?>
    <br>
    <?php
        $num=60;
        for ($i=0; $i < $num; $i+=10) {
            ?>
            <div class="">
                <h1><?php echo $i ?> Pong </h1>
            </div>  
            <?php
            
        }
        
    ?>
        
    <?php
        $input =10;
        
        if ($input > 5) {
            ?>
            <div class="">
                <h1>10,20,30,40,50</h1>
            </div>
            <?php
        }
        else 
            if ($input > 5) {
            ?>
         <div class="">
                <h1>ODD</h1>
            </div>
            <?php
        }
        else
        {
            ?>
        <div class="">
                <h1>EVEN</h1>
        </div>
            <?php
        }
    ?>

</body>
</html>