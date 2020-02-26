<?php
    use PHPUnit\Framework\TestCase;
    
    class VietnamnetTest extends TestCase {
        public function testDataTitleVietnamnetHasReturned() {
            $getdata = $this->getMockBuilder(Vietnamnet::class)
                            ->setMethods(['getTitle'])
                            ->getMock();
            $getdata->method('getTitle')->willReturn(true);
            $result = $getdata->getTitle('hello');
            $this->assertTrue($result);
        }

        public function testDataContentVietnamnetHasReturned() {
            $getdata = $this->getMockBuilder(Vietnamnet::class)
                            ->setMethods(['getContent'])
                            ->getMock();
            $getdata->method('getContent')->willReturn(true);
            $result = $getdata->getContent('hello');
            $this->assertTrue($result);
        }

        public function testDataDateVietnamnetHasReturned() {
            $getdata = $this->getMockBuilder(Vietnamnet::class)
                            ->setMethods(['getDate'])
                            ->getMock();
            $getdata->method('getDate')->willReturn(true);
            $result = $getdata->getDate('13/10/1996');
            $this->assertTrue($result);
        }
    }
?>