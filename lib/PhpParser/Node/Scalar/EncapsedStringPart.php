<?php

namespace PhpParser\Node\Scalar;

use PhpParser\Node\Scalar;

class EncapsedStringPart extends Scalar
{
    /** @var string String value */
    public $value;
    /** @var string Original textual representation */
    public $original;

    /**
     * Constructs a node representing a string part of an encapsed string.
     *
     * @param string $value      String value
     * @param string $original   Original textual representation
     * @param array  $attributes Additional attributes
     */
    public function __construct($value, $original, array $attributes = array()) {
        parent::__construct($attributes);
        $this->value = $value;
        $this->original = $original;
    }

    public function getSubNodeNames() {
        return array('value');
    }
}
