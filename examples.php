<?php

class Foo {
    public function bar() {
        if ($a == $b)  {
            if ($a1 == $b1) {
                fiddle();
            } elseif ($a2 == $b2) {
                fiddle();
            } else {
            }
        }
    }
    public function baz() {
        if ($a == $b) {
            if ($a1 == $b1) {
                fiddle();
            } elseif ($a2 == $b2) {
                fiddle();
            } else {
            }
        }
    }
    // Several other complex methods
}

class Something {
    protected $reallyLongIntName = -3; // VIOLATION - Field
    public static function main( array $interestingArgumentsList[] ) { // VIOLATION - Formal
        $otherReallyLongName = -5; // VIOLATION - Local
        for ($interestingIntIndex = 0; // VIOLATION - For
             $interestingIntIndex < 10;
             $interestingIntIndex++ ) {
        }
    }
}

class Too
{
    private function bar($howdy)
    {
        // $howdy is not used
    }
}

?>