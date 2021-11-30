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

        $sql = "SELECT * FROM Użytkownicy where Login = '$Login' and Haslo = '$Haslo'";
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if($count == 1){
            echo "<h1><center> Udane logowanie </center></h1>";
        }
        else{
            echo "<h1>Błędny login lub haslo.</h1>";
        }
    ?>
</body>
</html>