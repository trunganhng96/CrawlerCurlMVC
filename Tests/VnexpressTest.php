<?php
    use PHPUnit\Framework\TestCase;
    
    class VnexpressTest extends TestCase { 
        public function dataTitleProvider() {
            return [
                ['<h1 class="fon31 mgb15">hello</h1>']
            ];
        }
        /**
         * @dataProvider dataTitleProvider
         */
        public function testDataTitleVnexpressHasReturned($data) {
            // $getdata = $this->getMockBuilder(Dantri::class)
            //                 ->setMethods(['getTitle'])
            //                 ->getMock();
            $getdata = Mockery::mock('Vnexpress');
            $getdata->shouldReceive('getTitle')->once();
            $result = $getdata->getTitle($data);
            $this->assertEquals('hello',$result);
        }



        public function dataContentProvider() {
            return [
                ['<div id="divNewsContent" class="fon34 mt3 mr2 fon43 detail-content">hello<div class="news-tag">']
            ];
        }
        /**
         * @dataProvider dataContentProvider
         */
        public function testDataContentVnexpressHasReturned($data) {
            // $getdata = $this->getMockBuilder(Dantri::class)
            //                 ->setMethods(['getContent'])
            //                 ->getMock();
            $getdata = Mockery::mock('Vnexpress');
            $getdata->shouldReceive('getContent')->once();
            $result = $getdata->getContent($data);
            $this->assertEquals('hello',$result);
        }



        public function dataDateProvider() {
            return [
                ['<span class="fr fon7 mr2 tt-capitalize">13/10/1996<p class="detail_subtitle"></p>']
            ];
        }
        /**
         * @dataProvider dataDateProvider
         */
        public function testDataDateVnexpressHasReturned($data) {
            // $getdata = $this->getMockBuilder(Dantri::class)
            //                 ->setMethods(['getDate'])
            //                 ->getMock();
            $getdata = Mockery::mock('Vnexpress');
            $getdata->shouldReceive('getDate')->once();
            $result = $getdata->getDate($data);
            $this->assertEquals('13/10/1996',$result);
        }
    }
?>