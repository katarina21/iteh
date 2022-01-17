<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog</title>
    <style>
        table{
            border-collapse:collapse;
        }
        td,th{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <p>Vasa korpa sadrzi: <?php echo count($_SESSION["korpa"]);?> proizvoda</p>
    <a href="?vidi_korpu">Vidi korpu</a>
    
    <table border="1">
        <thead>
            <tr>
                <th>Naziv</th>
                <th>Cena</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($proizvodi as $pr):?>
            <tr>
                <td><?php echo $pr["naziv"];?></td>
                <td><?php echo $pr["cena"];?></td>
                <td>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?php echo $pr["id"];?>">
                        <input type="submit" name="submit" value="Kupi">
                    </form>
                </td>
             
            </tr>
            <?php endforeach;?>
        
        </tbody>
    </table> 
     <!-- <?php 
    //pitam da li je neka pr def tj dal je razl od null
    //konkretno ovde da li je def id
        if(isset($_POST["id"])){
            echo "Poslat je POST zahtev";
            echo "Poslat je id:".$_POST["id"];
        }
         if(isset($_GET["id"])){
            echo "Poslat je GET zahtev";
            echo "Poslat je id:".$_GET["id"]; 
         }
    ?> 
     -->

</body>
</html>