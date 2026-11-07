<?php

namespace Ticketer;

class Movie {
    public string $title;
    public string $rating;

    function __construct(string $title, string $rating) {
        $this->title = $title;
        $this->rating = $rating;
    }

    function canSee(int $age) {
        return $this->rating->age <= $age;
    }
}