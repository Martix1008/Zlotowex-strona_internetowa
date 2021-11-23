<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Pannel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="style_popr.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Zen+Antique+Soft&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="naglowek">
          <img src="Logo (1300x450).png">
        </div>
    </header>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
                            <a class="nav-link active" aria-current="page" href="Strona_Glowna.html">Wyloguj się</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
            <?php
                $servername = "localhost";
                $username = "Marcin";
                $password = "Martix1008";
                $dbname = "Kontakt";

                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                // Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $sql = "SELECT `id`, `Imie`, `E-mail`, `Tekst` FROM Formularz_kontaktowy";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    echo "id: " . $row["id"]. "<br>" . "Name: " . $row["Imie"]. "<br>" . "E-mail: " . $row["E-mail"]. "<br>" . "Tekst: " .  $row["Tekst"] . " " . "<br>" . "<br>";
                }
                } else {
                    echo "Nie ma wyników";
                }

                mysqli_close($conn);
            ?>


        <!-- JS Bootstrap script -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>