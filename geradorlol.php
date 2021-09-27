
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>

body {
	
	background-image:url("https://preview.redd.it/in73r6sbixz31.png?width=4096&format=png&auto=webp&s=810fa4aef8f17b2ccf3ca4c18601eb731904d37e");
}
</style>
<?php 







$timesArray=['CLG','RNG','Super Massive','SKT1','Unicorns of Love','FURIA Academy','Rensga Academy','Pain Academy','Pain Gaming','FURIA','Rensga','LOUD','INTZ','Cloud9','Team Liquid','Equipe do Flamengo' ,'Kabum' , 'Netshoes Miners' ,'Red Canids','Vorax Liberty','Isurus','Misfits','Mad Lions'];

$fontesArray=['Conforme minhas fontes disseram,  o','Já está certo que o','Está confirmado que o','Foi apurado que o','Segundo fontes próximas o','Ao que tudo indica o','Fontes próximas do','Segundo o vazamento o','Conforme especulado o','Noticia Urgente ! o','Conforme apurei o','Em busca de novos ares o','Segundo fontes anonimas o','Se a notícia for confirmada o','A surpresa da noite é que o','A surpresa do dia é que o'];

$randtimes = array_rand($timesArray);
$randFontes = array_rand($fontesArray);


$playersArray=['Betão da FURIA Academy','Ranger Ex-Flamengo','Tinows da Pain Gaming','Brtt da Pain Gaming','Mewkyo da LOUD','Damage da Rensga','RedBert do Flamengo','Netuno do Flamengo','Robo da Pain Gaming' ,'Kiari' ,'Trigo Ex-Rensga','Pobelter da CLG','Anyyy da FURIA','Titan da Red Canids','Shrimp Ex-Flamengo','Luci da Pain','Tutz do Flamengo','Parang do Flamengo','Cariok da Pain','Jean Mago do Flamengo Academy','Professor da INTZ','Micao da INTZ','Evrot da Kabum','Tay da LOUD','DudsTheBoy da LOUD','fnb da Vorax','Matsukaze da Vorax','Wos da Vorax','Faker da SKT1','Diamondprox Ex-FURIA','Deft da HLE','Chovy da HLE'];

$noticiasArray=['está de casa nova , é o novo contratado da '.$timesArray[$randtimes],'pode ser anunciado semana que vem na '.$timesArray[$randtimes],'faz parte da reformulação do elenco da '.$timesArray[$randtimes],'é o novo reforço pra próxima temporada da '.$timesArray[$randtimes],'estaria na Mira da '.$timesArray[$randtimes],'está fechado com a '.$timesArray[$randtimes].' até o fim do próximo split','teve o nome ventilado entre times da LCS','está cotado pra disputar o próximo split pela '.$timesArray[$randtimes],'foi cogitado para jogar na '.$timesArray[$randtimes].' o próximo split'
,'dispertou interesse de diversas equipes uma delas é a '.$timesArray[$randtimes],'deve ser anunciado logo mais como novo reforço da '.$timesArray[$randtimes],'deve disputar o próximo split pela '.$timesArray[$randtimes],'é o mais novo contratado para a line da '.$timesArray[$randtimes],'está em processo de negociação com a '.$timesArray[$randtimes],'é um nome forte pra fechar com a '.$timesArray[$randtimes]];




$rand_keys = array_rand($playersArray);
$rand_keys2 = array_rand($noticiasArray);

//echo $fontesArray[$randFontes]." player ".$playersArray[$rand_keys]." ".$noticiasArray[$rand_keys2];
















?>
<html>
<body>
<br/><br/><br/><br/><br/>
<div class="container">
<form Action="#" METHOD="POST">


<center>
<button type="Submit" name="botao" class="btn btn-danger">GERAR SUA NOTÍCIA VERDADEIRA</button>
<br/>
<br/>
</center>
<center>
<?php 

if(isset($_REQUEST['botao'])):

$noticia = $fontesArray[$randFontes]." player ".$playersArray[$rand_keys]." ".$noticiasArray[$rand_keys2];
echo $noticia;



?>
<br/>
<br/>

<a class="twitter-share-button btn btn-primary"
  href="https://twitter.com/intent/tweet?text='<?=$noticia?>'"  data-size="large">
Compartilhe sua Notícia
<i class="fab fa-twitter"></i>
</a>

</center>
<?php endif;?>
<center>
@natallnl - Twitter
</center>
</form>

</div>
</body>

</html>