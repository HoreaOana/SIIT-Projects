<!DOCTYPE html>
<html>
  <head>
    <title>Car cu flori</title>
    <link rel="stylesheet" href="styles.css">
    <style>
      .informations {
        margin-left: 40px;
        background: none;
        text-align: left;
        margin-left: 10rem;
        margin-top: 1rem;
      }

      .informations strong {
        color: rgba(134, 67, 56, 0.8);
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
        width: 20rem;
        font-size: 1.1rem;
        text-align: center;
        font-family: papyrus;
        color: rgba(134, 67, 56, 0.8)
      }

      .informations .tabel .button {
        width: 20rem;
        border: 0.1rem solid black;
        border-radius: 0.2rem;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.2rem;
        cursor: pointer;
        background: rgba(50, 170, 247, 0.3);
      }

      .informations .tabel .button:hover {
        background: rgba(50, 170, 247, 1.3);
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
   	<script src="https://kit.fontawesome.com/ba08159dd5.js" crossorigin="anonymous"></script>
    <script>
      function checkform() {
        if (validateNume() && validatePrenume() && validateTelefon() && validateAdresa()) return true;
      }
      var numere = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];

      function validatePrenume() {
        var prenume = document.getElementById("prenume").value;
        if ((prenume == null) || (prenume == "")) {
          document.getElementById("prenume").style.background = "red";
          return false;
        }
        for (var i = 0; i <= numere.length; i++) {
          if (prenume.includes(numere[i])) {
            return false;
            break;
          }
        }
        document.getElementById("prenume").style.background = "white";
        return true;
      }

      function validateAdresa() {
        var adresa = document.getElementById("adresa").value;
        if ((adresa == null) || (adresa == "")) {
          document.getElementById("adresa").style.background = "red";
          return false;
        }
        document.getElementById("adresa").style.background = "white";
        return true;
      }

      function validateNume() {
        var nume = document.getElementById("nume").value;
        if ((nume == null) || (nume == "")) {
          document.getElementById("nume").style.background = "red";
          return false;
        }
        for (var i = 0; i <= numere.length; i++) {
          if (nume.includes(numere[i])) {
            return false;
            break;
          }
        }
        document.getElementById("nume").style.background = "white";
        return true;
      }

      function validateTelefon() {
        var telefon = document.getElementById("telefon").value;
        if ((telefon == null) || (telefon == "")) {
          document.getElementById("telefon").style.background = "red";
          return false;
        }
        document.getElementById("telefon").style.background = "white";
        return true;
      }

      function isInputNumber(evt) {
        var ch = String.fromCharCode(evt.which);
        if (!(/[0-9]/.test(ch))) {
          evt.preventDefault();
        }
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
						<li><a href="#">Inscrie-te acum!</a></li>
						<li><a href="clienti.php">Lista clienti</a></li>
					</ul>
				</div>
			</li>
			<li><a href="">Programari</a>
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
  <div class="informations">
		<form method="post" action="insert_table_form.php" class="tabel">
		<strong>Adaugare client nou:</strong><br/>
			Nume: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="nume" name="nume" type="text" class="ins"/><br />
			Prenume: <input id="prenume" name="prenume" type="text" class="ins" /><br/>
			Telefon:&nbsp;<input id="telefon" name="telefon" type="text" onkeypress="isInputNumber(event)" class="ins"><br/>
			Adresa: &nbsp;<input id="adresa" name="adresa" type="text" class="ins" /><br/>
			<input type="button" class="button" value="Salvati Datele" onclick="if (checkform()) this.form.submit();">
		</form><br>
	<div>
	<a href="adaugaclient.php" class="button"><b>Sterge</b></a>
	</div>
</div>
</body>
</html>