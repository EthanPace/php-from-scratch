<?php

declare(strict_types=1);

namespace Ticketer;
require 'rating.php';
require 'movie.php';

// Week 01: Movie Ticket Booking
// Run from the repository root: php index.php
//
// This file is intentionally a starter, not a finished program.
// Read week-01-movie-tickets/README.md before continuing.

// STEP 0 (provided): Start the program and read one line of input.
echo "================================\n";
echo "       THE PHP CINEMA\n";
echo "================================\n\n";
echo "Welcome! What is your name? ";

$name = trim(fgets(STDIN));

echo "\nHi, {$name}! Your movie booking starts here.\n\n";

// TODO 1: Create an array of at least three movies, each with a title and rating.

$ratings = [ # This is clunkyyyy
    "G" => new Rating("G", 0),
    "PG" => new Rating("PG", 0),
    "M" => new Rating("M", 0),
    "MA15+" => new Rating("MA15+", 0),
    "R18+" => new Rating("R18+", 0),
]; # it only exists so that this is "extensible"

$movies = [ # I wanted to be able to access the code from movie->rating->code
    new Movie("Star Voyage", $ratings["PG"]),
    new Movie("The Last Dragon", $ratings["M"]),
    new Movie("Midnight Escape", $ratings["MA15+"]),
    new Movie("The Haunted House", $ratings["R18+"]),
];

// TODO 2: Display the movies as a numbered menu, using a loop.

echo "================================\n";

for($i = 0; $i < count($movies); $i++) {
    echo ($i + 1) . ": " . $movies[$i]->toString() . "\n";
}

echo "================================\n\n";
echo "What's the number of the movie you'd like to see? ";

// TODO 3: Ask the user to choose a movie; reject invalid choices.
// TODO 4: Ask how many tickets they want (between 1 and 6).
// TODO 5: Loop once per ticket, asking for that person's age.
// TODO 6: Work out the ticket type and price for each age.
// TODO 7: Check the selected film's classification against each age.
// TODO 8: Print a receipt with the ticket breakdown and total.

// Tip: Write and test one TODO at a time. Commit your progress!
