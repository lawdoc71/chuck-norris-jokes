<?php

namespace Lawdoc71\ChuckNorrisJokes;

use Illuminate\Support\ServiceProvider;
use Lawdoc71\ChuckNorrisJokes\JokeFactory;

class ChuckNorrisJokesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //;
    }

    public function register()
    {
        $this->app->bind('chuck-norris', function() {
            return new JokeFactory();
        });
    }
}