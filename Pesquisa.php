<?php 

$nome = $_POST['nome'];

?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta name="viewport" content="width=device-width, user-scalable=no">
<title>Buscas - Cifras Religiosas - suas cifras estão aqui!</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-4.3.1.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	
	<link href="css/anuncio.css" rel="stylesheet">
	<link href="css/abecedario.css" rel="stylesheet">
	<link href="css/Navbarletras.css" rel="stylesheet">
	<link rel="icon" type="image/png" href="img/logo.png">
	<style type="text/css">
	
	.lista{ margin-top: 10px; width: 950px; margin-left: 2%}


	.lista li{
		margin: 0px;
		display: block;
		padding: 5px;
		font-size: 19px;
		font-family: 'Poppins', sans-serif
	}

	.lista a{
		color: #000;
	}

	.hr{	position:absolute; height: 700px; margin-left: 72%; background-color: #151d22; width: 2px; top: 110px}

	.pesquisa{ position: relative;
		padding: 0px 15px;
		margin-left: 5%;
		margin-top: 100px;
		color: #282828;
		width: 59.7%;
		height: 45px;
		border-radius: 50px;
		font-family: 'Poppins', sans-serif;
		display: inline-flex;
		border: solid;
		height: 50px;
		font-size: 20px;
		}
		.pesquisa:focus{
			outline: none
		}

		iframe{	position: absolute; top: 90px; margin-left: 74%; width: 350px; border: none; height: 950px}

		.butao{	position: absolute;
				margin-left: 60.5%;
				margin-top: 105px;
				z-index: 2;
				height: 40px;
				width: 50px;
				border-radius: 30px;
				background-color: #060606;
				color: #DFDFDF;
				border: none}

		.butao:focus{ outline: none}
		.carde{	border: solid 1px;
				background-color: #1269C4;
				color: #FFFFFF;
				border-color: #FFFFFF;
				border-radius: 100px;
				width: 400px;
				height: 162px;
				cursor: pointer;
				margin-bottom: 10px
			}
		.carde:hover{	background-color: #0B4079;
						color: #FFFFFF;
						transition: 0.5s;
						border-color: #FFFFFF}
		.carde img{	margin: 5px}

		.banner-container{	position: absolute; top: -100px}
		.anunncio{	position: absolute; top: 600px}
		#abecedario{	position: absolute; top: -850px}
		.footer{position: absolute; top: -800px}

		@media screen and (max-width: 1250px) {
			iframe{	display: none}
			.hr{ display: none}
			.pesquisa{	margin-left: 5%; margin-top: 10px; width: 90%}
			.butao{	margin-left: 90.5%;margin-top: 15px }
			.lista{	width: 90%}
			.banner-container{	position: absolute; top: -300px}
		.anunncio{	position: absolute; top: 1000px}
		#abecedario{	position: absolute; top: -1000px}
		.footer{position: absolute; top: -1000px}}

		@media screen and (max-width: 820px) {
			.butao{	margin-left: 87%}
			.anunncio{	top: 1300px}
			.banner-container{	top: -1200px}
			#abecedario{	top: -2600px}
			.footer{	top: -2500px}}

		@media screen and (max-width: 650px) {
			.butao{	margin-left: 85%}
			.anunncio{	top: 2600px}
			.banner-container{	top: 100px}
			#abecedario{	display: none}
			.footer{	top: -1200px}
		}

	</style>

	</head>
	
<body>
	  	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="../js/powerpoint.js"></script>

		<nav class="navbar">
		<div class="icone">Cifras Religiosas</div>
		<div class="icone2">Buscas</div>
		<ol>
			<li><a href="index.html">Voltar ao Início</a></li>
		</ol>
	</nav>
	  



	<button type="submit" class="butao"><i class="fa fa-search"></i></button>
	<input class="pesquisa" placeholder="Qual a Música de Hoje?" value="<?php echo $nome ?>" autocomplete="off" id="pesquisa" name="pesquisa">
	
	<ul class="lista">
		<li nome="chuva de graça">
  	 	<a href="chuvadegraca/Chuva-de-Graca.html">Chuva de Graça - Eliana Ribeiro</a>
		</li>
		
		<li nome="a escolhida">
 	 	<a href="aescolhida/A-escolhida.html">A Escolhida - Ricardo Sá</a>	
		</li>
		
		<li nome="senhor que vieste salvar">
  	 	<a href="senhorqueviestesalvar/Senhor-que-Vieste-Salvar.html">Senhor Que Vieste Salvar - Zeca de Mello</a>
		</li>

		<li nome="fica sempre umn pouco de perfume">
  	 	<a href="ficasempre/Fica-Sempre.html">Fica Sempre um Pouco de Perfume - Alberto Costa</a>
		</li>

		<li nome="kyrie eleison">
  	 	<a href="kyrieeleison/Kyrie-Eleison.html">Kyrie Eleison - JMJ Rio 2013</a>
		</li>

		<li nome="aleluia quando estamos unidos">
  	 	<a href="quandoestamosunidos/Quando-estamos-Unidos.html">Aleluia, Quando Estamos Unidos - Zeca de Mello</a>
		</li>

		<li nome="quem e essa que avança como aurora">
  	 	<a href="quemeessaqueavanca/Quem-e-essa.html">Quem é Essa que Avança como Aurora - Padre Marcelo Rossi</a>
		</li>

		<li nome="hoje e tempo de louvar a deus vem louvar">
  	 	<a href="vemlouvar/Vem-Louvar.html">Hoje é Tempo de Louvar a Deus - Padre Jonas</a>
		</li>

		<li nome="gloria a deus nas alturas nos vos louvamos">
  	 	<a href="gloriaadeusnasalturas/Gloria-a-deus-nas-alturas.html">Glória a Deus nas Alturas (Nós vos Louvamos) - Eliana Ribeiro</a>
		</li>

		<li nome="manso e humilde nossa vida e como um vaso">
  	 	<a href="mansoehumilde/Manso-e-Humilde.html">Manso e Humilde - Amados do Eterno</a>
		</li>

		<li nome="a mesa santa que preparamos">
  	 	<a href="amesasanta/a-mesa-santa.html">A Mesa Santa que Preparamos - Coral Palestrina</a>
		</li>

		<li nome="como es lindo que bom senhor">
  	 	<a href="comoeslindo/Como-es-lindo.html">Como és Lindo (Te olhar, te tocar) - Vida Reluz</a>
		</li>

		<li nome="gloria a deus nos altos ceus la nos ceus">
  	 	<a href="gloriaadeuslanoceus/Gloria-a-deus-la-nos-ceus.html">Glória a Deus lá nos Céus (Paz aos seus Amém) - Católicas</a>
		</li>

		<li nome="o cordeiro de deus morreste por causa de nos padre zezinho">
  	 	<a href="morresteporcausadenos/Morreste-por-causa-de-nos.html">Ó Cordeiro de Deus (Morreste por Causa de Nós) - Padre Zezinho</a>
		</li>

		<li nome="santo santo santo senhor deus do universo hosana nas alturas bendito aquele que vem">
  	 	<a href="senhordeusdouniverso/Senhor-deus-do-universo.html">Santo, Senhor Deus do Universo (Hosana nas Alturas) - Santa Missa Jovem</a>
		</li>

		<li nome="louvor e gloria a ti senhor cristo palavra de deus">
  	 	<a href="louvoregloriaatisenhor/Louvor-gloria-a-ti-senhor.html">Louvor e Glória a Ti Senhor (Cristo Palavra de Deus) - CNBB</a>
		</li>

		<li nome="a alegria esta no coração de quem ja conhece a jesus">
  	 	<a href="aalegriaestanocoracao/A-Alegria-esta-no-coracao.html">A Alegria está no Coração - Corinhos Evangélicos</a>
		</li>

		<li nome="maria de nazare padre zezinho">
  	 	<a href="mariadenazare/Maria-de-nazare.html">Maria de Nazaré (Avê Maria) - Padre Zezinho</a>
		</li>

		<li nome="os dons que trago aqui">
  	 	<a href="osdonsquetragoaqui/Os-dons-que-trago-aqui.html">Os Dons que Trago Aqui - Coral Palestrina</a>
		</li>

		<li nome="santo santo santo e o senhor">
  	 	<a href="santoeosenhor/Santo-e-o-senhor.html">Santo, Santo, Santo é o Senhor - Católicas</a>
		</li>

		<li nome="cordeiro de deus que tirais o pecado do mundo tende pidedade de nos">
  	 	<a href="cordeirodedeus/Cordeiro-de-deus.html">Cordeiro de Deus (Tende Piedade de Nós) - Santa Missa Jovem</a>
		</li>

		<li nome="com pedro e com paulo toda igreja unida celebra">
  	 	<a href="compedroecompaulo/Com-pedro-e-com-paulo.html">Com Pedro e com Paulo - Coral Palestrina</a>
		</li>

		<li nome="gloria a deus nos altos céus">
  	 	<a href="gloriaadeusnosaltosceus/Gloria-a-deus-nos-altos-ceus.html">Glória a Deus nos Altos Céus - CNBB</a>
		</li>

		<li nome="cordeiro de deus dai-nos a paz">
  	 	<a href="tendepiedadecordeirodedeus/Cordeiro-de-deus-tende-piedade.html">Cordeiro de Deus (Dai-nos a Paz) - Santa Missa Jovem</a>
		</li>

		<li nome="recebei o deus de amor pai santo recebei">
  	 	<a href="recebeiodeudeamor/Recebei-o-Deus-de-amor.html">Recebei ó Deus de Amor (Pai Santo Recebei) - Coral Imaculada Conceição</a>
		</li>

		<li nome="aonde iremos nos esta e a ceia do pai">
  	 	<a href="aondeiremosnos/aonde-iremos-nos.html">Aonde Iremos Nós(Está é a Ceia do Pai) - Agnus Dei</a>
		</li>

		<li nome="daqui do meu lugar somos a igreja do pao">
  	 	<a href="daquidomeulugar/daqui-do-meu-lugar.html">Daqui do Meu Lugar (Somos a Igreja do Pão) - Padre Zezinho</a>
		</li>
	</ul>

	<hr class="hr">

			<iframe src="artista/buscasdeartista.html" scrolling=no></iframe>

	<div class="anunncio" id="sugesta">
	<p>anuncie aqui</p>
	</div>

	<div class="banner-container"  id="acesso">

	<div class="banner">
   <div class="produto">
	   <img src="ukulele.png" alt="ukulele">
	   </div>
	   <div class="content">
	   <span>Promoção</span>
	   <h3>Ukulele Shelby</h3>
	   <p>15% de Desconto!!</p>
	   <a target="_blank" href="https://shopee.com.br/UKULELE-Shelby-F%C3%81CIL-PARA-TOCAR-E-CONFORT%C3%81VEL-i.382484212.9168563311" class="btn"><b>Compre Aqui</b></a>
	   </div>
	   <div class="alim">
	   <img src="Logo sem fundo.png" alt="logo">
   </div>
</div>
</div>
	
<div class="btn-toolbar" id="abecedario" role="toolbar" aria-label="Abecedário">
  <div class="btn-group mr-2" role="group" aria-label="First group">
      <a href="letras/A.html" id="A1"><button type="submit" class="btn btn-dark">A</button></a>
      <a href="letras/B.html"><button type="button" class="btn btn-dark">B</button></a>
      <a href="letras/C.html"><button type="button" class="btn btn-dark">C</button></a>
      <a href="letras/D.html"><button type="button" class="btn btn-dark">D</button></a>
	  <a href="letras/E.html"><button type="button" class="btn btn-dark">E</button></a>
	  <a href="letras/F.html"><button type="button" class="btn btn-dark">F</button></a>
	  <a href="letras/G.html"><button type="button" class="btn btn-dark">G</button></a>
	  <a href="letras/H.html"><button type="button" class="btn btn-dark">H</button></a>
	  <a href="letras/I.html"><button type="button" class="btn btn-dark">I</button></a>
	  <a href="letras/J.html"><button type="button" class="btn btn-dark">J</button></a>
	  <a href="letras/K.html"><button type="button" class="btn btn-dark">K</button></a>
	  <a href="letras/L.html"><button type="button" class="btn btn-dark">L</button></a>
	  <a href="letras/M.html"><button type="button" class="btn btn-dark">M</button></a>
	  <a href="letras/N.html"><button type="button" class="btn btn-dark">N</button></a>
	  <a href="letras/O.html"><button type="button" class="btn btn-dark">O</button></a>
      <a href="letras/P.html"><button type="button" class="btn btn-dark">P</button></a>
      <a href="letras/Q.html"><button type="button" class="btn btn-dark">Q</button></a>
      <a href="letras/R.html"><button type="button" class="btn btn-dark">R</button></a>
	  <a href="letras/S.html"><button type="button" class="btn btn-dark">S</button></a>
	  <a href="letras/T.html"><button type="button" class="btn btn-dark">T</button></a>
	  <a href="letras/U.html"><button type="button" class="btn btn-dark">U</button></a>
	  <a href="letras/V.html"><button type="button" class="btn btn-dark">V</button></a>
	  <a href="letras/W.html"><button type="button" class="btn btn-dark">W</button></a>
	  <a href="letras/X.html"><button type="button" class="btn btn-dark">X</button></a>
	  <a href="letras/Y.html"><button type="button" class="btn btn-dark">Y</button></a>
	  <a href="letras/Z.html" id="Z1"><button type="button" class="btn btn-dark">Z</button></a>

		  </div>
	  </div>


	 <!--Footer-->
	  <br>
	  <div class="footer" id="footer">
	  	<div class="main-content">
		  <div class="left box">
			<h2>Sobre Nós</h2>
			  <div class="content">
			  <p class="texto">Este Site foi Criado em 2020, com o intuíto de ajudar as pessoas que precisam ter cifras para missas e cultos, esperamos ter te ajudado, se sim, por favor volte aqui 😉.</p>
				  <div class="social">
		<a href="https://www.facebook.com/cifrasreligioosas" target="_blank"><span class="fab fa-facebook-f"></span></a>
		<a href="https://www.instagram.com/cifrasreligiosas/" target="_blank"><span class="fab fa-instagram"></span></a>
		<a href="https://twitter.com/Cifreligiosas" target="_blank"><span class="fab fa-twitter"></span></a>
				  </div>
			  </div>
			</div>
			<div class="center box">
			<h2>&nbsp;Contato</h2>
				<div class="content">
					<div class="place">
					<span class="fas fa-map-marker-alt"></span>
					<span class="text">Joinville, Santa Catarina</span>
					</div>
					<div class="phone">
					<span class="fas fa-phone-alt"></span>
					<span class="text">Em breve</span>
					</div>
					<div class="email">
					<span class="fas fa-envelope"></span>
					<span class="text">cifrasreligiosas@gmail.com</span>
					</div>
				</div>
			</div>
			<div class="right box">
			<h2>Nos Mande uma Mensagem</h2>
				<div class="content">
					<form action="#" id="musica">
						<div class="email">
							<div class="text" id="te">Email</div>
							<input type="email" required class="enputz">
						</div>
						<div class="msg">
							<div class="text" id="te2">Mensagem</div>
							<textarea rows="2" cols="25" required class="enputz"></textarea>
						</div>
						<div class="btn">
						<button type="submit" class="btn btn-info" id="enviar">Enviar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	  </div>

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script> 
  <script src="js/bootstrap-4.3.1.js"></script> 
<script>

pesquisa_input = document.querySelectorAll(".pesquisa");

	for(i in pesquisa_input){
		
			pesquisa_input[i].onkeyup=function(e){

				reg = new RegExp(this.value.toLowerCase(),"g")
				lis = this.parentElement.querySelector(".lista")

				console.log(lis)

				for(j of lis.children){
					if( !j.getAttribute("nome").match(reg) )
						j.style.display="none"
					else
						j.removeAttribute("style")
				}
			}
	}
window.addEventListener("load" ,pesquisa_input);

</script>
</body>
</html>
