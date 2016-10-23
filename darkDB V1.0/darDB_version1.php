<?php 

/*Dark est une librairie de manipulation des actions sur base de donnees
//Librairie Creer par Sanix le 18/10/2016 vers 01h 41,
//....C'est fou q j'ai sommeil mais j'adore Coder
//Cette Librarie a ete creer pour alleger le work des manipulations avec la base de donnees en PHP
//Cette librarie est purement OPEN SOURCE, vous pourrez donc faire toutes vos modifs et utiliser comme bon vous semble*/


	/*For the initialisation of the Database*/
	function BD($host,$db,$user,$pass){
		if(!isset($motdepasse)){
			$motdepasse='';
		}
		try{
			$BD=new PDO('mysql:host='.$host.';dbname='.$db,$user,$pass);
		}
		catch(Exeption $e){
			die('Erreur:'.$e->getMessage());
		}
	}

		/*Debut des Selects sans les WHILE  qui retournent le tablo dans $d*/
				function prepare_select($BD,$req,$arr){
					$R=$BD->prepare($req);
					$R->execute($arr);
					$d=$R->fetch();
					$R->closeCursor();
					return $d;
				}
				function query_select($BD,$req){
					$R=$BD->query($req);
					$d=$R->fetch();
					$R->closeCursor();
					return $d;
				}
			/*Version MINI*/
				function p_s($BD,$req,$arr){
					$R=$BD->prepare($req);
					$R->execute($arr);
					$d=$R->fetch();
					$R->closeCursor();
					return $d;
				}
				function q_s($BD,$req){
					$R=$BD->query($req);
					$d=$R->fetch();
					$R->closeCursor();
					return $d;
				}
		/*Fin des Selects sans les WHILE */
		
/*--------------------------------------------------------------------------------------------------------------------*/
		 
		 /*Des Selects avec des Whiles*/
				function prepare_select_while($BD,$req,$arr){/*Avec presence d'une Boucle Whiles*/
					$R=$BD->prepare($req);
					$R->execute($arr);
					$R->closeCursor();
					return $R;
				}
				function query_select_while($BD,$req){
					$R=$BD->query($req);
					return $R;
				}
			/*Version MINI*/
				function p_s_w($BD,$req,$arr){/*Avec presence d'une Boucle Whiles*/
					$R=$BD->prepare($req);
					$R->execute($arr);
					$R->closeCursor();
					return $R;
				}
				function q_s_w($BD,$req){
					$R=$BD->query($req);
					return $R;
				}
		/*Fin des Selects avec while*/
		
/*--------------------------------------------------------------------------------------------------------------------*/
		 
		 //*Debut pour toute autre rekettes*/
				function prepare($BD,$req,$arr){
					$R=$BD->prepare($req);
					$R->execute($arr);
					$R->closeCursor();
				}
				function query($BD,$req){
					$R=$BD->query($req);
					$R->closeCursor();
				}
			//* Version MINI*/
				function p($BD,$req,$arr){
					$R=$BD->prepare($req);
					$R->execute($arr);
					$R->closeCursor();
				}
				function q($BD,$req){
					$R=$BD->query($req);
					$R->closeCursor();
				}
		/* Fin pour toute autre requette */
		
		
/*--------------------------------------------------------------------------------------------------------------------*/
		
		 /*Rekettes Complexes*/
				function insert($BD, $table, $champs, $valeurs){
					$R=$BD->query('INSERT INTO '.$table.' ('.$champs.')  VALUES('.$valeurs.')');
					$R->closeCursor();
				}
				
				function update($BD, $table, $champsetvaleurs){
					$R=$BD->query('UPDATE '.$table.' SET ' .$champsetvaleurs);
					$R->closeCursor();
				}
				
				function delete($BD, $table, $ID, $val){
					$R=$BD->query('DELETE '.$table.'  WHERE '.$ID.'='.$val);
					$R->closeCursor();
				}
			/*Version MINI*/
				function i($BD, $table, $champs, $valeurs){
					$R=$BD->query('INSERT INTO '.$table.' ('.$champs.') VALUES('.$valeurs.')');
					$R->closeCursor();
				}
				function u($BD, $table, $champsetvaleurs){
					$R=$BD->prepare('UPDATE '.$table.' SET ' .$champs);
					$R->execute(array($valeurs));
					$R->closeCursor();
				}
				function d($BD, $table, $ID, $val){
					$R=$BD->query('DELETE '.$table.'  WHERE '.$ID.'='.$val);
					$R->closeCursor();
				}
		/*Fins Rekettes Complexes*/
?>