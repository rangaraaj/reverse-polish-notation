<?php

require_once 'classes/init.php';

/**
 * Process
 *
 * Main Process that takes the Process and Method as input.
 * The method gets the input using the Process and uses the
 * Method interface to perform the operation.
 * Future Scope: We are obviously ignoring a lot of key issues
 * like for example memory leaks could be possibility. But we are
 * focusing on the job at hand and not get too carried away.
 *
 * @param ProcessInterface $process Process Interface
 * @param NotationInterface $method Name of the Algorithm
 * @return int $result End Result
 * @throws NotImplementedException when Stack is Empty
 */
function process($process, $method) {
    while ($process->hasNext()) {
        $input = $process->next();
        if ($input->isOperand()) {
            $method->addElement($input->Value);
        } else if ($input->isOperator()) {
            try {
                $operand_a = $method->getElement();
                $operand_b = $method->getElement();
            } catch (EmptyStackException $exp) {
                // TODO Must return the previous last value !
                // OR do we want the continue?
                throw new NotImplementedException("Not Implemented Yet" . $exp->getMessage());
            }

            try {
                $result = $input->execute($operand_b, $operand_a);
                $method->addElement($result);
                $method->log($input->Value . " performed on $operand_b & $operand_a");
            } catch (NotImplementedException $ignore) {
                $method->log($input->Value . 'Not Implemented');
            }
        }
        $method->printStack();
    }

    return $method->getElement();
}
