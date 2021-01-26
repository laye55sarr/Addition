<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:#000;color:#fff;">
    
<?php
    // if($_GET["page"] == "tables"){
        $requestPayload = file_get_contents("php://input");
        $commandes = json_decode($requestPayload, true);

        $com = array(
            // 'prenom' => 'Abdoulaye',
            // 'nom' => 'Sarr',
            // 'age' => 20,
            // 'ecoles' => ["Soprim", "LPOB", "LSIRL", "UVS"]
            'c1' => [26, 1],
            'c2' => [15, 4]
            );

        foreach ($commandes as $nom => $qqt) {
            echo 'Commande '.$nom.' : '.$qqt[1].' produits d\'ID '.$qqt[0].'<br>';
        }
    // }

?>
</body>
</html>