<?php
    use PHPUnit\Framework\TestCase;
    
    class InterfaceTest extends TestCase {
        public function testIgetDantriTitle() {
            $interface = $this->getMockBuilder(Dantri::class)
                              ->setMethods(['getTitle'])
                              ->getMock();
            $interface->method('getTitle')->willReturn(true);
            $result = $interface->getTitle('hello');
            $this->assertTrue($result);
        }

        public function testIgetDantriContent() {
            $interface = $this->getMockBuilder(Dantri::class)
                              ->setMethods(['getContent'])
                              ->getMock();
            $interface->method('getContent')->willReturn(true);
            $result = $interface->getContent('hello');
            $this->assertTrue($result);
        }

        public function testIgetDantriDate() {
            $interface = $this->getMockBuilder(Dantri::class)
                              ->setMethods(['getDate'])
                              ->getMock();
            $interface->method('getDate')->willReturn(true);
            $result = $interface->getDate('13/10/1996');
            $this->assertTrue($result);
        }

        public function testIgetVnexpressTitle() {
            $interface = $this->getMockBuilder(Vnexpress::class)
                              ->setMethods(['getTitle'])
                              ->getMock();
            $interface->method('getTitle')->willReturn(true);
            $result = $interface->getTitle('hello');
            $this->assertTrue($result);
        }

        public function testIgetVnexpressContent() {
            $interface = $this->getMockBuilder(Vnexpress::class)
                              ->setMethods(['getContent'])
                              ->getMock();
            $interface->method('getContent')->willReturn(true);
            $result = $interface->getContent('hello');
            $this->assertTrue($result);
        }

        public function testIgetVnexpressDate() {
            $interface = $this->getMockBuilder(Vnexpress::class)
                              ->setMethods(['getDate'])
                              ->getMock();
            $interface->method('getDate')->willReturn(true);
            $result = $interface->getDate('13/10/1996');
            $this->assertTrue($result);
        }

        public function testIgetVietnamnetTitle() {
            $interface = $this->getMockBuilder(Vietnamnet::class)
                              ->setMethods(['getTitle'])
                              ->getMock();
            $interface->method('getTitle')->willReturn(true);
            $result = $interface->getTitle('hello');
            $this->assertTrue($result);
        }

        public function testIgetVietnamnetContent() {
            $interface = $this->getMockBuilder(Vietnamnet::class)
                              ->setMethods(['getContent'])
                              ->getMock();
            $interface->method('getContent')->willReturn(true);
            $result = $interface->getContent('hello');
            $this->assertTrue($result);
        }

        public function testIgetVietnamnetDate() {
            $interface = $this->getMockBuilder(Vietnamnet::class)
                              ->setMethods(['getDate'])
                              ->getMock();
            $interface->method('getDate')->willReturn(true);
            $result = $interface->getDate('13/10/1996');
            $this->assertTrue($result);
        }
    }
?>