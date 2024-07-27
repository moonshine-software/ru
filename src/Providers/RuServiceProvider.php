<?php

declare(strict_types=1);

namespace MoonShine\Ru\Providers;

use Illuminate\Support\ServiceProvider;

final class RuServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadTranslationsFrom(__DIR__.'/../../lang', 'moonshine');

        $this->publishes([
            __DIR__.'/../../lang' => $this->app->langPath('vendor/moonshine'),
        ]);
    }
}
