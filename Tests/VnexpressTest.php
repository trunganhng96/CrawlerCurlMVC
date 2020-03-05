<?php
    use PHPUnit\Framework\TestCase;
    
    class VnexpressTest extends TestCase { 
        public function dataTitleProvider() {
            return [
                ['<h1 class="title_news_detail mb10">hello</h1>']
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
                ['<p class="description">hello<div class="width_common box_category">']
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
                ['<span class="time left">13/10/1996</span>']
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