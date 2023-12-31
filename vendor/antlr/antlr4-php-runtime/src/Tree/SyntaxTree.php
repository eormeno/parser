<?php

declare(strict_types=1);

namespace Antlr\Antlr4\Runtime\Tree;

use Antlr\Antlr4\Runtime\Interval;

/**
 * A tree that knows about an interval in a token stream
 * is some kind of syntax tree. Subinterfaces distinguish
 * between parse trees and other kinds of syntax trees we might want to create.
 */
interface SyntaxTree extends Tree
{
    /**
     * Return an {@see Interval} indicating the index in the
     * {@see TokenStream} of the first and last token associated with this
     * subtree. If this node is a leaf, then the interval represents a single
     * token and has interval i..i for token index i.
     *
     * An interval of i..i-1 indicates an empty interval at position
     * i in the input stream, where 0 <= i <= the size of the input
     * token stream. Currently, the code base can only have i=0..n-1 but
     * in concept one could have an empty interval after EOF.
     *
     * If source interval is unknown, this returns {@see Interval::invalid()}.
     *
     * As a weird special case, the source interval for rules matched after
     * EOF is unspecified.
     */
    public function getSourceInterval(): Interval;
}
