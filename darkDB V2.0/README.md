
/*
	MANUEL d'utilisation de darkPHPV2 ici, l'on fonctionne egalement avec les classes et cela rends les taches encore plus legeres
	Comment xa fonctionne:

	//Bah on appel dabord le fichier darkDB.php
	require_once 'darkDB.php';
	
	// on creait un objet Base de donnees.
	$db = new darkDB;

	//* ********petite revolution *****  pour les moteurs de recherche ********
	$result = $db->fouille($table,$element_entree,$champ,$critere);
	ou
	$result = $db->f($table,$element_entree,$champ,$critere);
	
	
	//Pour recuperer le dernier element d'une table
	$result = $db->derniereLigne($tableName,$ID);
	ou
	$result = $db->dL($tableName,$ID);

	//Pour avoir le total d'elements d'une table
	$result = $db->total($tableName,$critere);
	ou
	$result = $db->t($tableName,$critere);
	
	//Pour inserer une valeur
	$db->insert($tablo_noms_champs,$tablo_valeurs_champs);
	ou
	$db->i($tablo_noms_champs,$tablo_valeurs_champs);
	
	//Pour changer une valeur dans la base de donnees
	$db->update($tableName,$champ,$valeur,$critere);
	ou
	$db->u($tableName,$champ,$valeur,$critere);
	
	//Pour supprimer un champ dans la base de donnees
	$db->delete($tableName,$critere);
	ou
	$db->d($tableName,$critere);

	pour executer ses rekettes librements on a:
	$db->reket($reket);
	ou
	$db->r($reket);
	
	
	Legende:
		$critere: petit bout de rekette a ajouter pour specifier la tache a effectuer
		$tableName, $table: nom de la table
		$champ, $field: c'est le champ dans la base de donnees sur la table designee
		$tablo_noms_champs: il s'agit d'un tablo array() contenant les noms des champs de la table sur les quel on va agir
		$tablo_valeurs_champs: il s'agit des valeurs respectives pour chaq champs en respectant l'ordre
*/