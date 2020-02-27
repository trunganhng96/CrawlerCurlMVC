<?php
    use PHPUnit\Framework\TestCase;
    
    class CrawlerTest extends TestCase {
        public function testUrlHasConfirmed() {
            // $url = $this->getMockBuilder(Crawler::class)
            //                 ->setMethods(['getUrl'])
            //                 ->getMock();
            // $url->method('getUrl')->willReturn(true);
            // $result = $url->getUrl('dantri.com.vn');
            // $this->assertTrue($result);
            $url = Mockery::mock('Crawler');
            $url->shouldReceive('getUrl')->once()->andReturn(true);
            $result = $url->getUrl('dantri.com.vn');
            $this->assertTrue($result);
        } 

        public function testDataHasCrawlered() {
            // $crawler = $this->getMockBuilder(Crawler::class)
            //                 ->setMethods(['crawler'])
            //                 ->getMock();
            // $crawler->method('crawler')->willReturn(true);
            // $result = $crawler->crawler('hello');
            // $this->assertTrue($result);
            $crawler = Mockery::mock('Crawler');
            $crawler->shouldReceive('crawler')->once()->andReturn(true);
            $result = $crawler->crawler('hello');
            $this->assertTrue($result);
        } 
    }
?>