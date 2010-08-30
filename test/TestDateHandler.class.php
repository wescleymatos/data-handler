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
    }

?>

