<?php

/**
 * Class NotImplementedException
 *
 * Not Implemented Exception
 */
class NotImplementedException extends Exception {

}

/**
 * Class InputParameter
 *
 * Class InputParameter defines rules and methods associated with the Input. It can either be the operator
 * or the operand.
 */
class InputParameter {
    /**
     * Input Value
     *
     * @var string
     */
    public $Value;

    public function __construct($value) {
        $this->Value = trim($value);
    }

    /**
     * is Operator
     *
     * Identifies whether or not the Value is an Operator. At this point in time we support
     * +, -, *, / Possibly can support more.
     * This functions goes hand in hand with the execute function.
     *
     * @return bool true, if operator
     */
    public function isOperator() {
        if (in_array($this->Value, array('+','-','/','*'))) {
            return true;
        }

        return false;
    }

    /**
     * Is Operand
     *
     * Identifies whether or not the Value is an Operand. An Operand is identified if it contains
     * only numbers 0-9.
     *
     * @return bool true, if operand
     */
    public function isOperand() {
        if (preg_match('/^[0-9]*$/', $this->Value)) {
            return true;
        }

        return false;
    }

    /**
     * Execute
     *
     * Executes an arithmetic operation with the given operands. This only supports
     * +, -, *, / Can Possibly support more.
     * This functions goes hand in hand with the execute isOperator function.
     *
     * @param int $operand_a Operand A
     * @param int $operand_b Operand B
     * @return int $result Result of the Operation
     * @throws NotImplementedException, when the Operator is not one of the supported Operator
     */
    public function execute($operand_a, $operand_b) {
        $result = 0;
        switch($this->Value) {
            case '+':
                $result = $operand_a + $operand_b;
                break;
            case '-':
                $result = $operand_a - $operand_b;
                break;
            case '*':
                $result = $operand_a * $operand_b;
                break;
            case '/':
                $result = $operand_a / $operand_b;
                break;
            default:
                throw new NotImplementedException("operator {$this->Value}, not implemented");
        }

        return (int) $result;
    }
}

 