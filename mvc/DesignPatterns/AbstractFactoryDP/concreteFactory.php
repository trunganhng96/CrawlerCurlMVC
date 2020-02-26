<?php
include_once './mvc/DesignPatterns/abstractFactory.php';

// B4: ConcreteFactory
    class DantriFactory extends AbstractFactory {
        public function getIgetData($page1) {
            if($page1 == 'IgetData') {
                return new Dantri();
            }
        }
    }
    
    class VnexpressFactory extends AbstractFactory {
        public function getIgetData($page2) {
            if($page2 == 'IgetData') {
                return new Vnexpress();
            }
        }
    }

    class VietnamnetFactory extends AbstractFactory {
        public function getIgetData($page3) {
            if($page3 == 'IgetData') {
                return new Vietnamnet();
            }
        }
    }
?>