<?php
   $alunos = array("Victor" , "Hugo" , 
   "Matheus" , "Lucas" , "Leonardo" , "Ana" , "Flávio" ,  "Maria" , "Beatriz");

   echo '<ol>';
   foreach($alunos as $key){
    echo '<li>' . $key . '</li>' . '<br>';
   }
   echo '</ol>';