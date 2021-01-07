<?php
 function getTitle() {
     global $pagetitre;

     if (isset($pagetitre)) {
         echo $pagetitre;
     }
     else{

         echo'Default';
     }
 } 