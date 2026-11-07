<?php

namespace Ticketer;

class Rating {
    public string $code;
    public int $min_age;

    function __construct(string $code, int $min_age) {
        $this->code = $code;
        $this->min_age = $min_age;
    }
}