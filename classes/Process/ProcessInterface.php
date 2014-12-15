<?php

/**
 * Process Interface
 *
 * This class is an interface that defines methods that will enable an user to pass the value by
 * any means he/she wants to deliver the data.
 */
interface ProcessInterface {
    /**
     * Has next
     *
     * Returns boolean, depending on whether or not there are not element to process in the stack
     *
     * @return true, if there is more to process
     */
    public function hasNext();

    /**
     * Get Next
     *
     * Gets the next element from the stack, either from top or bottom. Or any crazy logic that the coders decides.
     *
     * @return InputParameter $input_obj Instance for InputParameter with the value
     */
    public function next();
}