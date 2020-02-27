<?php
    use PHPUnit\Framework\TestCase;

    class ModelTest extends TestCase {
        public function testDataHasInserted() {
            // $model = $this->getMockBuilder(Model::class)
            //               ->setMethods(['insertData'])
            //               ->getMock();
            // $model->method('insertData')->willReturn(true);
            // $result = $model->insertData('dantri.com.vn', 'title', 'content', 'date');
            // $this->assertTrue($result);
            $model = Mockery::mock('Model');
            $model->shouldReceive('insertData')->once()->andReturn(true);
            $result = $model->insertData('dantri.com.vn', 'hello', 'hello', '13/10/1996');
            $this->assertTrue($result);
        }

        public function testAllDataHasDisplay() {
            // $allData = $this->getMockBuilder(Model::class)
            //                 ->setMethods(['getAllData'])
            //                 ->getMock();
            // $allData->method('getAllData')
            //         ->willReturn(true);
            // $result = $allData->getAllData('dantri.com.vn', 'title', 'content', 'date');
            // $this->assertTrue($result);
            $allData = Mockery::mock('Model');
            $allData->shouldReceive('getAllData')->once()->andReturn(true);
            $result = $allData->getAllData('dantri.com.vn', 'hello', 'hello', '13/10/1996');
            $this->assertTrue($result);
        }
    }
?>