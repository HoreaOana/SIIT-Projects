<!DOCTYPE html>
<html>
  <head>
    <title>Salvare Programare noua</title>
    <meta http-equiv="refresh" content="5;URL='adaugaprogramare.php'" />
    <link rel="stylesheet" href="styles.css" />
    <style>
      .informations {
        font-family: papyrus;
        font-size: 1.4rem;
        text-align: center;
      }
    </style>
  </head>

<body>
    <div class="cont">
        <ul>
            <li><p class="car"><b>Car cu flori</b></p></li>
            <li><address class="adresa">Strada Azaleelor, nr.46,<br>loc. Palilula,<br>jud. Dolj</address></li>
        </ul>
    </div><hr>
    <h1 class="citat"><cite>Cui ii pasa sa priveasca flori de morcovi padureti, cand au inflorit ciresii!</cite><sub>Yamaguchi Sode</sub></h1>
    <div class="meniu">
        <ul>
            <li class="flori"><a href="index.php"><i class="fa-sharp fa-solid fa-house"></i>Pagina Principala</a></li>
            <li><a href="servicii.php">Servicii</a></li>
            <li><a href="#">Clienti</a>
                <div class="lista1">
                    <ul>
                        <li><a href="adaugaclient.php">Inscrie-te acum!</a></li>
                        <li><a href="clienti.php">Lista clienti</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="#">Programari</a>
                <div class="lista1">
                    <ul>
                        <li><a href="adaugaprogramare.php">Adauga programare</a></li>
                        <li><a href="programari.php">Programari existente</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="portofoliu.php">Portofoliu</a></li>
            <li><a href="#">Contact</a>
                <div class="lista1">
                    <ul>
                        <li><a href="tel:07961xxx66"><strong>07961xxx66</strong></a></li>
                        <li><a href="mailto:office@caruflori.ro"><strong>office@carucuflori.ro</strong></a></li>
                    </ul>
                </div>
            </li>
        </ul>
    <div>
    </div>
</div><hr>
    <div class="empty">
        <img/>
    </div>
    <div class="informations"><br><br>
    <strong>Programare inregistrata cu succes!</strong>
        <?php include 'connect_database.php';
            $sql = "INSERT INTO programari (idclient, idservicii, dataprogramarii) VALUES ('".$_POST["idclient"]."','".$_POST["idservicii"]."','".$_POST['programare']."')";
        if ($conn->query($sql) === TRUE){
            echo "<br><br> Va multumim!";
        }
        else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
        ?>
    </div>
</body>
</html>