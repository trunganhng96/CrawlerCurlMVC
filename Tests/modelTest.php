<?php
    use PHPUnit\Framework\TestCase;

    class ModelTest extends TestCase {
        public function testDataHasInserted() {
            $model = $this->getMockBuilder(Model::class)
                          ->setMethods(['insertData'])
                          ->getMock();

            $model->method('insertData')->willReturn(true);

            $result = $model->insertData('dantri.com.vn', 'title', 'content', 'date');

            $this->assertTrue($result);
        }

        public function testAllDataHasDisplay() {
            $allData = $this->getMockBuilder(Model::class)
                            ->setMethods(['getAllData'])
                            ->getMock();
            $allData->method('getAllData')
                    ->willReturn(true);
            $result = $allData->getAllData('dantri.com.vn', 'title', 'content', 'date');
            $this->assertTrue($result);
        }
    }
?>