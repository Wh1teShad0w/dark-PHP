# dark-PHP
Small library in PHP for all operations with a Data-Base or for security
---------------------------------------------------------------------------------------------------------
The Requirements:
Basics PHP and Apache local host server
------------------------------------------------------------------------------------------------------
How it's work:
When you want to do an operation to a Data base you all ready have to code:<br>
  ->In PDO(i only use it):	<br>
      -in initiaisation of a db<br>
      try{<br>
        $BD=new PDO('mysql:host=127.0.0.1;dbname=db','root','');<br>
      }<br>
      catch(Exeption $e){<br>
        die('Erreur:'.$e->getMessage());<br>
      }<br>
      <i>-- WITH dark-PHP YOU HAVE TO DO IT ON ONE LINE--</i><br>
      <b>BD(</b>127.0.0.1,db,'root',''<b>);</b><br>
      
      -in operations with a Data base:
      		$R=$BD->prepare('Your rekett');
					$R->execute('and array if you are doing with prepare');
					$R->closeCursor();
      OR
        	$R=$BD->query('Your rekett');
					$R->closeCursor();
          
      -- WITH dark-PHP YOU HAVE TO DO IT IN ONE LINE--
      prepare('your rekett','Your array'); OR p('your rekett','Your array');
      and for query:
        query('your rekett'); OR q('your rekett');
        
      -- AND IT IS NOT FINISH.....................
      If you just want to inset a value in a table or just do an update or just delete element, 
        -- WITH dark-PHP you have to do
         
         FOR INSERT:
                insert($table, $array_of_fields, $array_of_values);
              or
                i($table, $array_of_fields, $array_of_values);
         
         FOR UPDATE:
                update($table, $array_of_fields, $array_of_values);
              or
                u($table, $array_of_fields, $array_of_values);
         
         FOR DELETE:
                delete($table, $ID, $val);
              or
                d($table, $ID, $val);
                
 NB: I am just now all redy work on it so it can be have some bug for this version 1.0
 Thank's to read the readme and have fun, i hope it will be helpfull
 -----------------------------------------------------------------------------------------------------------------------------------
 
 Ceci dit, il est important que je precise q ce n'est une petite partie de l'iceberg, je travaille now sur un moyen, a partir du fichier SQL generer par le diagrame de classe de faire des maniulations avk la base de donnees simples comme bonjour, vous verrez hihihihih
