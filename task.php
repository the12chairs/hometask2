<?php

    class Verbose {

        private $_var;

        public function __construct(){
            echo "Created!\n";
        }

        public function __clone(){
            echo "Cloned!\n";
        }

        public function __set($name, $value){
            echo "Запросили $name\n";
        }

        public function __call($name, $arguments){
            echo "Вызов метод $name\n";
        }

        public function __toString(){
            return __CLASS__ . "\n";
            ///return "1"; // Just needed, unused
        }

        private function testMethod(){
            echo "Lol";
        }

    }

    $v = new Verbose();

    echo $v;
    $v->testMethod();
    $v->_var = "switch";
    $v2 = clone $v;
?>
