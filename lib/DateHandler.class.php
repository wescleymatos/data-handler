<?php

    class DateHandler {

      private $dd;
      private $mm;
      private $aaaa;

        static function ehValida($numDate){
          for ($i = 0; $i < strlen($numDate); $i++) {
            if (is_numeric(substr($numDate, $i, 1))) {
              if ($i == 7) {
                return true;
              }
            } else {
              return false;
            }
          }
        }

         public function convertDate($date) {
             if (substr($date, 2, 1) == "/" && substr($date, 5, 1) == "/") {
               $this->dd = substr($date, 0, 2);
               $this->mm = substr($date, 3, 2);
               $this->aaaa = substr($date, 6, 4);

               $numDate = $this->aaaa . $this->mm . $this->dd;

                  if(DateHandler::ehValida($numDate)){
                      $date = $this->aaaa . "-" . $this->mm . "-" . $this->dd;
                      return $date;
                  }

               } elseif (substr($date, 4, 1) == "-" && substr($date, 7, 1) == "-") {
                $this->dd = substr($date, 8, 2);
                $this->mm = substr($date, 5, 2);
                $this->aaaa = substr($date, 0, 4);

                $numDate = $this->aaaa . $this->mm . $this->dd;

                if(DateHandler::ehValida($numDate)){
                  $date =  $this->dd . "/" . $this->mm . "/" . $this->aaaa;
                  return $date;
                }
             } else {
               return "Data invalida";
             }
         }

    }

?>

