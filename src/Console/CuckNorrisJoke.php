<?php

namespace Lawdoc71\ChuckNorrisJokes\Console;

use Illuminate\Console\Command;
use Lawdoc71\ChuckNorrisJokes\Facades\ChuckNorris;

class ChuckNorrisJoke extends Command
{
    protected $signature = 'chuck-norris';
    protected $description = 'Output a funny chuck Norris Joke';

    public function handle()
    {
        $this->info(ChuckNorris::getRandomJoke());
    }
}