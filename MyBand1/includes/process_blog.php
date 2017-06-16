<?php
require '../includes/config.php';

$wachtwoord = $_POST['wachtwoord'];

if(isset($_POST['submitblog'])) {
    $dbc = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or die('Error conneting to MYSQL server');

    $auteur = mysqli_real_escape_string($dbc, trim($_POST['auteur']));
    $titel = mysqli_real_escape_string($dbc, trim($_POST['titel']));
    $tekst = mysqli_real_escape_string($dbc, trim($_POST['tekst']));
    $temp = $_FILES['image']['tmp_name'];
    $target = 'images/' . $_FILES['image']['name'];


    if ($wachtwoord == 'veilig') {
        if (move_uploaded_file($temp, $target)) {

            $query = "INSERT INTO proj_myband_blog VALUES (0, NOW(), 0, '$auteur', '$image', '$titel', '$tekst')";
            $result = mysqli_query($dbc, $query) or die ('Error querying');
        }else{
            echo '<br>Mislukt!<br>';
        }
    }
    mysqli_close($dbc);
}