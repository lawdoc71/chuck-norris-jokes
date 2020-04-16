<?php

namespace Lawdoc71\ChuckNorrisJokes;

class JokeFactory
{
    protected $jokes = [
        'Chuck Norris doesn\'t read books. He stares them down until he gets the information he wants.',
        'Time waits for no man. Unless that man is Chuck Norris',
        'If you spell Chuck Norris in Scrabble, you win. Forever.',
    ];

    public function __construct(array $jokes = null)
    {
        if ($jokes) {
            $this->jokes = $jokes;
        }
    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}