<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
</head>
<body>
    <?php
        include('db_connection.php');
        $Login = $_POST['Login'];
        $Haslo = $_POST['Haslo'];

        //to prevent from mysqli injection
        $Login = stripcslashes($Login);
        $Haslo = stripcslashes($Halo);
        $Login = mysqli_real_escape_string($db, $Login);
        $Haslo = mysqli_real_escape_string($db, $Haslo);

        $sql = "SELECT * FROM Użytkownicy where Login = "
    ?>
</body>
</html>