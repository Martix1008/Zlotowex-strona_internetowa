<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="style_popr.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Zen+Antique+Soft&display=swap" rel="stylesheet">
</head>
<body>
<?php
include "db_connection.php";

if(isset($_POST['submit']))
{
    $name = $_POST['Imie'];
    $email = $_POST['E-mail'];
    $message = $_POST['Tekst'];

    $insert = mysqli_query($db, "INSERT INTO `Formularz_kontaktowy`(`Imie`, `E-mail`, `Tekst`) VALUES ('$name', '$email', '$message')");

    if(!$insert)
    {
        echo mysqli_error();
    }
    else{
        echo "Twoja wiadomość została wysłana";
    }

    mysqli_close($db);
}
?>
</body>
</html>
