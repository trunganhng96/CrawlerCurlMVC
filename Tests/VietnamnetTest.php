<?php
    use PHPUnit\Framework\TestCase;
    
    class VietnamnetTest extends TestCase { 
        public function dataTitleProvider() {
            return [
                ['<h1 class="title f-22 c-3e">hello</h1>']
            ];
        }
        /**
         * @dataProvider dataTitleProvider
         */
        public function testDataTitleVietnamnetHasReturned($data) {
            // $getdata = $this->getMockBuilder(Dantri::class)
            //                 ->setMethods(['getTitle'])
            //                 ->getMock();
            $getdata = Mockery::mock('Vietnamnet');
            $getdata->shouldReceive('getTitle')->once();
            $result = $getdata->getTitle($data);
            $this->assertEquals('hello',$result);
        }



        public function dataContentProvider() {
            return [
                ['</div></div><p>hello<div class="m-t-15">']
            ];
        }
        /**
         * @dataProvider dataContentProvider
         */
        public function testDataContentVietnamnetHasReturned($data) {
            // $getdata = $this->getMockBuilder(Dantri::class)
            //                 ->setMethods(['getContent'])
            //                 ->getMock();
            $getdata = Mockery::mock('Vietnamnet');
            $getdata->shouldReceive('getContent')->once();
            $result = $getdata->getContent($data);
            $this->assertEquals('hello',$result);
        }



        public function dataDateProvider() {
            return [
                ['<span class="ArticleDate  right">13/10/1996<div id="ArticleContent" class="ArticleContent">']
            ];
        }
        /**
         * @dataProvider dataDateProvider
         */
        public function testDataDateVietnamnetHasReturned($data) {
            // $getdata = $this->getMockBuilder(Dantri::class)
            //                 ->setMethods(['getDate'])
            //                 ->getMock();
            $getdata = Mockery::mock('Vietnamnet');
            $getdata->shouldReceive('getDate')->once();
            $result = $getdata->getDate($data);
            $this->assertEquals('13/10/1996',$result);
        }
    }
?>