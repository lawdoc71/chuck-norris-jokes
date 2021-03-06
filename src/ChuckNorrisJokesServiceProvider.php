<?php

namespace Lawdoc71\ChuckNorrisJokes;

use Illuminate\Support\ServiceProvider;
use Lawdoc71\ChuckNorrisJokes\JokeFactory;
use Lawdoc71\ChuckNorrisJokes\Console\ChuckNorrisJoke;

class ChuckNorrisJokesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                ChuckNorrisJoke::class
            ]);
        }
    }

    public function register()
    {
        $this->app->bind('chuck-norris', function() {
            return new JokeFactory();
        });
    }
}