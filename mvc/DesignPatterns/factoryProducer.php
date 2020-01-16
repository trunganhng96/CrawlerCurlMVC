<?php
    // B5: FactoryProducer
    class FactoryProducer {
        public static function getFactory($choice) {
            $choice = strtolower($choice);
            switch($choice) {
                case 'page1' :
                    return new DantriFactory();
                    break;
                case 'page2' :
                    return new VnexpressFactory();
                    break;
                case 'page3' :
                    return new VietnamnetFactory();
                    break;
                default:
                    return null;
                    break;
            }
            return null;
        }
    }
?>