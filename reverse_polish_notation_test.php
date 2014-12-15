<?php

require_once 'reverse_polish_notation.php';

class ReversePolishText extends \PHPUnit_Framework_TestCase {
    /**
     * @return array
     */
    public function getUserData() {
        return array(
            array(
                new UserDefinedArray(array('2','1','+','3','*')),
                new ReversePolishNotation,
                9
            ),
            array(
                new UserDefinedArray(array('4','13','5','/','+')),
                new ReversePolishNotation,
                6
            )
        );
    }

    /**
     * @dataProvider getUserData
     */
    public function testUserDataArrayProcess($process, $method, $result) {
        $this->assertEquals($result, process($process, $method));
    }

    public function testNotImplementedError() {
        $this->setExpectedException('NotImplementedException');
        process(new UserDefinedArray(array('2','1','+','3','*', '-')), new ReversePolishNotation);
    }
}
 