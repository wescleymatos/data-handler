<?php

    require_once('PHPUnit/Framework/TestCase.php');
    require_once('../lib/DateHandler.class.php');

    class TestDateHandler extends PHPUnit_Framework_TestCase{

        private $date;

        protected function setUp(){
            $this->date = new DateHandler();
        }

        public function testDateHandler1() {
            //testa se 11/02/1987 retorna 1987-02-11
            $date = "11/02/1987";
            $result = $this->date->convertDate($date);
            $this->assertEquals("1987-02-11", $result);
        }

        public function testDateHandler2(){
            //testa se 1987-02-11 retorna 11/02//1987
            $date = "1987-02-11";
            $result = $this->date->convertDate($date);
            $this->assertEquals("11/02/1987", $result);
        }

        public function testDateHandler3(){
            //testa se 1987/02/11 retorna "Data invalida" 
            $date = "1987/02/11";
            $result = $this->date->convertDate($date);
            $this->assertEquals("Data invalida", $result);
        }

        public function testDateHandler4(){
            //testa se 11-02-1987 retorna "data invalida"
            $date = "11-02-1987";
            $result = $this->date->convertDate($date);
            $this->assertEquals("Data invalida", $result);
        }

        public function testDateHandler5(){
            //testa se 11/02-1987 retorna "Data invalida"
            $date = "11/02-1987";
            $result = $this->date->convertDate($date);
            $this->assertEquals("Data invalida", $result);
        }

        public function testDateHandler6(){
            //testa se 11-02/1987 retorna "Data invalida"
            $date = "11-02/1987";
            $result = $this->date->convertDate($date);
            $this->assertEquals("Data invalida", $result);
        }


        public function testDateHandler7(){
            //testa se 11/02//987 retorna "Data invalida"
          	$date = "11/02//987";
          	$result = $this->date->convertDate($date);
          	$this->assertEquals("Data invalida", $result);

        }

        public function testDateHandler8(){
            //teste se 1987-02--1 retorna "Data invalida"
            $date = "1987-02--1";
            $result = $this->date->convertDate($date);
            $this->assertEquals("Data invalida", $result);
        }

        public function testCalculaIdadeAtravesDaData1(){
          //teste se 11/02/1987 retorna 23
          $date = "11/02/1987";
          $result = $this->date->calculaIdade($date);
          $this->assertEquals(23, $result);
        }
    }

?>

