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
        margin-top: 1rem;
      }

      .informations .tabel {
        width: 600px text-align: justify;
        font-size: 25px;
        font-family: papyrus;
        color: rgba(134, 67, 56, 0.8);
      }

      .informations .tabel .ins {
        border-radius: 6px;
        margin-left: 2rem;
        margin-right: 40rem;
        height: 1.8rem;
        width: 15rem;
        font-size: 1.1rem;
        text-align: center;
        font-family: papyrus;
        color: rgba(134, 67, 56, 0.8)
      }

      .button {
        width: 20rem;
        border: 0.1rem solid black;
        border-radius: 0.2rem;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.2rem;
        cursor: pointer;
        background: rgba(50, 170, 247, 0.3);
        text-decoration: none;
        font-family: papyrus;
        color: rgba(0, 0, 0, 0.8);
      }

      .button:hover {
        background: rgba(50, 170, 247, 1.3);
      }
    </style>
    <script type="text/javascript">
      function checkform() {
        if (validateProgramare()) return true;
      }
      var numere = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];

      function validateProgramare() {
        var programare = document.getElementById("programare").value;
        if ((programare == null) || (programare == "")) {
          document.getElementById("programare").style.background = "white";
          return false;
        }
        document.getElementById("programare").style.background = "white";
        return true;
      }
    </script>
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
						<li><a href="#">Adauga programare</a></li>
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
    <div class="informations">
		<form method="post" action="insert_programare.php" class="tabel">
		<strong>Adauga programare noua!</strong><br/><br>
		Selectare client: &nbsp;&nbsp;&nbsp;&nbsp;<select id="idclient" name="idclient" class="ins">
			<?php include 'connect_database.php';
			$sql = "select * from clienti";
			$result = $conn->query($sql);
			while($row = $result->fetch_assoc()){
			?>
			<option value="<?php echo $row['idclient'];?>"><?php echo $row['nume']." ".$row['prenume']?></option>
			<?php
			} 
			$conn->close();
			?>
		</select><br>
		Selectare serviciu: <select id="idservicii" name="idservicii" class="ins">
			<?php include 'connect_database.php';
			$sql = "select * from servicii";
			$result = $conn->query($sql);
			while($row = $result->fetch_assoc()){
			?>
			<option value="<?php echo $row['idservicii'];?>"><?php echo $row['denumire']?></option>
			<?php
			} 
			$conn->close();
			?>
		</select><br>
		<label for="programare">Selectati o data disponibila:</label>
		<input type="date" id="programare" name="programare" min="08-11-2022" class="ins" /><br>
		<input type="button" class="button" value="Confirma programarea" onclick="if (checkform()) this.form.submit();">
		</form><br>
    </div>
    <script>
    	var date = new Date();
	var tdate = date.getDate();
	var month = date.getMonth() + 1;
	if(tdate < 10){
		tdate = '0' + tdate;
	}
	if(month < 10){
		month = '0' + month;
	}
	var year = date.getUTCFullYear();
	var minDate = year + "-" + month + "-" + tdate;
	document.getElementById("programare").setAttribute('min', minDate)
    </script>
</body>
</html>