<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Korpa</title>
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
<?php if(count($korpa)>0):?>
<table border="1">
        <thead>
            <tr>
                <th>Naziv</th>
                <th>Cena</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($korpa as $pr):?>
            <tr>
                <td><?php echo $pr["naziv"];?></td>
                <td><?php echo $pr["cena"];?></td>
             
            </tr>
            <?php endforeach;?>
        
        </tbody>
        <tfoot>
                <tr>
                    <td>Ukupno: </td>
                    <td><?php echo $ukupno;?></td>
                </tr>
        </tfoot>
    </table> 
    <?php 
        else: 
            echo "<p><b>Nema proizvoda u korpi</b></p>";
        endif;
    ?>

    <form action="?" method="post">
        <p>
            <a href="?">Nastavi sa kupovinom</a>
            <br>
            <input type="submit" name="submit" value="Isprazni">
        </p>
    </form>
</body>
</html>