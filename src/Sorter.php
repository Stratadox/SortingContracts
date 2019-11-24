<?php

namespace Stratadox\Sorting\Contracts;

/**
 * Sorts the elements of a collection.
 *
 * @author  Stratadox
 * @package Stratadox\Sorting
 */
interface Sorter
{
    /**
     * Sorts the elements according to a sorting definition.
     *
     * @param mixed|array $elements            The collection of items to sort.
     * @param Sorting     $usingThisDefinition The definition of how to sort.
     * @return mixed|array                          A sorted copy of the input collection.
     */
    public function sortThe($elements, Sorting $usingThisDefinition);
}
