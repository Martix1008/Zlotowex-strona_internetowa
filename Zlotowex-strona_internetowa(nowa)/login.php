<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Zen+Antique+Soft&display=swap" rel="stylesheet">
</head>
    <body>
        <header>
            <div class="naglowek">
                <a href="Strona_Glowna.html"><img src="Logo (1300x450).png"></a>
            </div>
        </header>

        <!-- Navbar -->
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
            <!-- Zdjęcie i tytuł -->
            <div class="container-fluid">
                <img src="Znaczek.png" alt="" width="50" height="50" class="d-inline-block align-text-top">
                <a class="navbar-brand">ZŁOTÓWEX</a> 
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
  
                <!-- Przyciski do konkretnych stron -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="Strona_Glowna.html">Strona Główna</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Flota.html">Flota</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Cennik.html">Cennik</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Pracownicy.html">Pracownicy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Kontakt.html">Kontakt</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Zaloguj_sie.html">Zaloguj się</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <?php
            include('db_connection.php');
            $Login = $_POST['Login'];
            $Haslo = $_POST['Haslo'];

            //to prevent from mysqli injection
            $Login = stripcslashes($Login);
            $Haslo = stripcslashes($Haslo);
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