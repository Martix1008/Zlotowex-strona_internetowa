<?php
session_start();
session_unset();
session_destroy();
header("Location:Strona_Glowna.php")
?>