<?php

/**
 * Class EmptyStackException
 *
 * When Stack is empty
 */
class EmptyStackException extends Exception {

}

/**
 * Class DataStructure
 */
class DataStructure {
    /**
     * Stack
     *
     * @var array
     */
    protected $Stack = array();

    /**
     * Log
     *
     * @var array
     */
    public $Log = array();

    /**
     * Log
     *
     * Saves the log to the array
     *
     * @param string $message Message
     */
    public function log($message) {
        $this->Log[] = $message;
    }

    /**
     * Print Stack
     *
     * Prints the stack and the log
     */
    public function printStack() {
        if (DEBUG) {
            print_r($this->Log);
            print_r($this->Stack);
        }
    }
}