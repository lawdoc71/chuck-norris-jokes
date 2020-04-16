<?php
namespace Lawdoc71\ChuckNorrisJokes\Tests;

use PHPUnit\Framework\TestCase;
use Lawdoc71\ChuckNorrisJokes\JokeFactory;

class JokeFactoryTest extends TestCase
{
    /** @test */
    // public function it_returns_a_random_joke()
    // {
    //     $jokes = new JokeFactory([
    //         'This is a joke'
    //     ]);
    //     $joke = $jokes->getRandomJoke();

    //     $this->assertSame('This is a joke', $joke);
    // }

    /** @test */
    public function it_returns_a_predefined_joke()
    {
        $chuckNorrisJokes = [
            'Chuck Norris does not read books. He stares them down until he gets the information he wants.',
            'Time waits for no man. Unless that man is Chuck Norris',
            'If you spell Chuck Norris in Scrabble, you win. Forever.',
        ];

        $jokes = new JokeFactory();

        $joke = $jokes->getRandomJoke();

        $this->assertContains($joke, $chuckNorrisJokes);
    }
}