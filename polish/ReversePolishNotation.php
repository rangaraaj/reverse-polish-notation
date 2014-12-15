<?php

/**
 * Class ReversePolishNotation
 * Extends DataStructure
 * Implements NotationInterface
 *
 * Reverse Polish Notation. For details, read here http://en.wikipedia.org/wiki/Reverse_Polish_notation
 * Some examples:
 *      array('2','1','+','3','*') -> ((2 + 1) * 3) -> 9
 *      array('4','13','5','/','+') -> (4 + (13 / 5 )) -> 6
 */
class ReversePolishNotation extends DataStructure implements NotationInterface {

    /**
     * Add Element
     *
     * Pushes the new element to the Top of the Stack
     *
     * @param int $element
     */
    public function addElement($element) {
        $this->Log[] = "$element is set to the stack";
        array_unshift($this->Stack, $element);
    }

    /**
     * Get Element
     *
     * Pops the element from the bottom of the Stack
     *
     * @return int $value Operand
     */
    public function getElement() {
        return array_shift($this->Stack);
    }
}

 