<?php

    if(isset($_POST["submit"])){
        echo "Dodano rezerwację do bazy";
        $conn = mysqli_connect("localhost", "root", "","baza_4tig1");

        $data = $_POST["data"];
        $osoby = $_POST["osoby"];
        $telefon = $_POST["telefon"];

        if ($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }

        $dodaj = mysqli_query($conn,'Insert into rezerwacje (data_rez,liczba_osob,telefon) VALUES ('$data','$osoby','$telefon');');
        
        
    }

?>