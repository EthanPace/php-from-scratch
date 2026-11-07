<?php

namespace Ticketer;

class Movie {
    public string $title;
    public object $rating;

    function __construct(string $title, object $rating) {
        $this->title = $title;
        $this->rating = $rating;
    }

    function canSee(int $age) {
        return $this->rating->age <= $age;
    }

    function toString() {
        return $this->title . ", " . $this->rating->code;
    }
}