<?php
session_start();

try
       {
              $bdd = new PDO('mysql:host=localhost;dbname=menu_restaurant', 'root', '');
       }
              catch (Exception $e)
       {
              die('Erreur : ' . $e->getMessage());
       }
  


?>

<select name="allergene">
       <?php
 
                      $requeteAllergene= "SELECT * FROM allergene";
                      while ($ligne = $reqAllergene->fetch())
                  {
                         echo '<option value="'.$ligne['id_allergene'].'>'.$ligne['NomAllergene'].'<"/option>';
                  }
 
      ?>
</select>
