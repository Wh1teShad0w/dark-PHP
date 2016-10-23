<?php 

/*Systeme de Protection d'attaques de Jebiss (S.A.I)*/
function s($tr){return str_replace("\'","'",htmlspecialchars($tr));}
function sa($tr){return str_replace("'","\'",htmlspecialchars($tr));}
function a($mot){return Addslashes($mot);}
function i($chiff){return intval($chiff);}


//faux way de remplacement
function r($a,$b,$char){return s(str_replace($a,$b,$char));}


//Pour reduire untexte afin d'avoir une dimension precise et des ... a la fin
function size($taille,$dim){if(strlen($taille)>$dim){$ref='...';}else{$ref='';}return $ref;}
function pp($char,$size){return s(substr(s($char),0,$size).size($char,$size));}


//Pour avoir un joli format de prix
function gp($prix){ 
	if($prix>0 AND $prix<999999)
		return number_format(r(' ','',$prix),0,',',' ');
	else
		return 0;
}


/*encodage et desencodage de l'URL*/
function ue($enc){return urlencode($enc);}

function ud($enc){return urldecode($enc);}


//Connaitre le temps d'execution d'une page
function getmicrotime(){list($usec,$sec)=explode(" ",microtime());return ((float)$usec+(float)$sec);}


//Hashing non bijective en MD5 et SHA1
function hach($p){$p=md5("N3R6T8").$p.sha1("2SaN1iX7");$p=sha1($p).md5($p);return $p;}


//fonction de cryptage et decryptage tout bete
function cryptage($element){
	return r ('A','4_',r ('B','8_',r ('D','6_',r ('E','3_',r ('G','9_',r ('I','1_',r ('M','W_',r ('S','5_',r ('T','7_',r ('Z','2_',r (' ',' _',strtoupper($element))))))))))));
}

function decryptag($element){
	return r('4_','A', r('8_','B', r('6_','D', r('3_','E',r ('9_','G',r ('1_','I',r ('W_','M',r ('5_','S',r ('7_','T',r ('2_','Z',r (' _',' ',strtoupper($element))))))))))));
}

// fonction pour eliminer dans une chaine de caractere, les ways superflus
function inutil($rec){
	//L'on supprime ici les Mots superflus
	$inutil=array('elle','il','lui','est','celle','celui','ce','cela','cette','cet','ces','ses','son','sa','tout','tous','toute','une','un','des','comme','pour','vers','meme','que','qui','haut','bas','du','sous','me','ne','ou','au','sur','dans','de','en','avec','et','a','le','la','les','vaut');

	$rec=' '.$rec.' ';
	$r = explode(' ',$rec);
		foreach($r as $cle)
		{
			if(in_array($cle , $inutil))
				$rec=r(' '.$cle.' ', ' ', $rec);
		}
		return substr(strrev(substr(strrev($rec),0,(strlen($rec)-1))),0,(strlen($rec)-2));
		//J'elimine les espaces a gauche et a droite
}
?>