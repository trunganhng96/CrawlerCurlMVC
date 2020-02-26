<?php
    use PHPUnit\Framework\TestCase;
    
    class DantriTest extends TestCase {
        public function testDataTitleDantriHasReturned() {
            $getdata = $this->getMockBuilder(Dantri::class)
                            ->setMethods(['getTitle'])
                            ->getMock();
            $getdata->method('getTitle')->willReturn(true);
            $result = $getdata->getTitle('hello');
            $this->assertTrue($result);
        }

        public function testDataContentDantriHasReturned() {
            $getdata = $this->getMockBuilder(Dantri::class)
                            ->setMethods(['getContent'])
                            ->getMock();
            $getdata->method('getContent')->willReturn(true);
            $result = $getdata->getContent('hello');
            $this->assertTrue($result);
        }

        public function testDataDateDantriHasReturned() {
            $getdata = $this->getMockBuilder(Dantri::class)
                            ->setMethods(['getDate'])
                            ->getMock();
            $getdata->method('getDate')->willReturn(true);
            $result = $getdata->getDate('13/10/1996');
            $this->assertTrue($result);
        }
    }
?>