<?php
    use PHPUnit\Framework\TestCase;

    class ModelTest extends TestCase {
        public function dataProvider() {
            return [
                ['dantri.com.vn'],
                ['hello'],
                ['hello'],
                ['13/10/1996']
            ];
        }
        /**
         * @dataProvider dataProvider
         */
        public function testDataHasInserted($data) {
            // $model = $this->getMockBuilder(Model::class)
            //               ->setMethods(['insertData'])
            //               ->getMock();
            $model = Mockery::mock('Model');
            $model->shouldReceive('insertData')->once();
            $result = $model->insertData($data);
            $this->assertEquals('', $result);
        }



        public function AllDataProvider() {
            return [
                ['dantri.com.vn'],
                ['hello'],
                ['hello'],
                ['13/10/1996']
            ];
        }
        /**
         * @dataProvider AlldataProvider
         */
        public function testAllDataHasDisplay($data) {
            // $allData = $this->getMockBuilder(Model::class)
            //                 ->setMethods(['getAllData'])
            //                 ->getMock();
            $allData = Mockery::mock('Model');
            $allData->shouldReceive('getAllData')->once();
            $result = $allData->getAllData($data);
            $this->assertEquals('', $result);
        }
    }
?>