<?php

/**
 * Class RealTimeCLI
 *
 * Class that defined the methods for real time cli to input the data
 */
class RealTimeCLI extends Process {
    /**
     * Each Value
     *
     * @var int Value
     */
    protected $Input;

    /**
     * __construct
     *
     * @throws RunTimeException, if PHP Server API is not cli. Only supports CLI this time, sorry !
     */
    public function __construct() {
        if (php_sapi_name() != 'cli') {
            throw new RunTimeException('RealTimeCLI cant be supported at this time.');
        }

        echo "Entering into Real Time CLI Module\n";
    }

    /**
     * Has Next
     *
     * @return true, if there is next value
     */
    public function hasNext() {
        echo "Enter an input value (q-quit)\n";
        $input = fgets(STDIN);
        if (trim($input) == 'q') {
            echo "quitting CLI\n";
            return false;
        }

        $this->Input = $input;
        return true;
    }

    /**
     * Next
     *
     * @return InputParameter
     */
    public function next() {
        return new InputParameter($this->Input);
    }
}

 