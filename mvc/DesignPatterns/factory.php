<?php
include_once './mvc/DesignPatterns/interfaceFactory.php';

    class DantriFactory implements IgetDataFactory {
        public function makeIgetData() : IgetData {
            return new Dantri();
        }
    }

    class VnexpressFactory implements IgetDataFactory {
        public function makeIgetData() : IgetData {
            return new Vnexpress();
        }
    }

    class VietnamnetFactory implements IgetDataFactory {
        public function makeIgetData() : IgetData {
            return new Vietnamnet();
        }
    }
?>