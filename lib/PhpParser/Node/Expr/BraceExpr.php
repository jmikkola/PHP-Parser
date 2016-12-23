<?php

namespace PhpParser\Node\Expr;

use PhpParser\Node\Expr;

class BraceExpr extends Expr
{
    /** @var Expr Expression */
    public $expr;

    /**
     * Constructs brace expression node.
     * These come from brace expressions inside strings, e.g. "{$foo->bar()}"
     *
     * @param Expr  $expr       Expression
     * @param array $attributes Additional attributes
     */
    public function __construct(Expr $expr, array $attributes = array()) {
        parent::__construct($attributes);
        $this->expr = $expr;
    }

    public function getSubNodeNames() {
        return array('expr');
    }
}
