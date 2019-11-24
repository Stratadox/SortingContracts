<?php

namespace Stratadox\Sorting\Contracts;

interface ExtensibleSorting extends Sorting
{
    /**
     * Adds an alternative field to sort by (in ascending order) in cases where
     * the current sorting is undecided.
     *
     * @param string $field      The field to alternatively sort by.
     * @return ExtensibleSorting The updated sorting definition.
     */
    public function andThenAscendingBy(string $field): ExtensibleSorting;

    /**
     * Adds an alternative field to sort by (in descending order) in cases where
     * the current sorting is undecided.
     *
     * @param string $field      The field to alternatively sort by.
     * @return ExtensibleSorting The updated sorting definition.
     */
    public function andThenDescendingBy(string $field): ExtensibleSorting;
}
