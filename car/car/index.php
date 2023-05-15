<!DOCTYPE html>
<html>
  <head>
    <title>Car cu flori</title>
    <link rel="stylesheet" href="styles.css">
   <script src="https://kit.fontawesome.com/ba08159dd5.js" crossorigin="anonymous"></script>
    <style>
    	.reclama p{
    		font-family: Lucida Console;
    		text-align: center;
    		font-size: 1.5rem;
    		text-transform: uppercase;
    		background-color: rgba(14,242, 100, 0.6);
    	}

    	.reclama a{
    		text-decoration: none;
    		color: rgba(0, 0, 0, 1.0);
    	}

    	.reclama a:hover{
    		color: rgba(0, 0, 0, 0.4)
    	}

    	.intro{
    		margin-top: 25px;
    		margin: 45px;
    		padding: 1rem 3%;
    	}

    	.intro h2{
    		padding: 15px;
    		font-family: papyrus;
    		font-size: 2.2rem;
    		color: rgba(200, 80, 78, 0.8);
    	}

    	.intro h3{
    		font-family: papyrus;
    		font-size: 2.2rem;
    		color: rgba(200, 80, 78, 0.8);
    		text-align: right;
    	}

    	.intro p{
    		font-family: papyrus;
    		font-size: 1.8rem;
    		color: rgba(134, 67,56, 1.0);
    		text-align: justify;
    	}

    	.intro p img{
    		float:right;
    		width:500px;
    		height:220px;
    	}
    </style>
  </head>

<body>
	<div class="cont">
		<ul>
			<li><p class="car"><b>Car cu flori</b></p></li>
			<li><address class="adresa">Strada Azaleelor, nr.46,<br>loc. Palilula,<br>jud. Dolj</address></li>
		</ul>
	</div>
	<div class="reclama">
		<p><a href="servicii.php">!!!Oferim servicii de amenajare si ingrijire a spatiilor verzi in toata zona Olteniei!!!</a></p>
	</div>
	<hr>
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
						<li><a href="programari.<?php  ?>">Programari existente</a></li>
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
	<div class="intro">
		<h2>De ce sa alegeti echipa noastra de peisagisti floricultori?</h2>
			<p><img src="imagini/index1.jpg" alt=""> Prin amenajare gradinii se poate transforma dramatic spatiul, dintr-o zona goala, plictisitoare, intr-o gradina de vis. Serviciile noastre de amenajare  a gradinii ofera, de asemenea ajutor pentru drenaj, proiectare, servicii gazon, servicii de ingrijire a spatiilor verzi,  indifferent de conditiile de sol. Utilizand serviciile noastre de amenajari gradini, va garantam ca faceti cea mai buna alegere, pentru ca avem experienta in domeniu si cunostintele necesare executarii in conditii optime a lucrarilor de amenajari spatii verzi si gradini.</p>
		<h3><strong>Noua ne pasa si suntem foarte atenti la detalii!</strong></h3>
			<p><img src="imagini/index2.jpg" alt="" style="float:left;width:500px;height:220px;">Va punem la dispozitie experienta si idei in vederea amenajarii unui spatiu cat mai placut si reconfortant in gradina dumneavoastra. Specialistii nostri pot amenaja gradini de orice dimensiune, pornind de la micul petec de verdeata din fata casei, pana la terenuri vaste, care se pot transforma astfel in adevarate oaze de relaxare si frumusete.  </p>
	</div>
</body>
</html>