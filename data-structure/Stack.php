<?php
$stack = new \Ds\Stack();

$stack->push("a");
$stack->push("b");
$stack->push("c", "d");
$stack->push(...["e", "f"]);

print_r($stack);
?>