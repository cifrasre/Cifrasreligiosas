var html = `
<!DOCTYPE html>
<html>
<head>
<style></style>
</head>
<body>
<ul class="lista">
                <li nome="a escolhida ricardo sá"><a href="aescolhida/A-Escolhida.html"><img src="img/logo.png" alt="Artista"><h3>A Escolhida - Ricardo Sá</h3></a></li>
                <li nome="manso e humilde amados do eterno"><a href="mansoehumilde/Manso-e-humilde.html"><img src="img/logo.png" alt="Artista"><h3>Manso e Humilde - Amados do Eterno</h3></a></li>
                <li nome="chuva de graça eliana ribeiro"><a href="chuvadegraca/Chuva-de-graca.html"><img src="img/logo.png" alt="Artista"><h3>Chuva de Graça - Eliana Ribeiro</h3></a></li>
                <li nome="senhor que vieste salvar padre zeca de mello perdao ato penitencial"><a href="senhorqueviestesalvar/Senhor-que-Vieste-Salvar.html"><img src="img/logo.png" alt="Artista"><h3>Senhor que Vieste Salvar - Zeca de Mello</h3></a></li>
                <li nome="aleluia quando estamos unidos padre zeca de mello aclamacao"><a href="quandoestamosunidos/Quando-estamos-unidos.html"><img src="img/logo.png" alt="Artista"><h3>Aleluia, Quando estam... - Zeca de Mello</h3></a></li>
                <li nome="kyrie eleison jmj rio 2013 perdao ato penitencial"><a href="kyrieeleison/Kyrie-Eleison.html"><img src="img/logo.png" alt="Artista"><h3>Kyrie Eleison - JMJ Rio 2013</h3></a></li>
                <li nome="quem e essa que avanca como aurora padre marcelo rossi"><a href="quemeessaqueavanca/Quem-e-essa.html"><img src="img/logo.png" alt="Artista"><h3>Quem é Essa que Avan... - P. Marcelo Rossi</h3></a></li>
                <li nome="fica sempre um pouco de perfume alberto costa"><a href="ficasempre/Fica-Sempre.html"><img src="img/Logo.png" alt="Artista"><h3>Fica Sempre... - Alberto Costa</h3></a></li>
                <li nome="hoje e tempo de louvar a deus vem louvar padre joanas abib"><a href="vemlouvar/Vem-louvar.html"><img src="img/artista/logo.png" alt="Artista"><h3>Hoje é Tempo de Louvar... - Padre Jonas</h3></a></li>
                <li nome="gloria a deus nas alturas eliana ribeiro"><a href="gloriaadeusnasalturas/Gloria-a-Deus-nas-alturas.html"><img src="img/logo.png" alt="Artista"><h3>Glória a Deus nas Alturas - Eliana Ribeiro</h3></a></li>
                <li nome="a mesa santa coro edipaul"><a href="amesasanta/A-Mesa-Santa.html"><img src="img/logo.png" alt="Artista"><h3>A Mesa Santa - Coro Edipaul</h3></a></li>
                <li nome="como es lindo vida reluz"><a href="comoeslindo/Como-es-Lindo.html"><img src="img/artista/Vida reluz.png" alt="Artista"><h3>Como és Lindo - Vida Reluz</h3></a></li>
                <li nome="ó cordeiro de deus morreste por causa de nos padre zezinho"><a href="morresteporcausadenos/Morreste-por-causa-de-nos.html"><img src="img/logo.png" alt="Artista"><h3>Ó Cordeiro de Deus - Padre Zezinho</h3></a></li>
                <li nome="santo santo santo senhor deus do universo"><a href="senhordeusdouniverso/Senhor-deus-do-universo.html"><img src="img/logo.png" alt="Artista"><h3>Santo, Senhor Deus... - Santa Missa Jovem</h3></a></li>
                <li nome="gloria a deus nos altos ceus la nos ceus"><a href="gloriaadeuslanosceus/Gloria-a-deus-la-nos-ceus.html"><img src="img/logo.png" alt="Artista"><h3>Glória a Deus La... - Santa Missa Jovem</h3></a></li>
                <li nome="louvor e gloria a ti senhor cristo palavra de deus"><a href="louvoregloriaatisenhor/Louvor-gloria-a-ti-senhor.html"><img src="img/logo.png" alt="Artista"><h3>Louvor e Glória a Ti Senhor - CNBB</h3></a></li>
                <li nome="a alegria esta no coração de quem ja conhece a jesus"><a href="aalegriaestanocoracao/A-Alegria-esta-no-coracao.html"><img src="img/logo.png" alt="Artista"><h3>A Alegria está no Coração - Corinhos Evangélicos</h3></a></li>
                <li nome="maria de nazare padre zezinho"><a href="mariadenazare/Maria-de-nazare.html"><img src="img/artista/padre Zezinho.png" alt="Artista"><h3>Maria de Nazaré - Padre Zezinho</h3></a></li>
                <li nome="santo santo santo é o senhor"><a href="santoeosenhor/Santo-e-o-senhor.html"><img src="img/logo.png" alt="Artista"><h3>Santo é o Senhor - Católicas</h3></a></li>
                <li nome="cordeiro de deus santa missa jovem piedade de nos"><a href="cordeirodedeus/Cordeiro-de-Deus.html"><img src="img/logo.png" alt="Artista"><h3>Cordeiro de Deus - Santa Missa Jovem</h3></a></li>
                <li nome="os dons que trago aqui coral palestrina"><a href="osdonsquetragoaqui/Os-dons-que-trago-aqui.html"><img src="img/logo.png" alt="Artista"><h3>Os Dons que Trago Aqui - Coral Palestrina</h3></a></li>
                <li nome="com pedro e com paulo toda igreja unida celebra"><a href="compedroecompaulo/Com-pedro-e-com-paulo.html"><img src="img/logo.png" alt="Artista"><h3>Com Pedro e com Paulo - Coral Palestrina</h3></a></li>
                <li nome="gloria a deus nos altos ceus"><a href="gloriaadeusnosaltosceus/Gloria-a-deus-nos-altos-ceus.html"><img src="img/artista/CNBB.png" alt="Artista"><h3>Glória a Deus nos Altos Céus - CNBB</h3></a></li>
                <li nome="cordeiro de deus que tirais o pecado do mundo tende piedade dai-nos a paz"><a href="tendepiedadecordeirodedeus/Cordeiro-de-deus-tende-piedade.html"><img src="img/logo.png" alt="Artista"><h3>Cordeiro de Deus (Dai-nos a Paz) - Católicas</h3></a></li>
                <li nome="recebei o deus de amor pai santo recebei"><a href="recebeiodeusdeamor/Recebei-o-deus-de-amor.html"><img src="img/logo.png" alt="Artista"><h3>Recebei ó Deus de Amor - Coral Ima. Conceição</h3></a></li>
                <li nome="aonde iremos nos agnus dei"><a href="aondeiremosnos/Aonde-iremos-nos.html"><img src="img/logo.png" alt="Artista"><h3>Aonde Iremos Nós - Agnus Dei</h3></a></li>
                <li nome="daqui do meu lugar somos a igreja do pao padre zezinho"><a href="daquidomeulugar/Daqui-do-meu-lugar.html"><img src="img/logo.png" alt="Artista"><h3>Daqui do Meu Lugar - Padre Zezinho</h3></a></li>
                </ul>
				</body>
</html>
`;

$('#html').html(html);

function abrirsugestao()
{
let modal = document.querySelector('.lista')
modal.style.display = 'flex';
}

function fecharmodal(){
let modal = document.querySelector('.lista')
modal.style.display = 'none';
}