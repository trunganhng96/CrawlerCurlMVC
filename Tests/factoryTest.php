<?php
    use PHPUnit\Framework\TestCase;
    
    class FactoryTest extends TestCase {
        public function testDantriFactory() {
            // $factory = $this->getMockBuilder(DantriFactory::class)
            //                 ->setMethods(['makeIgetData'])
            //                 ->getMock();
            // $factory->method('makeIgetData')->willReturn(true);
            // $result = $factory->makeIgetData(Dantri::class);
            // $this->assertTrue($result);
            $factory = Mockery::mock('DantriFactory');
            $factory->shouldReceive('makeIgetData')->once()->andReturn(true);
            $result = $factory->makeIgetData(Dantri::class);
            $this->assertTrue($result);
        }

        public function testVnexpressFactory() {
            // $factory = $this->getMockBuilder(VnexpressFactory::class)
            //                 ->setMethods(['makeIgetData'])
            //                 ->getMock();
            // $factory->method('makeIgetData')->willReturn(true);
            // $result = $factory->makeIgetData(Vnexpress::class);
            // $this->assertTrue($result);
            $factory = Mockery::mock('VnexpressFactory');
            $factory->shouldReceive('makeIgetData')->once()->andReturn(true);
            $result = $factory->makeIgetData(Dantri::class);
            $this->assertTrue($result);
        }

        public function testVietnamnetFactory() {
            // $factory = $this->getMockBuilder(VietnamnetFactory::class)
            //                 ->setMethods(['makeIgetData'])
            //                 ->getMock();
            // $factory->method('makeIgetData')->willReturn(true);
            // $result = $factory->makeIgetData(Vietnamnet::class);
            // $this->assertTrue($result);
            $factory = Mockery::mock('VietnamnetFactory');
            $factory->shouldReceive('makeIgetData')->once()->andReturn(true);
            $result = $factory->makeIgetData(Dantri::class);
            $this->assertTrue($result);
        }
    }
?>