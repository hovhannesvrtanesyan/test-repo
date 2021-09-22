<?php
function createArray() {
    return [
        'non-associative 0-element', // not applied
        0 => 'associative 0-element', // applied
        false => 'associative 0-element', // applied
        'foo' => 'bar', // not applied
        "foo" => 'baz', // applied
    ];
}
?>