<?php

namespace Nack\FileParser\Strategy;

/**
 * Interface for a parsing strategy.
 */
interface StrategyInterface
{
    /**
     * Parses a string of data into a php array.
     *
     * @param string $content
     *
     * @return array
     */
    public function parse($content);
}