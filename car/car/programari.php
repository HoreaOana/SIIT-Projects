<!DOCTYPE html>
<html>
<head>
    <title>Car cu flori</title>
    <link rel="stylesheet" href="styles.css" />
    <style>
      .informations {
        margin-left: 40px;
        background: none;
        text-align: left;
        margin-left: 10rem;
      }

      .informations h3 {
        font-family: papyrus;
        font-size: 30px;
        margin-left: 3rem;
        color: rgba(0, 0, 0, 0.7);
      }

      .informations .tabel {
        padding: 3px;
        text-align: center;
        border: 2px solid rgba(50, 170, 247, 1.0);
        font-size: 20px;
        font-family: papyrus;
        color: rgba(134, 67, 56, 1.0);
      }

      .informations .tabel td {
        border: 2px solid rgba(50, 170, 247, 1.0);
        padding: 8px;
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
            <li><a href="">Programari</a>
                <div class="lista1">
                    <ul>
                        <li><a href="adaugaprogramare.php">Adauga programare</a></li>
                        <li><a href="#">Programari existente</a></li>
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
    </div><hr>

    <div  class="informations"> <br>
        <?php include 'connect_database.php'; ?>
        <table class="tabel"><br><br>
        <h3>Programarile de astazi:</h3>
        <?php 
        $sql = "SELECT clienti.nume AS `nume client`, clienti.prenume AS `prenume client`, servicii.denumire AS `denumire servicii`,programari.dataprogramarii FROM programari INNER JOIN servicii ON programari.idservicii=servicii.idservicii INNER JOIN clienti ON clienti.idclient=programari.idclient WHERE day(dataprogramarii)=day(now()) and month(dataprogramarii)=month(now()) and year(dataprogramarii)=year(now()) ORDER BY nume";
            $result = $conn->query($sql);
        if ($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "<tr>
                    <td> ". $row ['nume client']. " </td>
                    <td>".$row['prenume client']. " </td>
                    <td> ". $row['denumire servicii']. "</td>
                    </tr>";
            }
        } 
            else{
                echo "0 results";
            }
        ?>
        </table><br>
        <h3>Lista programarilor viitoare:</h3>
        <table class="tabel">
            <tr>
                <td>Nume client</td>
                <td>Prenume client</td>
                <td>Serviciu programat</td>
                <td>Data programarii</td>
            </tr>
        <?php    
        $sql = "SELECT clienti.nume AS `nume client`, clienti.prenume AS `prenume client`, servicii.denumire AS `denumire servicii`,programari.dataprogramarii FROM programari INNER JOIN servicii ON programari.idservicii=servicii.idservicii INNER JOIN clienti ON clienti.idclient=programari.idclient WHERE day(dataprogramarii)>day(now()) and month(dataprogramarii)>=month(now()) and year(dataprogramarii)>=year(now()) ORDER BY dataprogramarii";
            $result = $conn->query($sql);
        if ($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "<tr>
                    <td> ". $row ['nume client']. " </td>
                    <td>".$row['prenume client']. " </td>
                    <td> ". $row['denumire servicii']. "</td>
                    <td>" .$row["dataprogramarii"]. "</td>
                    </tr>";
            }
        } 
            else{
                echo "0 results";
            }
        ?>
        </table>
    </div> 
</body>
</html>                 
