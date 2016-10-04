	//Systeme de Protection d'attaques (S.A.I) par S@n1X
	
  function s($tr){
    return str_replace("\'","'",htmlspecialchars($tr));
  }/* Protege le Systeme des attak XSS*/
	
  function sa($tr){
    return str_replace("'","\'",htmlspecialchars($tr));
  }// Protege le Systeme des attak XSS
	
  function a($mot){
    return Addslashes($mot);
  }//Proteg contr les attak SQL pour les caracteres
	
  function i($chiff){
    return intval($chiff);
  }//Proteg contr les attak SQL pour les Chiffr
  
	function r($a,$b,$char){
    return s(str_replace($a,$b,$char));
  }//Fonction pour remplacer
