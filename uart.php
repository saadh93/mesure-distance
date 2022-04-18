<!DOCTYPE html>
<html>
    <?php
$page = $_SERVER['PHP_SELF'];
$sec = "5";
?>
    <head>
   <!--<meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">--> 
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    <body>
        
        <h1>Dernier distance calculer </h1>
        <?php    
            $conn = new PDO("mysql:host=localhost;dbname=donne","root","");
            $res = fopen('C:\wamp64\www\uart\data.txt', 'rb');   
            /*Tant que la fin du fichier n'est pas atteninte, c'est-à-dire
             *tant que feof() renvoie FALSE (= tant que !feof() renvoie TRUE)
             on echo une nouvelle ligne du fichier*/
            while(!feof($res)):
                $ligne = fgets($res);
                  ?>
                <h1><?php echo $ligne?></h1>
                 <?php    
                 $today = date("Y-m-d H:i:s");
                 echo $today;
                 /*$conn = $PDO->query("INSERT INTO data VALUES ('".$ligne."', '".$today."') ");*/	
                 $query = "insert into donner_capter values( '".$today."','".$ligne."')";
                 $conn->exec($query);
            
        endwhile;
        ?>
        
        
     
         
         
         
         
         
         
         
    </body>
</html>

        
        
     
         
         
         
         
         
         
         

