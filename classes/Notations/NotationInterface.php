<?php

/**
 * Interface NotationInterface
 *
 * This is an interface that defines the standard methods that needs to be written, in order to perform the
 * Polish Notation or Reverse Polish Notation Algorithms. I decided to write an interface for Notation because,
 * there was a variation found in the method, we could either perform Reverse Polish Notation Algorithm
 * or a Polish Notation Algorithm. And hence, I went with an Interface.
 */
interface NotationInterface {
    /**
     * Add Element
     *
     * This method defined how an element is added into the stack of the data-structure. This method here
     * defines whether the element will be added to the beginning for the stack or the end of the stack.
     *
     * @param int $element Operand
     */
    public function addElement($element);

    /**
     * Get Element
     *
     * This method defines how an element will be gotten. From the beginning for the stack or the end of the
     * stack.
     *
     * @return int $value Operand
     */
    public function getElement();
}

 