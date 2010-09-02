<?php

    class DateHandler {

        private $dd;
        private $mm;
        private $aaaa;

        static function aDataEhValida($date){
          for ($i = 0; $i < strlen($date); $i++) {
            if (is_numeric(substr($date, $i, 1))) {
              if ($i == 7) {
                return true; 
              }
            } else {
                return false;
                break;
            }
          }
        }

         public function convertDate($date) {
             if (substr($date, 2, 1) == "/" && substr($date, 5, 1) == "/") {
               $this->dd = substr($date, 0, 2);
               $this->mm = substr($date, 3, 2);
               $this->aaaa = substr($date, 6, 4);

               $numDate1 = $this->aaaa . $this->mm . $this->dd;

                  if(DateHandler::aDataEhValida($numDate1) == true){
                      $date = $this->aaaa . "-" . $this->mm . "-" . $this->dd;
                      return $date;
                  } else {
                    return "Data invalida";
                  }

               } elseif (substr($date, 4, 1) == "-" && substr($date, 7, 1) == "-") {
                $this->dd = substr($date, 8, 2);
                $this->mm = substr($date, 5, 2);
                $this->aaaa = substr($date, 0, 4);

                $numDate2 = $this->aaaa . $this->mm . $this->dd;

                if(DateHandler::aDataEhValida($numDate2)){
                  $date =  $this->dd . "/" . $this->mm . "/" . $this->aaaa;
                  return $date;
                } else {
                  return "Data invalida";
                }
             } else {
               return "Data invalida";
             }
         }

    }

?>

