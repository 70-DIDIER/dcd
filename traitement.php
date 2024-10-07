<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>traitement</title>
    <link rel="stylesheet" href="styletrai.css">
</head>
<body>
     <table>
       
        <tbody>
            <?php foreach ($_GET as $key => $value): ?>
                <tr>
                    <td><?php echo $key; ?></td>
                    <td><?php echo $value; ?></td>
                </tr>

            <?php endforeach ?>
               

        </tbody>
    </table> 
   
            <!-- stockage des données dans un fichier text -->
            
</body>
</html>