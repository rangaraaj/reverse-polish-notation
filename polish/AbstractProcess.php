<?php

/**
 * Abstract Class Process
 *
 * This class is an abstract class that defines method that will enable an user to pass the value by
 * any means he/she wants to deliver the data to the Notation Interface.
 * So far, I can think of two methods;
 *  1. UserDefinedArray
 *  2. RealTimeCLI
 */
abstract class Process {
    /**
     * Has next
     *
     * Returns boolean, depending on whether or not there are not element to process in the stack
     *
     * @return true, if there is more to process
     */
    abstract public function hasNext();

    /**
     * Get Next
     *
     * Gets the next element from the stack, either from top or bottom. Or any crazy logic that the coders decides.
     *
     * @return InputParameter $input_obj Instance for InputParamter with the value
     */
    abstract public function next();
}