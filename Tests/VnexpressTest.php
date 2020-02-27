<?php
    use PHPUnit\Framework\TestCase;
    
    class VnexpressTest extends TestCase {
        public function testDataTitleVnexpressHasReturned() {
            // $getdata = $this->getMockBuilder(Vnexpress::class)
            //                 ->setMethods(['getTitle'])
            //                 ->getMock();
            // $getdata->method('getTitle')->willReturn(true);
            // $result = $getdata->getTitle('hello');
            // $this->assertTrue($result);
            $getdata = Mockery::mock('Vnexpress');
            $getdata->shouldReceive('getTitle')->once()->andReturn(true);
            $result = $getdata->getTitle('hello');
            $this->assertTrue($result);
        }

        public function testDataContentVnexpressHasReturned() {
            // $getdata = $this->getMockBuilder(Vnexpress::class)
            //                 ->setMethods(['getContent'])
            //                 ->getMock();
            // $getdata->method('getContent')->willReturn(true);
            // $result = $getdata->getContent('hello');
            // $this->assertTrue($result);
            $getdata = Mockery::mock('Vnexpress');
            $getdata->shouldReceive('getContent')->once()->andReturn(true);
            $result = $getdata->getContent('hello');
            $this->assertTrue($result);
        }

        public function testDataDateVnexpressHasReturned() {
            // $getdata = $this->getMockBuilder(Vnexpress::class)
            //                 ->setMethods(['getDate'])
            //                 ->getMock();
            // $getdata->method('getDate')->willReturn(true);
            // $result = $getdata->getDate('13/10/1996');
            // $this->assertTrue($result);
            $getdata = Mockery::mock('Vnexpress');
            $getdata->shouldReceive('getDate')->once()->andReturn(true);
            $result = $getdata->getDate('13/10/1996');
            $this->assertTrue($result);
        }
    }
?>