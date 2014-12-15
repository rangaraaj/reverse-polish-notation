<?php
require_once 'classes/init.php';

/**
 * Process
 *
 * @param Process $process Process Object
 * @param NotationInterface $method Name of the Algorithm
 * @return int $result End Result
 */
function process($process, $method) {
    while ($process->hasNext()) {
        $input = $process->next();
        if ($input->isOperand()) {
            $method->addElement($input->Value);
        } else if ($input->isOperator()) {
            $operand_a = $method->getElement();
            $operand_b = $method->getElement();
            $result = $input->execute($operand_b, $operand_a);
            $method->log($input->Value . " performed on $operand_b & $operand_a");
            $method->addElement($result);
        }
    }

    return $method->getElement();
}
