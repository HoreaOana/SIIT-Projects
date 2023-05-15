<!DOCTYPE html>
<html>
  <head>
    <title>Car cu flori</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/ba08159dd5.js" crossorigin="anonymous"></script>
    <style>
      h1 {
        font-family: papyrus;
        color: rgba(134, 67, 56, 0.8);
        margin-left: 20px;
        margin-top: 20px;
      }

      .slideshow {
        width: 600px;
        height: 400px;
        overflow: hidden;
      }

      .middle {
        position: absolute;
        top: 98%;
        left: 50%;
        transform: translate(-50%, -50%);
      }

      .navigare {
        position: absolute;
        bottom: 10px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
      }

      .bar {
        width: 50px;
        height: 10px;
        border: 2px solid rgba(0, 0, 0, 0.7);
        margin: 6px;
        cursor: pointer;
        transition: 0.4s;
      }

      .bar:hover {
        background: rgba(50, 170, 247, 1.0);
      }

      input[name="r"] {
        position: absolute;
        visibility: hidden;
      }

      .slides {
        width: 500%;
        height: 100%;
        display: flex;
      }

      .slide {
        width: 20%;
        transition: 0.6s;
      }

      .slide img {
        width: 100%;
        height: 100%;
      }

      #r1:checked~.s1 {
        margin-left: 0;
      }

      #r2:checked~.s1 {
        margin-left: -20%;
      }

      #r3:checked~.s1 {
        margin-left: -40%;
      }

      #r4:checked~.s1 {
        margin-left: -60%;
      }

      #r5:checked~.s1 {
        margin-left: -80%;
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
		<li><a href="#">Portofoliu</a></li>
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
<h1>O farama din munca depusa de echipa noastra de peisagisti floricultori.</h1>
<div class="slideshow middle">
	<div class="slides">
		<input type="radio" name="r" id="r1" checked>
		<input type="radio" name="r" id="r2">
		<input type="radio" name="r" id="r3">
		<input type="radio" name="r" id="r4">
		<input type="radio" name="r" id="r5">
		<div class="slide s1">
			<img src="imagini/rondou2.jpg" alt="">	
		</div>
		<div class="slide">
			<img src="imagini/gard de flori1.jpg" alt="">	
		</div>
		<div class="slide">
			<img src="imagini/rondou3.jpg" alt="">	
		</div>
		<div class="slide">
			<img src="imagini/rondou4.jpg" alt="">	
		</div>
		<div class="slide">
			<img src="imagini/lalele.jpg" alt="">	
		</div>

		<div class="navigare">
			<label for="r1" class="bar"></label>
			<label for="r2" class="bar"></label>
			<label for="r3" class="bar"></label>
			<label for="r4" class="bar"></label>
			<label for="r5" class="bar"></label>
		</div>
	</div>
</div>
</body>
</html>