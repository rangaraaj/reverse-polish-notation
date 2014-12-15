<?php

/**
 * Class UserDefinedArray
 *
 * This class defines how an user defined array can be passed to the process.
 */
class UserDefinedArray implements ProcessInterface {
    /**
     * Input Array
     * @var int[] List of Data sets
     * @example array('2','1','+','3','*')
     */
    private $Input = array();

    /**
     * __construct
     *
     * @param $input
     */
    public function __construct($input) {
        $this->Input = $input;
    }

    /**
     * Has Next
     *
     * @return true, if there is element
     */
    public function hasNext() {
        if (count($this->Input)) {
            return true;
        }

        return false;
    }

    /**
     * Get Next
     *
     * Gets the next element using array_shift.
     *
     * @return InputParameter $input_obj
     */
    public function next() {
        return new InputParameter(array_shift($this->Input));
    }
}
 