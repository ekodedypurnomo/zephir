<?php

$t = new Test\Constants();

assert(Test\Constants::C1 === null);
assert(Test\Constants::C2 === false);
assert(Test\Constants::C3 === true);
assert(Test\Constants::C4 === 10);
assert(Test\Constants::C5 === 10.25);
assert(Test\Constants::C6 === "test");