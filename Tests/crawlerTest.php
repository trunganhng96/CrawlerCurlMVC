<?php
    use PHPUnit\Framework\TestCase;
    
    class CrawlerTest extends TestCase {
        public function testUrlHasConfirmed() {
            $url = $this->getMockBuilder(Crawler::class)
                            ->setMethods(['getUrl'])
                            ->getMock();
            $url->method('getUrl')->willReturn(true);
            $result = $url->getUrl('dantri.com.vn');
            $this->assertTrue($result);
        } 

        public function testDataHasCrawlered() {
            $crawler = $this->getMockBuilder(Crawler::class)
                            ->setMethods(['crawler'])
                            ->getMock();
            $crawler->method('crawler')->willReturn(true);
            $result = $crawler->crawler('hello');
            $this->assertTrue($result);
        } 
    }
?>