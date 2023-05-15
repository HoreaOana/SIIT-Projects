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
        margin-top: 2rem;
      }

      .informations .tabel {
        padding: 10px;
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
    </style></head>

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
                        <li><a href="#">Lista clienti</a></li>
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
    </div><hr>
            
    <div class="empty">
        <img/>
    </div>
    <div class="informations"><br>
		<table class="tabel"><br>
			<tr>
				<td><b>Nume</b></td>
				<td><b>Prenume</b></td>
				<td><b>Telefon</b></td>
				<td><b>Adresa</b></td>
			</tr>
		<?php include 'connect_database.php';
			 
			$sql = "SELECT nume, prenume, telefon, adresa FROM clienti ORDER BY nume";
			$result = $conn->query($sql);
		if ($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				echo "<tr>
                    <td> ". $row["nume"]. " </td>
                    <td> " . $row["prenume"] . "</td>
                    <td> " . $row["telefon"] . "</td>
                    <td> " . $row["adresa"] . "</td>
                </tr> ";
			}
		} 
        else{
			echo "0 results";
		}
		$conn->close();
		?>
		<table><br>
    </div>
</body>
</html>