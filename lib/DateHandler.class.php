<?php

    class DateHandler {

      private $dd;
      private $mm;
      private $aaaa;

         public function converterDateMysql($date) {
             if ((substr($date, 2, 1) == "/") && (substr($date, 5, 1) == "/")) {
               $this->dd = substr($date, 0, 2);
               $this->mm = substr($date, 3, 2);
               $this->aaaa = substr($date, 6, 4);
               $date = $this->aaaa . "-" . $this->mm . "-" . $this->dd;
               return $date;
             }
         }

    }

?>

