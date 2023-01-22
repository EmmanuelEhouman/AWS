<?php
$host = "localhost";
$port = 3306;
$user = "root";
$passwd = "";
$dbname = "enregistrement";

$conn = mysqli_connect("localhost","root","","enregistrement");
$req = "SELECT * FROM participant";
$res = mysqli_query( $conn, $req);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des participants</title>
    <link rel="stylesheet" href="CSS1.css">
</head>
<body>
<p>Vous pouvez <a href="Formulaire.html" title="Cliquez pour retourner au formulaire">cliquer pour retourner au formulaire pour enregistrer</a></p>
    <table border="2" align="center" cellpadding="25px" width="50%" style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;" >
        <th colspan="5" bgcolor="darkred"> <h1> <b>Liste des participants</b> </h1> </th>
    <tr align="center" >
    <td> <b>N°</b> </td><td> <b>Nom</b> </td><td><b>Prenom</b></td><td><b>Contact</b></td><td><b>Adresse</b></td>
    </tr>
    <?php
    while ($ET = mysqli_fetch_assoc($res)) { ?>
        <tr align="left">
        <td align="center"><?php echo ($ET["numero"]) ?></td><td><?php echo ($ET["nom"]) ?></td><td><?php echo ($ET["prenom"]) ?></td><td><?php echo ($ET["contact"]) ?></td><td><?php echo ($ET["adresse"]) ?></td>
    </tr> 
    
    <?php }?>
    </table>
    
    </form>
</body>
</html>